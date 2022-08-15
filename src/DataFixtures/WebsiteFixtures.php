<?php

namespace App\DataFixtures;

use App\Entity\Website;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class WebsiteFixtures extends Fixture implements DependentFixtureInterface
{
    private const WEBSITES = [
        [
            "title" => "We love Lyon",
            "description" => "Site touristique sur la ville de Lyon, créé pour le projet n°1 de la formation de Développeur Web.",
            "language" => ["HTML", "CSS", "PHP", "Javascript"],
            "link" => "http://we-love-lyon.vdub-dev.fr/"
        ],
        [
            "title" => "BD Cult'",
            "description" => "Ne cherchez plus votre prochaine BD... Trouvez-la grâce à notre moteur de recherche spécialisé dans le 9ème Art ! Par Auteur, Genre, Titre ou même description, votre recherche n'aura jamais été aussi simple ! Bonne lecture !",
            "language" => ["PHP", "Bootstrap", "Javascript"],
            "link" => "http://bd-cult.vdub.dev.fr/"
        ],
        [
            "title" => "Usedge Research Center",
            "description" => "Nous avons développé un centre de recherche. Il s'agit d'un ensemble de fonctionnalités, dont les outils vont permettre aux UX designers de bénéficier d'ateliers personnalisés, afin de mener à bien leurs recherches en UX/UI.",
            "language" => ["PHP", "Symfony", "Sass", "Javascript"],
            "link" => "https://github.com/WildCodeSchool/2022-03-php-Lyon-P3-Usedge"
        ],
        [
            "title" => "Green Froggy",
            "description" => "Vainqueur du 1er Hackathon de la session Dev 2022. Application de météo du futur, afin de sensibiliser le monde entier sur les enjeux du réchauffement climatique.",
            "language" => ["PHP", "CSS", "Javascript"],
            "link" => "http://green-froggy.vdub-dev.fr/"
        ],
        [
            "title" => "Wilders Helpers",
            "description" => "Projet personnel de fin de formation de Développement Web. Site privé de petites annonces entre Wilders. Hommage à la session PHP de la Wild Code School de Lyon.",
            "language" => ["PHP", "Symfony", "Sass", "Javascript"],
            "link" => "http://wilders-helpers.vdub-dev.fr/"
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach(self::WEBSITES as $website) {
            $site = new Website();
            $site
                ->setTitle($website['title'])
                ->setDescription($website['description'])
                ->setLink($website['link']);
            foreach($website['language'] as $language) {
                $site->addLanguage($this->getReference($language));
            }

            $manager->persist($site);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            LanguageFixtures::class,
        ];
    }
}
