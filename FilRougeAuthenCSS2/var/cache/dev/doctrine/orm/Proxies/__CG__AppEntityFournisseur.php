<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Fournisseur extends \App\Entity\Fournisseur implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Fournisseur' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Fournisseur' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Fournisseur' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Fournisseur' . "\0" . 'cp', '' . "\0" . 'App\\Entity\\Fournisseur' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Fournisseur' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Fournisseur' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\Fournisseur' . "\0" . 'produits'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Fournisseur' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Fournisseur' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Fournisseur' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Fournisseur' . "\0" . 'cp', '' . "\0" . 'App\\Entity\\Fournisseur' . "\0" . 'ville', '' . "\0" . 'App\\Entity\\Fournisseur' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Fournisseur' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\Fournisseur' . "\0" . 'produits'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Fournisseur $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setId(int $id): \App\Entity\Fournisseur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
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
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nomFournisseur): \App\Entity\Fournisseur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nomFournisseur]);

        return parent::setNom($nomFournisseur);
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
    public function setAdresse(string $adresseFournisseur): \App\Entity\Fournisseur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresseFournisseur]);

        return parent::setAdresse($adresseFournisseur);
    }

    /**
     * {@inheritDoc}
     */
    public function getCp(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCp', []);

        return parent::getCp();
    }

    /**
     * {@inheritDoc}
     */
    public function setCp(string $cpFournisseur): \App\Entity\Fournisseur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCp', [$cpFournisseur]);

        return parent::setCp($cpFournisseur);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille(string $villeFournisseur): \App\Entity\Fournisseur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$villeFournisseur]);

        return parent::setVille($villeFournisseur);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $emailFournisseur): \App\Entity\Fournisseur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$emailFournisseur]);

        return parent::setEmail($emailFournisseur);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone(string $telephoneFournisseur): \App\Entity\Fournisseur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephoneFournisseur]);

        return parent::setTelephone($telephoneFournisseur);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduits(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduits', []);

        return parent::getProduits();
    }

    /**
     * {@inheritDoc}
     */
    public function addProduit(\App\Entity\Produit $produit): \App\Entity\Fournisseur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProduit', [$produit]);

        return parent::addProduit($produit);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProduit(\App\Entity\Produit $produit): \App\Entity\Fournisseur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProduit', [$produit]);

        return parent::removeProduit($produit);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
