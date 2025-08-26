<?php
require __DIR__ . '/../config/general.php';
require __DIR__ . '/../incl/util.php';
setPlainHeader();

$ClientVer = $_POST['version'];

# Possible access levels are: all, client, none
# All means you can access the client and the servers
# Client means you cant access the servers
# None means you cant play the game
$AccessLevel = "";

if ($ClientVer == "1.0.0-beta") {
    $AccessLevel = "all";
} else {
    $AccessLevel = "client";
}

echo $AccessLevel + ";" + $latestVersion;
