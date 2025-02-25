<?php
class DBVezerlo {
    private $conn=null;
    private $host="localhost";

    private $user="root";

    private $password="";

    private $database="gameboy";

    function __construct()
    {
        $conn=$this->connectDB();
        if (!empty($conn))
            $this->conn=$conn;
    }

    function connectDB()
    {
        $conn=mysqli_connect($this->host, $this->user, $this->password,
        $this->database);
        return $conn;
    }

    function closeDB()
    {
        if(!empty($this->conn))
        {
            mysqli_close($this->conn);
            $this->conn=null;
        }
    }

    function executeSelectQuery($query)
    {
        $result=mysqli_query($this->conn, $query);
        while($row=mysqli_fetch_assoc($result))
        {
            $resultset[]=$row;
        }
        if (!empty($resultset))
            return $resultset;
    }
}