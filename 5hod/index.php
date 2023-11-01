<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výběr preference</title>
</head>
<body>
    <?php
        if(empty($_COOKIE["preferenceZviratka"]))
            $obrazekZviratka = "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2F8%2F85%2FCapybara_portrait.jpg&f=1&nofb=1&ipt=6ffe11c7e128ef9d32162470948650ccfbb8598f8248f53afa0038a4939ec3b9&ipo=images";
        else
            $obrazekZviratka = $_COOKIE["preferenceZviratka"];

    ?>
    <form action="server.php" method="post">
        
    <select name="preferenceZviratka">
        <option value="kapybara">Kapybara</option>
        <option value="zirafa">Žiráfa</option>
        <option value="husky">Husky</option>
    </select>
    <input type="submit" name="nastavPreferenci" value="Nastav Preferenci!">
    </form>

    <img src="<?= $obrazekZviratka ?>" width="500" height="500">
</body>
</html>