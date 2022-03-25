<?php

include "IRadovi.php";
include 'MyPDO.php';
include 'DBService.php';

class DiplomskiRadovi implements IRadovi
{
    private $name;
    private $text;
    private $link;
    private $oib;

    private $pdo;

    public function __construct()
    {
        $this->pdo = DBService::getInstance(MyPDO::getInstance());
    }

    public function create($name, $text, $link, $oib)
    {
        $this->name = $name;
        $this->text = $text;
        $this->link = $link;
        $this->oib = $oib;
    }

    public function save()
    {
        $this->pdo->insert($this->name, $this->text, $this->link, $this->oib);
    }

    public function read()
    {
        return json_encode($this->pdo->findAll());
    }

    public function finish() {
        $this->pdo->destroy();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function getOib()
    {
        return $this->oib;
    }

    public function setOib($oib)
    {
        $this->oib = $oib;
    }
}