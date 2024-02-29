<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\RoomType;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('backend.home');
    }
 
    public function table()
    {
        // $data['rooms']=DB::table('rooms')->get();
        $data['rooms'] = DB::table('rooms')
            ->join('room_types', 'room_types.room_type_id', '=', 'rooms.room_type_id')
            ->select('rooms.*', 'room_types.room_type_name')
            ->where('delete','1')
            ->orderBy('room_id', 'desc')
            ->paginate(config('app.row'));

        return view('backend.table', $data);
    }
    public function billing()
    {
        return view('backend.billing');
    }
    public function createRoom()
    {
        // $room_type=DB::table('room_types')->get();
        $room_type = RoomType::all();
        return view('backend.create-room', compact('room_type'));
    }
    public function edit($id)
    {
        $room_type = DB::table('rooms')
        ->where('room_id',$id)
        ->first();
        
        return view('backend.create-room', compact('room','room_type'));
    }
    public function save(Request $req)
    {
        $req->validate([
            'room_name' => 'required|unique:rooms|max:191',
            'room_status' => 'required',
            'room_type_id' => 'required',
        ], 
        [
            'room_name.required' => 'Please input the room name!',
        ]
        );
        if($req->room_photo){
            $data['room_photo']=$req->file('room_photo')->store('uploads/rooms/','custom');
        }
        try {
            $data = array(
                'room_name' => $req->room_name,
                'room_desc' => $req->room_desc,
                'room_photo'=> $data['room_photo'],
                'room_status' => $req->room_status,
                'room_type_id' => $req->room_type_id,
            );
            $id = DB::table('rooms')->insert($data);
            return redirect('admin/create-room')->with('success', 'Data has been insert');
            // dd($data);
            if ($i) {
                return redirect('admin/create-room')->with('success', 'Data has been insert');
            } else {
                return redirect('admin/create-room')->with('error', 'Data insert error');
            }
        } catch (QueryExecption $e) {
            return back()->with('error', 'Something went wrong!'+$e);
            //throw $th;
        }
    }
    public function deleteRoom($id){
        $id=DB::table('rooms')
        ->where('room_id',$id)
        ->update(['delete'=> '0']);
        return redirect('admin/table')->with('success', 'Data has been deleted');
    }
    public function updateRoom(Request $req)
    {
        $data = $req->except('_token', 'room_id', 'room_photo');
        if ($req->room_photo) {
            $data['room_photo'] = $req->file('room_photo')->store('uploads/rooms/', 'custom');
        }
        $i = DB::table('rooms')
            ->where('room_id', $req->room_id)
            ->update($data);
        if ($i) {
            return redirect("room/edit/" . $req->room_id)
                ->with('success', 'Data has been updated!');
        } else {
            return redirect("room/edit/" . $req->room_id)
                ->with('error', 'Failed Data to updated!');
        }
    }
}
