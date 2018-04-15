<?php

class Person
{
    private $id, $name, $store;

    public function __construct($id, $name, $store)
    {
        $this->id = $id;
        $this->name = $name;
        $this->store = $store;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getStore(){
        return $this->store;
    }
}