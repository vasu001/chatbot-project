<?php

namespace App\Http\Conversations;


use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class ChatConversation extends Conversation
{
    protected $name;
    protected $webact;
    protected $webname;
    protected $webbrand;
    protected $webimage;
    protected $webheader;
    protected $webheaderpara;

    public function askName(){
        return $this->ask('Hello! I am Webber, your personal webpage designer. What\'s your name?', function(Answer $answer){
            $name = $answer->getText();
            
            $this->say('Welcome '.$name. ', let\'s create your new webpage!');
            
            $this->askWebpageActivity();
        });
    }
    
    public function askWebpageActivity(){
        $question = Question::create("What type of activity would your webpage be for?")
        ->fallback('Unable to ask question')
        ->callbackId('ask_webpage_activity')
        ->addButtons([
            Button::create('Blog')->value('blog'),
            Button::create('Food')->value('food'),
            Button::create('Books')->value('books'),
            Button::create('E-Commerce')->value('ecom'),
            Button::create('Yoga')->value('yoga'),
            Button::create('Science')->value('science'),
        ]);
        
        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                if ($answer->getValue() === 'blog') {
                    $webact = 'Blog';
                    $this->say($webact);
                } else if($answer->getValue() === 'food') {
                    $webact = 'Food';
                    $this->say($webact);
                } else if($answer->getValue() === 'books') {
                    $webact = 'Books';
                    $this->say($webact);
                } else if($answer->getValue() === 'ecom') {
                    $webact = 'E-Commerce';
                    $this->say($webact);
                } else if($answer->getValue() === 'yoga') {
                    $webact = 'Yoga';
                    $this->say($webact);
                } else if($answer->getValue() === 'science') {
                    $webact = 'Science';
                    $this->say($webact);
                }
            }
            $this->say('Good, now let\'s name your webpage');
            $this->askTitle();
       });
    }

    public function askTitle(){
        $this->ask('What\'s the title of your page?', function(Answer $answer){
            $webname = $answer->getText();
            $this->say('Got it!');
            $this->say('Now let\'s name your brand'); 
            $this->askBrand();
        });
    }

    public function askBrand(){
        $this->ask('What would you like your brand name be?', function(Answer $answer){
            $webbrand = $answer->getText();
            $this->say('Thankyou');
            $this->askSlider();
        });
    }

    // public function askNavigation(){
    //      $question2 = Question::create("Which navigation pages would you like to have?")
    //     ->fallback('Unable to ask question')
    //     ->callbackId('ask_webpage_navigation')
    //     ->addButtons([
    //         Button::create('Home')->value('home'),
    //         Button::create('About')->value('about'),
    //         Button::create('Services')->value('services'),
    //         Button::create('Contact')->value('contact')
    //     ]);
    //     $this->ask($question2, function(Answer $answer){
    //         if ($answer->isInteractiveMessageReply()) {
    //             if ($answer->getValue() === 'home') {
    //                 $this->userNavigation = 'Home';
    //                 $this->say($this->userNavigation);
    //             }
    //             if($answer->getValue() === 'about') {
    //                 $this->userNavigation = 'About';
    //                 $this->say($this->userNavigation);
    //             }
    //             if($answer->getValue() === 'services') {
    //                 $this->userNavigation = 'Services';
    //                 $this->say($this->userNavigation);
    //             }
    //             if($answer->getValue() === 'contact') {
    //                 $this->userNavigation = 'Contact';
    //                 $this->say($this->userNavigation);
    //             }
    //         }
    //         $this->askSlider();
    //     });
    // }

    public function askSlider(){
        $this->ask('Do you like to have slider images? [Yes/No]', function(Answer $answer){
            $webimage = $answer->getText();
            $this->say($webimage);
            if ($webimage === 'yes'){
                $this->askUpload();
            }else{
                $this->askWelcome();
            }
        });
    }

    public function askUpload(){
        $this->say('Upload the slider images');
        $this->askWelcome();
    }

    public function askWelcome(){
        $this->ask('What will be your welcome text? [this is the heading text]', function(Answer $answer){
            $webheader = $answer->getText();
            $this->say($webheader);
            $this->say('Great!');
            $this->askWelcomeP();
        });
    }

    public function askWelcomeP(){
        $this->ask('Now, what would be your welcome text?', function(Answer $answer){
            $webheaderpara = $answer->getText();
            $this->say($webheaderpara);
            $this->say('Got it! Just wait for a moment while we generate your webpage');
            $this->storeInfo();
        });
    }

    public function storeInfo(){
        $data = array(
            'name' => $name,
            'webact' => $webact,
            'webname' => $webname,
            'webbrand' => $webbrand,
            'webimage' => $webimage,
            'webheader' => $webheader,
            'webheaderpara' => $webheaderpara
            );
        return view('/store')->with($data);
    }

    public function run()
    {
        // This will be called immediately
        $this->askName();
    }
}
