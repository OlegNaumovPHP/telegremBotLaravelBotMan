<?php

use App\Conversations\TestConversation;
use App\Conversations\Pvp;
use App\Conversations\DefPvp;
use App\Conversations\AttackPvp;
use App\Conversations\Def;
use App\Conversations\BattleGuilds;
use App\Conversations\Dungeons;

$botman = app('botman');

// Общие команды //

$botman->hears('/start',  function ($bot) { 
    $bot->startConversation(new TestConversation);  
});

$botman->hears('hi',  function ($bot) {
    $bot->reply('asd');
});

// Выбор локации //

$botman->hears('пвп', function ($bot) {
    $bot->startConversation(new Pvp); 
});

$botman->hears('дефПвп', function ($bot) {
    $bot->startConversation(new DefPvp); 
});

$botman->hears('Деф', function ($bot) {
    $bot->startConversation(new DefPvp); 
});

$botman->hears('атакаПвп', function ($bot) {
    $bot->startConversation(new AttackPvp); 
});

$botman->hears('Атака', function ($bot) {
    $bot->startConversation(new AttackPvp); 
});

$botman->hears('деф базы', function ($bot) {
    $bot->startConversation(new Def); 
});

$botman->hears('Подземелья', function ($bot) {
    $bot->startConversation(new Dungeons); 
});

$botman->hears('Битва гильдий', function ($bot) {
    $bot->startConversation(new BattleGuilds); 
});

// Битва гильдий //

$botman->hears('СекачБГ', function ($bot) {
    $bot->reply('Секач:'."\n".'Ожива + ремка + точка и криты + суперсила');
});

$botman->hears('ФениксБГ', function ($bot) {
    $bot->reply('Феникс:'."\n".'Ожива + ремка + точность + суперсила/суд'."\n".'Маскировка + ожива(до 5 лвла)ремка + точность + суперсила/суд');
});

$botman->hears('ЗефирикБГ', function ($bot) {
    $bot->reply('Зефирик:'."\n".'Ожива + ремка + точка + спектр');
});

$botman->hears('АнубисБГ', function ($bot) {
    $bot->reply('Анубис:'."\n".'Ремка + выживание + уклон и точность + РД/суд ');
});

$botman->hears('ДрейкБГ', function ($bot) {
    $bot->reply('Дрейк:'."\n".'Порочный пакт + оживление + суперсила');
});

$botman->hears('ТреантБГ', function ($bot) {
    $bot->reply('Треант:'."\n".'Ремка + ожива');
});

$botman->hears('КомандораБГ', function ($bot) {
    $bot->reply('Командора:'."\n".'Ожива + ремка + уклон + суперсила');
});

$botman->hears('РонинБГ', function ($bot) {
    $bot->reply('Ронин:'."\n".'Истинная вера/выживание + со + уклон + пенёк');
});

// ПВП //

$botman->hears('БардПвп', function ($bot) {
    $bot->reply('Бард:'."\n".'Священный огонь + воодушевление/каменная кожа + уклон/крит сопр + суд');
});

$botman->hears('ВорожейПвп', function ($bot) {
    $bot->reply('Ворожей:'."\n".'Щит дракона/каменная кожа/ту + священный огонь + точность и хп/уклон/крит сопр + спектр');
});

$botman->hears('Демон-охотникПвп', function ($bot) {
    $bot->reply('Демон-охотник:'."\n".'Щит дракона/ту + священный огонь + точность + суд/спектр');
});

$botman->hears('ЗефирикПвп', function ($bot) {
    $bot->reply('Зефирик:'."\n".'Целитель душ + Огонь жизни + точность и криты + спектр');
});

$botman->hears('Леди божествоПвп', function ($bot) {
    $bot->reply('Леди божество:'."\n".'Священный огонь + проклятый доспех + точность и криты + суд');
});

$botman->hears('Мастер рунПвп', function ($bot) {
    $bot->reply('Мастер рун:'."\n".'Целитель душ + Вода/со/оз/щит + точность + спектр');
});

$botman->hears('ФобосПвп', function ($bot) {
    $bot->reply('Фобос:'."\n".'Целитель душ/ту/щд + священный огонь + точность + спектр/хватка/суд');
});

$botman->hears('ОкультистПвп', function ($bot) {
    $bot->reply('Окультист:'."\n".'Священный огонь + со/щит + уклон + суд');
});

$botman->hears('Кровавая МэриПвп', function ($bot) {
    $bot->reply('Кровавая Мэри:'."\n".'Проклятый доспех + священный огонь + точность и криты + суд/спектр');
});

$botman->hears('ОгнекрылПвп', function ($bot) {
    $bot->reply('Огнекрыл:'."\n".'Священный огонь + Щит/Огненка + уклон + Недомогание/суд');
});

$botman->hears('Темный колдунПвп', function ($bot) {
    $bot->reply('Темный колдун:'."\n".'Бастион + рвение + точность и криты +  Раскаленный доспех; '."\n".'Бастион + гс + точность и крит + выпад');
});

