<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Category;
use App\Entity\User;
use App\Entity\Trick;
use App\Entity\Comment;
use App\Entity\Media;
use App\Entity\Video;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        //Initialisation des variables
        $width = 40;
        $height = 40;
        $tricks = [];
        $authors = [];
        $users = [];
        $categories = [];
        $categoryDemoName = ['Stances', 'Straight Airs', 'Grabs', 'Spins', 'Flips', 'Slides'];
        $file = '679448aa836134509f5953518b8e6492.jpeg';
        $medias = [];
        $videos= [];
        $mediaDemoName = ['FlipVideo.mp4', 'Nollieimg.png', 'Bloody-Dracula.jpg', 'TailPress.png', '50-50.jpg'];
        $videoDemoUrl = ['https://www.youtube.com/embed/SQyTWk7OxSI', 'https://www.youtube.com/embed/xGG56MWgbOA', 'https://www.dailymotion.com/embed/x7n5t9c', 'https://www.dailymotion.com/embed/x3eghyq'];
        $tricksDemoName = ['Goofy', 'Ollie', 'Nollie', 'Beef Curtains', 'Bloody Dracula', 'Canadian Bacon', 'Front Flip', 'Lando-Roll', '50-50', 'TailPress', 'Cork', 'Japan Air', 'Front Side', 'Back Side', 'Butter', 'Dragon'];

        foreach ($categoryDemoName as $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
        
            $manager->persist($category);
            $categories[] = $category;
        }

        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setUsername($faker->name)
                ->setEmail($faker->safeEmail)
                ->setPassword($faker->sha256)
                ->setDateAdd($faker->dateTimeBetween($startDate = '-8 months', $endDate = 'now', $timezone = null))
                ->setDateUpdate($faker->dateTimeBetween($startDate = '-8 months', $endDate = 'now', $timezone = null))
                ->setIsActive(true)
                ->setValidationToken($faker->md5)
                ->setResetPasswordToken($faker->sha256)
                ->setAvatar($faker->imageUrl($width, $height, 'cats', true, 'Faker', true));

            $manager->persist($user);
            $authors[] = $user;
        }
        
        foreach ($tricksDemoName as $trickName) { 
            $trick = new Trick();
            $trick->setName($trickName)
                ->setFileName($file)
                ->setDescription($faker->text)
                ->setDateAdd($faker->dateTimeBetween($startDate = '-8 months', $endDate = 'now', $timezone = null))
                ->setDateUpdate($faker->dateTimeBetween($startDate = '-8 months', $endDate = 'now', $timezone = null))
                ->setCategory($faker->randomElement($categories))
                ->setAuthor($faker->randomElement($authors));

                $manager->persist($trick);
                $tricks[] = $trick;
                //$authors[] = $authors;
        }

        foreach ($mediaDemoName as $mediaName) {
            $media = new Media();
            $media->setName($mediaName)
                ->setCaption($faker->text)
                ->setDateAdd($faker->dateTimeBetween($startDate = '-4 months', $endDate = 'now', $timezone = null))
                ->setTrick($faker->randomElement($tricks));

            $manager->persist($media);
            $medias[] = $media;
        }

        foreach ($videoDemoUrl as $videoUrl) {
            $video = new Video();
            $video->setUrl($videoUrl)
                ->setCaption($faker->text)
                ->setTrick($faker->randomElement($tricks));

            $manager->persist($video);
            $videos[] = $video;
        }

        for ($i = 0; $i < 15; $i++) {
            $comment = new Comment();
            $comment->setUser($faker->randomElement($authors))
                    ->setTrick($faker->randomElement($tricks))
                    ->setDateAdd(new \Datetime)
                    ->setContent($faker->text);

            $manager->persist($comment);
            $comments[] = $comment;
            $tricks[] = $trick;
            $authors[] = $user;
        }

        $manager->flush();
    }
}
