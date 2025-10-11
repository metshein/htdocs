<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>harjutus</h1>
    <form action="#" method="get">
        Võimsus <input type="number" name="voimsus" required><br>
        Lastearv <input type="number" name="lastehind" required><br>
        <input type="submit" value="Leia">
    </form>
    <?php
    $lastehind = 100;
    $hind = 10;
    $automaks = $_GET["voimsus"]*$hind - $_GET["lastehind"]*$lastehind;
    
    if($automaks<=0){
      echo "automaks on 0";
    } else { 
      echo $automaks;
    }
    

    


    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>