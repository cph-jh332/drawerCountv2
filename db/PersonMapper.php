<?php
/**
 * Created by PhpStorm.
 * User: craci
 * Date: 13-04-2018
 * Time: 21:11
 */
require_once 'dbconnect.php';
require_once '../Interfaces/IPersonMapper.php';
require_once '../assets/Person.php';

class PersonMapper implements IPersonMapper
{
    private $conn = null;

    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->open_connection();
    }

    public function getPerson($name)
    {
        $stmt = $this->conn->prepare("SELECT * FROM persons where name = (?)");
        $stmt->bind_param('s',$name);
        $stmt->execute();
        $stmt->bind_result($id, $name, $store);
        $stmt->fetch();
        $person = new person($id, $name, $store);
        return $person;
    }

    public function addPerson(Person $person)
    {
        $stmt = $this->conn->prepare("INSERT INTO persons (name, store) VALUES (?, ?)");
        $stmt->bind_param("si",$person->getName(), $person->getStore());
        $stmt->execute();
    }
}