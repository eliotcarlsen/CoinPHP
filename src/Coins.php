<?php
    class Coins
    {

      public $q;
      public $d;
      public $n;
      public $p;



      function coinNumber($input)
      {
        $cents = $input*100;
        $this->q = (int) ($cents/25);
        $this->d = (int) (($cents-$this->q*25)/10);
        $this->n = (int) (($cents-$this->q*25-$this->d*10)/5);
        $this->p = (int) (($cents-$this->q*25-$this->d*10)%5);
      }
      
    }
?>
