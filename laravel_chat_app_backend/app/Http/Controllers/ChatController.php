<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function getUserChats()
    {
        $data = array([
            'name'=>'Jon Doe',
            'messageText'=>'Hello there',
            'imageUrl'=>'image_goes_here',
            'time'=>'Today',
        ], [
            'name'=>'Jon Doe',
            'messageText'=>'Hello how is the testing',
            'imageUrl'=>'Jon Doe',
            'time'=>'Yesterday',
        ]);

        
        return response()->json($data);
    }

    public function getChatDetails()
    {
        $data = array([
            'messageContent'=>'Hello, John Doe',
            'messageType'=>'sender'
        ], [
            'messageContent'=>'Jon Doe',
            'messageType'=>'receiver'
        ], [
            'messageContent'=>'Just cool',
            'messageType'=>'sender'
        ], [
            'messageContent'=>'This is testing message',
            'messageType'=>'receiver'
        ]);


        return response()->json($data);
    }
}
