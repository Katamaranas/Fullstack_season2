<?php

Class ThailandSurprise {

    public $clothes;
    private $balls;

    public function __construct() {
        $this->balls = rand(0, 1);
    }
    
    public function attachBalls(){
        $this->balls = true;
    }
    
    public function detachBalls(){
       $this->balls = false; 
    }
    
    public function getPhoto(){
        if($this->balls) {
            return 'images/trap.gif';
        } else {
            return 'images/skirt.jpg';
        }
    }

}

$surprise = new ThailandSurprise();

print $surprise->clothes = 'miniskirt';
?>