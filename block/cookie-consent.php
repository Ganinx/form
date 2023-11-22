<?php
    if(array_key_exists("cookie", $_GET) && $_GET['cookie'] == 'yes'){
        setcookie("consent","yes", time()+60*60*24);
        $urlRedirection = $_SERVER['REQUEST_URI'];
        $urlRedirection = explode("?", "$urlRedirection")[0];

        header('Location: '.$urlRedirection);
        exit();
    }
    if(!array_key_exists("consent",$_COOKIE)){
        echo('<div class="b-example-divider">
    <p>Acceptez vous les cookies</p>
    <a href="?cookie=yes">
        <button>yes</button>
    </a>
</div>');
    }



