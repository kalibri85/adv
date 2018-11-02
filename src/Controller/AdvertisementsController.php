<?php

namespace App\Controller;


use App\Entity\Advertisements;
use App\Form\AdvertisementsType;
use App\Repository\AdvertisementsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/advertisements", name="advertisements_")
 */
class AdvertisementsController extends Controller
{
    /**
     * @Route("/", name="my")
     */
    public function index(AdvertisementsRepository $advertisementsRepository)
    {
        $user = $this->getUser();
        $adv = $advertisementsRepository->findAllByUser($user);
        return $this->render('advertisements/index.html.twig',
            [
            'advertisements' => $adv
            ]
        );
    }

    /**
     * @Route("/add", name="add")
     */
    public  function  addAction(Request $request)
    {
        return $this->processForm($request);
    }

    /**
     * @Route("/edit/{id}", name="edit", methods={"GET", "POST"})
     */
    public function editAction(Request $request, Advertisements $advertisements)
    {
        $user = $this->getUser();
        $owner = $advertisements->getUser();
        if ($user == $owner) {
            return $this->processForm($request, $advertisements);
        }
        return $this->redirectToRoute('home');
    }

    protected function processForm(Request $request, Advertisements $advertisements = null)
    {
        $form = $this->createForm(AdvertisementsType::class, $advertisements);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $advertisements = $form->getData();
            $user = $this->getUser();
            $advertisements->setUser($user);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($advertisements);
            $entityManager->flush();

            return $this->redirectToRoute('advertisements_my');
        }

        return  $this->render(
            'add/index.html.twig',
            [
                'our_form' => $form->createView()
            ]
        );

    }
}
