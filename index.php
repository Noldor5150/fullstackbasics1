<?php 
$randaom_color1 = rand(0,255);
$randaom_color2 = rand(0,255);
$randaom_color3 = rand(0,255);
?>

<html>
    <head>
        <title> PHP lydes ir <?php print date("Y", strtotime('+' . rand(0, 10) . 'year')); ?> </title>
    </head>
    <body style="background-color:rgb(<?php print "$randaom_color1, $randaom_color2, $randaom_color3" ?>)">
        <h1 style="font-size:<?php print rand(10,100);?>">As keiciu savo dydi <?php print rand(1, 5); ?> vaiku </h1>
        <p style="background-color:rgb(<?php print "$randaom_color2, $randaom_color1,$randaom_color3" ?>)"> as keiciu spalva </p>
    </body>
</html>