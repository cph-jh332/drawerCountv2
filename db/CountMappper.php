<?php
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
        $drawer1 = $count->getDrawer1();
        $drawer2 = $count->getDrawer2();
        $total = $count->getTotalDeposit();
        $diff = $count->getDiff();
        $counterId = $count->getCounterId();
        $stmt->bind_param("iiiii",$drawer1,$drawer2, $total, $diff, $counterId);
        $stmt->execute();
    }
}