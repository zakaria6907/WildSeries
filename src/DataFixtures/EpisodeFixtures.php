<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        $programs = ['Walking Dead', 'Game of Thrones', 'Friends', 'Breaking Bad', 'Stranger Things'];

        foreach ($programs as $program) {
            for ($j = 0; $j < 5; $j++) {
                for ($i = 0; $i < 10; $i++) {
                    $episode = new Episode();
                    $episode->setTitle($faker->name());
                    $episode->setNumber($i + 1);
                    $episode->setSynopsis($faker->paragraph());
                    $episode->setSeason($this->getReference('season' . ($j + 1) . '_' . $program));
                    $manager->persist($episode);
                }
            }
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            SeasonFixtures::class,
        ];
    }
}
