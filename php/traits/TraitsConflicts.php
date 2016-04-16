<?php

/**
 * Traits: http://php.net/manual/en/language.oop5.traits.php
 * Sitepoint: http://www.sitepoint.com/using-traits-in-php-5-4/
 */

trait Game
{
    function play() {
        echo "Playing a game";
    }
}

trait Music
{
    function play() {
        echo "Playing music";
    }
}

class Player
{
    use Game, Music {
        Game::play as gamePlay;
        Music::play insteadof Game;
    }
}

$player = new Player();
$player->play(); // Playing music
$player->gamePlay(); //Playing a game