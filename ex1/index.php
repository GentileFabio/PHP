<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include("nav.php");
    ?>
    <h1>Hello World!</h1>
    <?php 

    //

    /* 
    
    */
        echo("<h1>Hello World!</h1>"); 

        $nom = "Fabio";

        echo "<br>".$nom."<br>";

        echo "<div>".$nom."</div>";

        echo 'I\'hopital';

        $couleur = "12";

        if($couleur === 12){
            echo("<br>12");
        } else {
            echo("<br>0");
        }

        $age = 18;

        if($age >= 21){
            echo ("rentre");
        }
        else{
            echo("sors");
        }

        $info = "<h1>Titre de niveau 1 </h1>";

        echo strip_tags($info);

        $prenom = "jordan";
        echo(ucfirst($prenom));

        $heros = ["Batman", "Superman", "Flash"];

        var_dump($heros);

        echo $heros[0];

        // tableau associatif
        $batman = [
            "nom" => "Batman",
            "vraiNom" => "Bruce Wayne"
        ];

        var_dump($batman);

        echo $batman["vraiNom"];
    ?>



</body>
</html>