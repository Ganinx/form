<?php
session_start();
include'block/redirect.php';


$page = null;
if(!array_key_exists("page",$_GET)){
    $page = 1;
}else{
    $page = $_GET["page"];
}


$services = [
    [
        "src"=> 'image/bonnet.jpg',
        "titre"=>'Bonnet',
        "description" => 'Pour avoir un giga style venait laver votre bonnet',
        "type"=>"accessoire",
        "matiere"=>[
            "laine",
            "nylon",
            "synthetique"
        ],
        "prix"=>20
    ],
    [
        "src" => 'image/chaussette.jpg',
        "titre"=>'Chaussette',
        "description" => 'pour chauffer vos petits pieds, pour que jérémy soit aux anges',
        "type"=>"sous-vetement",
        "matiere"=>[
            "laine",
            "nylon",
            "synthetique"
        ],
        "prix"=>5
    ],
    [
        "src"=>"image/gant.jfif",
        "titre"=>'gant',
        "description" => 'Pour chauffer vos petites de bébés',
        "type"=>"accessoire",
        "matiere"=>[
            "laine",
            "nylon",
            "synthetique"
        ],
        "prix"=>15
    ],
    [
        "src"=>"image/jean.jpg",
        "titre"=>'Jean',
        "description" => 'Oh le jean de fou, je vais ressembler à mon idole!',
        "type"=>"pantalon",
        "matiere"=>[
            "laine",
            "nylon",
            "synthetique"
        ],
        "prix"=>50
    ],
    [
        "src"=>"image/veste.jfif",
        "titre"=>'Veste',
        "description" => 'La veste est super importante pour esquiver le froid',
        "type"=>"veste",
        "matiere"=>[
            "laine",
            "nylon",
            "synthetique"
        ],
        "prix"=>64
    ],
    [
        "src"=>"image/t-shirt.jpg",
        "titre"=>'t-shirt',
        "description" => 'le t-shirt le plus stylé du pap',
        "type"=>"t-shirt",
        "matiere"=>[
            "laine",
            "nylon",
            "synthetique"
        ],
        "prix"=>35
    ]
]
    

?>




<html>
<head>
    <?php
    include'block/stylesheet.php'
    ?>
    <title>Services</title>
</head>
<body class="
<?php
include'block/theme.php'
?>">
<?php
include'block/header.php';
include'block/menu.php';
?>
<div class="row justify-content-center">
    <?php



    $firstElememt = ($page-1)*2;
    $lastElement = $firstElememt+2;
    if($lastElement == (count($services)+1)){
        $lastElement -= 1;
    }




    for($i= $firstElememt;$i < $lastElement;$i++){

        echo('<div class="card" style="width: 18rem;">
        <img src="'.$services[$i]["src"].'" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">'.$services[$i]["titre"].'</h5>
            <p class="card-text">'.$services[$i]["description"].'</p><ul>');
        for($j = 0; $j < count($services[$i]["matiere"]); $j++){
            echo("<li>".$services[$i]['matiere'][$j]."</li>");
        };

        echo('</ul> 
<p class="mx-auto">'.$services[$i]["prix"].' €</p>
<a href="#" class="btn btn-primary mx-auto">voir plus</a><ul></div>
    </div>');
    }
    ?>
    <nav aria-label="Page navigation example mx-auto">
        <ul class="pagination">
            <?php
            if($page != 1){
                echo('<li class="page-item"><a class="page-link" href="service.php?page='.($page-1).'">Previous</a></li>');
            }


            ?>

            <?php
            for($i=1;$i <= ceil(count($services)/2);$i++ ){

                if($i==$page){
                    echo('<li class="page-item active"><a class="page-link" href="service.php?page='.$i.'">'.$i.'</a></li>');
                }else
                    echo('<li class="page-item"><a class="page-link" href="service.php?page='.$i.'">'.$i.'</a></li>');

            }

            ?>
            <?php
            if(ceil(count($services)/2)!=$page){
                echo('<li class="page-item"><a class="page-link" href="service.php?page='.($page+1).'">Next</a></li>');
            }


            ?>

        </ul>
    </nav>

</div>





<?php
include'block/javascript.php'
?>
</body>