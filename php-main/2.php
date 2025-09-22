<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 6</title>
</head>
<body>
    <h1>Harjutus 6</h1>
    <h2>Rida</h2>
    
    <?php
    // Kahanev 
    for ($i = 10; $i >= 0; $i--) {
        echo $i . " ";
    }
    ?>
    

    <h2>Tärnid horisontaalselt</h2>
    <?php
    // 10x10 
    for ($i = 1; $i <= 100; $i++) {
        echo "*";
        if ($i % 10 == 0) {
            echo "<br>";
        }
    }
    ?>
    

    <h2>Tärnid vertikaalselt</h2>
    <p>
    <?php
    // 10 tärni vertikaalselt
    for ($i = 1; $i <= 10; $i++) {
        echo "*<br>";
    }
    ?>
    

    <h2>Numbrid 1-100</h2>
  
    <?php
    // 1-100 numbrid
    for ($i = 1; $i <= 100; $i++) {
        echo $i . ".";
        if ($i % 10 == 0) {
            echo "<br>";
        }
    }
    ?>
    

    <h2>Kahanevad paarisarvud 10-1</h2>
    
    <?php
    // paarisarvud 10-1
    for ($i = 10; $i >= 1; $i--) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }
    ?>
    
    <h2>Kolmega jagunevad arvud 1-100</h2>
    
    <?php
    
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0) {
            echo $i . " ";
        }
    }
    ?>
   

    <h2>Tüdrukute ja poiste massiivid</h2>
    <?php
    
    $tüdrukud = array("Mari", "Kati", "Liis", "Anna", "Eliise");
    $poisid = array("Juhan", "Miku", "Uku", "Kati", "Rasmus");


    for ($i = 0; $i < count($tüdrukud); $i++) {
        echo $tüdrukud[$i] . " - " . $poisid[$i] . "<br>";
    }
    ?>
    
</body>
</html>
