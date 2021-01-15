<?php
   class Stanza{
      public $numero;
      public $posti_letto;
      public $fumatori;

      function __construct($fumatori) {
         $this->fumatori = $fumatori;
      }

      public function info(){
         return "Stanza numero:" . $this->numero . " Posti letto:" . $this->posti_letto . " Stanza fumatori:" . $this->fumatori ;
      }
   }

   $stanza_1 = new Stanza("No");
   $stanza_1->numero = 1;
   $stanza_1->posti_letto = 4;

   $stanza_2 = new Stanza("Si");
   $stanza_2->numero = 2;
   $stanza_2->posti_letto = 2;

   echo
      $stanza_1->info() .
      "<br>" .
      $stanza_2->info();


 ?>
