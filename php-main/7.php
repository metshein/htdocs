<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 12</title>
</head>
<body>
    <h1>Harjutus 12</h1>
    <form action="" method="get">
        Start: <input type="time" name="start" required><br>
        Finish: <input type="time" name="finish" required><br>
        <input type="submit" value="Leia aeg">
    </form>
    
     <?php
    if (isset($_GET["start"]) && isset($_GET["finish"])) {
        $s = strtotime($_GET["start"]);
        $f = strtotime($_GET["finish"]);

        if ($s !== false && $f !== false) {
            $diff = abs($s - $f);
            $hours = intdiv($diff, 3600);
            $minutes = intdiv(($diff % 3600), 60);
            echo sprintf("%02d:%02d", $hours, $minutes);
        } else {
            echo "Aja sisestamisel tekkis viga.";
        }
    }
    ?>

    <br>

    <?php
    $allikas = 'tootajad.csv';
    $mpalk = 0; 
    $npalk = 0;
    $mkokku = 0; 
    $nkokku = 0;

    if (($minu_csv = fopen($allikas, 'r')) !== false) {
        while (($rida = fgetcsv($minu_csv, 1000, ';')) !== false) {
            if (count($rida) < 3) {
                continue; 
            }
            if ($rida[1] == "m") {
                $mkokku += 1;
                $mpalk += (float)$rida[2];
            } else {
                $nkokku += 1;
                $npalk += (float)$rida[2];
            }
        }
        fclose($minu_csv);

        if ($mkokku > 0 && $nkokku > 0) {
            $avg_m = $mpalk / $mkokku;
            $avg_n = $npalk / $nkokku;

            if ($avg_m > $avg_n) {
                echo "Naisi ahistatakse";
            } elseif ($avg_m < $avg_n) {
                echo "Mehi ahistatakse";
            } else {
                echo "Ahistamine on tasakaalus.";
            }
        } else {
            echo "Andmeid ei leitud.";
        }
    } else {
        echo "Ei leia faili!";
    }
    ?>
</body>
</html>
