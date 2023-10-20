<?php

namespace namespace1\SubNS {

    class ArrayLib
    {
        public static function bubbleSort($arr) { // Y a deux boucles :(
            $n = count($arr);
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if ($arr[$j] > $arr[$j + 1]) {
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $temp;
                    }
                }
            }
            return $arr; // Renvoyer le tableau trié
        }

        public static function quickSort($arr) {
            if (count($arr) < 2) {
                return $arr;
            }
            $pivot = $arr[0];
            $left = $right = [];
            for ($i = 1; $i < count($arr); $i++) {
                if ($arr[$i] < $pivot) {
                    $left[] = $arr[$i];
                } else {
                    $right[] = $arr[$i];
                }
            }
            return array_merge(self::quickSort($left), [$pivot], self::quickSort($right));
        }
    }
}

