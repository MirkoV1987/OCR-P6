<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Entity\Category;
use App\Entity\Comment;
use App\Entity\Media;
use App\Entity\Trick;
use App\Entity\User;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        //Initialisation des variables
        $authors = [];
        $categories = [];
        $tricks = [];
        $medias = [];
        $categoryDemoName = ['Stances', 'Straight Airs', 'Grabs', 'Spins', 'Flips', 'Slides'];
        $mediaDemoName = ['FlipVideo.mp4', 'Nollieimg.png', 'Bloody-Dracula.jpg', 'TailPress.png', '50-50.jpg'];
        $tricksDemoName = ['Goofy', 'Ollie', 'Nollie', 'Beef Curtains', 'Bloody Dracula', 'Canadian Bacon', 'Front Flip', 'Lando-Roll', '50-50', 'TailPress'];

        
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setUsername($faker->name)
                ->setEmail($faker->safeEmail)
                ->setPassword($faker->sha256)
                ->setComfirmPassword($faker->sha256)
                ->setDateAdd($faker->dateTimeBetween($startDate = '-8 months', $endDate = 'now', $timezone = null))
                ->setDateUpdate($faker->dateTimeBetween($startDate = '-8 months', $endDate = 'now', $timezone = null))
                ->setIsActive(true)
                ->setValidationToken($faker->md5)
                ->setResetPasswordToken($faker->sha256);

            $manager->persist($user);
            $authors[] = $user;
        }

        foreach ($categoryDemoName as $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
        
            $manager->persist($category);
            $categories[] = $category;
        }

        foreach ($tricksDemoName as $trickName) { 
            $trick = new Trick();
            $trick->setName($trickName)
                ->setDescription($faker->text)
                ->setDateAdd($faker->dateTimeBetween($startDate = '-8 months', $endDate = 'now', $timezone = null))
                ->setDateUpdate($faker->dateTimeBetween($startDate = '-8 months', $endDate = 'now', $timezone = null))
                ->setCategory($faker->randomElement($categories))
                ->setAuthor($faker->randomElement($authors));

                $manager->persist($trick);
                $tricks[] = $trick;
            }

        foreach ($mediaDemoName as $mediaName) {
            $media = new Media();
            $media->setName($mediaName)
                ->setCaption($faker->text)
                ->setMediaUrl($faker->imageUrl($width = 244, $height = 420, 'cats'))
                ->setDateAdd($faker->dateTimeBetween($startDate = '-4 months', $endDate = 'now', $timezone = null))
                ->setTrick($faker->randomElement($tricks));

            $manager->persist($media);
            $medias[] = $media;
        }
        
        for ($i = 0; $i < 15; $i++) {
            $comment = new Comment();
            $comment->setAuthor($faker->randomElement($authors))
                    ->setTrick($faker->randomElement($tricks))
                    ->setDateAdd(new \Datetime)
                    ->setContent($faker->text);

            $manager->persist($comment);
            $comments[] = $comment;
            $tricks[] = $trick;
        }

        $manager->flush();
    }
}
