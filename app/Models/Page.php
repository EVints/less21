<?php

namespace App\Models;

use App\Models\Link;

class Page
{
    public $title = 'Dynamic title';

    public $links = [];

    public $activeLink = "/";



    public function __construct()
    {
        $this->links[] = new Link('stylesheet', 'http://fonts.googleapis.com/css?family=Raleway:400,500,300,700');
        $this->links[] = new Link('stylesheet', 'http://fonts.googleapis.com/css?family=Crimson+Text:400,600');
        $this->links[] = new Link('stylesheet', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600');
    }
}
