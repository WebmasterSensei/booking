<?php

namespace App\Http\Controllers;

use App\AvailableRoomTraits;
use App\Services\BookingService;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    use AvailableRoomTraits;
    //
    public function __construct(public BookingService $bookingservice)
    {

    }
    public function bookNow(){
        return inertia('Booking/BookNowIndex', [
            'records' => $this->getAvailableRooms(),
        ]);
    }
    public function createBooking(Request $request){
        return $this->bookingservice->addBookingAvailable($request);
    }
}
