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

        for ($i = 0; $i < 6; $i++) {
            $category = new Category();
            $category->setName($faker->text($maxNbChars = 10));
            $manager->persist($category);
        }

        for ($i = 0; $i < 5; $i++) {
            $comment = new Comment();
            $comment->setDateAdd($faker->dateTimeThisDecade($max = 'now', $timezone = null));
            $comment->setContent($faker->text);
            $comment->setAuthor(new User(), $faker->biasedNumberBetween($min = 10, $max = 1000, $function = 'sqrt'));
            $comment->getTrick(new Trick(), $faker->biasedNumberBetween($min = 237, $max = 1000, $function = 'sqrt'));
            $manager->persist($comment);
        }

        for ($i = 0; $i < 3; $i++) {
            $media = new Media();
            $media->setName($faker->name);
            $media->setCaption($faker->text);
            $media->setMediaUrl($faker->imageUrl($width = 244, $height = 420, 'cats'));
            //$media->setMediaFile(new  UploadedFile(), $faker->file($sourceDir = 'public/uploads', $targetDir = 'public/uploads/tricks'));
            $media->setDateAdd($faker->dateTimeThisDecade($max = 'now', $timezone = null));
            $media->getTrick(new Trick(), $faker->biasedNumberBetween($min = 237, $max = 1000, $function = 'sqrt'));
            $manager->persist($media);
        }

        for ($i = 0; $i < 8; $i++) {
            $user = new User();
            $user->setUsername($faker->name);
            $user->setEmail($faker->email);
            $user->setPassword($faker->sha256);
            $user->setComfirmPassword($faker->sha256);
            $user->setDateAdd($faker->dateTimeThisDecade($max = 'now', $timezone = null));
            $user->setDateUpdate($faker->dateTimeThisDecade($max = 'now', $timezone = null));
            $user->setIsActive($faker->boolean($chanceOfGettingTrue = 50));
            $user->setValidationToken($faker->md5);
            $user->setResetPasswordToken($faker->sha256);
            $user->getComments(new Comment(), $faker->biasedNumberBetween($min = 237, $max = 1000, $function = 'sqrt'));
            $user->getTricks(new Trick(), $faker->randomDigitNotNull);
            $manager->persist($user);
        }
        
        for ($i = 0; $i < 10; $i++) {
            $trick = new Trick();
            $trick->setName($faker->name);
            $trick->setDescription($faker->text);
            $trick->setDateAdd($faker->dateTimeThisDecade($max = 'now', $timezone = null));
            $trick->setDateUpdate($faker->dateTimeThisDecade($max = 'now', $timezone = null));
            $trick->getCategory(new Category(), $faker->biasedNumberBetween($min = 255, $max = 280, $function = 'sqrt'));
            $trick->getMedias(new Media(), $faker->biasedNumberBetween($min = 237, $max = 1000, $function = 'sqrt'));
            $trick->getComments(new Comment(), $faker->biasedNumberBetween($min = 40, $max = 1000, $function = 'sqrt'));
            $trick->setAuthor(new User(), $faker->biasedNumberBetween($min = 43, $max = 58, $function = 'sqrt'));
            $manager->persist($trick);
        }

        $manager->flush();
    }
}
