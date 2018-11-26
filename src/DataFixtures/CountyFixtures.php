<?php


namespace App\DataFixtures;

use App\Entity\County;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CountyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $cotesarmor = new County();
        $cotesarmor->setLabel("Côtes-d'Armor");
        $cotesarmor->setZipcode("22000");
        $manager->persist($cotesarmor);
        $this->addReference("county-1", $cotesarmor);

        $finistere = new County();
        $finistere->setLabel("Finistère");
        $finistere->setZipcode("29000");
        $manager->persist($finistere);
        $this->addReference("county-2", $finistere);

        $illetvilaine = new County();
        $illetvilaine->setLabel("Ille-et-Vilaine");
        $illetvilaine->setZipcode("35000");
        $manager->persist($illetvilaine);
        $this->addReference("county-3", $illetvilaine);

        $morbihan = new County();
        $morbihan->setLabel("Morbihan");
        $morbihan->setZipcode("56000");
        $manager->persist($morbihan);
        $this->addReference("county-4", $morbihan);

        $manager->flush();
    }
}