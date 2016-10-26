<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Sensor;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadActionData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $sensor = new Sensor();
        $sensor->setProduct(1);
        $sensor->setEnable(true);
        $sensor->setVendor(1);
        $sensor->setDisplayName("Super truc");
        $sensor->setVersion(2);
        $sensor->setUser($this->getReference("user1"));
        $manager->persist($sensor);

        $sensor1 = new Sensor();
        $sensor1->setProduct(5);
        $sensor1->setEnable(false);
        $sensor1->setVendor(4);
        $sensor1->setDisplayName("Yoloo truc");
        $sensor1->setVersion(4);
        $sensor1->setUser($this->getReference("user2"));


        $manager->persist($sensor1);

        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 18;
    }

}
