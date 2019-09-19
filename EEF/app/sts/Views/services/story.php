<?php

namespace sts\Models;

$object = "sts\\Controllers\\connection";

$story = new $object();

$SQL = "SELECT * FROM storys";

$exec = $story->GetConn()->prepare($SQL);

$exec->execute();

$row = $exec->fetchAll();

var_dump($row);

?>