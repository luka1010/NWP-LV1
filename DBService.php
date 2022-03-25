<?php

class DBService {

    protected $db;
    private static $instance = null;

    private function __construct(MyPDO $db) {
        $this->db = $db;
    }

    public function findAll() {
        return $this->db->query("SELECT * FROM diplomski_radovi")->fetchAll();
    }

    public function insert($name, $text, $link, $oib) {
        $q = $this->db->prepare("INSERT INTO diplomski_radovi (name, text, link, oib) VALUES (?, ?, ?, ?)");
        $valid = $q->execute([$name, $text, $link, $oib]);
        return $valid;
    }

    public static function getInstance(MyPDO $db) {
        if (self::$instance == null) {
            self::$instance = new DBService($db);
        }
        return self::$instance;
    }

    public function destroy() {
        $this->db->destroy();
    }
}
