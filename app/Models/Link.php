<?php

namespace App\Models;

class Link
{

    private $rel;
    private $href;




    public function __construct(string $r, string $h)
    {
        $this->rel = $r;
        $this->href = $h;
    }

    public function getRel(): string
    {
        return $this->rel;
    }

    public function getHref(): string
    {
        return $this->href;
    }
}
