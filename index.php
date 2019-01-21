<?php 
$randaom_color1 = rand(0,255);
$randaom_color2 = rand(0,255);
$randaom_color3 = rand(0,255);
?>

<html>
    
    <head>
        <title>  </title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="background-<?php print rand(0,5);?>">
        <h1 style="font-size:<?php print rand(10,100);?>">As keiciu savo dydi <?php print rand(1, 5); ?> vaiku </h1>
        <p style="background-color:rgb(<?php print "$randaom_color2, $randaom_color1,$randaom_color3" ?>)"> as keiciu spalva </p>
    </body>
</html>