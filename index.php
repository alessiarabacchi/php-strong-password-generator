<?php
include 'functions.php';


$lunghezzaPassword = isset($_GET['lunghezza']) ? (int)$_GET['lunghezza'] : 0;
$passwordGenerata = ($lunghezzaPassword > 0) ? generaPassword($lunghezzaPassword) : '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Generatore di Password</title>
</head>
<body>
    <h1>Generatore di Password</h1>
    <form method="GET">
        <label for="lunghezza">Lunghezza Password:</label>
        <input type="number" id="lunghezza" name="lunghezza" min="1" required>
        <button type="submit">Genera Password</button>
    </form>
    <p>Password: <?php echo $passwordGenerata; ?></p>
</body>
</html>