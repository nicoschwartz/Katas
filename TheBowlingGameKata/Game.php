<?php
/**
 * Created by Nicoschwartz using PhpStorm
 */

class Game{

    private $rolls = array();
    private $currentRoll = 0;

    public function roll($pins){

        $this->rolls[$this->currentRoll++] = $pins;
    }

    public function score(){

        $score = 0;
        for($i=0;$i<count($this->rolls);$i++){
            $score+=$this->rolls[$i];
        }
        return $score;
    }
}