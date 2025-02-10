<?php
    if(!function_exists('fDate')){
        function fDate($date, $format){
            $formatDate = date($format, strtotime($date));
            return $formatDate;
        }
    }
?>