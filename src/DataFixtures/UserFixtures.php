<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $user = new User();
        $user->setEmail('admin@admin.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->plainPassword = 'demo';
        //$user->setPassword('$2y$13$7USL8/OUy/h5ZGkBNVPtK.OTx6jj0ZTz9iG4BjkKe3hmxZuFiIKNa');
        $manager->persist($user);

        $user2 = new User();
        $user2->setEmail('admin2@admin.com');
        $user2->setRoles(['ROLE_ADMIN']);
        $user2->plainPassword = 'demo2';
        $manager->persist($user2);

        $manager->flush();
    }
}
