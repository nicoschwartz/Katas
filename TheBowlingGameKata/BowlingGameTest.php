<?php
/**
 * Created by Nicoschwartz using PhpStorm
 */
include_once('./Game.php');

class BowlingGameTest extends PHPUnit_Framework_TestCase{

    private $game;

    public function setUp(){
        $this->game = new Game();
    }

    private function rollMany($n, $pins){

        for($i=0;$i<$n;$i++){
            $this->game->roll($pins);
        }
    }

    public function testGutterGame(){

        $this->rollMany(20, 0);
        $this->assertEquals(0, $this->game->score());
    }

    public function testAllOnes(){

        $this->rollMany(20, 1);
        $this->assertEquals(20, $this->game->score());
    }


}