<?php

namespace namespace1\SubNS {
    
    class Endpoint {
        
        static function Rooting($sortMethod, $paramArray) {
            
            if (is_array($paramArray) == true) { //Si paramArray est bien un tableau
                echo "Tableau non trié : <br>==>" . json_encode($paramArray) . "<br>"; //Affichage du tableau avec les <br> html pour un meilleur affichage

                if ($sortMethod === 'BubbleSort') {
                    $sortedArray = ArrayLib::BubbleSort($paramArray); //Stocke le talbeau trié par la fonction dans une variable
                    echo "Tableau trié avec Bubble Sort : <br>==>" . json_encode($sortedArray) . "<br>";
                } 
                elseif ($sortMethod === 'QuickSort') {
                    $sortedArray = ArrayLib::QuickSort($paramArray);
                    echo "Tableau trié avec Quick Sort : <br>==>" . json_encode($sortedArray) . "<br>";
                } 
                else {
                    echo "Action de tri non reconnue";
                }
            } else {
                echo "Le paramètre 'p' doit être un tableau JSON valide.";
            }
        }
    }
}
