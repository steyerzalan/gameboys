<?php

class RestKezelo 
{
    private $httpVersion= "HTTP/1.1";

    public function setHttpFejlec($statusKod)
    {
        $statusUzenet= $this->getHttpStatusUzenet($statusKod);
        
        header($this->httpVersion. " " . $statusKod ." " . $statusUzenet);
        header("Content-Type: Application/json");
    } 

    public function getHttpStatusUzenet($statusKod)
    {
        $httpStatus = array(
            200 => 'OK',
            400 => 'Bad Request',
            404 => 'Not Found'
        );
        return ($httpStatus[$statusKod]);
    }
}