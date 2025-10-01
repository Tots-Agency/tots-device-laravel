<?php

namespace Tots\Device\Http\Controllers;

use Illuminate\Http\Request;
use Tots\Device\Http\Responses\Event\EventResource;
use Tots\Device\Repositories\TotsEventRepository;

class TotsEventController extends \Illuminate\Routing\Controller
{
    protected TotsEventRepository $repository;

    public function __construct(TotsEventRepository $repository)
    {
        $this->repository = $repository;
    }

    public function list(Request $request)
    {
        $items = $this->repository->allNewerThanId($request->user()->id, $request->get('last_id', 0));
        return EventResource::collection($items);
    }
}