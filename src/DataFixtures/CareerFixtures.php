<?php

namespace App\DataFixtures;

use App\Entity\Career;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CareerFixtures extends Fixture
{
    private const CAREERS = [
        [
            "title" => "Bachelor Concepteur et Développeur d'Applications",
            "site" => " - Wild Code School",
            "location" => "Lyon 2ème",
            "date" => "Sept 2022 - Sept 2023",
            "description" => "Développement des compétences UI grâce à React, React Native, NodeJs et Typescript, et en persistance des données à l'aide de MongoDB, MySQL et GraphQL. Contrat de professionnalisation au sein d'Ice Development (Lyon 7ème).",
            "isWork" => false
        ],
        [
            "title" => "Formation de Développeur Web et Mobile",
            "site" => " - Wild Code School",
            "location" => "Lyon 2ème",
            "date" => "Fév 2022 - Juil 2022",
            "description" => "Apprentissage au travers de trois projets, du développement d'applications web à l'aide d'HTML, CSS/SASS et Javascript pour la partie front-end, de PHP/Symfony et MySQL pour la partie back-end. Sensibilisation aux méthodes AGILE.",
            "isWork" => false
        ],
        [
            "title" => "Ambulancier Diplômé d'État",
            "date" => "2010 - 2022",
            "isWork" => true
        ],
        [
            "title" => "Diplôme d'État d'Ambulancier",
            "date" => "Fév 2010 - Juil 2010",
            "isWork" => false
        ],
        [
            "title" => "Technico-commercial",
            "date" => "2005 - 2009",
            "isWork" => true
        ],
        [
            "title" => "D.U.T. Organisation et Génie de la Production",
            "date" => "Sept 2002 - Juin 2004",
            "isWork" => false
        ],
        [
            "title" => "Bac Scientifique option Sciences de l'Ingénieur",
            "date" => "2002",
            "isWork" => false
        ],
        [
            "title" => "Bachelor of Application Designer and Developer",
            "site" => " - Wild Code School",
            "location" => "Lyon",
            "date" => "2022 Sept - 2023 Sept",
            "description" => "Development of UI skills using React, React Native, NodeJs and Typescript, and data persistence using MongoDB, MySQL and GraphQL. Professionalization contract within Ice Development (Lyon).",
            "isWork" => false
        ],
        [
            "title" => "Web and Mobile Developer Training",
            "site" => " - Wild Code School",
            "location" => "Lyon",
            "date" => "2022 Feb - 2022 Jun",
            "description" => "Learning through three projects of web application development using HTML, CSS/SASS and Javascript for the front-end part, PHP/Symfony and MySQL for the back-end part. Awareness of AGILE methods.",
            "isWork" => false
        ],
        [
            "title" => "State Licensed Paramedic",
            "date" => "2010 - 2022",
            "isWork" => true
        ],
        [
            "title" => "State Diploma of Ambulance",
            "date" => "2010 Feb - 2010 Jul",
            "isWork" => false
        ],
        [
            "title" => "Commercial Technician",
            "date" => "2005 - 2009",
            "isWork" => true
        ],
        [
            "title" => "Technological University Diploma in Production Organization and Engineering",
            "date" => "2002 Sept - 2004 Jun",
            "isWork" => false
        ],
        [
            "title" => "Scientific baccalaureate option Engineering Sciences",
            "date" => "2002",
            "isWork" => false
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::CAREERS as $career) {
            $experience = new Career();
            $experience
                ->setTitle($career['title'])
                ->setDate($career['date'])
                ->setIsWork($career['isWork']);
            if (!empty($career['site'])) $experience->setSite($career['site']);
            if (!empty($career['location'])) $experience->setLocation($career['location']);
            if (!empty($career['description'])) $experience->setDescription($career['description']);
            
            $manager->persist($experience);
        }

        $manager->flush();
    }
}
