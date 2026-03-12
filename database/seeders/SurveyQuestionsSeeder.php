<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveyQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        // ── Question Types ────────────────────────────────────────────────────
        DB::table('question_types')->insert([
            ['id' =>  14, 'title' => 'Position Level',        'description' => 'Рівень позиції'],
            ['id' =>  15, 'title' => 'Current Salary',        'description' => 'Поточний рівень щомісячної компенсації (USD)'],
            ['id' =>  16, 'title' => 'Expected Salary',       'description' => 'Очікувана компенсація при зміні роботи'],
            ['id' =>  17, 'title' => 'Salary Change',         'description' => 'Як змінилась ваша фінансова компенсація за останній рік'],
            ['id' =>  18, 'title' => 'Compensation Structure','description' => 'Структура компенсації'],
            ['id' =>  19, 'title' => 'Employment Type',       'description' => 'Тип співпраці з компанією'],
            ['id' =>  20, 'title' => 'Deferment Status',      'description' => 'Чи маєте ви бронювання від компанії'],
            ['id' =>  21, 'title' => 'Deferment Importance',  'description' => 'Наскільки для вас важлива наявність бронювання при зміні роботи'],
            ['id' =>  22, 'title' => 'Current Benefits',      'description' => 'Які бенефіти ви маєте зараз'],
            ['id' =>  23, 'title' => 'Desired Benefits',      'description' => 'Які бенефіти ви хотіли б мати'],
            ['id' =>  24, 'title' => 'Current Work Format',   'description' => 'Формат роботи зараз'],
            ['id' =>  25, 'title' => 'Preferred Work Format', 'description' => 'Бажаний формат роботи'],
            ['id' =>  26, 'title' => 'Current Company Type',  'description' => 'Тип компанії, в якій ви працюєте зараз'],
            ['id' =>  27, 'title' => 'Company Size',          'description' => 'Розмір компанії'],
            ['id' =>  28, 'title' => 'Preferred Company Type','description' => 'Тип компанії, який є для вас пріоритетним при зміні роботи'],
            ['id' =>  29, 'title' => 'Location',              'description' => 'Поточна локація проживання'],
            ['id' =>  30, 'title' => 'Job Search Status',     'description' => 'Чи розглядаєте зміну роботи найближчим часом'],
            ['id' =>  31, 'title' => 'Job Change Factors',    'description' => 'Фактори при зміні роботи'],
        ]);

        // ── Questions ─────────────────────────────────────────────────────────
        DB::table('questions')->insert([
            ['id' => 55, 'title' => 'Рівень позиції',                                                      'description' => 'Рівень позиції',                                                      'question_type_id' =>  14, 'multi_answers' => 0],
            ['id' => 56, 'title' => 'Поточний рівень щомісячної компенсації (USD)',                        'description' => 'Поточний рівень щомісячної компенсації (USD)',                        'question_type_id' =>  15, 'multi_answers' => 0],
            ['id' => 57, 'title' => 'Очікувана компенсація при зміні роботи',                              'description' => 'Очікувана компенсація при зміні роботи',                              'question_type_id' =>  16, 'multi_answers' => 0],
            ['id' => 58, 'title' => 'Як змінилась ваша фінансова компенсація за останній рік',             'description' => 'Як змінилась ваша фінансова компенсація за останній рік',             'question_type_id' =>  17, 'multi_answers' => 0],
            ['id' => 59, 'title' => 'Структура компенсації',                                               'description' => 'Структура компенсації',                                               'question_type_id' =>  18, 'multi_answers' => 0],
            ['id' => 60, 'title' => 'Тип співпраці з компанією',                                           'description' => 'Тип співпраці з компанією',                                           'question_type_id' =>  19, 'multi_answers' => 0],
            ['id' => 61, 'title' => 'Чи маєте ви бронювання від компанії',                                 'description' => 'Чи маєте ви бронювання від компанії',                                 'question_type_id' =>  20, 'multi_answers' => 0],
            ['id' => 62, 'title' => 'Наскільки для вас важлива наявність бронювання при зміні роботи',     'description' => 'Наскільки для вас важлива наявність бронювання при зміні роботи',     'question_type_id' =>  21, 'multi_answers' => 0],
            ['id' => 63, 'title' => 'Які бенефіти ви маєте зараз',                                        'description' => 'Які бенефіти ви маєте зараз',                                        'question_type_id' =>  22, 'multi_answers' => 1],
            ['id' => 64, 'title' => 'Які бенефіти ви хотіли б мати',                                      'description' => 'Які бенефіти ви хотіли б мати',                                      'question_type_id' =>  23, 'multi_answers' => 1],
            ['id' => 65, 'title' => 'Формат роботи зараз',                                                 'description' => 'Формат роботи зараз',                                                 'question_type_id' =>  24, 'multi_answers' => 0],
            ['id' => 66, 'title' => 'Бажаний формат роботи',                                               'description' => 'Бажаний формат роботи',                                               'question_type_id' =>  25, 'multi_answers' => 0],
            ['id' => 67, 'title' => 'Тип компанії, в якій ви працюєте зараз',                              'description' => 'Тип компанії, в якій ви працюєте зараз',                              'question_type_id' =>  26, 'multi_answers' => 0],
            ['id' => 68, 'title' => 'Розмір компанії',                                                     'description' => 'Розмір компанії',                                                     'question_type_id' =>  27, 'multi_answers' => 0],
            ['id' => 69, 'title' => 'Тип компанії, який є для вас пріоритетним при зміні роботи',          'description' => 'Тип компанії, який є для вас пріоритетним при зміні роботи',          'question_type_id' =>  28, 'multi_answers' => 0],
            ['id' => 70, 'title' => 'Поточна локація проживання',                                          'description' => 'Поточна локація проживання',                                          'question_type_id' =>  29, 'multi_answers' => 0],
            ['id' => 71, 'title' => 'Чи розглядаєте зміну роботи найближчим часом',                        'description' => 'Чи розглядаєте зміну роботи найближчим часом',                        'question_type_id' =>  30, 'multi_answers' => 0],
            ['id' => 72, 'title' => 'Фактори при зміні роботи',                                            'description' => 'Фактори при зміні роботи',                                            'question_type_id' =>  31, 'multi_answers' => 1],
        ]);

        // ── Answers ───────────────────────────────────────────────────────────

        // Q55 — Position Level (type 14), answers 138–143
        DB::table('answers')->insert([
            ['id' => 138, 'title' => 'Junior / Trainee',    'question_type_id' =>  14],
            ['id' => 139, 'title' => 'Middle',              'question_type_id' =>  14],
            ['id' => 140, 'title' => 'Senior',              'question_type_id' =>  14],
            ['id' => 141, 'title' => 'Lead / Principal',    'question_type_id' =>  14],
            ['id' => 142, 'title' => 'Manager / Head',      'question_type_id' =>  14],
            ['id' => 143, 'title' => 'Director / C-level',  'question_type_id' =>  14],
        ]);

        // Q56 — Current Salary (type 15), answers 144–153
        DB::table('answers')->insert([
            ['id' => 144, 'title' => 'До $999',           'question_type_id' =>  15],
            ['id' => 145, 'title' => '$1 000 – $1 999',   'question_type_id' =>  15],
            ['id' => 146, 'title' => '$2 000 – $2 999',   'question_type_id' =>  15],
            ['id' => 147, 'title' => '$3 000 – $3 999',   'question_type_id' =>  15],
            ['id' => 148, 'title' => '$4 000 – $4 999',   'question_type_id' =>  15],
            ['id' => 149, 'title' => '$5 000 – $5 999',   'question_type_id' =>  15],
            ['id' => 150, 'title' => '$6 000 – $6 999',   'question_type_id' =>  15],
            ['id' => 151, 'title' => '$7 000 – $7 999',   'question_type_id' =>  15],
            ['id' => 152, 'title' => '$8 000 – $8 999',   'question_type_id' =>  15],
            ['id' => 153, 'title' => '$9 000+',            'question_type_id' =>  15],
        ]);

        // Q57 — Expected Salary (type 16), answers 154–163
        DB::table('answers')->insert([
            ['id' => 154, 'title' => 'До $999',           'question_type_id' =>  16],
            ['id' => 155, 'title' => '$1 000 – $1 999',   'question_type_id' =>  16],
            ['id' => 156, 'title' => '$2 000 – $2 999',   'question_type_id' =>  16],
            ['id' => 157, 'title' => '$3 000 – $3 999',   'question_type_id' =>  16],
            ['id' => 158, 'title' => '$4 000 – $4 999',   'question_type_id' =>  16],
            ['id' => 159, 'title' => '$5 000 – $5 999',   'question_type_id' =>  16],
            ['id' => 160, 'title' => '$6 000 – $6 999',   'question_type_id' =>  16],
            ['id' => 161, 'title' => '$7 000 – $7 999',   'question_type_id' =>  16],
            ['id' => 162, 'title' => '$8 000 – $8 999',   'question_type_id' =>  16],
            ['id' => 163, 'title' => '$9 000+',            'question_type_id' =>  16],
        ]);

        // Q58 — Salary Change (type 17), answers 164–168
        DB::table('answers')->insert([
            ['id' => 164, 'title' => 'Значно зросла (понад 30%)',          'question_type_id' =>  17],
            ['id' => 165, 'title' => 'Помірно зросла (10–30%)',           'question_type_id' =>  17],
            ['id' => 166, 'title' => 'Майже не змінилась (менше 10%)',    'question_type_id' =>  17],
            ['id' => 167, 'title' => 'Помірно знизилась (10–30%)',        'question_type_id' =>  17],
            ['id' => 168, 'title' => 'Значно знизилась (понад 30%)',      'question_type_id' =>  17],
        ]);

        // Q59 — Compensation Structure (type 18), answers 169–172
        DB::table('answers')->insert([
            ['id' => 169, 'title' => 'Фіксована зарплата',             'question_type_id' =>  18],
            ['id' => 170, 'title' => 'Ставка + бонуси / премії',       'question_type_id' =>  18],
            ['id' => 171, 'title' => 'Проєктна / контрактна оплата',   'question_type_id' =>  18],
            ['id' => 172, 'title' => 'Без чіткої структури',           'question_type_id' =>  18],
        ]);

        // Q60 — Employment Type (type 19), answers 173–176
        DB::table('answers')->insert([
            ['id' => 173, 'title' => 'ФОП / B2B контракт',                         'question_type_id' => 19],
            ['id' => 174, 'title' => 'Трудовий договір (офіційне працевлаштування)','question_type_id' => 19],
            ['id' => 175, 'title' => 'Контракт через іноземну компанію',            'question_type_id' => 19],
            ['id' => 176, 'title' => 'Контрактор / freelance',                      'question_type_id' => 19],
        ]);

        // Q61 — Deferment Status (type 20), answers 177–180
        DB::table('answers')->insert([
            ['id' => 177, 'title' => 'Так, офіційне',          'question_type_id' => 20],
            ['id' => 178, 'title' => 'У процесі оформлення',   'question_type_id' => 20],
            ['id' => 179, 'title' => 'Ні',                     'question_type_id' => 20],
            ['id' => 180, 'title' => 'Не актуально',           'question_type_id' => 20],
        ]);

        // Q62 — Deferment Importance (type 21), answers 181–184
        DB::table('answers')->insert([
            ['id' => 181, 'title' => 'Критично важливо',   'question_type_id' => 21],
            ['id' => 182, 'title' => 'Важливо',            'question_type_id' => 21],
            ['id' => 183, 'title' => 'Бажано',             'question_type_id' => 21],
            ['id' => 184, 'title' => 'Не має значення',    'question_type_id' => 21],
        ]);

        // Q63 — Current Benefits (type 22), answers 185–196
        DB::table('answers')->insert([
            ['id' => 185, 'title' => 'Опціон / частка в компанії',                     'question_type_id' => 22],
            ['id' => 186, 'title' => 'Медичне страхування',                            'question_type_id' => 22],
            ['id' => 187, 'title' => 'Психологічна підтримка',                         'question_type_id' => 22],
            ['id' => 188, 'title' => 'Компенсація спортивних активностей',             'question_type_id' => 22],
            ['id' => 189, 'title' => 'Масаж / wellness',                               'question_type_id' => 22],
            ['id' => 190, 'title' => 'Компенсація навчання',                           'question_type_id' => 22],
            ['id' => 191, 'title' => 'Компенсація транспорту / пального',              'question_type_id' => 22],
            ['id' => 192, 'title' => 'Компенсація харчування',                         'question_type_id' => 22],
            ['id' => 193, 'title' => 'Оплата відряджень',                              'question_type_id' => 22],
            ['id' => 194, 'title' => 'Регулярний перегляд заробітної плати',           'question_type_id' => 22],
            ['id' => 195, 'title' => 'Укриття на робочому місці',                      'question_type_id' => 22],
            ['id' => 196, 'title' => 'Забезпечення енергоресурсами (генератори / Starlink)', 'question_type_id' => 22],
        ]);

        // Q64 — Desired Benefits (type 23), answers 197–208
        DB::table('answers')->insert([
            ['id' => 197, 'title' => 'Опціон / частка в компанії',                     'question_type_id' => 23],
            ['id' => 198, 'title' => 'Медичне страхування',                            'question_type_id' => 23],
            ['id' => 199, 'title' => 'Психологічна підтримка',                         'question_type_id' => 23],
            ['id' => 200, 'title' => 'Компенсація спортивних активностей',             'question_type_id' => 23],
            ['id' => 201, 'title' => 'Масаж / wellness',                               'question_type_id' => 23],
            ['id' => 202, 'title' => 'Компенсація навчання',                           'question_type_id' => 23],
            ['id' => 203, 'title' => 'Компенсація транспорту / пального',              'question_type_id' => 23],
            ['id' => 204, 'title' => 'Компенсація харчування',                         'question_type_id' => 23],
            ['id' => 205, 'title' => 'Оплата відряджень',                              'question_type_id' => 23],
            ['id' => 206, 'title' => 'Регулярний перегляд заробітної плати',           'question_type_id' => 23],
            ['id' => 207, 'title' => 'Укриття на робочому місці',                      'question_type_id' => 23],
            ['id' => 208, 'title' => 'Забезпечення енергоресурсами (генератори / Starlink)', 'question_type_id' => 23],
        ]);

        // Q65 — Current Work Format (type 24), answers 209–211
        DB::table('answers')->insert([
            ['id' => 209, 'title' => 'Офіс',       'question_type_id' => 24],
            ['id' => 210, 'title' => 'Гібрид',     'question_type_id' => 24],
            ['id' => 211, 'title' => 'Віддалено',  'question_type_id' => 24],
        ]);

        // Q66 — Preferred Work Format (type 25), answers 212–214
        DB::table('answers')->insert([
            ['id' => 212, 'title' => 'Офіс',       'question_type_id' => 25],
            ['id' => 213, 'title' => 'Гібрид',     'question_type_id' => 25],
            ['id' => 214, 'title' => 'Віддалено',  'question_type_id' => 25],
        ]);

        // Q67 — Current Company Type (type 26), answers 215–219
        DB::table('answers')->insert([
            ['id' => 215, 'title' => 'Продуктова MilTech / Defense',   'question_type_id' => 26],
            ['id' => 216, 'title' => 'Стартап MilTech / Defense',      'question_type_id' => 26],
            ['id' => 217, 'title' => 'R&D MilTech / Defense',          'question_type_id' => 26],
            ['id' => 218, 'title' => 'Аутсорс / Аутстаф',             'question_type_id' => 26],
            ['id' => 219, 'title' => 'Державна / напівдержавна',       'question_type_id' => 26],
        ]);

        // Q68 — Company Size (type 27), answers 220–225
        DB::table('answers')->insert([
            ['id' => 220, 'title' => '1–10 співробітників',    'question_type_id' => 27],
            ['id' => 221, 'title' => '11–50',                  'question_type_id' => 27],
            ['id' => 222, 'title' => '51–100',                 'question_type_id' => 27],
            ['id' => 223, 'title' => '101–250',                'question_type_id' => 27],
            ['id' => 224, 'title' => '251–500',                'question_type_id' => 27],
            ['id' => 225, 'title' => '500+',                   'question_type_id' => 27],
        ]);

        // Q69 — Preferred Company Type (type 28), answers 226–231
        DB::table('answers')->insert([
            ['id' => 226, 'title' => 'Продуктова MilTech / Defense',       'question_type_id' => 28],
            ['id' => 227, 'title' => 'Стартап MilTech / Defense',          'question_type_id' => 28],
            ['id' => 229, 'title' => 'Аутсорс / аутстаф',                 'question_type_id' => 28],
            ['id' => 230, 'title' => 'Вийти зі сфери MilTech / Defense',   'question_type_id' => 28],
            ['id' => 231, 'title' => 'Не має значення',                    'question_type_id' => 28],
        ]);

        // Q70 — Location (type 29), answers 232–265
        DB::table('answers')->insert([
            ['id' => 232, 'title' => 'Україна',                 'question_type_id' => 29],
            ['id' => 233, 'title' => 'Польща',                  'question_type_id' => 29],
            ['id' => 234, 'title' => 'Німеччина',               'question_type_id' => 29],
            ['id' => 235, 'title' => 'Велика Британія',         'question_type_id' => 29],
            ['id' => 236, 'title' => 'Чехія',                   'question_type_id' => 29],
            ['id' => 237, 'title' => 'Естонія',                 'question_type_id' => 29],
            ['id' => 238, 'title' => 'Латвія',                  'question_type_id' => 29],
            ['id' => 239, 'title' => 'Литва',                   'question_type_id' => 29],
            ['id' => 240, 'title' => 'Франція',                 'question_type_id' => 29],
            ['id' => 241, 'title' => 'Норвегія',                'question_type_id' => 29],
            ['id' => 242, 'title' => 'Фінляндія',               'question_type_id' => 29],
            ['id' => 243, 'title' => 'Бельгія',                 'question_type_id' => 29],
            ['id' => 244, 'title' => 'Нідерланди',              'question_type_id' => 29],
            ['id' => 245, 'title' => 'Австрія',                 'question_type_id' => 29],
            ['id' => 246, 'title' => 'Швейцарія',               'question_type_id' => 29],
            ['id' => 247, 'title' => 'Швеція',                  'question_type_id' => 29],
            ['id' => 248, 'title' => 'Данія',                   'question_type_id' => 29],
            ['id' => 249, 'title' => 'Італія',                  'question_type_id' => 29],
            ['id' => 250, 'title' => 'Іспанія',                 'question_type_id' => 29],
            ['id' => 251, 'title' => 'Португалія',              'question_type_id' => 29],
            ['id' => 252, 'title' => 'Греція',                  'question_type_id' => 29],
            ['id' => 253, 'title' => 'Словаччина',              'question_type_id' => 29],
            ['id' => 254, 'title' => 'Угорщина',                'question_type_id' => 29],
            ['id' => 255, 'title' => 'Румунія',                 'question_type_id' => 29],
            ['id' => 256, 'title' => 'Болгарія',                'question_type_id' => 29],
            ['id' => 257, 'title' => 'Хорватія',                'question_type_id' => 29],
            ['id' => 258, 'title' => 'Словенія',                'question_type_id' => 29],
            ['id' => 259, 'title' => 'Північна Америка',        'question_type_id' => 29],
            ['id' => 260, 'title' => 'Південна Америка',        'question_type_id' => 29],
            ['id' => 261, 'title' => 'Близький Схід',           'question_type_id' => 29],
            ['id' => 262, 'title' => 'Азія',                    'question_type_id' => 29],
            ['id' => 263, 'title' => 'Африка',                  'question_type_id' => 29],
            ['id' => 264, 'title' => 'Австралія та Океанія',    'question_type_id' => 29],
            ['id' => 265, 'title' => 'Інша країна (вкажіть)',   'question_type_id' =>  1],
        ]);

        // Q71 — Job Search Status (type 30), answers 266–270
        DB::table('answers')->insert([
            ['id' => 266, 'title' => 'Так, активно',                            'question_type_id' => 30],
            ['id' => 267, 'title' => 'Так, пасивно',                            'question_type_id' => 30],
            ['id' => 268, 'title' => 'Не шукаю, але відкритий(а) до пропозицій','question_type_id' => 30],
            ['id' => 269, 'title' => 'Розглядаю парт-тайм співпрацю',           'question_type_id' => 30],
            ['id' => 270, 'title' => 'Ні',                                       'question_type_id' => 30],
        ]);

        // Q72 — Job Change Factors (type 31), answers 271–283
        DB::table('answers')->insert([
            ['id' => 271, 'title' => 'Фінансова пропозиція',                    'question_type_id' => 31],
            ['id' => 272, 'title' => 'Наявність бронювання',                    'question_type_id' => 31],
            ['id' => 273, 'title' => 'Тип компанії',                            'question_type_id' => 31],
            ['id' => 274, 'title' => 'MilTech / Defense як індустрія',          'question_type_id' => 31],
            ['id' => 275, 'title' => 'Вплив продукту / місія',                  'question_type_id' => 31],
            ['id' => 276, 'title' => 'Технічний стек',                          'question_type_id' => 31],
            ['id' => 277, 'title' => 'Робота з hardware / продуктом',           'question_type_id' => 31],
            ['id' => 278, 'title' => 'Доступ до прототипів / тестувань',        'question_type_id' => 31],
            ['id' => 279, 'title' => 'Команда',                                 'question_type_id' => 31],
            ['id' => 280, 'title' => 'Повноваження / автономія',                'question_type_id' => 31],
            ['id' => 281, 'title' => 'Карʼєрне зростання',                     'question_type_id' => 31],
            ['id' => 282, 'title' => 'Стабільність компанії',                   'question_type_id' => 31],
            ['id' => 283, 'title' => 'Формат роботи',                           'question_type_id' => 31],
        ]);

        // ── Question ↔ Answer pivot ───────────────────────────────────────────
        DB::table('question_answer')->insert([
            // Q55 — Position Level
            ['question_id' => 55, 'answer_id' => 138],
            ['question_id' => 55, 'answer_id' => 139],
            ['question_id' => 55, 'answer_id' => 140],
            ['question_id' => 55, 'answer_id' => 141],
            ['question_id' => 55, 'answer_id' => 142],
            ['question_id' => 55, 'answer_id' => 143],
            // Q56 — Current Salary
            ['question_id' => 56, 'answer_id' => 144],
            ['question_id' => 56, 'answer_id' => 145],
            ['question_id' => 56, 'answer_id' => 146],
            ['question_id' => 56, 'answer_id' => 147],
            ['question_id' => 56, 'answer_id' => 148],
            ['question_id' => 56, 'answer_id' => 149],
            ['question_id' => 56, 'answer_id' => 150],
            ['question_id' => 56, 'answer_id' => 151],
            ['question_id' => 56, 'answer_id' => 152],
            ['question_id' => 56, 'answer_id' => 153],
            // Q57 — Expected Salary
            ['question_id' => 57, 'answer_id' => 154],
            ['question_id' => 57, 'answer_id' => 155],
            ['question_id' => 57, 'answer_id' => 156],
            ['question_id' => 57, 'answer_id' => 157],
            ['question_id' => 57, 'answer_id' => 158],
            ['question_id' => 57, 'answer_id' => 159],
            ['question_id' => 57, 'answer_id' => 160],
            ['question_id' => 57, 'answer_id' => 161],
            ['question_id' => 57, 'answer_id' => 162],
            ['question_id' => 57, 'answer_id' => 163],
            // Q58 — Salary Change
            ['question_id' => 58, 'answer_id' => 164],
            ['question_id' => 58, 'answer_id' => 165],
            ['question_id' => 58, 'answer_id' => 166],
            ['question_id' => 58, 'answer_id' => 167],
            ['question_id' => 58, 'answer_id' => 168],
            // Q59 — Compensation Structure
            ['question_id' => 59, 'answer_id' => 169],
            ['question_id' => 59, 'answer_id' => 170],
            ['question_id' => 59, 'answer_id' => 171],
            ['question_id' => 59, 'answer_id' => 172],
            // Q60 — Employment Type
            ['question_id' => 60, 'answer_id' => 173],
            ['question_id' => 60, 'answer_id' => 174],
            ['question_id' => 60, 'answer_id' => 175],
            ['question_id' => 60, 'answer_id' => 176],
            // Q61 — Deferment Status
            ['question_id' => 61, 'answer_id' => 177],
            ['question_id' => 61, 'answer_id' => 178],
            ['question_id' => 61, 'answer_id' => 179],
            ['question_id' => 61, 'answer_id' => 180],
            // Q62 — Deferment Importance
            ['question_id' => 62, 'answer_id' => 181],
            ['question_id' => 62, 'answer_id' => 182],
            ['question_id' => 62, 'answer_id' => 183],
            ['question_id' => 62, 'answer_id' => 184],
            // Q63 — Current Benefits
            ['question_id' => 63, 'answer_id' => 185],
            ['question_id' => 63, 'answer_id' => 186],
            ['question_id' => 63, 'answer_id' => 187],
            ['question_id' => 63, 'answer_id' => 188],
            ['question_id' => 63, 'answer_id' => 189],
            ['question_id' => 63, 'answer_id' => 190],
            ['question_id' => 63, 'answer_id' => 191],
            ['question_id' => 63, 'answer_id' => 192],
            ['question_id' => 63, 'answer_id' => 193],
            ['question_id' => 63, 'answer_id' => 194],
            ['question_id' => 63, 'answer_id' => 195],
            ['question_id' => 63, 'answer_id' => 196],
            // Q64 — Desired Benefits
            ['question_id' => 64, 'answer_id' => 197],
            ['question_id' => 64, 'answer_id' => 198],
            ['question_id' => 64, 'answer_id' => 199],
            ['question_id' => 64, 'answer_id' => 200],
            ['question_id' => 64, 'answer_id' => 201],
            ['question_id' => 64, 'answer_id' => 202],
            ['question_id' => 64, 'answer_id' => 203],
            ['question_id' => 64, 'answer_id' => 204],
            ['question_id' => 64, 'answer_id' => 205],
            ['question_id' => 64, 'answer_id' => 206],
            ['question_id' => 64, 'answer_id' => 207],
            ['question_id' => 64, 'answer_id' => 208],
            // Q65 — Current Work Format
            ['question_id' => 65, 'answer_id' => 209],
            ['question_id' => 65, 'answer_id' => 210],
            ['question_id' => 65, 'answer_id' => 211],
            // Q66 — Preferred Work Format
            ['question_id' => 66, 'answer_id' => 212],
            ['question_id' => 66, 'answer_id' => 213],
            ['question_id' => 66, 'answer_id' => 214],
            // Q67 — Current Company Type
            ['question_id' => 67, 'answer_id' => 215],
            ['question_id' => 67, 'answer_id' => 216],
            ['question_id' => 67, 'answer_id' => 217],
            ['question_id' => 67, 'answer_id' => 218],
            ['question_id' => 67, 'answer_id' => 219],
            // Q68 — Company Size
            ['question_id' => 68, 'answer_id' => 220],
            ['question_id' => 68, 'answer_id' => 221],
            ['question_id' => 68, 'answer_id' => 222],
            ['question_id' => 68, 'answer_id' => 223],
            ['question_id' => 68, 'answer_id' => 224],
            ['question_id' => 68, 'answer_id' => 225],
            // Q69 — Preferred Company Type
            ['question_id' => 69, 'answer_id' => 226],
            ['question_id' => 69, 'answer_id' => 227],
            ['question_id' => 69, 'answer_id' => 229],
            ['question_id' => 69, 'answer_id' => 230],
            ['question_id' => 69, 'answer_id' => 231],
            // Q70 — Location
            ['question_id' => 70, 'answer_id' => 232],
            ['question_id' => 70, 'answer_id' => 233],
            ['question_id' => 70, 'answer_id' => 234],
            ['question_id' => 70, 'answer_id' => 235],
            ['question_id' => 70, 'answer_id' => 236],
            ['question_id' => 70, 'answer_id' => 237],
            ['question_id' => 70, 'answer_id' => 238],
            ['question_id' => 70, 'answer_id' => 239],
            ['question_id' => 70, 'answer_id' => 240],
            ['question_id' => 70, 'answer_id' => 241],
            ['question_id' => 70, 'answer_id' => 242],
            ['question_id' => 70, 'answer_id' => 243],
            ['question_id' => 70, 'answer_id' => 244],
            ['question_id' => 70, 'answer_id' => 245],
            ['question_id' => 70, 'answer_id' => 246],
            ['question_id' => 70, 'answer_id' => 247],
            ['question_id' => 70, 'answer_id' => 248],
            ['question_id' => 70, 'answer_id' => 249],
            ['question_id' => 70, 'answer_id' => 250],
            ['question_id' => 70, 'answer_id' => 251],
            ['question_id' => 70, 'answer_id' => 252],
            ['question_id' => 70, 'answer_id' => 253],
            ['question_id' => 70, 'answer_id' => 254],
            ['question_id' => 70, 'answer_id' => 255],
            ['question_id' => 70, 'answer_id' => 256],
            ['question_id' => 70, 'answer_id' => 257],
            ['question_id' => 70, 'answer_id' => 258],
            ['question_id' => 70, 'answer_id' => 259],
            ['question_id' => 70, 'answer_id' => 260],
            ['question_id' => 70, 'answer_id' => 261],
            ['question_id' => 70, 'answer_id' => 262],
            ['question_id' => 70, 'answer_id' => 263],
            ['question_id' => 70, 'answer_id' => 264],
            ['question_id' => 70, 'answer_id' => 265],
            // Q71 — Job Search Status
            ['question_id' => 71, 'answer_id' => 266],
            ['question_id' => 71, 'answer_id' => 267],
            ['question_id' => 71, 'answer_id' => 268],
            ['question_id' => 71, 'answer_id' => 269],
            ['question_id' => 71, 'answer_id' => 270],
            // Q72 — Job Change Factors
            ['question_id' => 72, 'answer_id' => 271],
            ['question_id' => 72, 'answer_id' => 272],
            ['question_id' => 72, 'answer_id' => 273],
            ['question_id' => 72, 'answer_id' => 274],
            ['question_id' => 72, 'answer_id' => 275],
            ['question_id' => 72, 'answer_id' => 276],
            ['question_id' => 72, 'answer_id' => 277],
            ['question_id' => 72, 'answer_id' => 278],
            ['question_id' => 72, 'answer_id' => 279],
            ['question_id' => 72, 'answer_id' => 280],
            ['question_id' => 72, 'answer_id' => 281],
            ['question_id' => 72, 'answer_id' => 282],
            ['question_id' => 72, 'answer_id' => 283],
        ]);

        // ── Poll ↔ Question mappings (orders 5–22) ────────────────────────────
        DB::table('poll_question')->insert([
            ['poll_id' => 1, 'question_id' => 55, 'order' =>  5],
            ['poll_id' => 1, 'question_id' => 56, 'order' =>  6],
            ['poll_id' => 1, 'question_id' => 57, 'order' =>  7],
            ['poll_id' => 1, 'question_id' => 58, 'order' =>  8],
            ['poll_id' => 1, 'question_id' => 59, 'order' =>  9],
            ['poll_id' => 1, 'question_id' => 60, 'order' => 10],
            ['poll_id' => 1, 'question_id' => 61, 'order' => 11],
            ['poll_id' => 1, 'question_id' => 62, 'order' => 12],
            ['poll_id' => 1, 'question_id' => 63, 'order' => 13],
            ['poll_id' => 1, 'question_id' => 64, 'order' => 14],
            ['poll_id' => 1, 'question_id' => 65, 'order' => 15],
            ['poll_id' => 1, 'question_id' => 66, 'order' => 16],
            ['poll_id' => 1, 'question_id' => 67, 'order' => 17],
            ['poll_id' => 1, 'question_id' => 68, 'order' => 18],
            ['poll_id' => 1, 'question_id' => 69, 'order' => 19],
            ['poll_id' => 1, 'question_id' => 70, 'order' => 22],
            ['poll_id' => 1, 'question_id' => 71, 'order' => 20],
            ['poll_id' => 1, 'question_id' => 72, 'order' => 21],
        ]);
    }
}
