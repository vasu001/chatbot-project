<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\ExampleConversation;
use App\Http\Conversations\ChatConversation;

use App\BotmanDB;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
     public function index()
    {
        $data = BotmanDB::orderby('id','asc')->paginate(10);
        return view('botman.index')->with('botman_d_bs', $data);
    }

    public function handle()
    {
        $botman = app('botman');

        $botman->listen();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tinker()
    {
        return view('tinker');
    }

    /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new ExampleConversation());
    }

    public function chatConversation(BotMan $bot)
    {
        $bot->startConversation(new ChatConversation());
        
    }

    public function submit(Request $request){
        $bot = new BotmanDB;
            
        $bot->name = $request->input('name');
        $bot->webact = $request->input('webact');
        $bot->webname = $request->input('webname');
        $bot->webbrand = $request->input('webbrand');
        $bot->webimage = $request->input('webimage');
        $bot->webimage = $request->input('webheader');
        $bot->webheaderpara = $request->input('webheaderpara');
        

        $bot->save();


        return redirect('/storeinfo')->with('success', 'Data Stored');
    }
}
