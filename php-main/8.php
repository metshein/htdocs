<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 8</title>
</head>
<body>
    <h1>Harjutus 13-14</h1>
<?php
$kataloog = 'pildid';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_FILES['minu_fail']['name'])) {
        $sinu_faili_nimi = $_FILES['minu_fail']['name'];
        $ajutine_fail = $_FILES['minu_fail']['tmp_name'];
        $faili_tyyp = strtolower(pathinfo($sinu_faili_nimi, PATHINFO_EXTENSION));

        if ($faili_tyyp == 'jpg' || $faili_tyyp == 'jpeg') {
            $faili_koht = $kataloog . '/' . $sinu_faili_nimi;

            if (!file_exists($faili_koht) && move_uploaded_file($ajutine_fail, $faili_koht)) {
                echo 'Noh said tehtud<br>';
            } else {
             echo 'ebaonnestus<br>';
            }
        } else {
            echo 'Pole lubatud failitüüp<br>';
        }
    }
}

if ($asukoht = opendir($kataloog)) {
    while ($rida = readdir($asukoht)) {
        if ($rida != '.' && $rida != '..') {
            echo '<a href= "' . $kataloog . '/' . $rida . '" target="_blank">' . $rida . '</a><br>';
            echo '<a href="' . $kataloog . '/' . $rida . '" target="_blank"><img src="' . $kataloog . '/' . $rida . '" width="100" height="100" style="margin:5px"></a>';
        }
    }
    closedir($asukoht);
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="minu_fail"><br>
    <input type="submit" value="Lae üles!">



    <h2>random pilt kuvamine</h2>

<?php
$directory = 'pildid/';


$images = glob($directory . '*.{jpg,jpeg}', GLOB_BRACE);

if (count($images) > 0) {
    
    $randomImage = $images[array_rand($images)];
    
    echo '<img src="' . $randomImage . '" alt="Random Image" /width="200" height="200">';
} else {
    echo 'ei ole pilti siin.';
}
?>
</body>
</html>
