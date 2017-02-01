<?php
include "../config.php";

$bdd = new PDO("mysql:dbname=" . $_database . ";host=" . $_host, $_user, $_password);

$req = $bdd->prepare("SELECT * FROM streamer");
$req->execute();
$streamers = [];
$streamersAfficher = [];
while($streamer = $req->fetch(PDO::FETCH_OBJ)){
    if ($streamer->afficher = 1){
        $streamersAfficher[] = $streamer;   
    }else{
        $streamers[] = $streamer;
    }
}

include "../views/index.php";