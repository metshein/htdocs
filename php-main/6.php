<!doctype html>
<html>
<head>
    <title>Harjutus10</title>
   
</head>
<body>
<header id="pais">
    <h1>See on see harjutus vist</h1>
</header>
<nav>
    <ul>
        <li><a href="?leht=leht1">Leht 1</a></li>
        <li><a href="?leht=leht2">Leht 2</a></li>
        <li><a href="?leht=leht3">Leht 3</a></li>
    </ul>
</nav>
<div id="sisu">
    <?php
    if (!empty($_GET['leht'])) {
        $leht = htmlspecialchars($_GET['leht']);
        $lubatud = array('leht1', 'leht2', 'leht3');
        if (in_array($leht, $lubatud)) {
            include($leht . '.php');
        } else {
            echo 'Seda pole olemas mees';
        }
    } else {
        echo '<h2>Youkijou!</h2><p>Mis ootad, vali üks leht juba.</p>';
    }
    ?>
</div>
</footer>
</body>
</html>
