<?php

namespace App\Units\Links\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Http\Controller;
use App\Units\Links\Http\Requests\CreateLinkRequest;
use App\Domains\Links\Link;

class LinkController extends Controller
{
    public function index()
    {
        return Link::all();
    }

    public function store(CreateLinkRequest $request)
    {
        return $request-all();
    }
}
