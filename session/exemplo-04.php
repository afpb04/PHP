<?php
session_id('2lmkokoelkqbpqo2re6tvu7e6t');
require_once("config.php");
session_regenerate_id();

echo session_id();

//var_dump($_SESSION);
?>