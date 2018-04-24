<?php

namespace App\Http\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChatConversation extends Conversation
{
    public function askName(){

        $this->bot->typesAndWaits(1);
        return $this->ask('Hello! I am Webber, your personal webpage designer. What\'s your name?', function(Answer $answer) {
            $userName = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say('Welcome '.$userName);
            $this->askQuestion($userName);
        });

    }

    public function askQuestion($userName) {

        $question = Question::create("Do you want to build your own web page?")
        ->fallback('Unable to ask question')
        ->callbackId('ask_question')
        ->addButtons([
            Button::create('Cool! Let\'s do it!')->value('yes'),
            Button::create('Nah! I want to do something else...')->value('no'),
        ]);
        $this->ask($question, function(Answer $answer) use ($userName){
            if ($answer->isInteractiveMessageReply()){
                if ($answer->getValue() === 'yes') {
                    $this->buildWebpage($userName);
                }else if($answer->getValue() === 'no'){
                    $this->askNextQuestion($userName);
                }
            }
        });

    }

    public function buildWebpage($userName) {
        $this->bot->typesAndWaits(1);
        $this->say('Great!');
        $this->bot->typesAndWaits(1);
        $this->say('Let\'s start with the template...');
        $this->bot->typesAndWaits(1);
        $question = Question::create("Choose your template")
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

        $this->ask($question, function (Answer $answer) use ($userName){

            if ($answer->isInteractiveMessageReply()) {
                if ($answer->getValue() === 'blog') {

                    $webTemplate = 'Blog';
                    $this->bot->typesAndWaits(1); 
                    $this->say('Great, blog it is then!');
                    $this->makeBlog($userName, $webTemplate);

                } else if($answer->getValue() === 'food') {

                    $webTemplate = 'Food';
                    $this->bot->typesAndWaits(1); 
                    $this->say('Great, food it is then!');
                    $this->makeFood($userName, $webTemplate);

                } else if($answer->getValue() === 'art') {

                    $webTemplate = 'Art';
                    $this->bot->typesAndWaits(1); 
                    $this->say('Great, art it is then!');
                    $this->makeArt($userName, $webTemplate);

                } else if($answer->getValue() === 'portfolio') {

                    $webTemplate = 'PortFolio';
                    $this->bot->typesAndWaits(1); 
                    $this->say('Great, portfolio it is then!');
                    $this->makePFolio($userName, $webTemplate);

                } else if($answer->getValue() === 'stup') {

                    $webTemplate = 'StartUp';
                    $this->bot->typesAndWaits(1); 
                    $this->say('Great, start up it is then!');
                    $this->makeSUp($userName, $webTemplate);

                } else if($answer->getValue() === 'socmed') {

                    $webTemplate = 'Social Media';
                    $this->bot->typesAndWaits(1); 
                    $this->say('Great, social media it is then!');
                    $this->makeSMedia($userName, $webTemplate);

                }
            }
       });
    }

    public function makeBlog($userName, $webTemplate) {
        $this->bot->typesAndWaits(1);
        $this->askBlogTitle($userName, $webTemplate);
    }

    public function askBlogTitle($userName, $webTemplate) {
        $this->ask("What would you like to name your page?", function(Answer $answer) use ($userName, $webTemplate){
            $webTitle = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Got it!");
            $this->say("Let's declare the Welcome Header Text for your page[ex: My Blog/Welcome to My Blog]");
            $this->askBlogHeader($userName, $webTemplate, $webTitle);
        });
    }

    public function askBlogHeader($userName, $webTemplate, $webTitle) {
        $this->ask("What will it be?", function(Answer $answer) use ($userName, $webTemplate, $webTitle) {
            $welcomeHeading = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Done...");
            $this->askBlogWelcomeTextPara($userName, $webTemplate, $webTitle, $welcomeHeading);
        });
    }

    public function askBlogWelcomeTextPara($userName, $webTemplate, $webTitle, $welcomeHeading) {
        $this->ask("Let's type the welcome note to complement the welcome heading text", function (Answer $answer) use ($userName, $webTemplate, $webTitle, $welcomeHeading) {
            $welcomeTextPara = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Now one last thing...");
            $this->askBlogAboutPara($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeTextPara);
        });
    }

    public function askBlogAboutPara($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeTextPara) {
        $this->ask("Write something about yourself. This will make your about section...", function (Answer $answer) use ($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeTextPara) {
            $aboutTextPara = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->storeBlogInfo($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeTextPara, $aboutTextPara);
        });
    }

