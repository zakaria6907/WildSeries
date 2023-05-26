<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use PhpParser\Node\Stmt\Foreach_;
use Faker\Factory;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        $programs =['Walking Dead', 'Game of Thrones' ,'Friends' , 'Breaking Bad' , 'Stranger Things' ] ;
        // $product = new Product();
        // $manager->persist($product);
        foreach ($programs as $program) {
            
            for($i = 0; $i < 5; $i++) {
                $season = new Season();
                //Ce Faker va nous permettre d'alimenter l'instance de Season que l'on souhaite ajouter en base
                $season->setNumber($i +1);
                $season->setYear($faker->year());
                $season->setDescription($faker->paragraphs(3, true));
                $season->setProgram($this->getReference('program_' . $program));
                $manager->persist($season);
                $this->addReference('season' . ($i + 1) . '_' . $program, $season);
            }
            
   
        }
        $manager->flush();
 
    }
    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
          ProgramFixtures::class,
        ];
    }

}
