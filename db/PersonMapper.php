<?php
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
        $stmt->bind_result($id, $name, $store, $password);
        $stmt->fetch();
        $person = new person($id, $name, $store);
        return ['user' => $person, 'password' => $password];
    }

    public function addPerson(Person $person, $password)
    {
        try{
            $stmt = $this->conn->prepare("INSERT INTO persons (name, store, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sis",$person->getName(), $person->getStore(), $password);
            $stmt->execute();
            return true;
        }catch (mysqli_sql_exception $exception){
            return false;
        }
    }
}