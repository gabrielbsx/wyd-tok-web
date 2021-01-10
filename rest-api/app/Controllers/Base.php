<?php

namespace app\Controllers;
use mysqli;

class Base
{
    public $conn;
    public $game;
    public $dbsrv;
    public $tmsrv;
    public $common;
    public $import;
    public $data;
    public $base;

    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'valland');
        $this->game = 'F:/Github/WYD-7.56/Server/';
        $this->dbsrv = 'DBSrv/run/';
        $this->tmsrv = 'TMSrv/run/';
        $this->tmsrv2 = 'TMSrv_2/run/';
        $this->serverdata = 'ServerData/';
        $this->common = 'Common/';
        $this->import = 'Imports/';
        $this->importCash = $this->import . 'ImportCash/';
        $this->importItem = $this->import . 'ImportItem/';
        $this->importPass = $this->import . 'ImportPass/';
        $this->importUser = $this->import . 'ImportUser/';
        $this->data = ['status' => 'error'];
        $this->base = __DIR__ . '/../../public/base';
    }

    public function getInitial($user)
    {
        $initial = substr($user, 0, 1);
        if (!preg_match('/^[a-zA-Z]$/', $initial))
            $initial = 'etc';
        return $initial;
    }

    public function setDataJson()
    {
        $this->data = json_encode($this->data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }
}