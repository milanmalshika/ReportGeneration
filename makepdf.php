<?php

    require_once __DIR__ . '/vendor/autoload.php';

    //Grab variables
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    //Create new pfd instance
    $mpdf = new \Mpdf\Mpdf();

    //Create our pdf
    $data = '';

    //Add data
    $data .= "<h1>Your entered details.</h1>";

    $data .= "<strong>First Name</strong> " . $fName . "<br />";
    $data .= "<strong>Last Name</strong> " . $lName . "<br />";
    $data .= "<strong>Email</strong> " . $email . "<br />";
    $data .= "<strong>Phone</strong> " . $phone . "<br />";

    if ($message) {
        $data .= "<br /><strong>Message</strong><br />" . $message;
    }

    //Write pdf
    $mpdf->WriteHTML($data);

    //Output to browser
    $mpdf->Output('myfile.pdf', 'D');

?>