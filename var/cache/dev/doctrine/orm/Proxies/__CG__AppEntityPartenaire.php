<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Partenaire extends \App\Entity\Partenaire implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Identifiant', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Nom', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Prenom', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Adresse', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Numeroidentite', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Contact', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Login', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Motdepasse', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Datecreation', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'adminSysteme', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'CreerSousPartenaire', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'MontantVerse'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Identifiant', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Nom', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Prenom', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Adresse', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Numeroidentite', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Contact', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Login', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Motdepasse', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'Datecreation', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'adminSysteme', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'CreerSousPartenaire', '' . "\0" . 'App\\Entity\\Partenaire' . "\0" . 'MontantVerse'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Partenaire $proxy) {
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
    public function getId(): ?int
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
    public function getIdentifiant(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdentifiant', []);

        return parent::getIdentifiant();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdentifiant(string $Identifiant): \App\Entity\Partenaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdentifiant', [$Identifiant]);

        return parent::setIdentifiant($Identifiant);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $Nom): \App\Entity\Partenaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$Nom]);

        return parent::setNom($Nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(string $Prenom): \App\Entity\Partenaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$Prenom]);

        return parent::setPrenom($Prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(string $Adresse): \App\Entity\Partenaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$Adresse]);

        return parent::setAdresse($Adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroidentite(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroidentite', []);

        return parent::getNumeroidentite();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroidentite(int $Numeroidentite): \App\Entity\Partenaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroidentite', [$Numeroidentite]);

        return parent::setNumeroidentite($Numeroidentite);
    }

    /**
     * {@inheritDoc}
     */
    public function getContact(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContact', []);

        return parent::getContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setContact(int $Contact): \App\Entity\Partenaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContact', [$Contact]);

        return parent::setContact($Contact);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogin(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogin', []);

        return parent::getLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogin(string $Login): \App\Entity\Partenaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogin', [$Login]);

        return parent::setLogin($Login);
    }

    /**
     * {@inheritDoc}
     */
    public function getMotdepasse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotdepasse', []);

        return parent::getMotdepasse();
    }

    /**
     * {@inheritDoc}
     */
    public function setMotdepasse(string $Motdepasse): \App\Entity\Partenaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMotdepasse', [$Motdepasse]);

        return parent::setMotdepasse($Motdepasse);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatecreation(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatecreation', []);

        return parent::getDatecreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatecreation(string $Datecreation): \App\Entity\Partenaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatecreation', [$Datecreation]);

        return parent::setDatecreation($Datecreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminSysteme(): ?\App\Entity\AdminSysteme
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminSysteme', []);

        return parent::getAdminSysteme();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdminSysteme(?\App\Entity\AdminSysteme $adminSysteme): \App\Entity\Partenaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdminSysteme', [$adminSysteme]);

        return parent::setAdminSysteme($adminSysteme);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreerSousPartenaire(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreerSousPartenaire', []);

        return parent::getCreerSousPartenaire();
    }

    /**
     * {@inheritDoc}
     */
    public function addCreerSousPartenaire(\App\Entity\SousPartenaire $creerSousPartenaire): \App\Entity\Partenaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCreerSousPartenaire', [$creerSousPartenaire]);

        return parent::addCreerSousPartenaire($creerSousPartenaire);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCreerSousPartenaire(\App\Entity\SousPartenaire $creerSousPartenaire): \App\Entity\Partenaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCreerSousPartenaire', [$creerSousPartenaire]);

        return parent::removeCreerSousPartenaire($creerSousPartenaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontantVerse(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontantVerse', []);

        return parent::getMontantVerse();
    }

    /**
     * {@inheritDoc}
     */
    public function addMontantVerse(\App\Entity\Versement $montantVerse): \App\Entity\Partenaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMontantVerse', [$montantVerse]);

        return parent::addMontantVerse($montantVerse);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMontantVerse(\App\Entity\Versement $montantVerse): \App\Entity\Partenaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMontantVerse', [$montantVerse]);

        return parent::removeMontantVerse($montantVerse);
    }

}
