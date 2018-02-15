<?php 

namespace UserBundle\DataFixtures\ORM;

use UserBundle\Entity\Admin;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AdminFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $super = new Admin();
	    $super->setUsername('super');
	    $super->setNom('super');
	    $super->setPrenom('super');
	    $super->setGenre('HOMME');
	    $super->setDateDeNaissance(new \DateTime());
	    $super->setLieuDeNaissance('Alger');
	    $super->setCin(1234);
	    $super->setAdresse('Alger');
	    $super->setCodePostal(16000);
	    $super->setTelephone(0215);
	    $super->setCommentaire("ADMIN");
	    $super->setEmail('super@super.com');
	    $super->addRole("ROLE_SUPER_ADMIN");
	    $super->setEnabled(1);
	    $encoder = $this->container->get('security.password_encoder');
	    $password = $encoder->encodePassword($super, 'super');
	    $super->setPassword($password);
	    $manager->persist($super);

	    $manager->flush();

    }




}



 ?>