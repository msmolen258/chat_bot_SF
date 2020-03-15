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
    $question = Question::create("What exactly do you want to know about campus jobs?")
    ->fallback('Unable to ask question')
    ->callbackId('ask_topic')
    ->addButtons([
      Button::create('How to register with campus jobs')->value('campusjobsreg'),
      Button::create('How to find campus jobs?')->value('campusjobfind'),
      Button::create('How to apply?')->value('campusjobapply'),
      Button::create('Campus job hours claim form')->value('campusjobcf'),
    ]);

    return $this->ask($question, function (Answer $answer) {
      if ($answer->isInteractiveMessageReply()) {
        if ($answer->getValue() === 'campusjobsreg') {
          $this->say('This is very easy! Once you have been offered work by Campus Jobs you must complete an online registration. You can complete the registration here: https://recruitment.solent.ac.uk/campus_jobs-3588.html');
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
