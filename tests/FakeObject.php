<?php
namespace Atlas\Pdo;

class FakeObject
{
    public $id;
    public $name;
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }
}
