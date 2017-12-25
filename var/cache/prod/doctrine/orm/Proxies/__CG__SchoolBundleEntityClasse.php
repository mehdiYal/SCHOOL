<?php

namespace Proxies\__CG__\SchoolBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Classe extends \SchoolBundle\Entity\Classe implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'eleves', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'evaluations', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'ensMat', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'responsable', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'annee', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'ecole', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'id', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'nom', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'description'];
        }

        return ['__isInitialized__', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'eleves', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'evaluations', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'ensMat', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'responsable', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'annee', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'ecole', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'id', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'nom', '' . "\0" . 'SchoolBundle\\Entity\\Classe' . "\0" . 'description'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Classe $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function addEnseignant(\UserBundle\Entity\Enseignant $enseignant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEnseignant', [$enseignant]);

        return parent::addEnseignant($enseignant);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEnseignant(\UserBundle\Entity\Enseignant $enseignant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEnseignant', [$enseignant]);

        return parent::removeEnseignant($enseignant);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnseignants()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnseignants', []);

        return parent::getEnseignants();
    }

    /**
     * {@inheritDoc}
     */
    public function setResponsable(\UserBundle\Entity\Enseignant $responsable = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResponsable', [$responsable]);

        return parent::setResponsable($responsable);
    }

    /**
     * {@inheritDoc}
     */
    public function getResponsable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResponsable', []);

        return parent::getResponsable();
    }

    /**
     * {@inheritDoc}
     */
    public function setEcole(\SchoolBundle\Entity\Ecole $ecole = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEcole', [$ecole]);

        return parent::setEcole($ecole);
    }

    /**
     * {@inheritDoc}
     */
    public function getEcole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEcole', []);

        return parent::getEcole();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnnee(\SchoolBundle\Entity\Annee $annee = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnnee', [$annee]);

        return parent::setAnnee($annee);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnnee()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnnee', []);

        return parent::getAnnee();
    }

    /**
     * {@inheritDoc}
     */
    public function addElefe(\UserBundle\Entity\Eleve $eleve)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addElefe', [$eleve]);

        return parent::addElefe($eleve);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEleve(\UserBundle\Entity\Eleve $eleve)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEleve', [$eleve]);

        return parent::removeEleve($eleve);
    }

    /**
     * {@inheritDoc}
     */
    public function getEleves()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEleves', []);

        return parent::getEleves();
    }

    /**
     * {@inheritDoc}
     */
    public function addMatiere(\SchoolBundle\Entity\Matiere $matiere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMatiere', [$matiere]);

        return parent::addMatiere($matiere);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMatiere(\SchoolBundle\Entity\Matiere $matiere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMatiere', [$matiere]);

        return parent::removeMatiere($matiere);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatieres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatieres', []);

        return parent::getMatieres();
    }

    /**
     * {@inheritDoc}
     */
    public function addEnsMat(\SchoolBundle\Entity\EnsMat $ensMat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEnsMat', [$ensMat]);

        return parent::addEnsMat($ensMat);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEnsMat(\SchoolBundle\Entity\EnsMat $ensMat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEnsMat', [$ensMat]);

        return parent::removeEnsMat($ensMat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnsMat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnsMat', []);

        return parent::getEnsMat();
    }

    /**
     * {@inheritDoc}
     */
    public function removeElefe(\UserBundle\Entity\Eleve $elefe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeElefe', [$elefe]);

        return parent::removeElefe($elefe);
    }

    /**
     * {@inheritDoc}
     */
    public function addEvaluation(\SchoolBundle\Entity\MatiereEvaluation $evaluation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEvaluation', [$evaluation]);

        return parent::addEvaluation($evaluation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEvaluation(\SchoolBundle\Entity\MatiereEvaluation $evaluation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEvaluation', [$evaluation]);

        return parent::removeEvaluation($evaluation);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvaluations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvaluations', []);

        return parent::getEvaluations();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
