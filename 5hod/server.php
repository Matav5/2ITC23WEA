<?php
print_r($_POST);

if(isset($_POST["nastavPreferenci"])){
    $slovnikObrazku = [
      "kapybara" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2F8%2F85%2FCapybara_portrait.jpg&f=1&nofb=1&ipt=6ffe11c7e128ef9d32162470948650ccfbb8598f8248f53afa0038a4939ec3b9&ipo=images",
      "zirafa" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F4.bp.blogspot.com%2F-bJxaCOFevj4%2FUMMux5jTF9I%2FAAAAAAAAAC4%2Ff57PEDxWneg%2Fs1600%2F%25C5%25BDIRAFA.jpg&f=1&nofb=1&ipt=5119ba8d5a2d782884029550099b496e70c63a607052e1a9fe2d14de36589cf9&ipo=images",
      "husky" => "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fiditarodoutsider.files.wordpress.com%2F2013%2F02%2Fsiberianhusky1.jpg&f=1&nofb=1&ipt=b8c9e965d50f1781720542843f3f948923b3547ae03a45e5acaeeea4bccb9c97&ipo=images"
    ];
    $preferenceZviratka = $_POST["preferenceZviratka"];
    $vybranyObrazek = $slovnikObrazku[$preferenceZviratka];
   // $_COOKIE["preferenceZviratka"] = $vybranyObrazek;
    setcookie("preferenceZviratka", $vybranyObrazek,time() + 60 * 3);
}
header("location: index.php");
die();
?>