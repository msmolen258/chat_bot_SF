<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class CampusJConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */

     /**
      * First question
      */
     public function askReason()
     {
         $question = Question::create("How can we help you today?")
             ->fallback('Unable to ask question')
             ->callbackId('ask_topic')
             ->addButtons([
                 Button::create('How to register with campus jobs')->value('campusjobsreg'),
                 Button::create('How to find campus jobs?')->value('campusjobfind'),
             ]);

         return $this->ask($question, function (Answer $answer) {
             if ($answer->isInteractiveMessageReply()) {
                 if ($answer->getValue() === 'campusjobsreg') {

                     $this->say('hahahah');
                 } else {
                     $this->say(Inspiring::quote());
                 }
             }
         });
     }

     /**
      * Start the conversation
      */
     public function run()
     {
         $this->askReason();
     }
}
