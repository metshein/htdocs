<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 7</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<?php
function vahemikus($a1, $a2, $s) {
    for($i = $a1; $i <= $a2; $i += $s) {
        echo $i . " ";
    }
}

function createuser($u) {
    $lu = strtolower($u);
    echo $lu . "@hkhk.edu.ee<br>";
    $p = substr(password_hash($lu, PASSWORD_BCRYPT), 7, 7);
    echo $p . "<br>";
}

function uudiskiri() {
    echo '<div class="row">
        <div class="col sm-2">
            <form action="">
                <input type="text" placeholder="Liitu uudiskirjaga" class="form-control">
                <input type="submit" value="Liitu" class="btn btn-success">
            </form>
        </div>
    </div>';
}

function tervitus() {
    echo "Tere päiksekene<br>";
}

function rectangleS($kylg1, $kylg2) {
    return $kylg1 * $kylg2; 
}

function ik($ik) {
    $pikkus = strlen($ik); 
    if ($pikkus == 11) {
        return (intval($ik[0]) % 2 == 0) ? "Naine" : "Mees";
    } else {
        return "Vale pikkusega";
    }
}

function headmotted() {
    $alused = array("Ole positiivne", "Usalda oma instinkte", "Ära karda ebaõnnestuda");
    $oodis = array("jookseb", "hüppab", "lendab", "mängib", "magab");
    $sihitis = array("aeda", "metsas", "taevas", "maja ees", "tänaval");

   
    $randomAlus = $alused[array_rand($alused)];
    $randomOodis = $oodis[array_rand($oodis)];
    $randomSihitis = $sihitis[array_rand($sihitis)];

    return "$randomAlus $randomOodis $randomSihitis.";
}
?>

<h1>Harjutus 7</h1>
<h2>tervitamine</h2>
<?php
for ($i = 0; $i < 5; $i++) {
    tervitus();
}
uudiskiri();
createuser("Jaspar");
echo "<br>";
vahemikus(2, 20, 3);
?>

<h2>ristküliku pindala</h2>
<form>
    külg 1<input type="number" name="Kylg1" value="10" class="form-control">
    külg 2<input type="number" name="Kylg2" value="10" class="form-control">
    <input type="submit" value="Arvuta pindala" class="btn btn-primary">
</form>

<?php
if (isset($_GET['Kylg1']) && isset($_GET['Kylg2'])) {
    $pindala = rectangleS($_GET['Kylg1'], $_GET['Kylg2']); 
    echo "Ristküliku pindala: " . $pindala . "<br>";
} else {
    echo "Sisesta Küljed<br>";
}
?>

<h2>isikukood</h2>
<?php
echo ik("50806102026");
echo "<br>";
?>

<h2>Head mõtted</h2>
<p><?php echo headmotted(); ?></p>

