<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Segunda Aula php</title>
</head>
<body>
    <?php 
    for($i = 0;$i <= 10; $i++){
echo "valor de i: ".$i."<br>";
    }
    
    echo "<hr>";
    
    $contador = 0;
    while($contador <10){
        echo "valor do contador: ".$contador."<br>";
        $contador++;
       
    }
    ?>
</body>
</html>