<?php
$t = rand(1, 10);
$text = 'N';
for ($i = 0; $i < $t; $i++){
    $text.= 'x';
}
?>
<html> 
    <head>
        <link rel="stylesheet" href="css/main.css">
        <title>Satan cycles1</title>
    </head>
    <body>
        <div> 
            <h1><?php print $t; ?> </h1>
            <h2><?php print $text; ?> </h2>
        </div>
    </body>
</html>
