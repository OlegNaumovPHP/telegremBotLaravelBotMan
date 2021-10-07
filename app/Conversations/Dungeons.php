<?php

namespace App\Conversations;

use App\Conversations\TestConversation;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\Drivers\Telegram\Extensions\Keyboard;
use BotMan\Drivers\Telegram\Extensions\KeyboardButton;

class Dungeons extends Conversation 
{
    public array $data = [];

    public function run()
    {
        $this->dangeons();
    }

    private function dangeons() 
    {

        $this->bot->reply(
            "Выберите Героя", Keyboard::create()
                ->type(Keyboard::TYPE_INLINE)
                ->oneTimeKeyboard()
                ->addRow(
                    KeyboardButton::create('Командора')->callbackData('КомандораДан'),
                    KeyboardButton::create('Берсерк')->callbackData('БерсеркДан')
                )
                ->addRow(
                    KeyboardButton::create('Стрелок')->callbackData('СтрелокДан'),
                    KeyboardButton::create('Ведьма')->callbackData('ВедьмаДан'),
                    KeyboardButton::create('Фрейя')->callbackData('ФрейяДан')
                )
                ->toArray()
        );

        return true;
    }
}