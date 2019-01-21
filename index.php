<?php Date_default_timezone_set('Europe/Vilnius'); ?>

<html>
    <head>
        <title><title> PHP lydes ir <?php print date("Y", strtotime ('+'.rand(0,10).'year'));?>  </title></title>
    </head>
    <body>
        
        <h1>As - galbut turesiu <?php print rand(1,5);?> vaiku </h1>
            <p>Trumpas nebus preziku <?php print date("Y-m-d", strtotime ('+'.rand(0,10).'year'));?> </p>
        

    </body>
</html>