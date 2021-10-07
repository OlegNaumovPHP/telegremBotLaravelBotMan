<?php

namespace App\Conversations;

use App\Conversations\TestConversation;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\Drivers\Telegram\Extensions\Keyboard;
use BotMan\Drivers\Telegram\Extensions\KeyboardButton;

class BattleGuilds extends Conversation 
{
    public array $data = [];

    public function run()
    {
        $this->bg();
    }

    private function bg() 
    {

        $this->bot->reply(
            "Выберите героя", Keyboard::create()
                ->type(Keyboard::TYPE_INLINE)
                ->oneTimeKeyboard()
                ->addRow(
                    KeyboardButton::create('Секач')->callbackData('СекачБГ'),
                    KeyboardButton::create('Феникс')->callbackData('ФениксБГ'),
                    KeyboardButton::create('Зефирик')->callbackData('ЗефирикБГ'),
                    KeyboardButton::create('Анубис')->callbackData('АнубисБГ'),
                )
                ->addRow(
                    KeyboardButton::create('Дрейк')->callbackData('ДрейкБГ'),
                    KeyboardButton::create('Треант')->callbackData('ТреантБГ'),
                    KeyboardButton::create('Командора')->callbackData('КомандораБГ'),
                    KeyboardButton::create('Ронин')->callbackData('РонинБГ'),
                )
                ->toArray()
        );

        return true;
    }
}