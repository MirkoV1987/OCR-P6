<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Category;
use App\Entity\Trick;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $this->addCategory($manager, 1, 'Stances');
        $this->addCategory($manager, 2, 'Grabs');
        $this->addCategory($manager, 3, 'Straight Airs');
        $this->addCategory($manager, 4, 'Spins');
        $this->addCategory($manager, 5, 'Flips');
        $this->addCategory($manager, 6, 'Slides');
        $this->addTrick($manager, 'Miller Flip', 'A 360° frontside handplant to fakie.', new \DateTime(2020-02-11), 'Stances');

        $manager->flush();
    }

    private function addCategory($manager, $id, $name)
    {
        $category = new Category();
        $category->getId($id);
        $category->setName($name);
        $manager->persist($category);
    }

    private function addTrick($manager, $name, $description, $date_add, $category)
    {
        $trick = new Trick();
        $category = new Category();
        $trick->setName($name);
        $trick->setDescription($description);
        $trick->setDateAdd($date_add);
        $trick->setCategory(new Category());
        $manager->persist($trick);
    }
}
