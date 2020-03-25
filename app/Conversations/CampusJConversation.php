<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Attachments\File;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
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
      Button::create('What is campus job?')->value('campusjobwhat'),
      Button::create('How to get paid for campus jobs?')->value('campusjobsreg'),
      Button::create('How to find campus jobs?')->value('campusjobfind'),
      Button::create('How to apply?')->value('campusjobapply'),
      Button::create('Campus job hours claim form')->value('campusjobcf'),
    ]);

    return $this->ask($question, function (Answer $answer) {
      if ($answer->isInteractiveMessageReply()) {
        // Campus Jobs register
        if ($answer->getValue() === 'campusjobsreg') {
          $this->say('First, you must complete online registration: https://recruitment.solent.ac.uk/campus_jobs-3588.html');
          $this->say('To complete the registration process you are also required to complete a bank details, tax declaration form and sign the terms and conditions and return it to Payroll (RM304).');
          $this->say('All forms will be sent to you via email after completing the online registration.');
        } elseif ($answer->getValue() === 'campusjobfind') {
          $this->say('The list of all available campus jobs can be found here: https://solentfutures.careercentre.me/u/j8wrhtkd');
          // Campus Jobs - Apply
        } elseif ($answer->getValue() === 'campusjobapply') {
          $attachment1 = new Image('https://i.ibb.co/WknVbnP/applycamp1.png');
          $message1 = OutgoingMessage::create('1. Select the campus job you want to apply for, click “View”.')
          ->withAttachment($attachment1);

          $attachment2 = new Image('https://i.ibb.co/PjT5ZWm/applycamp2.png');
          $message2 = OutgoingMessage::create('2. Then click "-> Apply"')
          ->withAttachment($attachment2);

          $attachment3 = new Image('https://i.ibb.co/hDqxhPZ/applycamp3.png"');
          $message3 = OutgoingMessage::create('3. Finally, attach your CV, cover letter and press “Apply now”')
          ->withAttachment($attachment3);
          $this->say($message1);
          $this->say($message2);
          $this->say($message3);

        } elseif ($answer->getValue() === 'campusjobwhat') {
          $this->say('---> What is campus job? <---');
          $this->say('‘Campus Jobs’ is the University’s student recruitment service for opportunities on campus.');
          $this->say('All vacancies are available on Solent Futures Online.');
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
