<?php

namespace api;

use GuzzleHttp\Client;

class Autoload
{
    public $user;
    public $guzzle;

    /**
     * Autoload constructor.
     * @param $user
     * @param $guzzle
     */
    public function __construct($user)
    {
        $this->user = $user;
        $this->guzzle = new Client();
    }

    public function infoUsers()
    {
        $config = require "login.php";
        $log = $config["login"];
        $password = $config["pass"];

        $res = $this->guzzle->request('GET', 'https://api.github.com/users/' . $this->user, [
            'auth' => ["$log", "$password"]
        ]);
        
        $newuser = json_decode($res->getBody());
        return $newuser;
    }

    public function infoRepos()
    {
        $config = require "login.php";
        $log = $config["login"];
        $password = $config["pass"];

        $res = $this->guzzle->request('GET', 'https://api.github.com/users/' . $this->user . '/repos', [
            'auth' => ["$log", "$password"]
        ]);
        
        $newrepo = json_decode($res->getBody());
        return $newrepo;
    }
}