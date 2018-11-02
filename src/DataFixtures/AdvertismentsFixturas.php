<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 18.11.2
 * Time: 21.17
 */

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;
use App\Entity\Advertisements;

class AdvertismentsFixturas extends Fixture
{
    const USER_NAME = 'admin';
    const TITLE = [
        'One night in Warsaw',
        'One night in LONDON',
        'The Orgeon Ducks Football Bault Book',
        'Harry Potter Book',
        'English teaching positions in China',
        'English teaching positions in Warsaw',
        'English teaching positions in Kaunas',
        'Guide for a blind Shaolin Master',
        ' PHP / MySQL / HTML / CSS / JavaScript programmer',
        'Spendor SP100R2 speakers - PLN9500',
        'Vw Passat - PLN8000 (Babiak)',
        'Porsche 1994 964 Speedster Seats Pair - PLN16000',
        'One night in Warsaw',
        'One night in LONDON',
        'The Orgeon Ducks Football Bault Book',
        'Harry Potter Book',
        'English teaching positions in China',
        'English teaching positions in Warsaw',
        'English teaching positions in Kaunas',
        'Guide for a blind Shaolin Master',
        ' PHP / MySQL / HTML / CSS / JavaScript programmer',
        'Spendor SP100R2 speakers - PLN9500',
        'Vw Passat - PLN8000 (Babiak)',
        'Porsche 1994 964 Speedster Seats Pair - PLN16000',
        'One night in VILNIUS'

    ];
    const DESCRIPTION = [
        'One night in Warsaw 40€ ',
        'One night in LONDON, good flat £40',
        'In the University of Oregon Football Vault: The History of the Ducks

This 144 page gem takes you through the century-plus history of Oregon Football from the very first game in 1894 through the 2007 season. This detailed "scrapbook" contains never-before-published photographs, artwork and memorabilia drawn from Oregon\'s athletic department and campus activities.

Tucked into dozens of sleeves and pockets, fans will find reproductions of old game programs, historic tickets, numerous postcards, photos and much more.
',
        'All books, ',
        'Workload: about 20 teaching hours per week, two days off every week.

-Native or near-native English speaker, preferably from the US, UK, Canada, Australia, New Zealand or other native English-speaking country.
-Bachelor degree or high school graduation or relevant educational certificate, negotiable based on individual qualifications and performances
-One semester or a full year commitment
-Experience preferred but not required
-with or without Qualification Certificate of English Teacher or TEFL Certificate ',
        'Workload: about 20 teaching hours per week, two days off every week.

-Native or near-native English speaker, preferably from the US, UK, Canada, Australia, New Zealand or other native English-speaking country.
-Bachelor degree or high school graduation or relevant educational certificate, negotiable based on individual qualifications and performances
-One semester or a full year commitment
-Experience preferred but not required
-with or without Qualification Certificate of English Teacher or TEFL Certificate ',
        'Workload: about 20 teaching hours per week, two days off every week.
-Native or near-native English speaker, preferably from the US, UK, Canada, Australia, New Zealand or other native English-speaking country.
-Bachelor degree or high school graduation or relevant educational certificate, negotiable based on individual qualifications and performances
-One semester or a full year commitment
-Experience preferred but not required
-with or without Qualification Certificate of English Teacher or TEFL Certificate ',
        'haolin Master is looks for a personal guide, he is blind but he is a master in several disciplines of martial arts, tai chi chuan, yoga and meditation. 

He is also osteopath and psychologist, and can speak fluently different languages like English, French, Italian, also Spanish and some others. He is also involved in humanitarian actions, to help people around the world. Also he travels to teach people different and several disciplines. 

Your tasks will be to help to organize trips around Europe and the world, and also to help in some logistic tasks of the daily life. 

For every time you travel you don not have to pay the expenses of the journey, those costs will be payed for you because you will be performing the tasks of being the guide. 
In addition to this you will receive a salary of 500€. 
',
        'We are a successful company that has been operating for 14 years in Switzerland, building software for city and state governments. This is an exciting position with plenty of potential for growth.',
        'Spendor SP100R2 speakers in perfect condition
good working order

18 months old but just a few months use',
        '2002 vw passat 
fuel: diesel 
title status: clean 
transmission: manual ',
        'Up for Sale: Pair of (2) Seats from a 1994 964 Speedster

These seats are great for a replacement or an upgrade.

In excellent shape, two tone leather.

Everything Speedster has tripled in value with no signs of slowing down.

Here is a rare chance to own a pair of Speedster seats at a amazing price. 

Grab these seats while you still can',
        'One night in Warsaw 40€ ',
        'One night in LONDON, good flat £40',
        'In the University of Oregon Football Vault: The History of the Ducks

This 144 page gem takes you through the century-plus history of Oregon Football from the very first game in 1894 through the 2007 season. This detailed "scrapbook" contains never-before-published photographs, artwork and memorabilia drawn from Oregon\'s athletic department and campus activities.

Tucked into dozens of sleeves and pockets, fans will find reproductions of old game programs, historic tickets, numerous postcards, photos and much more.
',
        'All books, ',
        'Workload: about 20 teaching hours per week, two days off every week.

-Native or near-native English speaker, preferably from the US, UK, Canada, Australia, New Zealand or other native English-speaking country.
-Bachelor degree or high school graduation or relevant educational certificate, negotiable based on individual qualifications and performances
-One semester or a full year commitment
-Experience preferred but not required
-with or without Qualification Certificate of English Teacher or TEFL Certificate ',
        'Workload: about 20 teaching hours per week, two days off every week.

-Native or near-native English speaker, preferably from the US, UK, Canada, Australia, New Zealand or other native English-speaking country.
-Bachelor degree or high school graduation or relevant educational certificate, negotiable based on individual qualifications and performances
-One semester or a full year commitment
-Experience preferred but not required
-with or without Qualification Certificate of English Teacher or TEFL Certificate ',
        'Workload: about 20 teaching hours per week, two days off every week.
-Native or near-native English speaker, preferably from the US, UK, Canada, Australia, New Zealand or other native English-speaking country.
-Bachelor degree or high school graduation or relevant educational certificate, negotiable based on individual qualifications and performances
-One semester or a full year commitment
-Experience preferred but not required
-with or without Qualification Certificate of English Teacher or TEFL Certificate ',
        'haolin Master is looks for a personal guide, he is blind but he is a master in several disciplines of martial arts, tai chi chuan, yoga and meditation. 

He is also osteopath and psychologist, and can speak fluently different languages like English, French, Italian, also Spanish and some others. He is also involved in humanitarian actions, to help people around the world. Also he travels to teach people different and several disciplines. 

Your tasks will be to help to organize trips around Europe and the world, and also to help in some logistic tasks of the daily life. 

For every time you travel you don not have to pay the expenses of the journey, those costs will be payed for you because you will be performing the tasks of being the guide. 
In addition to this you will receive a salary of 500€. 
',
        'We are a successful company that has been operating for 14 years in Switzerland, building software for city and state governments. This is an exciting position with plenty of potential for growth.',
        'Spendor SP100R2 speakers in perfect condition
good working order

18 months old but just a few months use',
        '2002 vw passat 
fuel: diesel 
title status: clean 
transmission: manual ',
        'Up for Sale: Pair of (2) Seats from a 1994 964 Speedster

These seats are great for a replacement or an upgrade.

In excellent shape, two tone leather.

Everything Speedster has tripled in value with no signs of slowing down.

Here is a rare chance to own a pair of Speedster seats at a amazing price. 

Grab these seats while you still can',
        'one night from 35 - 60€'
    ];
    private $encoder;
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $entityManager)
    {
        for ($i = 1; $i <= 25; $i++) {
            $user = new User();
            $username = self::USER_NAME;
            $user->setUsername($username.$i);
            $password = $this->encoder->encodePassword($user, 'testAdmin');
            $user->setEmail(strtolower(self::USER_NAME).'.'.$i . '@mail.com');
            $user->setPassword($password);
            $user->setEnabled(true);
            $entityManager->persist($user);
            $entityManager->flush();
        $this->addAdv($i, $user, $entityManager);
        }

    }

    public function addAdv($i, $user, $entityManager)
    {
        $entityAdv = new Advertisements();
        $caunt =$i;
        $title = self::TITLE[$caunt-1];
        $d = self::DESCRIPTION[$caunt-1];
        $entityAdv->setTitle($title);
        $entityAdv->setUser($user);
        $entityAdv->setDescription($d);
        $entityManager->persist($entityAdv);
        $entityManager->flush();
    }
}