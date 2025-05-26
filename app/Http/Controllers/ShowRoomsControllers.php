<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowRoomsControllers extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \illuminate\Http\Request $request
     * @return \illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // $rooms=DB::table('rooms')->get();
        $rooms=Room::get();

        if($request->query('id')!=null){
            $rooms=$rooms->where('room_type_id', $request->query('id'));
        }


      return view('rooms.index', ['rooms'=>$rooms]);
    }
}
