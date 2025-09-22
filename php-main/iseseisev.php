<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 8</title>
</head>
<body>
    <h1>Iseseisev</h1>
    <h2>Tekst</h2>
<?php
echo "Juhan Liiv, “Ääremärkused”";
?>
 
<h2>Valemid</h2>

<div class="box">
  <form method="post">
    <label>Tollid</label>
    <input type="number" name="tollid" step="0.01" min="0" value="<?php echo isset($_POST['tollid']) ? htmlspecialchars($_POST['tollid']) : ''; ?>" required>
    <button type="submit">Teisenda</button>
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tollid'])) {
      $tollid = floatval($_POST['tollid']);
      $cm = $tollid * 2.54;
      echo "<p>Converted Value: " . htmlspecialchars($cm) . " cm</p>";
  }
  ?>
</div>


<h2>Tsüklid</h2>
<?php
$number = 10;
while ($number >= 1) {
echo $number . "\n";
    $number--;
    }
?>



<h2>Isikukood</h2>
   <form method="POST" action="">
    <div class="form-group">
        <label for="eemalda">Sisesta isikukood:</label>
        <input type="text" class="form-control" id="eemalda" name="eemalda" required>
    </div>
    <button type="submit" class="btn btn-primary">Otsi</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isikukood = $_POST['eemalda'];
    echo ik($isikukood);
}

function ik($ik) {
    $pikkus = strlen($ik); 
    if ($pikkus == 11) {
        return (intval($ik[0]) % 2 == 0) ? "Naine" : "Mees";
    } else {
        return "Vale pikkusega";
    }
}
?>

</body>
</html>
