<?php

namespace src\Integration;

class DataProvider
{
    private $host;
    private $user;
    private $password;
    public $logger;
    public $cache;

    /**
     * @param $host
     * @param $user
     * @param $password
     */
    public function __construct($host, $user, $password, $cache = null)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->cache = $cache;
    }
    
    /**
     * @param array $request
     *
     * @return array
     */
    public function get(array $request)
    {
        // returns a response from external service
    }
}
