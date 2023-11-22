<?php
    if(!array_key_exists("consent",$_COOKIE)){
        echo('<div class="b-example-divider">
    <p>Acceptez vous les cookies</p>
    <a href="?cookie=yes">
        <button>yes</button>
    </a>
</div>');
    }
    ?>



