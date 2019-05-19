
<?php

if (isset($_POST["submit"])) {
    $name = $_POST['names'];
    $email = $_POST['emailadress'];
    $phone = $_POST['phonenr'];
    $message = $_POST['message'];
    $subject = "Bericht voor prisamsterdam.nl";

    $message = "
Name: $name
Email: $email
Phone: $phone
Message:
$message
";


    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    mail("info@prisamsterdam.nl", $subject, $message);

    header('Location: index.html');
}
?>
