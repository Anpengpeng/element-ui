<?php
namespace Yxk\Hello;

use Illuminate\Config\Repository;

class Hello
{
    protected $config;

    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    public function sayHello()
    {
        return 'Hello ' . $this->config->get('hello.area');
    }
}
