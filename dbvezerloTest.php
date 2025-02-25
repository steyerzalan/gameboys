<?php
require_once 'dbvezerlo.php';

class DBVezerloManualTest {

    public function runTest()
    {
        echo "Teszt indítása... \n";

        $db =new DBVezerlo();
        
        //kapcsolat
        if($this->testConnection($db))
        {
            echo "Sikeres kapcsolódás.";
        }
        else
        {
            echo "Sikertelen kapcsolódás.";
        }
    }

        private function testConnection($db)
        {
            $reflection= new ReflectionClass($db);
            $property = $reflection->getProperty('conn');
            $property->setAccessible(true);
            return !is_null($property->getValue($db));
        }
    }

$test=new DBVezerloManualTest();
$test->runTest();

