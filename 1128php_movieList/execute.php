<?php
    $src = $_GET['pattern'];
    
    function Search($movies, $src)
    {
        $t = [];
        for ($i=0; $i < count($movies); $i++) { 
            
            if($src == '' || strpos($movies[$i]['title'], $src)){
                $t[] = $movies[$i];
            }
        }
        return $t;
    }

    $movies = Search($movies, $src);

?>