<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use PhpParser\Node\Stmt\Foreach_;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    
    public function load(ObjectManager $manager): void
    {
        $details = [
            [
                'program' => 'Walking Dead',
                'number' => 1,
                'year' => 2010,
                'description' => 'Après avoir été blessé dans l’exercice de ses fonctions, le shérif Rick Grimes se réveille d’un coma de plusieurs semaines et découvre un monde post-apocalyptique où la quasi-totalité de ...',
            ],
            [
                'program' => 'Walking Dead',
                'number' => 2,
                'year' => 2012,
                'description' => 'A la suite de l’explosion du CDC, Rick et son groupe fuient Atlanta alors que la ville est infestée de zombies. Confrontés à une nouvelle menace, ces derniers trouvent refuge dans la ferme ...',
            ],
            [
                'program' => 'Walking Dead',
                'number' => 3,
                'year' => 2012,
                'description' => 'Quelques mois après avoir abandonné la ferme d’Hershel, Rick et sa communauté de survivants découvrent une prison abandonnée dans laquelle s’installer. Mais la sécurité du groupe se trouve ...',
            ],
            [
                'program' => 'Walking Dead',
                'number' => 4,
                'year' => 2013,
                'description' => 'Plusieurs mois se sont écoulés depuis l’attaque du Gouverneur et la vie reprend peu à peu son cours à la prison. Lorsqu’un événement tragique oblige les survivants à se séparer et à ...',
            ],
            [
                'program' => 'Game of Thrones',
                'number' => 1,
                'year' => 2011,
                'description' => 'A Westeros, un continent chimérique, de puissantes familles se disputent le trône de fer, symbole de pouvoir absolu sur le royaume des Sept Couronnes. Plusieurs années après la rébellion ...',
            ],
            [
                'program' => 'Game of Thrones',
                'number' => 2,
                'year' => 2012,
                'description' => 'Les Sept Couronnes sont en guerre, et chaque camp cherche à nouer de nouvelles alliances. Grâce au soutien de la puissante Maison Lannister, Joffrey Baratheon, héritier de Robert, détient ...',
            ],
            [
                'program' => 'Game of Thrones',
                'number' => 3,
                'year' => 2013,
                'description' => 'La lutte pour le trône de fer continue. Joffrey Baratheon a remporté une précieuse victoire et se retrouve désormais à la tête de la plus grande armée du royaume. Sur l’île de Peyredragon, ...',
            ],
            [
                'program' => 'Game of Thrones',
                'number' => 4,
                'year' => 2014,
                'description' => 'Après de nombreuses victoires, la maison Lannister est plus puissante que jamais et détient désormais un pouvoir absolu sur le trône de fer. Le prince Oberyn Martell arrive à Port-Réal pour ...',
            ],
            [
                'program' => 'Friends',
                'number' => 1,
                'year' => 1994,
                'description' => 'Monica Geller, jeune cuisinière new-yorkaise de 25 ans, reçoit la visite de Rachel Green, une amie d’enfance dont elle avait perdu la trace et qui vient de quitter son fiancé devant l’autel. ...',
            ],
            [
                'program' => 'Friends',
                'number' => 2,
                'year' => 1995,
                'description' => 'Ross, qui ignore les sentiments de Rachel à son égard, débute une relation avec Julie, une paléontologue qu’il a connue au collège. Jalouse et malheureuse, Rachel tente alors de saboter leur ...',
            ],
            [
                'program' => 'Friends',
                'number' => 3,
                'year' => 1996,
                'description' => 'Encouragée par Chandler et Joey, Rachel démissionne du Central Perk et obtient un job chez Bloomingdale’s. Mais la jalousie de Ross vis-à-vis du nouveau patron de Rachel va créer ...',
            ],
            [
                'program' => 'Friends',
                'number' => 4,
                'year' => 1997,
                'description' => 'Désormais séparés, Ross et Rachel commencent à fréquenter d’autres personnes. Mais lorsque la relation de Ross et Emily devient sérieuse, Rachel se pose des ...',
            ],
            [
                'program' => 'Breaking Bad',
                'number' => 1,
                'year' => 2008,
                'description' => 'un moyen de mettre ses proches à l abri du besoin. Avec un de ses anciens élèves, Jesse Pinkman, il utilise ses connaissances scientifiques pour produire une méthamphétamine très pure. Une courte première saison réussie qui valut à Bryan Cranston son premier Emmy ainsi qu un Satellite Award pour son interprétation de Walter White.',
            ],
            [
                'program' => 'Breaking Bad',
                'number' => 2,
                'year' => 2009,
                'description' => "reprend un travail et s'inquiète des effets de la maladie sur son mari. Hank, le beau-frère des White, met tout en oeuvre pour arrêter Heisenberg. Toujours aussi ambitieuse et mature qu'à ses débuts, cette deuxième saison permit à Bryan Cranston de recevoir une nouvelle statuette lors des Emmy Awards.",
            ],
            [
                'program' => 'Breaking Bad',
                'number' => 3,
                'year' => 2010,
                'description' => "veulent tuer pour venger leur parent décédé. Toujours obsédé par l'insaisissable trafiquant, Hank refuse une promotion afin de poursuivre son enquête. L'intensité et la dramaturgie de la série s'accentuent dans cette troisième saison. Les Emmy Awards récompensèrent Aaron Paul pour la première fois et Bryan Cranston pour la troisième fois consécutive.",
            ],
            [
                'program' => 'Breaking Bad',
                'number' => 4,
                'year' => 2011,
                'description' => "femme de Walter, Jesse comprend peu à peu que l'issue ne pourra qu'être fatale. Une 4e saison très noire et en demi-teinte par rapport à l'ensemble, mais toujours avec une pincée d'humour salvateur.",
            ],
            [
                'program' => 'Stranger Things',
                'number' => 1,
                'year' => 2016,
                'description' => 'Description de la saison 1 de Stranger Things ',
            ],
            [
                'program' => 'Stranger Things',
                'number' => 2,
                'year' => 2017,
                'description' => 'Description de la saison 2 de Stranger Things',
            ],
            [
                'program' => 'Stranger Things',
                'number' => 3,
                'year' => 2018,
                'description' => 'Description de la saison 3 de Stranger Things',
            ],
            [
                'program' => 'Stranger Things',
                'number' => 4,
                'year' => 2019,
                'description' => 'Description de la saison 4 de Stranger Things',
            ],
        ];
        // $product = new Product();
        // $manager->persist($product);
        foreach ($details as $detail) {
            $season = new Season ;
            $season->setProgram($this->getReference('program_' . $detail['program']));
            $season->setNumber($detail['number']) ;
            $season->setYear($detail['year']) ;
            $season->setDescription($detail['description']) ;
            $this->addReference('season' . $detail['number'] . '_' . $detail['program'], $season);
            $manager->persist($season) ;
            
   
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
