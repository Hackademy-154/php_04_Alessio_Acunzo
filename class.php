<?php

abstract class Categoria {
    abstract public function getMyCategory();
}

class Attualità extends Categoria { 

    public function getMyCategory(){
        return "Attualità";
    }
}

class Sport extends Categoria { 

    public function getMyCategory(){
        return "Sport";
    }
}

class Gossip extends Categoria {

    public function getMyCategory(){
        return "Gossip";
    }
}

class Storia extends Categoria {

    public function getMyCategory(){
        return "Storia";
    }
}

$attualità = new Attualità();
echo $attualità->getMyCategory() . "\n";

$sport = new Sport();
echo $sport->getMyCategory() . "\n";

$gossip = new Gossip();
echo $gossip->getMyCategory() . "\n";

$storia = new Storia();
echo $storia->getMyCategory() . "\n";