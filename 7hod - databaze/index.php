<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmová databáze</title>
</head>
<body>
    <?php 
        require_once 'db.php';
        $sql = "SELECT * FROM filmy;";
        $result = $db->query($sql);
        print_r($result);
    ?>
</body>
</html>