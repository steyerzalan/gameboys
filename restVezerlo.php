<?php
require_once 'GamesRestKezelo.php';

$view="";
if(isset($_GET["view"]))
    $view=$_GET["view"];

switch($view)
{
    case "all":
        $Gamesrest=new GamesRestKezelo();
        $Gamesrest->getAllGames();
        break;
    
    case "single":
        $Gamesrest=new GamesRestKezelo();
        $Gamesrest->getGamesById($_GET["id"]);
        break;

    case "tipus":
        $Gamesrest=new GamesRestKezelo();
        $Gamesrest->getGamesByType($_GET["tid"]);
        break;
    
    default:
    $Gamesrest=new GamesRestKezelo();
    $Gamesrest->getFault();
}
