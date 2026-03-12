<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleDictionaryQuestionsSeeder extends Seeder
{
    public function run(): void
    {
        // ── Questions ─────────────────────────────────────────────────────────
        // question_type_id = тип відповідей, які отримує це питання:
        //   1 (Track)     – відповіді є треками (Engineering / Non-Engineering)
        //   2 (Domain)    – відповіді є основними напрямками
        //   3 (SubDomain) – відповіді є підсекціями
        //   4 (Role)      – відповіді є конкретними ролями

        DB::table('questions')->insert([

            // ── Кореневе питання (type 1) ─────────────────────────────────────
            ['id' =>  1, 'title' => 'All Roles — MilTech / Defense',                         'description' => 'У якому напрямку ви працюєте?',         'question_type_id' => 1, 'deleted' => false, 'multi_answers' => false],

            // ── Питання після вибору треку (type 2) ──────────────────────────
            ['id' =>  2, 'title' => 'Engineering / R&D',                                     'description' => 'Оберіть ваш основний інженерний напрям', 'question_type_id' => 2, 'deleted' => false, 'multi_answers' => false],
            ['id' =>  3, 'title' => 'Non-Engineering Master Structure',                       'description' => 'Оберіть ваш функціональний напрям:',     'question_type_id' => 2, 'deleted' => false, 'multi_answers' => false],

            // ── Engineering Domains → мають підсекції (type 3) ───────────────
            ['id' =>  4, 'title' => 'Engineering Management / R&D Leadership',               'description' => 'Уточніть ваш піднапрям:', 'question_type_id' => 3, 'deleted' => false, 'multi_answers' => false],
            ['id' =>  5, 'title' => 'Software Engineering (R&D)',                             'description' => 'Уточніть ваш піднапрям:', 'question_type_id' => 3, 'deleted' => false, 'multi_answers' => false],
            ['id' =>  6, 'title' => 'Hardware Engineering & Electronics',                     'description' => 'Уточніть ваш піднапрям:', 'question_type_id' => 3, 'deleted' => false, 'multi_answers' => false],
            ['id' =>  7, 'title' => 'Algorithms / Autonomy / CV / ML',                       'description' => 'Уточніть ваш піднапрям:', 'question_type_id' => 3, 'deleted' => false, 'multi_answers' => false],

            // ── Engineering Domains → напряму ролі, без підсекцій (type 4) ───
            ['id' =>  8, 'title' => 'Embedded & Firmware Engineering',                       'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' =>  9, 'title' => 'Mechanical / CAD / Industrial / Aviation Design',       'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 10, 'title' => 'Robotics / UAV / UGV / Platform Engineering',           'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 11, 'title' => 'Systems Integration / Field Test / Validation',         'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 12, 'title' => 'QA / Test Engineering',                                 'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 13, 'title' => 'Simulation / Modeling / Visualization (R&D)',           'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 14, 'title' => 'DevOps / Infrastructure / Security (R&D)',              'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 15, 'title' => 'Technical Writing / Documentation / Engineering Ops',   'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],

            // ── Non-Engineering Domains → всі мають підсекції (type 3) ───────
            ['id' => 16, 'title' => 'Product & Delivery',        'description' => 'Уточніть ваш піднапрям:', 'question_type_id' => 3, 'deleted' => false, 'multi_answers' => false],
            ['id' => 17, 'title' => 'Production / Operations',   'description' => 'Уточніть ваш піднапрям:', 'question_type_id' => 3, 'deleted' => false, 'multi_answers' => false],
            ['id' => 18, 'title' => 'QA / VTK / Quality Control','description' => 'Уточніть ваш піднапрям:', 'question_type_id' => 3, 'deleted' => false, 'multi_answers' => false],
            ['id' => 19, 'title' => 'Go-to-Market & Corporate',  'description' => 'Уточніть ваш піднапрям:', 'question_type_id' => 3, 'deleted' => false, 'multi_answers' => false],
            ['id' => 20, 'title' => 'People & Operations',       'description' => 'Уточніть ваш піднапрям:', 'question_type_id' => 3, 'deleted' => false, 'multi_answers' => false],

            // ── Engineering SubDomains → ведуть до ролей (type 4) ────────────
            ['id' => 21, 'title' => 'Engineering Management',                  'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 22, 'title' => 'Technical Leadership (Team Level)',        'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 23, 'title' => 'Architecture / System Ownership',         'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 24, 'title' => 'Lead Engineers (Senior IC)',               'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 25, 'title' => 'Backend / Application Engineering',       'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 26, 'title' => 'Frontend / Full Stack (Internal Software)','description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 27, 'title' => 'Systems / Linux Software',                'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 28, 'title' => 'Hardware / Electronics',                  'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 29, 'title' => 'PCB / RF / FPGA',                         'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 30, 'title' => 'Control & Navigation',                    'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 31, 'title' => 'Computer Vision',                         'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 32, 'title' => 'Machine Learning',                        'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 33, 'title' => 'Embedded AI',                             'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],

            // ── Non-Engineering SubDomains → ведуть до ролей (type 4) ─────────
            ['id' => 34, 'title' => 'Product Management',                          'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 35, 'title' => 'Project / Program Management',               'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 36, 'title' => 'Business / System Analysis',                 'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 37, 'title' => 'Manufacturing / Production Engineering',     'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 38, 'title' => 'Additive Manufacturing / 3D Printing',       'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 39, 'title' => 'Assembly / Technicians / Operators',         'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 40, 'title' => 'Warehouse / Inventory / Logistics',          'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 41, 'title' => 'Operations Management (Production Context)', 'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 42, 'title' => 'Production Quality Control',                 'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 43, 'title' => 'R&D / Product QA',                           'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 44, 'title' => 'Testing & Validation Operations',            'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 45, 'title' => 'Procurement & Supply Chain',                 'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 46, 'title' => 'Sales & Business Development',               'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 47, 'title' => 'Marketing / Communications',                 'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 48, 'title' => 'Grants / Fundraising / Tenders',            'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 49, 'title' => 'Corporate Operations',                       'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 50, 'title' => 'People & Talent',                            'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 51, 'title' => 'Finance & Accounting',                       'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 52, 'title' => 'Legal & Compliance',                         'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 53, 'title' => 'Operations / Administration',                'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
            ['id' => 54, 'title' => 'Training / Instructors',                     'description' => 'Вкажіть вашу роль.', 'question_type_id' => 4, 'deleted' => false, 'multi_answers' => false],
        ]);

        // ── Question ↔ Answer mappings ────────────────────────────────────────
        // Кожна пара = "це питання може мати цю відповідь"
        DB::table('question_answer')->insert([

            // Q1 (All Roles — MilTech / Defense) → 2 відповіді-треки
            ['question_id' =>  1, 'answer_id' =>   1], // Engineering / R&D
            ['question_id' =>  1, 'answer_id' =>   2], // Non-Engineering Master Structure

            // Q2 (Engineering / R&D) → 12 domain-відповідей
            ['question_id' =>  2, 'answer_id' =>   3], // Engineering Management / R&D Leadership
            ['question_id' =>  2, 'answer_id' =>   4], // Software Engineering (R&D)
            ['question_id' =>  2, 'answer_id' =>   5], // Embedded & Firmware Engineering
            ['question_id' =>  2, 'answer_id' =>   6], // Hardware Engineering & Electronics
            ['question_id' =>  2, 'answer_id' =>   7], // Mechanical / CAD / Industrial / Aviation Design
            ['question_id' =>  2, 'answer_id' =>   8], // Robotics / UAV / UGV / Platform Engineering
            ['question_id' =>  2, 'answer_id' =>   9], // Algorithms / Autonomy / CV / ML
            ['question_id' =>  2, 'answer_id' =>  10], // Systems Integration / Field Test / Validation
            ['question_id' =>  2, 'answer_id' =>  11], // QA / Test Engineering
            ['question_id' =>  2, 'answer_id' =>  12], // Simulation / Modeling / Visualization (R&D)
            ['question_id' =>  2, 'answer_id' =>  13], // DevOps / Infrastructure / Security (R&D)
            ['question_id' =>  2, 'answer_id' =>  14], // Technical Writing / Documentation / Engineering Ops

            // Q3 (Non-Engineering Master Structure) → 5 domain-відповідей
            ['question_id' =>  3, 'answer_id' =>  15], // Product & Delivery
            ['question_id' =>  3, 'answer_id' =>  16], // Production / Operations
            ['question_id' =>  3, 'answer_id' =>  17], // QA / VTK / Quality Control
            ['question_id' =>  3, 'answer_id' =>  18], // Go-to-Market & Corporate
            ['question_id' =>  3, 'answer_id' =>  19], // People & Operations

            // Q4 (Engineering Management / R&D Leadership) → 4 subdomain
            ['question_id' =>  4, 'answer_id' =>  20], // Engineering Management
            ['question_id' =>  4, 'answer_id' =>  21], // Technical Leadership (Team Level)
            ['question_id' =>  4, 'answer_id' =>  22], // Architecture / System Ownership
            ['question_id' =>  4, 'answer_id' =>  23], // Lead Engineers (Senior IC)

            // Q5 (Software Engineering R&D) → 3 subdomain
            ['question_id' =>  5, 'answer_id' =>  24], // Backend / Application Engineering
            ['question_id' =>  5, 'answer_id' =>  25], // Frontend / Full Stack (Internal Software)
            ['question_id' =>  5, 'answer_id' =>  26], // Systems / Linux Software

            // Q6 (Hardware Engineering & Electronics) → 2 subdomain
            ['question_id' =>  6, 'answer_id' =>  27], // Hardware / Electronics
            ['question_id' =>  6, 'answer_id' =>  28], // PCB / RF / FPGA

            // Q7 (Algorithms / Autonomy / CV / ML) → 4 subdomain
            ['question_id' =>  7, 'answer_id' =>  29], // Control & Navigation
            ['question_id' =>  7, 'answer_id' =>  30], // Computer Vision
            ['question_id' =>  7, 'answer_id' =>  31], // Machine Learning
            ['question_id' =>  7, 'answer_id' =>  32], // Embedded AI

            // Q8 (Embedded & Firmware Engineering) → 5 ролей напряму
            ['question_id' =>  8, 'answer_id' =>  64], // Embedded Linux Engineer
            ['question_id' =>  8, 'answer_id' =>  65], // Embedded Core Engineer (MCU / Firmware)
            ['question_id' =>  8, 'answer_id' =>  66], // Autopilot / Flight Stack Engineer
            ['question_id' =>  8, 'answer_id' =>  67], // Motor Control Engineer (FOC / ESC)
            ['question_id' =>  8, 'answer_id' =>  68], // Embedded Video Engineer

            // Q9 (Mechanical / CAD / Industrial / Aviation Design) → 4 ролей напряму
            ['question_id' =>  9, 'answer_id' =>  79], // CAD Engineer
            ['question_id' =>  9, 'answer_id' =>  80], // Industrial / Product Designer (R&D)
            ['question_id' =>  9, 'answer_id' =>  81], // Aviation / UAV Design Engineer
            ['question_id' =>  9, 'answer_id' =>  82], // Prototyping / Process Engineer

            // Q10 (Robotics / UAV / UGV / Platform Engineering) → 5 ролей напряму
            ['question_id' => 10, 'answer_id' =>  83], // Robotics Engineer
            ['question_id' => 10, 'answer_id' =>  84], // Robotics Engineer (Autonomous UAV)
            ['question_id' => 10, 'answer_id' =>  85], // UAV Engineer (UAV Systems)
            ['question_id' => 10, 'answer_id' =>  86], // UAV R&D Engineer
            ['question_id' => 10, 'answer_id' =>  87], // Field Engineer (Robotic Systems Integration & Testing)

            // Q11 (Systems Integration / Field Test / Validation) → 3 ролей напряму
            ['question_id' => 11, 'answer_id' =>  92], // Integration Engineer
            ['question_id' => 11, 'answer_id' =>  93], // Field Test / Validation Engineer
            ['question_id' => 11, 'answer_id' =>  94], // Flight Data Analyst / Flight Data Reporting Engineer

            // Q12 (QA / Test Engineering) → 4 ролей напряму
            ['question_id' => 12, 'answer_id' =>  95], // QA Engineer
            ['question_id' => 12, 'answer_id' =>  96], // Manual QA Engineer
            ['question_id' => 12, 'answer_id' =>  97], // QA Engineer (Embedded / UAV)
            ['question_id' => 12, 'answer_id' =>  98], // Embedded Systems (Hardware) QA / Embedded QA Lead

            // Q13 (Simulation / Modeling / Visualization R&D) → 1 роль напряму
            ['question_id' => 13, 'answer_id' =>  99], // Simulation Engineer

            // Q14 (DevOps / Infrastructure / Security R&D) → 5 ролей напряму
            ['question_id' => 14, 'answer_id' => 100], // DevOps Engineer
            ['question_id' => 14, 'answer_id' => 101], // DevSecOps Engineer
            ['question_id' => 14, 'answer_id' => 102], // Infrastructure / Systems Engineer (R&D)
            ['question_id' => 14, 'answer_id' => 103], // Cloud & Security Engineer
            ['question_id' => 14, 'answer_id' => 104], // Cybersecurity Engineer (Embedded / Connected Systems)

            // Q15 (Technical Writing / Documentation / Engineering Ops) → 3 ролей напряму
            ['question_id' => 15, 'answer_id' => 105], // Technical Writer
            ['question_id' => 15, 'answer_id' => 106], // Technical Writer (R&D / Military Tech)
            ['question_id' => 15, 'answer_id' => 107], // Technical Documentation Engineer

            // Q16 (Product & Delivery) → 3 subdomain
            ['question_id' => 16, 'answer_id' =>  33], // Product Management
            ['question_id' => 16, 'answer_id' =>  34], // Project / Program Management
            ['question_id' => 16, 'answer_id' =>  35], // Business / System Analysis

            // Q17 (Production / Operations) → 5 subdomain
            ['question_id' => 17, 'answer_id' =>  36], // Manufacturing / Production Engineering
            ['question_id' => 17, 'answer_id' =>  37], // Additive Manufacturing / 3D Printing
            ['question_id' => 17, 'answer_id' =>  38], // Assembly / Technicians / Operators
            ['question_id' => 17, 'answer_id' =>  39], // Warehouse / Inventory / Logistics
            ['question_id' => 17, 'answer_id' =>  40], // Operations Management (Production Context)

            // Q18 (QA / VTK / Quality Control) → 3 subdomain
            ['question_id' => 18, 'answer_id' =>  41], // Production Quality Control
            ['question_id' => 18, 'answer_id' =>  42], // R&D / Product QA
            ['question_id' => 18, 'answer_id' =>  43], // Testing & Validation Operations

            // Q19 (Go-to-Market & Corporate) → 5 subdomain
            ['question_id' => 19, 'answer_id' =>  44], // Procurement & Supply Chain
            ['question_id' => 19, 'answer_id' =>  45], // Sales & Business Development
            ['question_id' => 19, 'answer_id' =>  46], // Marketing / Communications
            ['question_id' => 19, 'answer_id' =>  47], // Grants / Fundraising / Tenders
            ['question_id' => 19, 'answer_id' =>  48], // Corporate Operations

            // Q20 (People & Operations) → 5 subdomain
            ['question_id' => 20, 'answer_id' =>  49], // People & Talent
            ['question_id' => 20, 'answer_id' =>  50], // Finance & Accounting
            ['question_id' => 20, 'answer_id' =>  51], // Legal & Compliance
            ['question_id' => 20, 'answer_id' =>  52], // Operations / Administration
            ['question_id' => 20, 'answer_id' =>  53], // Training / Instructors

            // Q21 (Engineering Management) → 2 ролі
            ['question_id' => 21, 'answer_id' =>  54], // Head of Engineering
            ['question_id' => 21, 'answer_id' =>  55], // Engineering Manager

            // Q22 (Technical Leadership Team Level) → 1 роль
            ['question_id' => 22, 'answer_id' =>  56], // Engineering Lead / Tech Lead (MilTech)

            // Q23 (Architecture / System Ownership) → 1 роль
            ['question_id' => 23, 'answer_id' =>  57], // Chief Architect / System Architect

            // Q24 (Lead Engineers Senior IC) → 3 ролі
            ['question_id' => 24, 'answer_id' =>  58], // Lead Backend Developer
            ['question_id' => 24, 'answer_id' =>  59], // Lead C++ Engineer (Hardware & Software)
            ['question_id' => 24, 'answer_id' =>  60], // Lead C++ / Computer Vision Engineer

            // Q25 (Backend / Application Engineering) → 1 роль
            ['question_id' => 25, 'answer_id' =>  61], // Backend / Application Engineer

            // Q26 (Frontend / Full Stack Internal Software) → 1 роль
            ['question_id' => 26, 'answer_id' =>  62], // Frontend / Full Stack Engineer (Internal Software)

            // Q27 (Systems / Linux Software) → 1 роль
            ['question_id' => 27, 'answer_id' =>  63], // Systems / Linux Software Engineer

            // Q28 (Hardware / Electronics) → 4 ролі
            ['question_id' => 28, 'answer_id' =>  69], // Hardware Engineer
            ['question_id' => 28, 'answer_id' =>  70], // Hardware Engineer (R&D)
            ['question_id' => 28, 'answer_id' =>  71], // Hardware Engineer (UAV)
            ['question_id' => 28, 'answer_id' =>  72], // Hardware Engineer (Integration)

            // Q29 (PCB / RF / FPGA) → 6 ролей
            ['question_id' => 29, 'answer_id' =>  73], // PCB Design Engineer
            ['question_id' => 29, 'answer_id' =>  74], // ECAD Engineer
            ['question_id' => 29, 'answer_id' =>  75], // FPGA Engineer
            ['question_id' => 29, 'answer_id' =>  76], // RF Engineer
            ['question_id' => 29, 'answer_id' =>  77], // Power Electronics Engineer
            ['question_id' => 29, 'answer_id' =>  78], // Antenna Engineer

            // Q30 (Control & Navigation) → 1 роль
            ['question_id' => 30, 'answer_id' =>  88], // GNC / Control Engineer

            // Q31 (Computer Vision) → 1 роль
            ['question_id' => 31, 'answer_id' =>  89], // Computer Vision Engineer

            // Q32 (Machine Learning) → 1 роль
            ['question_id' => 32, 'answer_id' =>  90], // ML / Deep Learning Engineer

            // Q33 (Embedded AI) → 1 роль
            ['question_id' => 33, 'answer_id' =>  91], // Embedded ML / Edge AI Engineer

            // Q34 (Product Management) → 3 ролі
            ['question_id' => 34, 'answer_id' => 108], // Product Manager (Defense / MilTech)
            ['question_id' => 34, 'answer_id' => 109], // Technical / Hardware Product Manager
            ['question_id' => 34, 'answer_id' => 110], // Product Owner (Delivery-focused)

            // Q35 (Project / Program Management) → 3 ролі
            ['question_id' => 35, 'answer_id' => 111], // Project Manager
            ['question_id' => 35, 'answer_id' => 112], // Program Manager
            ['question_id' => 35, 'answer_id' => 113], // Delivery Manager

            // Q36 (Business / System Analysis) → 3 ролі
            ['question_id' => 36, 'answer_id' => 114], // Business Analyst
            ['question_id' => 36, 'answer_id' => 115], // System Analyst
            ['question_id' => 36, 'answer_id' => 116], // Product Analyst

            // Q37 (Manufacturing / Production Engineering) → 2 ролі
            ['question_id' => 37, 'answer_id' => 117], // Manufacturing / Production Engineer
            ['question_id' => 37, 'answer_id' => 118], // Production Manager / Head of Production

            // Q38 (Additive Manufacturing / 3D Printing) → 1 роль
            ['question_id' => 38, 'answer_id' => 119], // Additive Manufacturing Engineer / 3D Printing Engineer

            // Q39 (Assembly / Technicians / Operators) → 1 роль
            ['question_id' => 39, 'answer_id' => 120], // Assembly Technician / Production Operator

            // Q40 (Warehouse / Inventory / Logistics) → 1 роль
            ['question_id' => 40, 'answer_id' => 121], // Warehouse / Inventory Specialist

            // Q41 (Operations Management Production Context) → 1 роль
            ['question_id' => 41, 'answer_id' => 122], // Operations Manager (Production)

            // Q42 (Production Quality Control) → 1 роль
            ['question_id' => 42, 'answer_id' => 123], // Quality Control Inspector (VTK)

            // Q43 (R&D / Product QA) → 2 ролі
            ['question_id' => 43, 'answer_id' => 124], // QA Engineer (Non-Engineering)
            ['question_id' => 43, 'answer_id' => 125], // QA Lead / Quality Assurance Lead

            // Q44 (Testing & Validation Operations) → 1 роль
            ['question_id' => 44, 'answer_id' => 126], // Test Technician / Test Operator

            // Q45 (Procurement & Supply Chain) → 1 роль
            ['question_id' => 45, 'answer_id' => 127], // Procurement / Supply Chain Specialist

            // Q46 (Sales & Business Development) → 1 роль
            ['question_id' => 46, 'answer_id' => 128], // Sales Manager / Business Development Manager (Defense)

            // Q47 (Marketing / Communications) → 1 роль
            ['question_id' => 47, 'answer_id' => 129], // Marketing / Communications Manager

            // Q48 (Grants / Fundraising / Tenders) → 1 роль
            ['question_id' => 48, 'answer_id' => 130], // Grant / Tender Manager

            // Q49 (Corporate Operations) → 1 роль
            ['question_id' => 49, 'answer_id' => 131], // Corporate Operations / Administrative Manager

            // Q50 (People & Talent) → 2 ролі
            ['question_id' => 50, 'answer_id' => 132], // Recruiter / Talent Acquisition Specialist
            ['question_id' => 50, 'answer_id' => 133], // HR Manager / People Partner

            // Q51 (Finance & Accounting) → 1 роль
            ['question_id' => 51, 'answer_id' => 134], // Finance / Accounting Specialist

            // Q52 (Legal & Compliance) → 1 роль
            ['question_id' => 52, 'answer_id' => 135], // Legal Counsel / Compliance Specialist

            // Q53 (Operations / Administration) → 1 роль
            ['question_id' => 53, 'answer_id' => 136], // Operations / Administrative Manager

            // Q54 (Training / Instructors) → 1 роль
            ['question_id' => 54, 'answer_id' => 137], // Training Instructor / Technical Trainer
        ]);
    }
}
