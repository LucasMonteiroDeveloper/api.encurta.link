<?php

namespace App\Units\Links\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Http\Controller;
use App\Units\Links\Http\Requests\CreateLinkRequest;
use App\Domains\Links\Link;
use App\Domains\Links\Repositories\LinkRepository;

class LinkController extends Controller
{
    public function index(LinkRepository $repository)
    {
        $links = $repository->userOnly(true)->getAll();

        return $this->respond->ok($links);
    }

    public function show($id, LinkRepository $repository)
    {
        $link = $repository->findId($id);
        $repository->doClick($link);

        if (!$link) {
            return $this->respond->notFound('Link não foi encontrado');
        }

        return $this->respond->ok($link);
    }

    public function store(CreateLinkRequest $request, LinkRepository $repository)
    {
        $data = $request->all();
        $link = $repository->create($data);

        if ($link) {
            return $this->respond->ok($link);
        }

        return $this->respond->error('Ocorreu algum erro interno');
    }
}
