<?php

namespace App\DataFixtures;

use App\Entity\Door;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DoorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        define('A', 'ARROW');
        define('J', 'JUMP');
        define('S', 'SCROLL');
        define('H', 'SHIELD');
        define('W', 'SWORD');

        $door_101953624 = new Door();
        $door_101953624->name = 'Une princesse guerrière';
        $door_101953624->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_101953624.jpg';
        $door_101953624->symbols = [H, A];
        $manager->persist($door_101953624);
        $door_102011882 = new Door();
        $door_102011882->name = 'Un requin avec des jambes';
        $door_102011882->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_102011882.jpg';
        $door_102011882->symbols = [W, A, A];
        $manager->persist($door_102011882);
        $door_102025427 = new Door();
        $door_102025427->name = 'Une slime trop mignon';
        $door_102025427->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_102025427.jpg';
        $door_102025427->symbols = [J, A];
        $manager->persist($door_102025427);
        $door_103256534 = new Door();
        $door_103256534->name = 'Un cactus qui vuet un câlin';
        $door_103256534->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103256534.jpg';
        $door_103256534->symbols = [H, H, H];
        $manager->persist($door_103256534);
        $door_103307756 = new Door();
        $door_103307756->name = 'Un fantôme';
        $door_103307756->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103307756.jpg';
        $door_103307756->symbols = [W, W, A];
        $manager->persist($door_103307756);
        $door_103316927 = new Door();
        $door_103316927->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103316927->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103316927.jpg';
        $door_103316927->symbols = [J, A, A];
        $manager->persist($door_103316927);
        $door_103324872 = new Door();
        $door_103324872->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103324872->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103324872.jpg';
        $door_103324872->symbols = [J, J, A];
        $manager->persist($door_103324872);
        $door_103330915 = new Door();
        $door_103330915->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103330915->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103330915.jpg';
        $door_103330915->symbols = [J, H, H];
        $manager->persist($door_103330915);
        $door_103336153 = new Door();
        $door_103336153->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103336153->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103336153.jpg';
        $door_103336153->symbols = [W, J, H];
        $manager->persist($door_103336153);
        $door_103341414 = new Door();
        $door_103341414->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103341414->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103341414.jpg';
        $door_103341414->symbols = [J, H];
        $manager->persist($door_103341414);
        $door_103346869 = new Door();
        $door_103346869->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103346869->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103346869.jpg';
        $door_103346869->symbols = [W, H, H];
        $manager->persist($door_103346869);
        $door_103352622 = new Door();
        $door_103352622->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103352622->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103352622.jpg';
        $door_103352622->symbols = [S, J, A];
        $manager->persist($door_103352622);
        $door_103358615 = new Door();
        $door_103358615->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103358615->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103358615.jpg';
        $door_103358615->symbols = [A, H, A];
        $manager->persist($door_103358615);
        $door_103407877 = new Door();
        $door_103407877->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103407877->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103407877.jpg';
        $door_103407877->symbols = [W, W, W];
        $manager->persist($door_103407877);
        $door_103415196 = new Door();
        $door_103415196->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103415196->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103415196.jpg';
        $door_103415196->symbols = [S, J, H];
        $manager->persist($door_103415196);
        $door_103422022 = new Door();
        $door_103422022->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103422022->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103422022.jpg';
        $door_103422022->symbols = [A, A, A];
        $manager->persist($door_103422022);
        $door_103432742 = new Door();
        $door_103432742->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103432742->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103432742.jpg';
        $door_103432742->symbols = [J, H, A];
        $manager->persist($door_103432742);
        $door_103438635 = new Door();
        $door_103438635->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103438635->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103438635.jpg';
        $door_103438635->symbols = [W, J, A];
        $manager->persist($door_103438635);
        $door_103447251 = new Door();
        $door_103447251->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103447251->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103447251.jpg';
        $door_103447251->symbols = [W, S, W];
        $manager->persist($door_103447251);
        $door_103453408 = new Door();
        $door_103453408->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103453408->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103453408.jpg';
        $door_103453408->symbols = [W, H, A];
        $manager->persist($door_103453408);
        $door_103502234 = new Door();
        $door_103502234->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103502234->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103502234.jpg';
        $door_103502234->symbols = [H, S, H];
        $manager->persist($door_103502234);
        $door_103510501 = new Door();
        $door_103510501->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103510501->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103510501.jpg';
        $door_103510501->symbols = [W, W];
        $manager->persist($door_103510501);
        $door_103517407 = new Door();
        $door_103517407->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103517407->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103517407.jpg';
        $door_103517407->symbols = [S, A];
        $manager->persist($door_103517407);
        $door_103539058 = new Door();
        $door_103539058->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103539058->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103539058.jpg';
        $door_103539058->symbols = [J, J, J];
        $manager->persist($door_103539058);
        $door_103546417 = new Door();
        $door_103546417->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103546417->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103546417.jpg';
        $door_103546417->symbols = [S, S];
        $manager->persist($door_103546417);
        $door_103558096 = new Door();
        $door_103558096->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103558096->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103558096.jpg';
        $door_103558096->symbols = [S, J, J];
        $manager->persist($door_103558096);
        $door_103603806 = new Door();
        $door_103603806->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103603806->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103603806.jpg';
        $door_103603806->symbols = [J, J];
        $manager->persist($door_103603806);
        $door_103611640 = new Door();
        $door_103611640->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103611640->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103611640.jpg';
        $door_103611640->symbols = [S, H];
        $manager->persist($door_103611640);
        $door_103620629 = new Door();
        $door_103620629->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103620629->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103620629.jpg';
        $door_103620629->symbols = [S, S, J];
        $manager->persist($door_103620629);
        $door_103627661 = new Door();
        $door_103627661->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103627661->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103627661.jpg';
        $door_103627661->symbols = [A, S, J];
        $manager->persist($door_103627661);
        $door_103635646 = new Door();
        $door_103635646->name = 'Carte sans  nom numero '.bin2hex(random_bytes(5));
        $door_103635646->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103635646.jpg';
        $door_103635646->symbols = [W, S, H];
        $manager->persist($door_103635646);

        //BOSS
        //$door_102349989 = new Door();
        //$door_102349989->name = "Carte sans  nom numero ".bin2hex(random_bytes(5));
        //$door_102349989->imageUrl = "https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_102349989.jpg";
        //$door_102349989->symbols = [];
        //$manager->persist($door_102349989);

        //$door_102438186 = new Door();
        //$door_102438186->name = "Carte sans  nom numero ".bin2hex(random_bytes(5));
        //$door_102438186->imageUrl = "https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_102438186.jpg";
        //$door_102438186->symbols = [];
        //$manager->persist($door_102438186);

        for ($i = 0; $i < 100; ++$i) {
            $door = new Door();
            $door->name = 'Steve numero '.bin2hex(random_bytes(5));
            $door->imageUrl = 'https://five-minutes-dongeon-api.herokuapp.com/images/doors/PXL_20201121_103352622.jpg';
            $door->symbols = ['SCROLL', J, A]; //🗡️
            $manager->persist($door);
        }

        $manager->flush();
    }
}
