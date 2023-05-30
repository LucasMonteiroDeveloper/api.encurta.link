<?php

namespace App\Units\Links\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Http\Controller;
use App\Units\Links\Http\Requests\CreateLinkRequest;
use App\Domains\Links\Link;
use App\Domains\Users\Models\User;
use App\Domains\Links\Repositories\LinkRepository;

class LinkController extends Controller
{
    public function __construct()
    {
        $user = User::first();
        \Auth::login($user);
    }

    public function index()
    {
        return Link::all();
    }

    public function store(CreateLinkRequest $request, LinkRepository $repository)
    {
        $data = $request->all();
        $link = $repository->create($data);

        if ($link) {
            return response()->json($link);
        }

        return response()->json('Falha', 404);
    }
}
