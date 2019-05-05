<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'question'=>'Qui a créé cette application ?',
            'reponse'=>'La norme ISO 54637-ABGCHC-57564847567 de la campagne',
            'type'=>1,
            'date_creation'=>'2019-04-02',
            'user_id'=>1
        ]);

        DB::table('questions')->insert([
            'question'=>'What is the best pizza in the world ?',
            'reponse'=>'Ask to Mrs.Prensier !',
            'type'=>2,
            'date_creation'=>'2019-04-02',
            'user_id'=>1
        ]);

        DB::table('questions')->insert([
            'question'=>'Pain au chocolat ou chocolatine ?',
            'reponse'=>'"Celui-la à côté du croissant svp"',
            'type'=>3,
            'date_creation'=>'2019-04-02',
            'user_id'=>1
        ]);

        DB::table('questions')->insert([
            'question' => 'Qu\'est-ce que le DUT (Diplôme Universitaire de Technologie) Informatique ?',
            'reponse' => 'Le DUT Informatique forme des étudiants capables de participer à la conception, la réalisation et la mise en oeuvre de systèmes informatiques correspondant aux besoins des utilisateurs et des entreprises.
            Pour assumer ces responsabilités, les informaticiens doivent : être compétents sur le plan technique, 
            connaître l’environnement socio-économique dans lequel ils auront à exercer leur profession, 
            posséder une bonne culture générale et se montrer aptes à la communication',
            'type'=>1,
            'date_creation'=>'2019-04-02',
            'user_id'=>1
        ]);

        DB::table('questions')->insert([
            'question' => 'Qu\'est-ce qu\'un semstre / stage à l\'étranger ?',
            'reponse' => 'Lors d\'un DUT informatique, les étudiants ont la possibilité d\'accomplir le semestre 4 ou leur stage en entreprise obligatoire dans un autre pays afin de s\'enrichir du point de vue lingustique et culturel',
            'type' => 1,
            'date_creation'=>'2019-04-02',
            'user_id'=>1
        ]);

        DB::table('questions')->insert([
            'question' => 'Quels sont les pays possibles pour un semestre / stage à l\'étranger ?',
            'reponse' => 'Pour le semestre à l\'étranger, le Canada est le seul pays partenaire.
            Pour le stage, le Canada, le Japon, la Grèce, la Roumanie, la Pologne et bien d\'autre sont possibles.',
            'type' => 1,
            'date_creation'=>'2019-04-02',
            'user_id'=>1
        ]);

        DB::table('questions')->insert([
            'question' => 'Comment financer son stage à l\'étranger ?',
            'reponse' => 'De nombreuses aides sont disponibles pour des étudiants français et européen afin d\'étudier à l\'étranger.
            La plus connues reste le programme Erasmus+ pour partir dans les pays appartenant à l\'Union européenne.',
            'type' => 1,
            'date_creation'=>'2019-04-02',
            'user_id'=>1
        ]);

        DB::table('questions')->insert([
            'question' => 'Quels sont les débouchés possibles après le DUT ?',
            'reponse' => 'Le DUT Informatique donne accès à des métiers et domaines très variés : 
            Analyse, conception et développement informatique, 
            Conception et administration de sites web, 
            Assistance et formation des utilisateurs, 
            Commercialisation de solutions informatiques.
            Une poursuite d’études est possible : 
            Bac+3 : licence professionnelle. L’IUT de Lens dispense plusieurs licences professionnelles en informatique et Métiers du Multimédia et de l’Internet. 
            Bac+5 : écoles d’ingénieur en informatique ou licence et master d’informatique 
            Bac+8 : Doctorat en informatique 
            Possibilité de passer de nombreux concours.
            ',
            'type' => 1,
            'date_creation'=>'2019-04-02',
            'user_id'=>1
        ]);

        DB::table('questions')->insert([
            'question' => 'Qu\'est-ce que le projet Voltaire ?',
            'reponse' => '

Le Projet Voltaire travaille avec les plus grands experts pour proposer des services en ligne de remise à niveau personnalisée en orthographe, pour une bonne expression écrite en milieu professionnel. Ces services sont utilisés par des particuliers, des écoles et des entreprises. Le Projet Voltaire a aussi lancé le Certificat Voltaire, examen en salle qui délivre un certificat de niveau en orthographe accompagné d’un score qui peut être affiché sur un CV.

82 % des recruteurs sont sensibles à l’orthographe des candidats.
Depuis plusieurs années, comme un certain nombre d’universités, l’IUT de Lens a mis en place un partenariat avec la société Woonoz afin que chaque étudiant ait les compétences écrites plus que jamais nécessaires avec le développement massif des écrits numériques.

L’apprentissage se fait par le biais d’une plateforme de formation sécurisée qui permet un positionnement  initial et un apprentissage individualisé, soit en cours, soit de manière autonome. L’étudiant bénéficie constamment d’aides en cours de parcours et ses résultats sont mémorisés sur la plateforme, ce qui permet le guidage par les enseignants.

Les étudiants de l’IUT ont ainsi accès à la totalité des modules SUPÉRIEUR et EXCELLENCE. L’accès se fait sous la responsabilité des enseignants responsables.

En fin de parcours, les étudiants qui le souhaitent peuvent passer une certification qu’ils peuvent ensuite valoriser sur leur CV. La participation demandée est de cinq euros dans le cadre du partenariat (contre 59,90 euros prix public). Quatre sessions sont organisées dans l’année.
',
            'type' => 1,
            'date_creation'=>'2019-04-02',
            'user_id'=>1
        ]);

        DB::table('questions')->insert([
            'question'=> 'Qu\'est-ce que le C2i ?',
            'reponse' => 'Le Certificat Informatique et Internet est proposé tout au long de la vie avec le niveau 1 généraliste, et le niveau 2 spécifique à certaines filières proposées à l’Université d’Artois : enseignant, droit, ingénierie,environnement et aménagement,organisation et communication.

La certification C2i niveau 1 nécessite une inscription administrative de la part des étudiants.',
            'type' => 1,
            'date_creation'=>'2019-04-02',
            'user_id'=>1
        ]);

        DB::table('questions')->insert([
            'question'=> 'Qu\'est-ce que le CLES ?',
            'reponse' => 'Le CLES permet aux étudiants d’attester de leur niveau de compétence en langues, notamment à l’occasion d’une mobilité, auprès d’un employeur ou lors de l’inscription à un concours de recrutement.

C’est une certification nationale, proposée aux étudiants spécialistes d’autres disciplines que les langues.

Le CLES est un certificat gratuit et échelonné selon trois niveaux correspondant au Cadre Européen Commun de Référence pour les Langues (CECRL).

À l’Université d’Artois, quatre langues sont proposées à la certification :

    CLES 1 : correspond au niveau B1 Allemand, Anglais, Espagnol, Italien
    CLES 2 : correspond au niveau B2 Allemand, Anglais, Espagnol, Italien

Le CLES certifie :

    la compréhension écrite, la compréhension orale, la production écrite et la production orale (CLES 1)
    la compréhension écrite, la compréhension orale, la production écrite et l’interaction orale (CLES 2)
    la compréhension écrite, la compréhension orale, la production écrite, la production orale et l’interaction orale (CLES 3)
',
            'type' => 1,
            'date_creation'=>'2019-04-02',
            'user_id'=>1
        ]);

        DB::table('questions')->insert([
            'question'=> 'Qu\'est-ce que le TOEIC ?',
            'reponse' => 'Le Nouveau TOEIC (Test of English for International Communication) est une certification qui permet de mesurer votre niveau d’anglais professionnel.
             Ce test est édité par la société ETS global et existe depuis 1979 et connaît un succès croissant car plus de 7 millions de personnes le passent chaque année. 
             Il a été mis à jour en Juin 2018 afin d’être plus en phase avec notre époque.',
            'type' => 1,
            'date_creation'=>'2019-04-02',
            'user_id'=>1
        ]);

        DB::table('questions')->insert([
            'question' => 'Peut on réaliser notre DUT en alternance ?',
            'reponse' => 'Généralement un DUT informatique n\'est pas proposé en alternance. En France, quelques villes le propose.
            D\'après le site Diplomeo, les villes suivantes propose le DUT en alternance : 
             - Lille (Arras, Roubaix)
             - Metz (Bar-le-Duc)
             - Paris
             - Tours (Bourges, Châteauroux)
             - Versailles (Nanterre, Saint-Germain)',
            'type' => 1,
            'date_creation'=>'2019-04-02',
            'user_id'=>1
        ]);

    }
}
