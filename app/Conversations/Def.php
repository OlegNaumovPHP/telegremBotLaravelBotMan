<?php

namespace App\Conversations;

use App\Conversations\TestConversation;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\Drivers\Telegram\Extensions\Keyboard;
use BotMan\Drivers\Telegram\Extensions\KeyboardButton;

class Def extends Conversation 
{
    public array $data = [];

    public function run()
    {
        $this->def();
    }

    private function def() 
    {

        $this->bot->reply(
            "Выберите героя", Keyboard::create()
                ->type(Keyboard::TYPE_INLINE)
                ->oneTimeKeyboard()
                ->addRow(
                    KeyboardButton::create('Фобос')->callbackData('ФобосЗащита'),
                    KeyboardButton::create('Мастер рун')->callbackData('Мастер рунЗащита'),
                    KeyboardButton::create('Динамо')->callbackData('ДинамоЗащита'),
                )
                ->addRow(
                    KeyboardButton::create('Хранитель')->callbackData('ХранительЗащита'),
                    KeyboardButton::create('Секач')->callbackData('СекачЗащита'),
                    KeyboardButton::create('Лис')->callbackData('ЛисЗащита'),
                )
                ->addRow(
                    KeyboardButton::create('Фрости')->callbackData('ФростиЗащита'),
                    KeyboardButton::create('Зефирик')->callbackData('ЗефирикЗащита'),
                    KeyboardButton::create('Ворожей')->callbackData('ВорожейЗащита'),
                )
                ->addRow(
                    KeyboardButton::create('Космо')->callbackData('КосмоЗащита'),
                    KeyboardButton::create('Френки')->callbackData('ФренкиЗащита'),
                )
                ->addRow(
                    KeyboardButton::create('Землеройка')->callbackData('ЗемлеройкаЗащита'),
                    KeyboardButton::create('Мисс магия')->callbackData('Мисс магияЗащита'),
                )
                ->toArray()
        );

        return true;
    }
}