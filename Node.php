<?php

class Node implements NodeInterface {

    public $name ;
    public $children = [];
    
    public function __construct(string $name){
        $this->name = $name;
    }

    public function __toString(){
        /** сюда нужно поставить рекурсивную функцию 
         * что-то вроде return  recurse()
        */
        return '+' ;       
    }
    
    public function getName():string {
        $this->name ;
        return $this ;
    }

    /**
     * @return Node[] ;
     */

    public function getChildren():array {
        return $this->children;
    }

    public function addChild(Node $node):self{
        $this->children[] = $node;
        return $this ;
    }

    /** здесь дополнительно создать и прописать рекурсивную функцию 
     * function recurse()
    */
}


