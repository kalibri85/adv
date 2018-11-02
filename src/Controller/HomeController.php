<?php

namespace App\Controller;

use App\Repository\AdvertisementsRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

    /**
     * @Route("/", name="home")
     */
    public function index(AdvertisementsRepository $advertisementsRepository)
{
    $adv = $advertisementsRepository->findAllJointUser();
    return $this->render('home/index.html.twig',
        [
            'advertisements' => $adv
        ]
    );
    }
    /**
     * @Route("/admin", name="admin")
     */
    public function showAdmin(AdvertisementsRepository $advertisementsRepository)
    {
        return $this->render('admin/index.html.twig');
    }
}
