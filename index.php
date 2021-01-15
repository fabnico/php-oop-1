<?php
   class Stanza{
      public $numero;
      public $posti_letto;
      public $fumatori;

      function __construct($numero,$posti_letto,$fumatori) {
         $this->numero = $numero;
         $this->posti_letto = $posti_letto;
         $this->fumatori = $fumatori;
      }

      public function info(){
         return "Stanza numero:" . $this->numero . " Posti letto:" . $this->posti_letto . " Stanza fumatori:" . $this->fumatori ;
      }
   }

   $stanza_1 = new Stanza(1,4,"No");
   $stanza_2 = new Stanza(2,2,"Si");

   echo
      $stanza_1->info() .
      "<br>" .
      $stanza_2->info();


 ?>
