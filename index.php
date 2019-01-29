<?php
$rankinukas = [];
$daiktai = ['bambukas', 'pinigine', 'kremux', 'pirstines', 'baklazanas', 'dildo', 'tamponai', 'debilo_foto'];
for ($i = 0; $i < rand(1, 10); $i++) {
    $name = $daiktai[rand(0, count($daiktai) - 1)];
    $size = rand(1, 10);
    $is_dark = rand(0, 1);
    
    if ($is_dark) {
        $spalva = 'sviesus';
    } else {
        $spalva = 'tamsus';
    };
    $rankinukas[] = [
            'name' => $name,
            'size' => $size,
            'is_dark' => $is_dark,
            'summary' => "$name užima $size cm3. Daiktas yra $spalva"
        ];
};
?>
<html>
    <head>
        <title>Rankinukas</title>
    </head>
    <body>
        <?php foreach ($rankinukas as $value): ?>
            <p><?php print $value['summary']; ?></p>
        <?php endforeach; ?>
    </body>
</html>