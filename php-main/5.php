<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 9</title>
</head>
<body>
    <h1>Harjutus 9</h1>

    <form method="post">
        <label for="nimi">Sisesta oma nimi:</label>
        <input type="text" id="nimi" name="nimi" required>
        <br>
        <label for="sisend">Sisesta sõna:</label>
        <input type="text" id="sisend" name="sisend" required>
        <br>
        <label for="lauses">Sisesta lause:</label>
        <input type="text" id="lauses" name="lauses" required>
        <br>
        <label for="eesnimi">Sisesta eesnimi:</label>
        <input type="text" id="eesnimi" name="eesnimi" required>
        <br>
        <label for="perenimi">Sisesta perenimi:</label>
        <input type="text" id="perenimi" name="perenimi" required>
        <br>
        <input type="submit" value="Saada">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function tervita($nimi) {
        return "Tere, " . ucfirst(strtolower($nimi)) . "!";
    }

    function eraldaTähtedega($sisend) {
        return implode('.', str_split(strtoupper($sisend)));
    }

    function ropudsõnad($sisend, $ropud_sõnad) {
        return str_replace($ropud_sõnad, '***', $sisend);
    }

    function looMail($eesnimi, $perenimi) {
        $eesnimi = str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), strtolower($eesnimi));
        $perenimi = str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), strtolower($perenimi));
        
        return $eesnimi . $perenimi . "@hkhk.edu.ee";
    }

    $nimi = $_POST['nimi'];
    $sisend = $_POST['sisend'];
    $lauses = $_POST['lauses'];
    $eesnimi = $_POST['eesnimi'];
    $perenimi = $_POST['perenimi'];

    echo tervita($nimi) . "<br>";
    echo eraldaTähtedega($sisend) . "<br>"; 
    echo ropudsõnad($lauses, array("noob")) . "<br>"; 
    echo looMail($eesnimi, $perenimi); 
}
?>
</body>
</html>
