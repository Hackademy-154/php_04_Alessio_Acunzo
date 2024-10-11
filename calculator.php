<?php

// esercizio 4
// Crea un trait chiamato “Calculator“ definendo le seguenti operazioni tra numeri:
// public function sum($a, $b) {
//   return $a + $b;
// }
// public function sub($a, $b) {
//   return $a - $b;
// }
// public function mul($a, $b) {
//   return $a * $b;
// }
// public function div($a, $b) {
//   return $a / $b;
// }
// public function sqr($a){
//   return sqrt($a);
// }
// Crea una classe Rettangolo con due attributi
// Base (b);
// Altezza (h);
// Crea tre metodi che vanno a calcolare:
// Area → b * h;
// Perimetro → 2 * b + 2 * h;
// Diagonale → √ hˆ2 + bˆ2 (Tutto sotto radice)
// Per fare questi calcoli dovete sfruttare le funzioni del Trait Calculator
//  extra: provate a creare classi per altre figure geometriche e calcolare area e perimetro anche lì sempre sfruttando il trait



trait Calculator
{
    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }

    public function mul($a, $b)
    {
        return $a * $b;
    }

    public function div($a, $b)
    {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Divisione per zero non permessa.";
        }
    }

    public function sqr($a)
    {
        return sqrt($a);
    }
}


class Rettangolo
{
    use Calculator; 

    public $base;
    public $altezza;

    public function __construct($base, $altezza)
    {
        $this->base = $base;
        $this->altezza = $altezza;
    }


    public function calcolaArea()
    {
        return $this->mul($this->base, $this->altezza);
    }


    public function calcolaPerimetro()
    {
        return $this->sum($this->mul(2, $this->base), $this->mul(2, $this->altezza));
    }


    public function calcolaDiagonale()
    {
        $sommaQuadrati = $this->sum($this->mul($this->base, $this->base), $this->mul($this->altezza, $this->altezza));
        return $this->sqr($sommaQuadrati);
    }
}

// Esempio per un rettangolo con base 5 e altezza 12
$rettangolo = new Rettangolo(5, 12);

echo "Area del rettangolo: " . $rettangolo->calcolaArea() . "\n";
echo "Perimetro del rettangolo: " . $rettangolo->calcolaPerimetro() . "\n";
echo "Diagonale del rettangolo: " . $rettangolo->calcolaDiagonale() . "\n";


// Esempio per un quadrato:

class Quadrato
{
    use Calculator; 

    public $lato;

    public function __construct($lato)
    {
        $this->lato = $lato;
    }


    public function calcolaArea()
    {
        return $this->mul($this->lato, $this->lato);
    }


    public function calcolaPerimetro()
    {
        return $this->mul(4, $this->lato);
    }
}

$quadrato = new Quadrato(4);

echo "Area del quadrato: " . $quadrato->calcolaArea() . "\n";
echo "Perimetro del quadrato: " . $quadrato->calcolaPerimetro() . "\n";


