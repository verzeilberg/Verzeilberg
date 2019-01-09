<?php

namespace DoctrineORMModule\Proxy\__CG__\CheckList\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CheckListFieldType extends \CheckList\Entity\CheckListFieldType implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'name', 'formType', '' . "\0" . 'CheckList\\Entity\\CheckListFieldType' . "\0" . 'checkListFields', 'dateCreated', 'createdBy', 'dateChanged', 'changedBy', 'dateDeleted', 'deletedBy', 'deleted'];
        }

        return ['__isInitialized__', 'id', 'name', 'formType', '' . "\0" . 'CheckList\\Entity\\CheckListFieldType' . "\0" . 'checkListFields', 'dateCreated', 'createdBy', 'dateChanged', 'changedBy', 'dateDeleted', 'deletedBy', 'deleted'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CheckListFieldType $proxy) {
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
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getFormType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormType', []);

        return parent::getFormType();
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckListFields()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckListFields', []);

        return parent::getCheckListFields();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setFormType($formType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFormType', [$formType]);

        return parent::setFormType($formType);
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckListFields($checkListFields)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckListFields', [$checkListFields]);

        return parent::setCheckListFields($checkListFields);
    }

    /**
     * {@inheritDoc}
     */
    public function addCheckListFields($checklistsFields)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCheckListFields', [$checklistsFields]);

        return parent::addCheckListFields($checklistsFields);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCheckListFields($checklists)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCheckListFields', [$checklists]);

        return parent::removeCheckListFields($checklists);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreated', []);

        return parent::getDateCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateChanged()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateChanged', []);

        return parent::getDateChanged();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDeleted', []);

        return parent::getDateDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', []);

        return parent::getDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreated($dateCreated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreated', [$dateCreated]);

        return parent::setDateCreated($dateCreated);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateChanged($dateChanged)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateChanged', [$dateChanged]);

        return parent::setDateChanged($dateChanged);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDeleted($dateDeleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDeleted', [$dateDeleted]);

        return parent::setDateDeleted($dateDeleted);
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        return parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function getChangedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChangedBy', []);

        return parent::getChangedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($createdBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function setChangedBy($changedBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChangedBy', [$changedBy]);

        return parent::setChangedBy($changedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedBy', []);

        return parent::getDeletedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedBy($deletedBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedBy', [$deletedBy]);

        return parent::setDeletedBy($deletedBy);
    }

}
