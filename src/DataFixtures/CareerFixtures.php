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
            "site" => "Wild Code School",
            "location" => "Lyon 2ème",
            "date" => "Sept 2022 - Sept 2023",
            "description" => "Développement des compétences UI grâce à React, React Native, NodeJs et Typescript, et en persistance des données à l'aide de MongoDB, MySQL et GraphQL. Contrat de professionnalisation au sein d'Ice Development (Lyon 7ème).",
        ],
        [
            "title" => "Formation de Développeur Web et Mobile",
            "site" => "Wild Code School",
            "location" => "Lyon 2ème",
            "date" => "Fév 2022 - Juil 2022",
            "description" => "Apprentissage au travers de trois projets, du développement d'applications web à l'aide d'HTML, CSS/SASS et Javascript pour la partie front-end, de PHP/Symfony et MySQL pour la partie back-end. Sensibilisation aux méthodes AGILE.",
        ],
        [
            "title" => "Ambulancier Diplômé d'État",
            "site" => "Ambulances Tassinoises / Oullinoises",
            "location" => "Métropole Lyonnaise",
            "date" => "2010 - 2022",
            "description" => "Prise en charge et transport de personnes malades ou blessées, sur prescription médicale ou en cas d'urgence vitale ou relative.",
        ],
        [
            "title" => "Diplôme d'État d'Ambulancier",
            "site" => "I.F.A. Croix-Rouge Française",
            "location" => "Villeurbanne",
            "date" => "Fév 2010 - Juil 2010",
            "description" => "Apprentissage des gestes et soins d'urgence adaptés à l'état clinique d'un patient. Hygiène et prévention de la transmission d'infection. Techniques préventives de manutention. Gestion de l'information pour assurer le continuité des soins.",
        ],
        [
            "title" => "Technico-commercial",
            "site" => "Affûtage Lyonnais",
            "location" => "Villeurbanne",
            "date" => "2005 - 2009",
            "description" => "Développement d'un portefeuille clients sur le secteur Savoie / Haute-Savoie. Livraison d'outils coupants. Elaboration de plans et devis à l'aide du service Qualité.",
        ],
        [
            "title" => "D.U.T. Organisation et Génie de la Production",
            "site" => "I.U.T Lumière Lyon 2",
            "location" => "Bron",
            "date" => "Sept 2002 - Juin 2004",
            "description" => "Apprentissage des techniques de gestion d'une entreprise de production, de la gestion des stocks de matières premières à la livraison des produits finis. Contrat d'apprentissage au sein de la société ABB Entrelec (Chassieu).",
        ],
        [
            "title" => "Bac Scientifique option Sciences de l'Ingénieur",
            "site" => "Lycée Jean-Paul Sarte",
            "location" => "Bron",
            "date" => "2002",
            "description" => "Spécialité Électronique et Mécanique.",
        ],
        [
            "title" => "Bachelor of Application Designer and Developer",
            "site" => "Wild Code School",
            "location" => "Lyon",
            "date" => "2022 Sept - 2023 Sept",
            "description" => "Development of UI skills using React, React Native, NodeJs and Typescript, and data persistence using MongoDB, MySQL and GraphQL. Professionalization contract within Ice Development (Lyon).",
        ],
        [
            "title" => "Web and Mobile Developer Training",
            "site" => "Wild Code School",
            "location" => "Lyon",
            "date" => "2022 Feb - 2022 Jun",
            "description" => "Learning through three projects of web application development using HTML, CSS/SASS and Javascript for the front-end part, PHP/Symfony and MySQL for the back-end part. Awareness of AGILE methods.",
        ],
        [
            "title" => "State Licensed Paramedic",
            "site" => "Ambulances Tassinoises / Oullinoises",
            "location" => "Lyon Metropolis Area",
            "date" => "2010 - 2022",
            "description" => "Care and transport of sick or injured people on medical prescription or in the event of a vital or relative emergency.",
        ],
        [
            "title" => "State Diploma of Ambulance",
            "site" => "I.F.A. Croix-Rouge Française",
            "location" => "Villeurbanne",
            "date" => "2010 Feb - 2010 Jul",
            "description" => "Learning gestures and emergency care adapted to the clinical condition of a patient. Hygiene and prevention of infection transmission. Preventive handling techniques. Information management to ensure continuity of care.",
        ],
        [
            "title" => "Commercial Technician",
            "site" => "Affûtage Lyonnais",
            "location" => "Villeurbanne",
            "date" => "2005 - 2009",
            "description" => "Development of a client portfolio in the Savoie / Haute-Savoie sector. Delivery of cutting tools. Development of plans and specifications with the help of the Quality department.",
        ],
        [
            "title" => "Technological University Diploma in Production Organization and Engineering",
            "site" => "I.U.T Lumière Lyon 2",
            "location" => "Bron",
            "date" => "2002 Sept - 2004 Jun",
            "description" => "Learning the management techniques of a production company, from the management of stocks of raw materials to the delivery of finished products. Apprenticeship contract within ABB Entrelec (Chassieu).",
        ],
        [
            "title" => "Scientific baccalaureate option Engineering Sciences",
            "site" => "Lycée Jean-Paul Sarte",
            "location" => "Bron",
            "date" => "2002",
            "description" => "Electronics and Mechanics specialty.",
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::CAREERS as $career) {
            $experience = new Career();
            $experience
                ->setTitle($career['title'])
                ->setSite($career['site'])
                ->setLocation($career['location'])
                ->setDate($career['date'])
                ->setDescription($career['description']);

            $manager->persist($experience);
        }

        $manager->flush();
    }
}
