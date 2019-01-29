<?php
$daiktai  = [
    '0' => [
        'daigtas' => 'lupdazys',
        'dyds' => rand(1, 10),
         'dark'  => rand(0, 1),
         ],
     '1' => [
        'daigtas' => 'tamponai',
        'dyds' => rand(1, 10),
         'dark'  => rand(0, 1),
        ],
     '2' => [
        'daigtas' => 'raktas',
        'dyds' => rand(1, 10),
         'dark'  => rand(0, 1),
        ],
     '3' => [
        'daigtas' => 'veidrodis',
        'dyds' => rand(1, 10),
         'dark'  => rand(0, 1),
        ],
     '4' => [
        'daigtas' => 'prakladkes',
        'dyds' => rand(1, 10),
         'dark'  => rand(0, 1),
        ],
     '5' => [
        'daigtas' => 'telefas',
        'dyds' => rand(1, 10),
         'dark'  => rand(0, 1),
        ],
    '6' => [
        'daigtas' => 'debilo_fotke',
        'dyds' => rand(1, 10),
         'dark'  => rand(0, 1),
        ],
    ];

$rankinuko_dydis = rand(0, 6);
$rankinukas = [];

for ($x = 0; $x <= $rankinuko_dydis; $x++) {
   
$rankinukas[] = $daiktai[$x];
}
var_dump($rankinukas);
?>
