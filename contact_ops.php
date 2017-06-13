<?php
define("REQUEST_EMAIL", "secretary@standrewstpaul.com");

extract($_POST);
    $subject = "StAndrewChurch New Contact Inquiry";
    $mailbody = "";
    $mailbody = $mailbody . "<html><title>" . $subject . "</title><body>";
    $mailbody = $mailbody . "<p>Hello ,</p>
                            <p>New Contact us request is received from website. The details of request is as below.</p>";
    $mailbody = $mailbody . "<table cellspacing='15'><tr><td>Full Name</td>". "<br><td>" . $Full_Name ."</td></tr>";
    $mailbody = $mailbody . "<tr><td>Email</td>" . "<td>" . $Email ."</td></tr>";
    $mailbody = $mailbody . "<tr><td>Phone</td>" . " <td>" . $Phone."</td></tr>";
    $mailbody = $mailbody . "<tr><td>Mobile</td>" . " <td>" .$Mobile."</td></tr>";
    $mailbody = $mailbody . "<tr><td>Comments</td>" . "<td>" .$Comments."</td></tr></table>";
    $mailbody = $mailbody . "<p>The request is submitted on <b>" . date("Y-m-d H:i:s") . "</b></p>";
    $mailbody = $mailbody . "<p>Thanks,</p>" . 
                    $Full_Name;
    $mailbody = $mailbody . "</body></html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: Digital Menubox Lead <" . REQUEST_EMAIL . ">" . "\r\n";

    $mailsent = mail(REQUEST_EMAIL, $subject, $mailbody, $headers);
    echo $mailsent;
    echo "Information Sent";
?>