<?php

interface IRadovi {
    public function create($name, $text, $link, $oib);
    public function save();
    public function read();
}

