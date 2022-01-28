<?php

// var_dump($_SERVER);
// $referer = $_SERVER["HTTP_REFERER"];

// $tab = explode("/", $referer);

// $fileName = $tab[count($tab) - 1];

// var_dump($fileName);
// $catId = null;

// switch ($fileName) {
//     case "rhum.html":
//         $catId = 1;
//         break;
//     case "index.html":
//         $catId = 2;
//         break;
// }

// var_dump($catId);

// var_dump($_POST);
$content = trim(file_get_contents("php://input"));
$contentObj = json_decode($content);
$idCat = $contentObj->idCat;

// $contentArray = json_decode($content);
// echo $contentArray["param1"];
