<?php

namespace App\Domains\Links\Repositories;

use App\Support\Domain\Repository;
use App\Domains\Links\Link;

class LinkRepository extends Repository
{
    protected $modelClass = Link::class;
}