<?php

if (isset($_POST['submit'])) {
    $nume = $_POST['nume'];
    $subiect = $_POST['subiect'];
    $emailFrom = $_POST['email'];
    $mesaj = $_POST['mesaj'];


    $mailTo = "contactus@improveweb.ro";
    $headers = "From: ".$emailFrom;
    $txt = "Ai primit un mail de la ".$nume.".\n\n".$mesaj;


    mail($mailTo, $subiect, $txt, $headers);
    header("Location: index.php?mailsend");
}

?>