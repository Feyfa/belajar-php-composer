<?php 

namespace Fisik\BelajarComposerLibrary;

class Customer
{
    public function __construct(private string $name) 
    {
        
    }

    public function sayHello(string $name = "Guest"): string
    {
        return "Hello $name, My Name Is {$this->name}";
    }
}