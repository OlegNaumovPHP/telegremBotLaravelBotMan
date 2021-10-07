<?php

namespace App\Conversations;

use App\Conversations\TestConversation;
use App\Conversations\Pvp;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\Drivers\Telegram\Extensions\Keyboard;
use BotMan\Drivers\Telegram\Extensions\KeyboardButton;

class DefPvp extends Conversation 
{
    public array $data = [];

    public function run()
    {
        $this->hero();
    }

    private function hero() 
    {

        $this->bot->reply(
            "Выберите героя", Keyboard::create()
                ->type(Keyboard::TYPE_INLINE)
                ->oneTimeKeyboard()
                ->addRow(
                    KeyboardButton::create('Динамо')->callbackData('ДинамоДеф'),
                    KeyboardButton::create('Фрости')->callbackData('ФростиДеф'),
                    KeyboardButton::create('Ворожей')->callbackData('ВорожейПвп'),
                )
                ->addRow(
                    KeyboardButton::create('Демон-охотник')->callbackData('Демон-охотникПвп'),
                    KeyboardButton::create('Бард')->callbackData('БардПвп'),
                    KeyboardButton::create('Зефирик')->callbackData('ЗефирикПвп'),
                    )
                ->addRow(
                    KeyboardButton::create('Леди божество')->callbackData('Леди божествоПвп'),
                    KeyboardButton::create('Мастер рун')->callbackData('Мастер рунПвп'),
                    KeyboardButton::create('Фобос')->callbackData('ФобосПвп'),
                )
                ->addRow(
                    KeyboardButton::create('Окультист')->callbackData('ОкультистПвп'),
                    KeyboardButton::create('Кровавая Мэри')->callbackData('Кровавая МэриПвп'),
                    KeyboardButton::create('Огнекрыл')->callbackData('ОгнекрылПвп'),
                )
                ->addRow(
                    KeyboardButton::create('Темный колдун')->callbackData('Темный колдунПвп'),
                    KeyboardButton::create('Спарки')->callbackData('СпаркиПвп'),
                    KeyboardButton::create('Потрошитель')->callbackData('ПотрошительПвп'),
                )
                ->addRow(
                    KeyboardButton::create('Лис')->callbackData('ЛисПвп'),
                    KeyboardButton::create('Космо')->callbackData('КосмоПвп'),
                    KeyboardButton::create('Тыква')->callbackData('ТыкваПвп'),
                    KeyboardButton::create('Мумия')->callbackData('МумияПвп'),
                )
                ->toArray()
        );

        return true;
    }
}