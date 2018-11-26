<?php


namespace App\DataFixtures;

use App\Entity\Traobject;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class TraobjectFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $objnounours = new Traobject();
        $objnounours->setTitle("Nounours");
        $objnounours->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris fermentum finibus efficitur.");
        $objnounours->setEventAt(new \DateTime('2018-12-11'));
        $objnounours->setCity("Rennes");
        $objnounours->setCategory($this->getReference("cat-3"));
        $objnounours->setState($this->getReference("states-1"));
        $objnounours->setUser($this->getReference("user-2"));
        $objnounours->setCounty($this->getReference("county-1"));
        $manager->persist($objnounours);
        $this->addReference("object-1", $objnounours);

        $objectcle = new Traobject();
        $objectcle->setTitle("Clés");
        $objectcle->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit..");
        $objectcle->setEventAt(new \DateTime('2018-04-23'));
        $objectcle->setCity("Saint-Malo");
        $objectcle->setCategory($this->getReference("cat-1"));
        $objectcle->setState($this->getReference("states-2"));
        $objectcle->setUser($this->getReference("user-4"));
        $objectcle->setCounty($this->getReference("county-3"));
        $manager->persist($objectcle);
        $this->addReference("object-2", $objectcle);

        $objectportef = new Traobject();
        $objectportef->setTitle("Porte-Feuille");
        $objectportef->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit..");
        $objectportef->setEventAt(new \DateTime('2018-03-05'));
        $objectportef->setCity("Rennes");
        $objectportef->setCategory($this->getReference("cat-2"));
        $objectportef->setState($this->getReference("states-1"));
        $objectportef->setUser($this->getReference("user-1"));
        $objectportef->setCounty($this->getReference("county-2"));
        $manager->persist($objectportef);
        $this->addReference("object-3", $objectportef);

        $objectlivre = new Traobject();
        $objectlivre->setTitle("Livre");
        $objectlivre->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit..");
        $objectlivre->setEventAt(new \DateTime('2018-03-05'));
        $objectlivre->setCity("Rennes");
        $objectlivre->setCategory($this->getReference("cat-1"));
        $objectlivre->setState($this->getReference("states-1"));
        $objectlivre->setUser($this->getReference("user-2"));
        $objectlivre->setCounty($this->getReference("county-4"));
        $manager->persist($objectlivre);
        $this->addReference("object-4", $objectlivre);

        $manager->flush();


    }


    /**
     * @return array
     */
    public function getDependencies()
    {
        return [CategoryFixtures::class, StateFixtures::class, UserFixtures::class, CountyFixtures::class];
    }
}