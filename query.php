<?php

$name = $_POST['name'];
$email = $_POST['email'];
$query = $_POST['query'];

$text="
    Name: $name
    Email Address: $email
    Query: $query
";

$myfile = fopen("queries/{$name}_{$email}.doc", "w") or die("Unable to open file!");
fwrite($myfile, $text);
fclose($myfile);

/*
$to = "shivendrasaurav@gmail.com";
$subject = "Query";
$txt = $query;
$headers = "From: {$email}" . "\r\n" .
"CC: shivendr.intern@reva.edu.in";

mail($to,$subject,$txt,$headers);
*/
?>
<html>
    <head>
        <title>REVA News Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://fluentdesignforweb.github.io/fluent.js"></script>
        <link href="https://fluentdesignforweb.github.io/fluent.css" type="text/css" rel="stylesheet">
        <link href="https://fluentdesignforweb.github.io/Icons/css/fluent-icons.css" type="text/css" rel="stylesheet">
        <link href="customstyles.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="column large4 center" style="margin-top: 5%;">
            <img src="logo_reva.png"><br><br>
            <p class="ta_center">Your Query Has Been Received, Proceed To <a href="../index.php">Home</a></p>
        </div>

    </body>
</html>
