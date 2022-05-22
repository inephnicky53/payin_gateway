<?php
namespace PayIN\Common;

use PayIN\Rest\Connections;

class PayINModel extends Connections
{

    public $props = [];

    public function __construct($data = null)
    {
        parent::__construct();
        $class   = new \ReflectionClass($this);
        $methods = $class->getMethods();
        foreach ($methods as $method)
        {
            if (!in_array($method->name, $this->props))
            {
                $this->props[$method->name] = $method->name;
            }
        }
    }
}
