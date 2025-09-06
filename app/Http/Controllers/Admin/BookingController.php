<?php
namespace App\Http\Controllers\Admin;
use App\Model\Booking;
use App\Http\Controllers\Admin\AdminController;
class BookingController extends AdminController
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