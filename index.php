
<?php
$po_alaus = rand(1, 5);
$dar_alaus = 0;
$kablys = 1;
for ($i = 0; $i <= $po_alaus; $i++) {
    $dar_alaus += floor($po_alaus / 2) + $kablys;
}
?>
<html> 
    <head>
        <!--<link rel="stylesheet" href="css/main.css"> -->
        <title>Satan cycles1</title>
    </head>
    <body>
        <div> 
            <h1>
                Po <?php print $po_alaus; ?> alaus, tikėtina dar imsiu <?php print $dar_alaus; ?> alaus.
            </h1>
        </div>
    </body>
</html>
