<?php

include './NodeInterface.php';
include './Node.php';

$tree = (new \Node('Electronics'))
    ->addChild(
        (new \Node('Televisions'))
            ->addChild(new \Node('Tube'))
            ->addChild(new \Node('LCD'))
            ->addChild(new \Node('Plasma'))
        )
    ->addChild(
        (new \Node('Portable electronic'))
            ->addChild((new \Node('MP3 players'))->addChild(new \Node('Flash')))
            ->addChild(new \Node('CD players'))
            ->addChild(new \Node('2 way radios'))
        )    
    ;

    

//var_dump($tree) ;

//echo $tree ;


?>

