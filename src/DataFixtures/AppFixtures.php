<?php

namespace App\DataFixtures;
use App\Entity\UserProfile;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        for ($i = 1; $i <= 100; $i++) {
            $userProfile = new UserProfile();
            $userProfile->setEmail("user$i@example.com");

            $manager->persist($userProfile);
        }

        $manager->flush();
    }
}
