<?php

namespace App\Conversations;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use BotMan\Drivers\Telegram\Extensions\Keyboard;
use BotMan\Drivers\Telegram\Extensions\KeyboardButton;

class TestConversation extends Conversation
{
    public array $data = [];

    public function run()
    {
        $this->type();
    }

    public static function help(BotMan $bot)
    {
        $bot->reply("Привет! Вот список моих команд: \n/help - список команд.\n/start - начало работы с ботом.\nСборки - возможность выбора локаций и инф-а о топ сборках героев", Keyboard::create()
            ->type(Keyboard::TYPE_INLINE)
            ->oneTimeKeyboard()
            ->addRow(
                KeyboardButton::create('Далее')->callbackData('/start'),
            )
            ->toArray()
        );
    }

    private function start()
    {
        $this->ask("Чего бы вы хотели?", function (Answer $answer) {
            if (($text = $answer->getText()) && $text === '/help') {
                self::help($this->bot);

                return true;
            } else if (($text = $answer->getText()) && mb_strtolower($text) === 'сборки') {
                $this->locations();

                return true;
            }
        }, Keyboard::create()
        ->type(Keyboard::TYPE_KEYBOARD)
        ->oneTimeKeyboard(true)
        ->addRow(
            KeyboardButton::create('/help')->callbackData('/help'),
            KeyboardButton::create('Сборки')->callbackData('Сборки')
        )
        ->toArray());
    }

    private function startTwo()
    {
        $this->ask("Чего бы вы хотели?", function (Answer $answer) {
            if (($text = $answer->getText()) && $text === '/help') {
                self::help($this->bot);

                return true;
            } else if (($text = $answer->getText()) && mb_strtolower($text) === 'сборочки') {
                $this->locationsTwo();

                return true;
            }
        }, Keyboard::create()
        ->type(Keyboard::TYPE_KEYBOARD)
        ->oneTimeKeyboard(true)
        ->addRow(
            KeyboardButton::create('/help')->callbackData('/help'),
            KeyboardButton::create('Сборочки')->callbackData('Сборочки')
        )
        ->toArray());
    }

    private function type() 
    {
        $this->ask("Для начала работы назовите свое имя", function (Answer $answer) {
            if (($text = $answer->getText()) && mb_strtolower($text) === 'рыцарь') {
                $this->start();

                return true;
            } else {
                $this->startTwo();

                return true;
            }
        });
    }

    private function locations()
    {

        $this->bot->reply(
            "Выберите локацию", Keyboard::create()
                ->type(Keyboard::TYPE_KEYBOARD)
                ->oneTimeKeyboard(true)
                ->addRow(
                    KeyboardButton::create('ПВП')->callbackData('пвп'),
                    KeyboardButton::create('Битва гильдий')->callbackData('бг')
                )
                ->addRow(
                    KeyboardButton::create('Подземелья')->callbackData('подземелья'),
                    KeyboardButton::create('Деф базы')->callbackData('деф базы')
                )
                ->toArray()
        );

        return true;
    }

    private function locationsTwo()
    {

        $this->bot->reply(
            "Выберите локацию", Keyboard::create()
                ->type(Keyboard::TYPE_KEYBOARD)
                ->oneTimeKeyboard(true)
                ->addRow(
                    KeyboardButton::create('Битва гильдий')->callbackData('бг')
                )
                ->addRow(
                    KeyboardButton::create('Подземелья')->callbackData('подземелья')
                )
                ->toArray()
        );

        return true;
    }
}

// Клавиатура,
//             Keyboard::create()
//             ->type(Keyboard::TYPE_KEYBOARD)
//             ->oneTimeKeyboard(false)
//             ->addRow(KeyboardButton::create('Ололо кнопка')->callbackData('/logout'))
//             ->toArray()
//         );

// Клавиши на экране, 
//              Keyboard::create()
//             ->type(Keyboard::TYPE_INLINE)
//             ->oneTimeKeyboard()
//             ->addRow(
//                 KeyboardButton::create('Далее')->callbackData('/login'),
//             )
//             ->toArray()
//         );