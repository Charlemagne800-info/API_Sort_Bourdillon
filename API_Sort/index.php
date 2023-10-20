<?php

require_once 'Namespace1/SubNS/Endpoint.php';
require_once 'Namespace1/SubNS/ArrayLib.php';

use namespace1\SubNS\Endpoint;

$action = '';
if (isset($_GET['action']) == True) { //Si le paramètre action n'est pas vide
    $action = $_GET['action'];
} else {
    $action = ''; //Sinon on le remplit
}

$param = ''; // Si le paramètre param n'est pas vide
if (isset($_GET['p']) == true) {
    $param = $_GET['p'];
} else {
    $param = ''; //Sinon on le remplit
}

if ($action !== '' && $param !== '') {
    $paramArray = json_decode(htmlspecialchars($param), true);

    if (is_array($paramArray) == true) {
        if ($action === 'bubblesort') {
            Endpoint::Rooting('BubbleSort', $paramArray);
        }
        elseif ($action === 'quicksort') {
            Endpoint::Rooting('QuickSort', $paramArray);
        }
        else {
            echo "Action non reconnue";
        }
    } else {
        echo "Le paramètre 'p' doit être un tableau JSON valide.";
    }
} else {
    echo "Action ou paramètre manquant dans l'URL.";
}
