<?php
function array_to_file($array, $file) {
    $string = json_encode($array);

    return file_put_contents($file, $string);
}

function file_to_array($file) {
    if (file_exists($file)) {
        $string = file_get_contents($file);
       
        if ($string !== false) {
            return json_decode($string, true);
            
        } else {
            throw new Exception(strtr('@file not readable', [
                '@file' => $file
            ]));
        }
    } else {
        throw new Exception(strtr('@file not exists', [
            '@file' => $file
        ]));
    }
}
?>
