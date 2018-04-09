<?php

namespace App\Http\Conversations;


use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Storages\Storage;

class ChatConversation extends Conversation
{   
    public function askName(){
        $this->bot->typesAndWaits(1);
        return $this->ask('Hello! I am Webber, your personal webpage designer. What\'s your name?', function(Answer $answer){
            $name = $answer->getText();
            $this->bot->typesAndWaits(1);
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
            Button::create('Art')->value('art'),
            Button::create('Portfolio')->value('portfolio'),
            Button::create('Start Up')->value('stup'),
            Button::create('Social Media')->value('socmed'),
        ]);
        
        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                if ($answer->getValue() === 'blog') {
                    $webact = 'Blog';
                    $this->say($webact);
                } else if($answer->getValue() === 'food') {
                    $webact = 'Food';
                    $this->say($webact);
                } else if($answer->getValue() === 'art') {
                    $webact = 'Art';
                    $this->say($webact);
                } else if($answer->getValue() === 'portfolio') {
                    $webact = 'PortFolio';
                    $this->say($webact);
                } else if($answer->getValue() === 'stup') {
                    $webact = 'Start Up';
                    $this->say($webact);
                } else if($answer->getValue() === 'socmed') {
                    $webact = 'Social Media';
                    $this->say($webact);
                }
            }
            $this->bot->typesAndWaits(1); 
            $this->say('Good, now let\'s name your webpage');
            $this->askTitle();
       });
    }

    public function askTitle(){
        $this->ask('What\'s the title of your page?', function(Answer $answer){
            $webname = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say($webname); 
            $this->say('Got it!');
            $this->say('Now let\'s name your brand'); 
            $this->askBrand();
        });
    }

    public function askBrand(){
        $this->ask('What would you like your brand name be?', function(Answer $answer){
            $webbrand = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say($webbrand); 
            $this->say('Done!');
            $this->askWelcome();
        });
    }

    public function askWelcome(){
        $this->ask('What will be your welcome text? [this is the heading text]', function(Answer $answer){
            $webheader = $answer->getText();
            $this->bot->typesAndWaits(1); 
            $this->say($webheader);
            $this->say('Great!');
            $this->askWelcomeP();
        });
    }

    public function askWelcomeP(){
        $this->ask('Now, what would be your welcome text?', function(Answer $answer){
            $webheaderpara = $answer->getText();
            $this->bot->typesAndWaits(1); 
            $this->say($webheaderpara);
            $this->say('Got it! Just wait for a moment while we generate your webpage');      
        });
    }
    public function run()
    {
        // This will be called immediately
        $this->askName();
    }
  

}
