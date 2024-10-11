<?php

// esercizio 2 - Lavorare con le classi astratte pt. 2
// Crea un nuovo file chiamato index.php e, importando la classe appena creata, crea una classe Post con i seguenti attributi
// Titolo
// Categoria
// Tag
// Crea delle istanze di classe Post, iniettando la dipendenze Categoria all’interno dell’attributo dedicato. Crea anche dei metodi per visualizzare gli articoli completi.
// hint: utilizzare la funzione di php require_once(); per richiamare il file  in index.php

require_once ('class.php');

class Post {
    public $titolo;
    public $categoria;
    public $tag;

  public function __construct($titolo, Categoria $categoria, $tag) {
    $this->titolo = $titolo;
    $this->categoria = $categoria;
    $this->tag = $tag;
  }

  public function mostraPost() {
    echo "Titolo: " . $this->titolo . "\n";
    echo "Categoria: " . $this->categoria->getMyCategory() . "\n";
    echo "Tag: " . implode(", ", $this->tag) . "\n";
    echo "\n";
  }
}

$attualità = new Attualità();
$sport = new Sport();
$gossip = new Gossip();
$storia = new Storia();

$post1 = new Post("Ultime notizie politiche", $attualità, ["Politica", "Italia"]);
$post2 = new Post("Risultati delle partite", $sport, ["Calcio", "Serie A"]);
$post3 = new Post("Ultimi gossip delle celebrità", $gossip, ["Celebrità", "Intrattenimento"]);
$post4 = new Post("Eventi storici del Novecento", $storia, ["Storia", "Novecento"]);

$post1->mostraPost();
$post2->mostraPost();
$post3->mostraPost();
$post4->mostraPost();