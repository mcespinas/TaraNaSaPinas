<?php

namespace App\Http\Controllers;
use App\Booking;
use App\Deal;
use App\User;

use Illuminate\Http\Request;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$bookings = Booking::orderBy('book_start', 'asc')->paginate(10);
        //return view('bookings.index')->with('bookings', $bookings);

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('bookings.index')->with('bookings', $user->bookings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deals = Deal::all();
        $booking = Booking::find($id);
        return view('bookings.show')->with('booking', $booking)->with('deals', $deals);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::find($id);
        return view('bookings.edit')->with('booking', $booking);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'book_status' => 'required',
            ]);

        //Edit Booking
        $booking = Booking::find($id);
        $booking->book_status = $request->input('book_status');
        
        $booking->save();

        return redirect('/bookings')->with('success', 'Booking Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
