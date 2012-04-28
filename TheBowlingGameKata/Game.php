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
        $frameIndex = 0;
        for($frame=0;$frame<10;$frame++){
            if($this->isSpare($frameIndex)){
                $score += 10+$this->rolls[$frameIndex+2];
            }else{
                $score += $this->rolls[$frameIndex]+$this->rolls[$frameIndex+1];
            }

            $frameIndex += 2;
        }
        return $score;
    }

    private function isSpare($frameIndex){
        return $this->rolls[$frameIndex]+$this->rolls[$frameIndex+1]==10;
    }
}