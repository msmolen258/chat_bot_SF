<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\ExampleConversation;
use App\Conversations\CampusJConversation;
use App\Conversations\Start;
use App\Conversations\AboutCampusJobs;
use App\Conversations\CV360;
use App\Conversations\CampusJobsPayment;
use App\Conversations\ApplyCampusJobs;
use App\Conversations\PartTimeJobswebsites;
use App\Conversations\CvBasics;
use App\Conversations\BookAppointment;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
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

    // Start Conversation Campus jobs
    public function CampusJConversation(BotMan $bot)
    {
        $bot->startConversation(new CampusJConversation());
    }

// New conversation Start
    public function Start (BotMan $bot)
    {
        $bot->startConversation(new Start());
    }

    public function AboutCampusConversation (BotMan $bot)
    {
      $bot->startConversation(new AboutCampusJobs());
    }


    public function CV360Conversation (BotMan $bot)
    {
      $bot->startConversation(new CV360());
    }

    public function CampusRegConversation (BotMan $bot)
    {
      $bot->startConversation(new CampusJobsPayment());
    }

    public function CampusApplyConversation (BotMan $bot)
    {
      $bot->startConversation(new ApplyCampusJobs());
    }

    public function CVBasicsConversation (BotMan $bot)
    {
      $bot->startConversation(new CvBasics());
    }

    public function BookAppointmentConversation (BotMan $bot)
    {
      $bot->startConversation(new BookAppointment());
    }




}
