<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $userFour = new User();
        $userFour->setFirstName("Nicolas");
        $userFour->setLastName("Rauflet");
        $userFour->setUsername('gartok');
        $userFour->setEmail('dssqd@dsdsqdqsd.fr');
        $userFour->setPlainPassword('gartok');
        $userFour->setEnabled(true);
        $userFour->setRoles(array('ROLE_ADMIN'));

        $userFive = new User();
        $userFive->setFirstName("Herbert");
        $userFive->setLastName("Jean");
        $userFive->setUsername('herbert.jean');
        $userFive->setEmail('dsqdqdqdqsr@hotmail.fr');
        $userFive->setPlainPassword('jean');
        $userFive->setEnabled(true);
        $userFive->setRoles(array('ROLE_ADMIN'));

        // Update the user
        $manager->persist($userFour);
        $manager->persist($userFive);
        $manager->flush();

        $this->setReference("user1",$userFour);
        $this->setReference("user2",$userFive);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 5;
    }

}
