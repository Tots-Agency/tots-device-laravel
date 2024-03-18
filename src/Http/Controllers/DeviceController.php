<?php

namespace Tots\Device\Http\Controllers;

use Illuminate\Http\Request;
use Tots\Core\Http\Resources\SuccessResource;
use Tots\Device\Http\Requests\Device\StoreRequest;
use Tots\Device\Http\Requests\Device\UpdateRequest;
use Tots\Device\Http\Responses\Device\ShowResource;
use Tots\Device\Http\Responses\DeviceResponse;
use Tots\Device\Models\TotsDevice;
use Tots\Device\Repositories\TotsDeviceRepository;

class DeviceController extends \Illuminate\Routing\Controller
{
    protected TotsDeviceRepository $repository;

    public function __construct(TotsDeviceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store(StoreRequest $request)
    {
        $item = $this->repository->create($request->user()->id, $request->validated());
        return response()->json(ShowResource::make($item));
    }

    public function update($id, UpdateRequest $request)
    {
        $this->repository->updateByUser($id, $request->user()->id, $request->validated());
        return response()->json(SuccessResource::make());
    }
}