<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('admin.booking.index',compact('bookings'));
    }
    public function confirmed($id)
    {
        $booking = Booking::find($id);
        $booking->status = 1;
        $booking->save();
        sendMail($booking->email,"رزرو میز",confirmedMessageBooking());
        return back();
    }

    public function cancel($id)
    {
        $booking = Booking::find($id);
        $booking->status = 0;
        $booking->save();
        sendMail($booking->email,"رزرو میز",cancelMessageBooking());
        return back();
    }
}