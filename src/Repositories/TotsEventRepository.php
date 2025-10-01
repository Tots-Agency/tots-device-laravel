<?php

namespace Tots\Device\Repositories;

use Tots\Device\Models\TotsEvent;

/**
 *
 * @author matiascamiletti
 */
class TotsEventRepository
{
    public function create($userId, $type, $payload)
    {
        $event = new TotsEvent();
        $event->user_id = $userId;
        $event->type = $type;
        $event->payload = $payload;
        $event->save();

        return $event;
    }

    public function allByUserId($userId)
    {
        return TotsEvent::where('user_id', $userId)->get();
    }

    public function allNewerThanId($userId, $lastId)
    {
        return TotsEvent::where('user_id', $userId)->where('id', '>', $lastId)->get();
    }
}