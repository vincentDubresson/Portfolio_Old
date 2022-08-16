<?php

namespace App\DataFixtures;

use App\Entity\Language;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LanguageFixtures extends Fixture
{
    private const LANGUAGES = [
        [
            "name" => "HTML",
            "picture" => "build/images/logo/language/html.png"
        ],
        [
            "name" => "PHP",
            "picture" => "build/images/logo/language/php.png"
        ],
        [
            "name" => "Symfony",
            "picture" => "build/images/logo/language/symfony.png"
        ],
        [
            "name" => "Javascript",
            "picture" => "build/images/logo/language/javascript.png"
        ],
        [
            "name" => "CSS",
            "picture" => "build/images/logo/language/css.png"
        ],
        [
            "name" => "Bootstrap",
            "picture" => "build/images/logo/language/bootstrap.png"
        ],
        [
            "name" => "Sass",
            "picture" => "build/images/logo/language/sass.png"
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::LANGUAGES as $language) {
            $technology = new Language();
            $technology
                ->setName($language['name'])
                ->setLogo($language['picture']);
            $this->addReference($language['name'], $technology);
            
            $manager->persist($technology);
        }

        $manager->flush();
    }
    
}
