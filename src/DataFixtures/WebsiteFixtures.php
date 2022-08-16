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
            "description" => "WCS Projet 1 - Site touristique sur la ville de Lyon, créé pour le projet n°1 de la formation de Développeur Web. (Groupe de 4)",
            "language" => ["HTML", "CSS", "PHP", "Javascript"],
            "link" => "http://we-love-lyon.vdub-dev.fr/",
            "picture" => "build/images/background/websites/we-love-lyon.png"
        ],
        [
            "title" => "BD Cult'",
            "description" => "WCS Projet 2 - Ne cherchez plus votre prochaine BD... Trouvez-la grâce à notre moteur de recherche spécialisé dans le 9ème Art ! Par Auteur, Genre, Titre ou même description, votre recherche n'aura jamais été aussi simple ! Bonne lecture ! (Groupe de 4)",
            "language" => ["PHP", "Bootstrap", "Javascript"],
            "link" => "http://bd-cult.vdub-dev.fr/",
            "picture" => "build/images/background/websites/bd-cult.png"
        ],
        [
            "title" => "Usedge Research Center",
            "description" => "WCS Projet 3 - Nous avons développé un centre de recherche. Il s'agit d'un ensemble de fonctionnalités, dont les outils vont permettre aux UX designers de bénéficier d'ateliers personnalisés, afin de mener à bien leurs recherches en UX/UI. (Groupe de 5)",
            "language" => ["PHP", "Symfony", "Sass", "Javascript"],
            "link" => "https://github.com/WildCodeSchool/2022-03-php-Lyon-P3-Usedge",
            "picture" => "build/images/background/websites/usedge.png"
        ],
        [
            "title" => "Green Froggy",
            "description" => "Vainqueur du 1er Hackathon de la session Dev 2022. Application de météo du futur, afin de sensibiliser le monde entier sur les enjeux du réchauffement climatique. (Groupe de 5)",
            "language" => ["PHP", "CSS", "Javascript"],
            "link" => "http://green-froggy.vdub-dev.fr/",
            "picture" => "build/images/background/websites/green-froggy.png"
        ],
        [
            "title" => "Wilders Helpers",
            "description" => "Projet personnel de fin de formation de Développement Web. Site privé de petites annonces entre Wilders. Hommage à la session PHP de la Wild Code School de Lyon.",
            "language" => ["PHP", "Symfony", "Sass", "Javascript"],
            "link" => "http://wilders-helpers.vdub-dev.fr/",
            "picture" => "build/images/background/websites/wilders-helpers.png"
        ],
        [
            "title" => "We love Lyon",
            "description" => "WCS Project 1 - Tourist site on the city of Lyon, created for project n°1 of the Web Developer training. (Group of 4)",
            "language" => ["HTML", "CSS", "PHP", "Javascript"],
            "link" => "http://we-love-lyon.vdub-dev.fr/",
            "picture" => "build/images/background/websites/we-love-lyon.png"
        ],
        [
            "title" => "BD Cult'",
            "description" => "WCS Project 2 - Stop looking for your next comic... Find it with our search engine specializing in the 9th Art! By Author, Genre, Title or even description, your search has never been easier! Good reading ! (Group of 4)",
            "language" => ["PHP", "Bootstrap", "Javascript"],
            "link" => "http://bd-cult.vdub-dev.fr/",
            "picture" => "build/images/background/websites/bd-cult.png"
        ],
        [
            "title" => "Usedge Research Center",
            "description" => "WCS Project 3 - We have developed a research center. This is a set of features, whose tools will allow UX designers to benefit from personalized workshops, in order to carry out their research in UX/UI. (Group of 5)",
            "language" => ["PHP", "Symfony", "Sass", "Javascript"],
            "link" => "https://github.com/WildCodeSchool/2022-03-php-Lyon-P3-Usedge",
            "picture" => "build/images/background/websites/usedge.png"
        ],
        [
            "title" => "Green Froggy",
            "description" => "Winner of the 1st Hackathon of the Dev 2022 session. Future weather application, to raise awareness around the world on the challenges of global warming. (Group of 5)",
            "language" => ["PHP", "CSS", "Javascript"],
            "link" => "http://green-froggy.vdub-dev.fr/",
            "picture" => "build/images/background/websites/green-froggy.png"
        ],
        [
            "title" => "Wilders Helpers",
            "description" => "
            Personal end-of-training project in Web Development. Private classifieds site between Wilders. Tribute to the PHP session of the Wild Code School of Lyon.",
            "language" => ["PHP", "Symfony", "Sass", "Javascript"],
            "link" => "http://wilders-helpers.vdub-dev.fr/",
            "picture" => "build/images/background/websites/wilders-helpers.png"
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach(self::WEBSITES as $website) {
            $site = new Website();
            $site
                ->setTitle($website['title'])
                ->setDescription($website['description'])
                ->setLink($website['link'])
                ->setPicture($website['picture']);
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
