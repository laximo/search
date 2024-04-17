<?php

namespace Laximo\Search;

class Config
{
    private $login;

    private $password;

    private $serviceUrl = 'https://sws.laximo.ru';

    private $timeout = 10;

    private $connect_timeout = 3;

    private $debug = false;

    public function __construct($params)
    {
        $this->setParams($params);
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getServiceUrl()
    {
        return $this->serviceUrl;
    }

    /**
     * @param mixed $serviceUrl
     */
    public function setServiceUrl($serviceUrl)
    {
        $this->serviceUrl = $serviceUrl;
    }

    /**
     * @return mixed
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @param mixed $timeout
     */
    public function setTimeout($timeout): void
    {
        $this->timeout = $timeout;
    }

    /**
     * @return mixed
     */
    public function getConnectTimeout()
    {
        return $this->connect_timeout;
    }

    /**
     * @param mixed $connect_timeout
     */
    public function setConnectTimeout($connect_timeout): void
    {
        $this->connect_timeout = $connect_timeout;
    }

    private function setParams($params) {
        foreach ($params as $name => $param) {
            if(method_exists($this, 'set' . $name)) {
                $this->{'set' . $name}($param);
            }
        }
    }

    /**
     * @return bool
     */
    public function isDebug(): bool
    {
        return $this->debug;
    }

    /**
     * @param bool $debug
     */
    public function setDebug(bool $debug): void
    {
        $this->debug = $debug;
    }


}
