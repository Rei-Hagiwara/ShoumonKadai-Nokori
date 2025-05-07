<?php
    //配列の平均、最大、最低を連想配列で出す関数
            class GetNums{
                function getNums( $arr ){
                    return [
                    'avg' => floor(array_sum( $arr ) / count( $arr )),
                    'max' => max( $arr ),
                    'min' => min( $arr ),
                    ];
                }
            }
?>