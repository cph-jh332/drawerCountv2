<?php
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

    public function addPerson($name, $storeNumber){
        $this->personMapper->addPerson($name, $storeNumber);
    }


    public function getCounts()
    {
        return $this->countMapper->getCounts();
    }

    public function getCount()
    {
        // TODO: Implement getCount() method.
    }

    public function addCount($drawer1, $drawer2, $total, $diff)
    {
        // TODO: Implement addCount() method.
    }
}

$dbcontroller = new dbcontroller();
//$dbcontroller->addPerson("test", 428);
//echo $dbcontroller->getPerson("test")->getName();
echo $dbcontroller->getCounts()[1]->getDrawer1();