    public function storeBlogInfo($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeTextPara, $aboutTextPara) {
        DB::table('botman_d_bs')->insert([
            'userName' => $userName,
            'webTemplate' => $webTemplate,
            'webTitle' => $webTitle,
            'welcomeHeading' => $welcomeHeading,
            'welcomeTextPara' => $welcomeTextPara,
            'aboutTextPara' => $aboutTextPara,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        $this->bot->typesAndWaits(5);
        $this->say('Your webpage is ready. Click on Go to your webpage button on the page.');
    }

    public function makeArt($userName, $webTemplate) {
        $this->bot->typesAndWaits(1);
        $this->askArtTitle($userName, $webTemplate);
    }

    public function askArtTitle($userName, $webTemplate) {
        $this->ask("What would you like to name your page?", function(Answer $answer) use ($userName, $webTemplate){
            $webTitle = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Got it!");
            $this->say("Let's declare the Welcome Header Text for your page[ex: My Art/Welcome to My ArtGallery]");
            $this->askArtHeader($userName, $webTemplate, $webTitle);
        });
    }

    public function askArtHeader($userName, $webTemplate, $webTitle) {
        $this->ask("What will it be?", function(Answer $answer) use ($userName, $webTemplate, $webTitle) {
            $welcomeHeading = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Done...");
            $this->askArtWelcomeTextPara($userName, $webTemplate, $webTitle, $welcomeHeading);
        });
    }

    public function askArtWelcomeTextPara($userName, $webTemplate, $webTitle, $welcomeHeading) {
        $this->ask("Let's type the welcome note to complement the welcome heading text", function (Answer $answer) use ($userName, $webTemplate, $webTitle, $welcomeHeading) {
            $welcomeTextPara = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Now one last thing...");
            $this->askArtAboutPara($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeTextPara);
        });
    }

    public function askArtAboutPara($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeTextPara) {
        $this->ask("Write something about yourself. This will make your about section...", function (Answer $answer) use ($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeTextPara) {
            $aboutTextPara = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->storeArtInfo($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeTextPara, $aboutTextPara);
        });
    }

    public function storeArtInfo($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeTextPara, $aboutTextPara) {
        DB::table('botman_d_bs')->insert([
            'userName' => $userName,
            'webTemplate' => $webTemplate,
            'webTitle' => $webTitle,
            'welcomeHeading' => $welcomeHeading,
            'welcomeTextPara' => $welcomeTextPara,
            'aboutTextPara' => $aboutTextPara,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        $this->bot->typesAndWaits(5);
        $this->say('Your webpage is ready. Click on Go to your webpage button on the page.');
    }

    public function makeFood($userName, $webTemplate) {
        $this->bot->typesAndWaits(1);
        $this->askFoodTitle($userName, $webTemplate);
    }

    public function askFoodTitle($userName, $webTemplate) {
        $this->ask("What would you like to name your page?", function(Answer $answer) use ($userName, $webTemplate){
            $webTitle = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Got it!");
            $this->say("Let's declare the Welcome Header Text for your page[ex: My Food/Welcome to Cooking Shooking]");
            $this->askFoodHeader($userName, $webTemplate, $webTitle);
        });
    }

    public function askFoodHeader($userName, $webTemplate, $webTitle) {
        $this->ask("What will it be?", function(Answer $answer) use ($userName, $webTemplate, $webTitle) {
            $welcomeHeading = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Done...");
            $this->askFoodAboutCatchPhrase($userName, $webTemplate, $webTitle, $welcomeHeading);
        });
    }

    public function askFoodAboutCatchPhrase($userName, $webTemplate, $webTitle, $welcomeHeading) {
        $this->ask("Let's type your personal catch phrase about yourself...", function (Answer $answer) use ($userName, $webTemplate, $webTitle, $welcomeHeading) {
            $aboutCatchPhrase = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->askFoodAboutCatchPhraseSideLine($userName, $webTemplate, $webTitle, $welcomeHeading, $aboutCatchPhrase);
        });
    }

    public function askFoodAboutCatchPhraseSideLine($userName, $webTemplate, $webTitle, $welcomeHeading, $aboutCatchPhrase) {
        $this->ask("Let's add a supplement to the above catch-phrase...", function (Answer $answer) use ($userName, $webTemplate, $webTitle, $welcomeHeading, $aboutCatchPhrase) {
            $aboutCatchPhraseSideLine = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->askFoodAboutPara($userName, $webTemplate, $webTitle, $welcomeHeading, $aboutCatchPhrase, $aboutCatchPhraseSideLine);
        });
    }
    public function askFoodAboutPara($userName, $webTemplate, $webTitle, $welcomeHeading, $aboutCatchPhrase, $aboutCatchPhraseSideLine) {
        $this->ask("Write something about yourself. This will make your about section...", function (Answer $answer) use ($userName, $webTemplate, $webTitle, $welcomeHeading, $aboutCatchPhrase, $aboutCatchPhraseSideLine) {
            $aboutTextPara = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->storeFoodInfo($userName, $webTemplate, $webTitle, $welcomeHeading, $aboutCatchPhrase, $aboutCatchPhraseSideLine, $aboutTextPara);
        });
    }

    public function storeFoodInfo($userName, $webTemplate, $webTitle, $welcomeHeading, $aboutCatchPhrase, $aboutCatchPhraseSideLine, $aboutTextPara) {
        DB::table('botman_d_bs')->insert([
            'userName' => $userName,
            'webTemplate' => $webTemplate,
            'webTitle' => $webTitle,
            'welcomeHeading' => $welcomeHeading,
            'aboutCatchPhrase' => $aboutCatchPhrase, 
            'aboutCatchPhraseSideLine' => $aboutCatchPhraseSideLine,
            'aboutTextPara' => $aboutTextPara,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        $this->bot->typesAndWaits(5);
        $this->say('Your webpage is ready. Click on Go to your webpage button on the page.');
    }

    public function makePFolio($userName, $webTemplate) {
        $this->bot->typesAndWaits(1);
        $this->askPFolioTitle($userName, $webTemplate);
    }

    public function askPFolioTitle($userName, $webTemplate) {
        $this->ask("What would you like to name your page?", function(Answer $answer) use ($userName, $webTemplate){
            $webTitle = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Got it!");
            $this->say("Let's declare the Intro Heading for yourself...");
            $this->askPFolioHeader($userName, $webTemplate, $webTitle);
        });
    }

    public function askPFolioHeader($userName, $webTemplate, $webTitle) {
        $this->ask("What will it be?", function(Answer $answer) use ($userName, $webTemplate, $webTitle) {
            $welcomeHeading = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Done...");
            $this->askPFolioHeaderDesignation($userName, $webTemplate, $webTitle, $welcomeHeading);
        });
    }

    public function askPFolioHeaderDesignation($userName, $webTemplate, $webTitle, $welcomeHeading) {
        $this->ask("What will be the Intro Header Designation?", function(Answer $answer) use ($userName, $webTemplate, $webTitle, $welcomeHeading) {
            $welcomeHeadingDesignation = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Done...");
            $this->askPFolioAboutPara($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeHeadingDesignation);
        });
    }

    public function askPFolioAboutPara($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeHeadingDesignation) {
        $this->ask("Write something about yourself. This will make your about section...", function (Answer $answer) use ($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeHeadingDesignation) {
            $aboutTextPara = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->askPFolioLocation($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeHeadingDesignation, $aboutTextPara);
        });
    }

    public function askPFolioLocation($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeHeadingDesignation, $aboutTextPara) {
        $this->ask("Tell your location [ex. city, country]", function(Answer $answer) use($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeHeadingDesignation, $aboutTextPara){
            $location = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->askPFolioPhone($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeHeadingDesignation, $aboutTextPara, $location);
        });
    }

    public function askPFolioPhone($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeHeadingDesignation, $aboutTextPara, $location) {
        $this->ask("Tell your phone [10 digit number]", function(Answer $answer) use($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeHeadingDesignation, $aboutTextPara, $location){
            $phone = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->askPFolioEmail($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeHeadingDesignation, $aboutTextPara, $location, $phone);
        });
    }

    public function askPFolioEmail($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeHeadingDesignation, $aboutTextPara, $location, $phone) {
        $this->ask("Tell your email...", function(Answer $answer) use($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeHeadingDesignation, $aboutTextPara, $location, $phone){
            $email = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->storePFolioInfo($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeHeadingDesignation, $aboutTextPara, $location, $phone, $email);
        });
    }

    public function storePFolioInfo($userName, $webTemplate, $webTitle, $welcomeHeading, $welcomeHeadingDesignation, $aboutTextPara, $location, $phone, $email) {
        DB::table('botman_d_bs')->insert([
            'userName' => $userName,
            'webTemplate' => $webTemplate,
            'webTitle' => $webTitle,
            'welcomeHeading' => $welcomeHeading,
            'welcomeHeadingDesignation' => $welcomeHeadingDesignation,
            'aboutTextPara' => $aboutTextPara,
            'location' => $location,
            'phone' => $phone,
            'email' => $email,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        $this->bot->typesAndWaits(5);
        $this->say('Your webpage is ready. Click on Go to your webpage button on the page.');
    }

    public function makeSUp($userName, $webTemplate) {
        $this->bot->typesAndWaits(1);
        $this->askSUpTitle($userName, $webTemplate);
    }

    public function askSUpTitle($userName, $webTemplate) {
        $this->ask("What would you like to name your page?", function(Answer $answer) use ($userName, $webTemplate){
            $webTitle = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Got it!");
            $this->say("Let's declare the Brand Name of your Product...");
            $this->askSUpBrand($userName, $webTemplate, $webTitle);
        });
    }

    public function askSUpBrand($userName, $webTemplate, $webTitle) {
        $this->ask("What will it be?...", function(Answer $answer) use($userName, $webTemplate, $webTitle){
            $webpageBrand = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say('Done!');
            $this->askSUpHeader($userName, $webTemplate, $webTitle, $webpageBrand);
        });
    }

    public function askSUpHeader($userName, $webTemplate, $webTitle, $webpageBrand) {
        $this->ask("Let's spell out the Welcome Showcase Header Message...", function(Answer $answer) use ($userName, $webTemplate, $webTitle, $webpageBrand) {
            $welcomeHeading = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Done...");
            $this->askSUpHeaderDesignation($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading);
        });
    }

    public function askSUpHeaderDesignation($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading) {
        $this->ask("What will be the Showcase Header Tag Line?", function(Answer $answer) use ($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading) {
            $welcomeHeadingDesignation = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Done...");
            $this->askSUpWelcomeTextPara($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation);
        });
    }

    public function askSUpWelcomeTextPara($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation) {
        $this->ask("What will be the Showcase Header Text Intro?", function(Answer $answer) use ($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation) {
            $welcomeTextPara = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Done...");
            $this->askSUpAboutSlogan($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara);
        });
    }


    public function askSUpAboutSlogan($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara) {
        $this->ask("Write your About Slogan [ex. We know design] ...", function (Answer $answer) use ($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara) {
            $aboutCatchPhrase = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->askSUpAboutSideSlogan($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara, $aboutCatchPhrase);
        });
    }

    public function askSUpAboutSideSlogan($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara, $aboutCatchPhrase) {
        $this->ask("Write your Side Slogan [ex. We know design] ...", function (Answer $answer) use ($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara, $aboutCatchPhrase) {
            $aboutCatchPhraseSideLine = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->askSUpLocation($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara, $aboutCatchPhrase, $aboutCatchPhraseSideLine);
        });
    }


    public function askSUpLocation($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara, $aboutCatchPhrase, $aboutCatchPhraseSideLine) {
        $this->ask("Tell your location [ex. city, country]", function(Answer $answer) use($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara, $aboutCatchPhrase, $aboutCatchPhraseSideLine){
            $location = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->askSUpPhone($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara, $aboutCatchPhrase, $aboutCatchPhraseSideLine, $location);
        });
    }

    public function askSUpPhone($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara, $aboutCatchPhrase, $aboutCatchPhraseSideLine, $location) {
        $this->ask("Tell your phone [10 digit number]", function(Answer $answer) use($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara, $aboutCatchPhrase, $aboutCatchPhraseSideLine, $location){
            $phone = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->askSUpEmail($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara, $aboutCatchPhrase, $aboutCatchPhraseSideLine, $location, $phone);
        });
    }

    public function askSUpEmail($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara, $aboutCatchPhrase, $aboutCatchPhraseSideLine, $location, $phone) {
        $this->ask("Tell your email...", function(Answer $answer) use($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara, $aboutCatchPhrase, $aboutCatchPhraseSideLine, $location, $phone){
            $email = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->storeSUpInfo($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara, $aboutCatchPhrase, $aboutCatchPhraseSideLine, $location, $phone, $email);
        });
    }

    public function storeSUpInfo($userName, $webTemplate, $webTitle, $webpageBrand, $welcomeHeading, $welcomeHeadingDesignation, $welcomeTextPara, $aboutCatchPhrase, $aboutCatchPhraseSideLine, $location, $phone, $email) {
        DB::table('botman_d_bs')->insert([
            'userName' => $userName,
            'webTemplate' => $webTemplate,
            'webTitle' => $webTitle,
            'webpageBrand' => $webpageBrand,
            'welcomeHeading' => $welcomeHeading,
            'welcomeHeadingDesignation' => $welcomeHeadingDesignation,
            'welcomeTextPara' => $welcomeTextPara,
            'aboutCatchPhrase' => $aboutCatchPhrase,
            'aboutCatchPhraseSideLine' => $aboutCatchPhraseSideLine,
            'location' => $location,
            'phone' => $phone,
            'email' => $email,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        $this->bot->typesAndWaits(5);
        $this->say('Your webpage is ready. Click on Go to your webpage button on the page.');
    }

    public function makeSMedia($userName, $webTemplate) {
        $this->bot->typesAndWaits(1);
        $this->askSMediaTitle($userName, $webTemplate);
    }

    public function askSMediaTitle($userName, $webTemplate) {
        $this->ask("What would you like to name your page?", function(Answer $answer) use ($userName, $webTemplate){
            $webTitle = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Got it!");
            $this->askSMediaBrand($userName, $webTemplate, $webTitle);
        });
    }

    public function askSMediaBrand($userName, $webTemplate, $webTitle) {
        $this->ask("What would you like to name your brand?", function(Answer $answer) use ($userName, $webTemplate, $webTitle) {
            $webpageBrand = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->say("Done...");
            $this->askSMediaLocation($userName, $webTemplate, $webTitle, $webpageBrand);
        });
    }

    public function askSMediaLocation($userName, $webTemplate, $webTitle, $webpageBrand) {
        $this->ask("Tell your location [ex. city, country]", function(Answer $answer) use($userName, $webTemplate, $webTitle, $webpageBrand){
            $location = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->askSMediaBirthday($userName, $webTemplate, $webTitle, $webpageBrand, $location);
        });
    }

    public function askSMediaBirthday($userName, $webTemplate, $webTitle, $webpageBrand, $location) {
        $this->ask("Tell your Birthday Month, Date, and Year in order [ex. March 21, 1995]", function(Answer $answer) use($userName, $webTemplate, $webTitle, $webpageBrand, $location){
            $birthday = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->askSMediaEmail($userName, $webTemplate, $webTitle, $webpageBrand, $location, $birthday);
        });
    }

    public function askSMediaEmail($userName, $webTemplate, $webTitle, $webpageBrand, $location, $birthday) {
        $this->ask("Tell your email...", function(Answer $answer) use($userName, $webTemplate, $webTitle, $webpageBrand, $location, $birthday){
            $email = $answer->getText();
            $this->bot->typesAndWaits(1);
            $this->storeSMediaInfo($userName, $webTemplate, $webTitle, $webpageBrand, $location, $birthday, $email);
        });
    }

    

    public function storeSMediaInfo($userName, $webTemplate, $webTitle, $webpageBrand, $location, $birthday, $email) {
        DB::table('botman_d_bs')->insert([
            'userName' => $userName,
            'webTemplate' => $webTemplate,
            'webTitle' => $webTitle,
            'webpageBrand' => $webpageBrand,
            'location' => $location,
            'birthday' => $birthday,
            'email' => $email,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        $this->bot->typesAndWaits(5);
        $this->say('Your webpage is ready. Click on Go to your webpage button on the page.');
    }



    public function askNextQuestion($userName) {
        $this->bot->typesAndWaits(1);
         $question = Question::create("Huh - OK Then! How about a Joke?")
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Tell a joke')->value('joke'),
                Button::create('Give me a fancy quote')->value('quote'),
            ]);
        
        return $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                if ($answer->getValue() === 'joke') {
                    $this->bot->typesAndWaits(1);
                    $joke = json_decode(file_get_contents('http://api.icndb.com/jokes/random'));
                    $this->say($joke->value->joke);
                    
                } else {
                    $this->bot->typesAndWaits(1);
                    $this->say(Inspiring::quote());
                }
            }
        });
    }

    public function run()
    {
        // This will be called immediately
        $this->askName();
    }
  

}