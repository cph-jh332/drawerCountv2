<?php
/**
 * Created by PhpStorm.
 * User: craci
 * Date: 13-04-2018
 * Time: 22:10
 */
require_once '../Interfaces/ICountMapper.php';
require_once 'dbconnect.php';
require_once '../assets/Count.php';

class CountMappper implements ICountMapper
{
    private $conn;

    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->open_connection();
    }
    public function getCounts()
    {
        $stmt = $this->conn->prepare("SELECT * FROM counts");
        $stmt->execute();
        $stmt->bind_result($id,$drawer1, $drawer2, $total, $diff, $counterId);
        $result = array();
        while($stmt->fetch()){
            array_push($result, new Count($id, $drawer1, $drawer2, $total, $diff, $counterId));
        }
        return $result;
    }

    public function getCount()
    {
        // TODO: Implement getCount() method.
    }

    public function addCount(Count $count)
    {
        $stmt = $this->conn->prepare("INSERT INTO counts (drawer1, drawer2, total, diff, counterId) VALUES (?,?,?,?,?)");
        $stmt->bind_param("iiiii",$count->getDrawer1(),$count->getDrawer2(), $count->getTotal(), $count->getDiff(), $count->getCounterId());
        $stmt->execute();
    }
}