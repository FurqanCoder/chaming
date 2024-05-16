<?php

namespace App\Http\Controllers\admin;

use App\Events\Contacts;
use App\Http\Controllers\Controller;
use App\Models\chatroom;
use App\Models\Chatusers;
use App\Models\Messages;
use Illuminate\Http\Request;
use App\Events\SentMessages;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Messages::select('room_id')
            ->orderBy('created_at', 'desc')
            ->groupBy('room_id')
            ->get();

        $con = [];
        foreach ($contacts as $contact) {
            $room = ChatRoom::where('id', $contact->room_id)->first();
            $users = Customer::where('id', $room->user_id)->first();
            $message = Messages::where('room_id', $contact->room_id)
                ->orderBy('created_at', 'desc')
                ->first();
            $con[] = [
                'room' => $room,
                'users' => $users,
                'message' => $message,
            ];
        }
        return view('dashboard.chat.chat',['con' => $con]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function sent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'message' => 'required',
            'user_id' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }
    
        // $user = Auth::user();
        // $userId = $request->user_id;
    $userId = 2;
        $chatroom = Chatroom::where('user_id', $request->user_id)
                            ->where('admin_id', $userId)
                            ->first();
    
        if (!$chatroom) {
            $chatroom = Chatroom::create([
                'user_id' => $request->user_id,
                'admin_id' => $userId,
            ]);
    
            if (!$chatroom) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Failed to create chat room',
                ]);
            }
        }
    
        DB::beginTransaction();
        try {
            $message = Messages::create([
                'sender_id' => $request->user_id,
                'message' => $request->message,
                'room_id' => $chatroom->id,
            ]);
    
            broadcast(new SentMessages($message))->toOthers();
            
            DB::commit();
            $contacts = Messages::select('room_id')
            ->orderBy('created_at', 'desc')
            ->groupBy('room_id')
            ->get();

        $con = [];
        foreach ($contacts as $contact) {
            $room = ChatRoom::where('id', $contact->room_id)->first();
            $users = Customer::where('id', $room->user_id)->first();
            $message = Messages::where('room_id', $contact->room_id)
                ->orderBy('created_at', 'desc')
                ->first();
            $con[] = [
                'room' => $room,
                'users' => $users,
                'message' => $message,
            ];
        }
            return response()->json([
                'status' => 'success',
                'data' => $message,
            ]);
            broadcast(new Contacts($con))->toOthers();
        } catch (\Exception $e) {
            DB::rollBack();
            
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }
    



    /**
     * Store a newly created resource in storage.
     */
    public function send(Request $request)
    {
        // dd($request);
        return response()->json(['message' => $request]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
