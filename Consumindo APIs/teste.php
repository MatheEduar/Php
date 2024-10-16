<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $url = "https://swapi.dev/api/people/?page=2";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $result = json_decode(curl_exec($ch));
        // var_dump($result);

        foreach($result->results as $ator) {
            echo "Nome: " . $ator->name . "<br>";
            echo "Altura: " . $ator->height . "<br>";
            foreach($ator->films as $film){
                echo "Filme: ". $film . "<br>"; 
            }
            echo "<hr>";


        } 
    ?>
</body>
</html>