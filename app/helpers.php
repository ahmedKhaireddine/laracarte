<?php

if(! function_exists('page_title')){
    function page_title($title){
        $baseName = "Laracarte - List of artisans";
        if($title != ''){
            return $title . ' | ' . $baseName;
        }else{
            return $baseName;
        }
    }
}