<?php
    function multiplyArray(array $array): ?float
    {
        $num = 1;
        foreach($array as $value) {
            $num += $value;
        }
        return $num;
    };
?>