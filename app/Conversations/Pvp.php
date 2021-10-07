<?php

namespace App\Conversations;

use App\Conversations\TestConversation;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\Drivers\Telegram\Extensions\Keyboard;
use BotMan\Drivers\Telegram\Extensions\KeyboardButton;

class Pvp extends Conversation 
{
    public array $data = [];

    public function run()
    {
        $this->pvp();
    }

    private function pvp() 
    {

        $this->bot->reply(
            "Выберите Атаку или деф", Keyboard::create()
                ->type(Keyboard::TYPE_KEYBOARD)
                ->oneTimeKeyboard(true)
                ->addRow(
                    KeyboardButton::create('Деф')->callbackData('дефПвп'),
                    KeyboardButton::create('Атака')->callbackData('атакаПвп')
                )
                ->toArray()
        );

        return true;
    }
}