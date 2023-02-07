<?php

trait Position{
    public $magazzino;
    public $corsia;
    public $scaffale;

    public function getPosition(){
        return $this->magazzino . ' ' . $this->corsia . ' ' . $this->scaffale;
    }

    public function setPosition( $magazzino, $corsia, $scaffale){
        $this->magazzino = $magazzino;
        $this->corsia = $corsia;
        $this->scaffale = $scaffale;
    }
}