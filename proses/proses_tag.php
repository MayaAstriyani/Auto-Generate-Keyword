<?php
/*
pc_permute(array(0, 1, 2, 3, 4, 5, 7, 8));

function pc_permute($items, $perms = array( )) {
    if (empty($items)) {
        print join(' ', $perms) . "\r\n";
    }  else {
        for ($i = count($items) - 1; $i >= 0; --$i) {
             $newitems = $items;
             $newperms = $perms;
             list($foo) = array_splice($newitems, $i, 1);
             array_unshift($newperms, $foo);
             pc_permute($newitems, $newperms);
         }
    }
}

*/
header("content-type:text");

$jumlah_desc=100;

// $pagar=explode(" ", $_POST['pagar']);




$pagar=['#pagar1','#pagar2','#pagar3','#pagar4','#pagar5','#pagar6','#pagar7','#pagar8','#pagar9','#pagar10','#pagar11','#pagar12'];

for ($i=0; $i <$jumlah_desc ; $i++) { 
  $apa[$i]=implode(" ",shuffle_assoc($pagar));  
}


print_r($apa);

function shuffle_assoc(&$array) {
    $keys = array_keys($array);

    shuffle($keys);
    $x=0;
    foreach($keys as $key) {
        $new[$x] = $array[$key];
        $x++;
    }

    $array = $new;

    return $array;
}





?>
