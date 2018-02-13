<?php

namespace SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ressource
 *
 * @ORM\Table(name="ressource")
 * @ORM\Entity(repositoryClass="SchoolBundle\Repository\RessourceRepository")
 */
class Ressource
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
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\EnsMat", inversedBy="ensMat")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $ensMat;


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
     * @ORM\Column(name="titre", type="string", length=255,  options={"default"=""})
     */
    private $titre;

     /**
     * @var string
     *
     * @ORM\Column(name="cours", type="string", length=255,  options={"default"=""})
     */
    private $cours;

     /**
     * @var string
     *
     * @ORM\Column(name="ressource", type="string", length=255,  options={"default"=""})
     */
    private $ressource;

    /**
     * @var text $commentaire
     *
     * @ORM\Column(name="commentaire", type="text",nullable=true)
     */
    private $commentaire;

    public function __construct()
    {
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Ressource
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set cours
     *
     * @param string $cours
     *
     * @return Ressource
     */
    public function setCours($cours)
    {
        $this->cours = $cours;

        return $this;
    }

    /**
     * Get cours
     *
     * @return string
     */
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * Set ressource
     *
     * @param string $ressource
     *
     * @return Ressource
     */
    public function setRessource($ressource)
    {
        $this->ressource = $ressource;

        return $this;
    }

    /**
     * Get ressource
     *
     * @return string
     */
    public function getRessource()
    {
        return $this->ressource;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Ressource
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
     * Set annee
     *
     * @param \SchoolBundle\Entity\Annee $annee
     *
     * @return Ressource
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
     * Set classe
     *
     * @param \SchoolBundle\Entity\Classe $classe
     *
     * @return Ressource
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
     * Set enseignant
     *
     * @param \UserBundle\Entity\Enseignant $enseignant
     *
     * @return Ressource
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
     * Set ensMat
     *
     * @param \SchoolBundle\Entity\EnsMat $ensMat
     *
     * @return Ressource
     */
    public function setEnsMat(\SchoolBundle\Entity\EnsMat $ensMat = null)
    {
        $this->ensMat = $ensMat;

        return $this;
    }

    /**
     * Get ensMat
     *
     * @return \SchoolBundle\Entity\EnsMat
     */
    public function getEnsMat()
    {
        return $this->ensMat;
    }
}
