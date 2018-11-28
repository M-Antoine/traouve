<?php


namespace App\DataFixtures;



use App\Entity\State;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class StateFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $perdu = new State();
        $perdu->setLabel("Perdu");
        $perdu->setColor("#ff0000");
        $manager->persist($perdu);
        $this->addReference("states-1", $perdu);

        $trouve = new State();
        $trouve->setLabel("Trouvé");
        $trouve->setColor("#33cc33");
        $manager->persist($trouve);
        $this->addReference("states-2", $trouve);

        $manager->flush();
    }
}