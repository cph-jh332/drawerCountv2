<?php
require_once 'PersonMapper.php';
require_once 'CountMappper.php';
require_once '../Interfaces/ICountMapper.php';
require_once '../Interfaces/IPersonMapper.php';
require_once '../assets/Count.php';
require_once '../assets/Person.php';

class dbcontroller implements ICountMapper, IPersonMapper
{
    private $personMapper, $countMapper;

    public function __construct()
    {
        $this->personMapper = new PersonMapper();
        $this->countMapper = new CountMappper();
    }

    public function getPerson($name){
        return $this->personMapper->getPerson($name);
    }

    public function addPerson(Person $person, $password){
        return $this->personMapper->addPerson($person, $password);
    }


    public function getCounts()
    {
        return $this->countMapper->getCounts();
    }

    public function getCount()
    {
        // TODO: Implement getCount() method.
    }

    public function addCount(Count $count)
    {
        $this->countMapper->addCount($count);
    }
}