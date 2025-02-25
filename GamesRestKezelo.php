<?php
require_once 'restKezelo.php';
require_once 'Games.php';

class GamesRestKezelo extends RestKezelo
{
    function getAllGames()
    {
        $games= New Games();
        $soradat=$games->getAllGames();
        if(empty($soradat))
        {
            $statusCode=404;
        }
        else
        {
            $statusCode=200;
        }

        $this->setHttpFejlec($statusCode);
        $result["games"]=$soradat;

        //válasz json-ben
        $response=$this->encodeJson($result);
        echo $response;

    }

    function getGamesById($id)
    {
        $games= new Games();
        $soradat=$games->getGamesById($id);
        if(empty($soradat))
        {
            $statusCode=404;
            $soradat= array('error' => 'No Games Found by this id.');
        }
        else
        {
            $statusCode=200;
        }
        $this->setHttpFejlec($statusCode);
        $result["GamesById"]=$soradat;

        //válasz json-ben
        $response=$this->encodeJson($result);
        echo $response;

    }

    function getGamesByType($typename)
    {
        $games= new Games();
        $soradat=$games->getGamesByType($typename);
        if(empty($soradat))
        {
            $statusCode=404;
            $soradat= array('error' => 'No Games Found by this type.');
        }
        else
        {
            $statusCode=200;
        }
        $this->setHttpFejlec($statusCode);
        $result["GamesByType"]=$soradat;

        //válasz json-ben
        $response=$this->encodeJson($result);
        echo $response;
    }

    function getFault()
    {
        $statusCode=400;
        $this->setHttpFejlec($statusCode);
        $soradat=array('error' => 'Bas request');
        $result["Fault"]=$soradat; 

        //válasz json-ben
        $response=$this->encodeJson($result);
        echo $response;
    }
    

    function encodeJson($responsData)
    {
        $jsonResponse=json_encode($responsData);
        return $jsonResponse;
    }
}