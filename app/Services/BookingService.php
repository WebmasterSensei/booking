<?php

namespace App\Services;

use App\Models\AvailableRoom;
use Illuminate\Support\Facades\Storage;

class BookingService
{
    public function __construct()
    {
        //
    }

    public function addBookingAvailable($request){

        $file = $request->fileList['file']['file'];
        $filename = $request->fileList['file']['name'];

        if($file){
            Storage::disk('public')->putFileAs('roomimage', $file, $filename);
        }

        AvailableRoom::create([
            'price' => $request->price,
            'description' => $request->desc,
            'image' => $filename,
        ]);

        return response()->json([
            'status' => 'success',
            'title' => 'Success',
            'msg' => 'Successfully Adding Rooms Available',
        ]);
    }
}
