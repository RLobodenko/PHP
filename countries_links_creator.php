<?php
// индексированный массив
    
    $filename = 'countries_names.json';
    $f = file_get_contents( $filename );
   
    
    
    $g = json_decode($f, true);
    
    
       
   // $g = preg_filter('/^/', 'https://radiovolna.net/', $g);
    
    for ($i = 0; $i < count($g); $i++)  $g[$i] = "https://radiovolna.net/".$g[$i]."/" ;
 
   
    //var_dump ($g);
    
    
    
    
    
    file_put_contents("countries_links.json", json_encode($g));
?>
