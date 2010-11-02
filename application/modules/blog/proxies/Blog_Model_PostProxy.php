<?php

namespace Blog_Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Blog_Model_PostProxy extends \Blog_Model_Post implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    private function _load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    
    public function updated()
    {
        $this->_load();
        return parent::updated();
    }

    public function getId()
    {
        $this->_load();
        return parent::getId();
    }

    public function setTitle($title)
    {
        $this->_load();
        return parent::setTitle($title);
    }

    public function getTitle()
    {
        $this->_load();
        return parent::getTitle();
    }

    public function getSlug()
    {
        $this->_load();
        return parent::getSlug();
    }

    public function setSlug($slug)
    {
        $this->_load();
        return parent::setSlug($slug);
    }

    public function setContent($content)
    {
        $this->_load();
        return parent::setContent($content);
    }

    public function getContent()
    {
        $this->_load();
        return parent::getContent();
    }

    public function setCreated($created)
    {
        $this->_load();
        return parent::setCreated($created);
    }

    public function getCreated()
    {
        $this->_load();
        return parent::getCreated();
    }

    public function setUpdated($updated)
    {
        $this->_load();
        return parent::setUpdated($updated);
    }

    public function getUpdated()
    {
        $this->_load();
        return parent::getUpdated();
    }

    public function addComments(\Blog_Model_Comment $comments)
    {
        $this->_load();
        return parent::addComments($comments);
    }

    public function getComments()
    {
        $this->_load();
        return parent::getComments();
    }

    public function toString()
    {
        $this->_load();
        return parent::toString();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'comments', 'title', 'slug', 'content', 'created', 'updated');
    }
}