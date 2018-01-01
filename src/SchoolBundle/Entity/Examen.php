<?php

namespace SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen
 *
 * @ORM\Table(name="examen")
 * @ORM\Entity(repositoryClass="SchoolBundle\Repository\ExamenRepository")
 */
class Examen
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
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
    * 
    * @ORM\Column(name="heureDeb", type="time")
    */
    private $heureDeb;

    /**
    * 
    * @ORM\Column(name="heureFin", type="time")
    */
    private $heureFin;

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
     * Set type
     *
     * @param string $type
     *
     * @return Examen
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

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Examen
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heureDeb
     *
     * @param \DateTime $heureDeb
     *
     * @return Examen
     */
    public function setHeureDeb($heureDeb)
    {
        $this->heureDeb = $heureDeb;

        return $this;
    }

    /**
     * Get heureDeb
     *
     * @return \DateTime
     */
    public function getHeureDeb()
    {
        return $this->heureDeb;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     *
     * @return Examen
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set annee
     *
     * @param \SchoolBundle\Entity\Annee $annee
     *
     * @return Examen
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
     * Set enseignant
     *
     * @param \UserBundle\Entity\Enseignant $enseignant
     *
     * @return Examen
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
     * @return Examen
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
     * @return Examen
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
}
