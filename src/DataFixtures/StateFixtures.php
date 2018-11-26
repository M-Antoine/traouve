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
        $perdu->setColor("Red");
        $manager->persist($perdu);
        $this->addReference("states-1", $perdu);

        $trouvé = new State();
        $trouvé->setLabel("Trouvé");
        $trouvé->setColor("Green");
        $manager->persist($trouvé);
        $this->addReference("states-2", $trouvé);

        $manager->flush();
    }
}