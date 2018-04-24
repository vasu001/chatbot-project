<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
        $data = BotmanDB::orderby('id','desc')->paginate(3);
        return view('botman_d_bs.index')->with('botman_d_bs', $data);
    }
    
    public function show($id)
    {
        $bot = BotmanDB::find($id);
        return view('botman_d_bs.show')->with('bot', $bot);
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

    public function chatConversation(BotMan $bot)
    {
        $bot->startConversation(new ChatConversation());
        
    }
}
