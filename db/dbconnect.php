<?php
class DBConnect{
// Create connection


     public function open_connection(){
        //Read configs from file
        $connectionConf = fopen("connection.json", "r") or die("Unable to locate connection.json");
        $connectionConf = json_decode(fread($connectionConf, filesize("connection.json")));
        $conn = new mysqli($connectionConf->servername, $connectionConf->username, $connectionConf->password, $connectionConf->dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        mysqli_set_charset($conn,"utf8");
        return $conn;
    }

    public function getQuery($sql){
        $conn = $this->open_connection();
        $result = $conn->query($sql);
        return $result;
    }

    public function setQuery($sql){
        $conn = $this->open_connection();
        $conn->query($sql);
    }
}

?>
