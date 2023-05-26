<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager): void
    {
        $details = [
            [
                'program' => 'Walking Dead',
                'season' => 1,
                'title' => "Days Gone Bye" ,
                'number' => 1,
                'synopsis' => "Deputy Sheriff Rick Grimes awakens from a coma, and searches for his family in a world ravaged by the undead.",
            ],
            [
                'program' => 'Walking Dead',
                'season' => 1,
                'title' => "Guts",
                'number' => 2,
                'synopsis' => "Rick unknowingly causes a group of survivors to be trapped by walkers. The group dynamic devolves from accusations to violence as Rick must confront an enemy far more dangerous than the undead.",
            ],
            [
                'program' => 'Walking Dead',
                'season' => 1,
                'title' => "Tell It to the Frogs",
                'number' => 3,
                'synopsis' => "Rick makes a decision to go back to Atlanta to retrieve the bag of guns and save a man's life. Lori and Shane must deal with the surprising return of someone they thought was dead.",
            ],
            [
                'program' => 'Walking Dead',
                'season' => 2,
                'title' => "Bloodletting",
                'number' => 1,
                'synopsis' => "Rick seeks medical help for Carl, who is recovering from a gunshot wound. Meanwhile, Shane deals with the fallout from his recent actions and Lori has a difficult decision to make.",
            ],
            [
                'program' => 'Walking Dead',
                'season' => 2,
                'title' => "Save the Last One",
                'number' => 2,
                'synopsis' => "The group desperately awaits Shane's return. Shane finds himself trapped in a school with a group of walkers. Daryl and Andrea search for someone in the woods.",
            ],
            [
                'program' => 'Walking Dead',
                'season' => 2,
                'title' => "Cherokee Rose",
                'number' => 3,
                'synopsis' => "Shane makes a deadly sacrifice which leads to unusual behavior and self-distancing. The rest of the group tries to hang on somewhere between living to die and dying to live.",
            ],
            [
                'program' => 'Walking Dead',
                'season' => 3,
                'title' => "Valar Dohaeris",
                'number' => 1,
                'synopsis' => "Jon is brought before Mance Rayder, the King Beyond the Wall, while the Night's Watch survivors retreat south. In King's Landing, Tyrion asks for his reward. Littlefinger offers Sansa a way out.",
            ],
            [
                'program' => 'Walking Dead',
                'season' => 3,
                'title' => "Dark Wings, Dark Words",
                'number' => 2,
                'synopsis' => "Sansa says too much. Shae asks Tyrion for a favor. Jaime finds a way to pass the time. Arya runs into the Brotherhood Without Banners.",
            ],
            [
                'program' => 'Walking Dead',
                'season' => 3,
                'title' => "Walk of Punishment",
                'number' => 3,
                'synopsis' => "Robb and Catelyn arrive at Riverrun for Lord Hoster Tully's funeral. Tywin names Tyrion the new Master of Coin. Arya says goodbye to Hot Pie. The Night's Watch returns to Craster's.",
            ],
            [
                'program' => 'Walking Dead',
                'season' => 4,
                'title' => "Two Swords",
                'number' => 1,
                'synopsis' => "Tyrion welcomes a guest to King's Landing. At Castle Black, Jon stands trial. Daenerys is pointed to Meereen, the mother of all slave cities. Arya runs into an old friend.",
            ],
            [
                'program' => 'Walking Dead',
                'season' => 4,
                'title' => "The Lion and the Rose",
                'number' => 2,
                'synopsis' => "Tyrion lends Jaime a hand. Joffrey and Margaery host a breakfast. At Dragonstone, Stannis loses patience with Davos. Ramsay finds a purpose for his pet. North of the Wall, Bran sees where they must go.",
            ],
            [
                'program' => 'Walking Dead',
                'season' => 4,
                'title' => "Breaker of Chains",
                'number' => 3,
                'synopsis' => "Tyrion ponders his options." ,
                ],

        ] ;
        // $product = new Product();
        // $manager->persist($product);
        foreach ($details as $detail) {
            $episode = new Episode();
            $episode->setTitle($detail['title']);
            $episode->setNumber($detail['number']);
            $episode->setSynopsis($detail['synopsis']);
            $episode->setSeason($this->getReference('season' . $detail['season'] . '_' . $detail['program']));
            $manager->persist($episode);
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
