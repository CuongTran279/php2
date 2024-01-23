<?php
    class dongVat{
        public $ten;
        public $mauLong;   

        public function __construct($ten,$mauLong)
        {
            $this->ten = $ten;
            $this->mauLong = $mauLong;
        }
        public function an(){
            echo "PT ăn";
        }
        public function nhay(){
            echo "PT nhảy";
        }
    }
    class conMeo extends dongVat{
        public $tiengKeu;
        public $xuatSu;

        public function __construct($ten,$mauLong,$tiengKeu,$xuatSu)
        {
            parent::__construct($ten,$mauLong);
            $this->tiengKeu = $tiengKeu;
            $this->xuatSu = $xuatSu;
        }
        public function di(){
            echo "PT đi";
        }
        public function nhay(){
            parent::nhay();
            echo "PT múa";
        }
    }
    $conMEo = new conMeo("fas","gág","gág","gág");
    $conMEo->di();
    $conMEo->an();
    $conMEo->nhay();
?>