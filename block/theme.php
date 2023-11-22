<?php
if(array_key_exists("consent",$_COOKIE)){
    if(array_key_exists("theme",$_COOKIE)&& $_COOKIE["theme"]=="light"){
        echo('bg-light text-dark');
    }elseif(array_key_exists("theme",$_COOKIE)&& $_COOKIE["theme"]=="dark"){
        echo('bg-dark text-light');
    }else{
        echo('');
    }
}