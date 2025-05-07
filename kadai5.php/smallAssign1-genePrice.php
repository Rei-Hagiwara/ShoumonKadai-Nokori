<?php
        //価格設定に基づいて、15個分の価格を出すクラス
        class GenePrice{
            function genePrice( $count, $min, $max ){
                $prices = [];
                for( $i = 1; $i <= $count; $i++ ){
                    $prices[$i] = random_int( $min, $max );
                }
                return $prices;
                }
            }
?>