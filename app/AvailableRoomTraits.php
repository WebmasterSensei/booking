<?php

namespace App;

use App\Models\AvailableRoom;

trait AvailableRoomTraits
{
    //
    private function getAvailableRooms(){
        return AvailableRoom::get();
    }
}
