<?php
// src/UserBundle/Entity/User.php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use FOS\MessageBundle\Model\ParticipantInterface;
use Doctrine\ORM\Mapping\AttributeOverrides;
use Doctrine\ORM\Mapping\AttributeOverride;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string", length=255)
 * @ORM\DiscriminatorMap({"admin" = "Admin","enseignant"="Enseignant","parental"="Parental","eleve"="Eleve","user"="User"})
 *
 * @AttributeOverrides({
 *     @AttributeOverride(name="email",
 *         column=@ORM\Column(
 *             name="email",
 *             type="string",
 *             length=255,
 *             unique=false,
 *             nullable=true
 *         )
 *     ),
 *      @AttributeOverride(name="emailCanonical",
 *         column=@ORM\Column(
 *             name="email_canonical",
 *             type="string",
 *             length=255,
 *             unique=false,
 *             nullable=true
 *         )
 *     )
 * })
 */
class User extends BaseUser implements ParticipantInterface
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $type
     */
    private $type;

    public function __construct()
    {
        parent::__construct();
        $this->setEnabled(1);
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return user
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

}

