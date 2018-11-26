<?php


namespace App\DataFixtures;


use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $cles = new Category();
        $cles->setLabel("Clés");
        $cles->setColor("#1E90FF");
        $cles->setIcon("key");
        $manager->persist($cles);
        $this->addReference("cat-1", $cles);

        $portefeuille = new Category();
        $portefeuille->setLabel("Portefeuille");
        $portefeuille->setColor("#C71585");
        $portefeuille->setIcon("dollar-sign");
        $manager->persist($portefeuille);
        $this->addReference("cat-2", $portefeuille);

        $jouet = new Category();
        $jouet->setLabel("Jouet");
        $jouet->setColor("#FFD700");
        $jouet->setIcon("car-side");
        $manager->persist($jouet);
        $this->addReference("cat-3", $jouet);

        $manager->flush();
    }


}
