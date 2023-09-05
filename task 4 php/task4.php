<!-- task 4  >> 1. Use an associative array to store information about 4 students and their
favourite foods -->
<?php declare(strict_types=1);

    $person=array('joe'=> 'smaries','ahmed'=> 'pringles', 'cassie'=>'marmite crisps' , 'ben'=>'mr kiplings cakes' );

    foreach($person as $key=>$var){
        echo $key. '='.$var. '<br>';

    }
?>