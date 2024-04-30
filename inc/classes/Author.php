<?php

class Author 
{
    public $name;
    public $id;

    public function __construct(string $name = "", int $id = 0)
    {
        $this->name = $name;
        $this->id = $id;
    }
}