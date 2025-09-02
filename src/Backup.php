<?php

namespace OvenAuto\Backuper;

class Backup
{
    private string $host;
    private int $port;
    private string $base;
    private string $user;
    private string $pass;

    public function setHost(string $val)
    {
        $this->host = $val;
    }



    public function setPort(int $val)
    {
        $this->port = $val;
    }



    public function setBase(string $val)
    {
        $this->base = $val;
    }



    public function setUser(string $val)
    {
        $this->user = $val;
    }



    public function setPass(string $val)
    {
        $this->pass = $val;
    }
}
