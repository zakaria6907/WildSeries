<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $programs = [
            [
                'title' => 'Walking Dead',
                'synopsis' => 'Des zombies envahissent la terre',
                'poster' => 'zack',
                'category' => $this->getReference('category_Action'),
            ],
            [
                'title' => 'Game of Thrones',
                'synopsis' => 'Intrigues et batailles pour le Trône de Fer',
                'poster' => 'got',
                'category' => $this->getReference('category_Aventure'),
            ],
            [
                'title' => 'Friends',
                'synopsis' => 'Les aventures de six amis à New York',
                'poster' => 'friends',
                'category' => $this->getReference('category_Animation'),
            ],
            [
                'title' => 'Breaking Bad',
                'synopsis' => 'Un professeur de chimie devient un puissant trafiquant de drogue',
                'poster' => 'breaking_bad',
                'category' => $this->getReference('category_Fantastique'),
            ],
            [
                'title' => 'Stranger Things',
                'synopsis' => 'Des événements étranges se produisent dans une petite ville',
                'poster' => 'stranger_things',
                'category' => $this->getReference('category_Horreur'),
            ],
        ];

        foreach ($programs as $detail) {
            $program = new Program;
            $program->setTitle($detail['title']);
            $program->setSynopsis($detail['synopsis']);
            $program->setPoster($detail['poster']);
            $program->setCategory($detail['category']);

            $manager->persist($program);
            $this->addReference('program_' . $detail['title'], $program);
        }

        $manager->flush();
    }
    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
          CategoryFixtures::class,
        ];
    }
}
