<?php
// Creare una o più classi a vostro piacimento, che rappresentino degli oggetti comuni.
// Dichiarate le sue proprietà e quindi il costruttore per istruire la classe su come, appunto, creare l'oggetto.
// Instanziare almeno 3 oggetti per ciascuna classe.
// Bonus: Provare a far interagire due oggetti. Per esempio, come abbiamo visto in classe, dove nella Biblioteca aggiungevamo il libro (oggetto Book).
// Quindi nel bonus, il consiglio è quello di creare una classe che "contenga" un'altra. Es: Il Frigorifero con il Cibo, Il Concessionario con l'Automobile, Il Giradischi con il Vinile... etc..

class Persona{
  public $nome;
  public $cognome;
  public $eta;
  public $sesso;
  public $preferenze;
  public function __construct($nome, $cognome, $eta, $sesso){
    $this -> nome = $nome;
    $this -> cognome = $cognome;
    $this -> eta = $eta;
    $this -> sesso = $sesso;
  }
  function addPreferenze(Preferenze $preferenze){
    $this -> preferenze = $preferenze;
  }
}

class Preferenze{
  public $sport;
  public $musica;
  public $colore;
  private $posizioneALetto;
  public function __construct($sport, $musica, $colore, $posizioneALetto){
    $this -> sport = $sport;
    $this -> musica = $musica;
    $this -> colore = $colore;
    $this -> posizioneALetto = $posizioneALetto;
  }
  public function getCity() {
    return $this -> posizioneALetto;
  }
}

// prefenze
$preferenze1 = new Preferenze('danza', 'classica', 'rosa', 'la pecorina');
$preferenze2 = new Preferenze('calcio', 'rock', 'rosso', 'il missionario');
$preferenze3 = new Preferenze('nuoto', 'punk', 'blu', 'la capriola');

// persone:
$persona1 = new Persona('Gennaro', 'Santoro', '32', 'maschio');
$persona1 -> addPreferenze($preferenze2);
$persona2 = new Persona('Luigi', 'Gingirillo', '24', 'maschio');
$persona2 -> addPreferenze($preferenze3);
$persona3 = new Persona('Franca', 'Valalla', '30', 'femmina');
$persona3 -> addPreferenze($preferenze1);

print_r($persona1);
echo '<br>';
echo '<br>';
print_r($persona2);
echo '<br>';
echo '<br>';
print_r($persona3);
