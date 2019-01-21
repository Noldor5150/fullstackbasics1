<?php Date_default_timezone_set('Europe/Vilnius'); ?>

<html>
    <head>
        <<title>PHP lydes ir <?php print date("Y-m-d", strtotime("+1 day")); ?></title>
    </head>
    <body>
        <h1>Paulius - PHP su manim buvo <?php print date('Y-m-d H:i:s', strtotime('-1 hour')); ?></h1>
        <p><?php print date("Y", strtotime("+1 year")); ?> ne uz kalnu</p>
    </body>
</html>