$botman->hears('СпаркиПвп', function ($bot) {
    $bot->reply('Спарки:'."\n".'Маскировка + Чаша/Священный огонь + уклон + суд');
});

$botman->hears('ПотрошительПвп', function ($bot) {
    $bot->reply('Потрошитель:'."\n".'Священный огонь + Проклятый доспех + точка и криты + суд');
});

$botman->hears('ЛисПвп', function ($bot) {
    $bot->reply('Лис:'."\n".'Щит дракона/пд + Ремка/священный огонь + точность + суд');
});

$botman->hears('КосмоПвп', function ($bot) {
    $bot->reply('Космо:'."\n".'Проклятый доспех/Щит дракона + Ремка/священный огонь + точность + суперсила/суд/недомогание');
});

$botman->hears('ТыкваПвп', function ($bot) {
    $bot->reply('Тыква:'."\n".'Священный огонь + Изворот + уклон + Суд/Импульс');
});

$botman->hears('МумияПвп', function ($bot) {
    $bot->reply('Мумия:'."\n".'Cо + укрытие, щит + со, цд + со, чара спектр, точность 25к и уклон/крит сопр');
});

// Только Атака //

$botman->hears('ДинамоАтака', function ($bot) {
    $bot->reply('Динамо:'."\n".'Лук порядка + проклятый доспех/щд + точность + криты + суд/суперсила/смертоностность');
});

$botman->hears('ФорстиАтака', function ($bot) {
    $bot->reply('Фрости:'."\n".'лук + щит/пд + точность + суд/спектр');
});

// Только Деф //

$botman->hears('ДинамоДеф', function ($bot) {
    $bot->reply('Динамо:'."\n".'Щит дракона + со + суд');
});

$botman->hears('ФорстиДеф', function ($bot) {
    $bot->reply('Фрости:'."\n".'Щит дракона + священный огонь + точность + суд/спектр');
});

// Защита(деф базы) // 

$botman->hears('ФобосЗащита', function ($bot) {
    $bot->reply('Фобос:'."\n".'Со/цд/щит/ив + воодушка + точность + призрачная хватка/спектр');
});

$botman->hears('Мастер рунЗащита', function ($bot) {
    $bot->reply('Мастер рун:'."\n".'Цд/щит/со + вода + точность + спектр');
});

$botman->hears('ДинамоЗащита', function ($bot) {
    $bot->reply('Динамо:'."\n".'Пд + вода + точка и криты + суд/суперсила/смертоностность');
});

$botman->hears('ХранительЗащита', function ($bot) {
    $bot->reply('Хранитель:'."\n".'СО/щит + вода + суперсила');
});

$botman->hears('СекачЗащита', function ($bot) {
    $bot->reply('Секач:'."\n".'Лук + Вода + точка и криты + суперсила + суд');
});

$botman->hears('ЛисЗащита', function ($bot) {
    $bot->reply('Лис:'."\n".'Щит/пд + вода + точность + суд');
});

$botman->hears('ФростиЗащита', function ($bot) {
    $bot->reply('Фрости:'."\n".'Пд/щит + вода + точка + суд/спектр');
});

$botman->hears('ЗефирикЗащита', function ($bot) {
    $bot->reply('Зефирик:'."\n".'Цд/ож + вода + точка и криты + спектр');
});

$botman->hears('ВорожейЗащита', function ($bot) {
    $bot->reply('Ворожей:'."\n".'Щит/кк/со + вода + точка + спектр/суд');
});

$botman->hears('КосмоЗащита', function ($bot) {
    $bot->reply('Космо:'."\n".'Проклятый доспех + воодушевление + точность + суперсила');
});

$botman->hears('ФренкиЗащита', function ($bot) {
    $bot->reply('Френки:'."\n".'Щит/пд + воодушка + точность и криты + спектр');
});

$botman->hears('ЗемлеройкаЗащита', function ($bot) {
    $bot->reply('Землеройка:'."\n".'Пд + воодушка + уклон + спектр');
});

$botman->hears('Мисс магияЗащита', function ($bot) {
    $bot->reply('Мисс магия:'."\n".'Щит + воодушка + точность и уклон + сс');
});

// Подземки //

$botman->hears('КомандораДан', function ($bot) {
    $bot->reply('Командора:'."\n".'Пд + изворотливость + уклон + (8к + импульс/9к + суд)');
});

$botman->hears('БерсеркДан', function ($bot) {
    $bot->reply('Берсерк:'."\n".'Пд + изворотливость + уклон + (8к + импульс/9к + суд)');
});

$botman->hears('СтрелокДан', function ($bot) {
    $bot->reply('Стрелок:'."\n".'Милость пророка + раскол + пиромаг + уклон');
});

$botman->hears('ФрейяДан', function ($bot) {
    $bot->reply('Фрейя:'."\n".'Милость борца + раскол + пиромаг + уклон');
});

$botman->hears('ВедьмаДан', function ($bot) {
    $bot->reply('Ведьма:'."\n".'Милость борца + раскол + пиромаг + уклон');
});

// По дефолту //

$botman->fallback(function ($bot) {
    $bot->reply('Не знаю такую команду...');
});