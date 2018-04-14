<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
/**
 * Created by PhpStorm.
 * User: craci
 * Date: 13-04-2018
 * Time: 21:23
 */
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

    public function addPerson(Person $person){
        $this->personMapper->addPerson($person);
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