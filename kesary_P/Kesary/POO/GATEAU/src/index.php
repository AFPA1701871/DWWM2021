<?php
require("./entities/gateau.php");

$cake = new Gateau;
$cake->gateauChocolat(50);
$cake->gateauVanille();

?>