<?php
namespace Acme;
class Foo {
    public $name;
    function __construct()
    {
        $this->name = 'Foo';
    }
    function getName() {
        return $this->name;
    }
}