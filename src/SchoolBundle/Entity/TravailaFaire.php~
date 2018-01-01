<?php

namespace SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TravailaFaire
 *
 * @ORM\Table(name="travail_a_faire")
 * @ORM\Entity(repositoryClass="SchoolBundle\Repository\TravailaFaireRepository")
 */
class TravailaFaire
{

    /**
     * @var Annee
     *
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Annee", inversedBy="classes")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $annee;

    /**
     * @var Enseignant
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Enseignant", inversedBy="matEns")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $enseignant;

    /**
     * @var Matiere
     *
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Matiere", inversedBy="ensMat")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $matiere;

    /**
     * @var Classe
     *
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Classe", inversedBy="ensMat")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $classe;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @var string
     *
     * @ORM\Column(name="travail", type="string", length=255,  options={"default"=""})
     */
    private $travail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datelimite", type="date")
     */
    private $datelimite;

    /**
    * 
    * @ORM\Column(name="timelimite", type="time")
    */
    private $timelimite;

    /**
     * @var text $commentaire
     *
     * @ORM\Column(name="commentaire", type="text",nullable=true)
     */
    private $commentaire;

    public function __construct()
    {
        $this->date = new \DateTime();
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
     * Set enseignant
     *
     * @param \UserBundle\Entity\Enseignant $enseignant
     *
     * @return EnsMat
     */
    public function setEnseignant(\UserBundle\Entity\Enseignant $enseignant = null)
    {
        $this->enseignant = $enseignant;

        return $this;
    }

    /**
     * Get enseignant
     *
     * @return \UserBundle\Entity\Enseignant
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }

    /**
     * Set matiere
     *
     * @param \SchoolBundle\Entity\Matiere $matiere
     *
     * @return EnsMat
     */
    public function setMatiere(\SchoolBundle\Entity\Matiere $matiere = null)
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Get matiere
     *
     * @return \SchoolBundle\Entity\Matiere
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set classe
     *
     * @param \SchoolBundle\Entity\Classe $classe
     *
     * @return EnsMat
     */
    public function setClasse(\SchoolBundle\Entity\Classe $classe = null)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return \SchoolBundle\Entity\Classe
     */
    public function getClasse()
    {
        return $this->classe;
    }

    

    /**
     * Set travail
     *
     * @param string $travail
     *
     * @return TravailaFaire
     */
    public function setTravail($travail)
    {
        $this->travail = $travail;
    
        return $this;
    }

    /**
     * Get travail
     *
     * @return string
     */
    public function getTravail()
    {
        return $this->travail;
    }


    /**
     * Set annee
     *
     * @param \SchoolBundle\Entity\Annee $annee
     *
     * @return TravailaFaire
     */
    public function setAnnee(\SchoolBundle\Entity\Annee $annee = null)
    {
        $this->annee = $annee;
    
        return $this;
    }

    /**
     * Get annee
     *
     * @return \SchoolBundle\Entity\Annee
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return TravailaFaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set datelimite
     *
     * @param \DateTime $datelimite
     *
     * @return TravailaFaire
     */
    public function setDatelimite($datelimite)
    {
        $this->datelimite = $datelimite;

        return $this;
    }

    /**
     * Get datelimite
     *
     * @return \DateTime
     */
    public function getDatelimite()
    {
        return $this->datelimite;
    }

    /**
     * Set timelimite
     *
     * @param \DateTime $timelimite
     *
     * @return TravailaFaire
     */
    public function setTimelimite($timelimite)
    {
        $this->timelimite = $timelimite;

        return $this;
    }

    /**
     * Get timelimite
     *
     * @return \DateTime
     */
    public function getTimelimite()
    {
        return $this->timelimite;
    }
}
