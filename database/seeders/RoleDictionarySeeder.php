<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleDictionarySeeder extends Seeder
{
    public function run(): void
    {
        // ── 1. Question Types ─────────────────────────────────────────────────
        DB::table('question_types')->insert([
            ['id' => 10, 'title' => 'Track',     'description' => 'Вибір між технічними і не технічними спеціалістами'],
            ['id' => 11, 'title' => 'Domain',    'description' => 'Всі напрямки роботи і технічні і не технічні'],
            ['id' => 12, 'title' => 'SubDomain', 'description' => 'Всі піднапрямки роботи і технічні і не технічні'],
            ['id' => 13, 'title' => 'Role',      'description' => 'Конкретна роль працівника'],
        ]);

        // ── 2. Answers ────────────────────────────────────────────────────────
        // question_type_id відповідає рівню вкладеності:
        //   1 (Track)     – верхній рівень: Engineering / Non-Engineering
        //   2 (Domain)    – основні функціональні напрямки
        //   3 (SubDomain) – підспеціалізації всередині напрямку
        //   4 (Role)      – конкретна роль, без подальшого dropdown

        DB::table('answers')->insert([

            // ── Track (type 1) ────────────────────────────────────────────────
            ['id' =>  1, 'title' => 'Engineering / R&D',                'description' => null, 'question_type_id' => 10, 'deleted' => false],
            ['id' =>  2, 'title' => 'Non-Engineering',                  'description' => null, 'question_type_id' => 10, 'deleted' => false],

            // ── Domain (type 2) — Engineering ─────────────────────────────────
            ['id' =>  3, 'title' => 'Engineering Management / R&D Leadership',           'description' => null, 'question_type_id' => 11, 'deleted' => false],
            ['id' =>  4, 'title' => 'Software Engineering (R&D)',                        'description' => null, 'question_type_id' => 11, 'deleted' => false],
            ['id' =>  5, 'title' => 'Embedded & Firmware Engineering',                   'description' => null, 'question_type_id' => 11, 'deleted' => false],
            ['id' =>  6, 'title' => 'Hardware Engineering & Electronics',                'description' => null, 'question_type_id' => 11, 'deleted' => false],
            ['id' =>  7, 'title' => 'Mechanical / CAD / Industrial / Aviation Design',   'description' => null, 'question_type_id' => 11, 'deleted' => false],
            ['id' =>  8, 'title' => 'Robotics / UAV / UGV / Platform Engineering',       'description' => null, 'question_type_id' => 11, 'deleted' => false],
            ['id' =>  9, 'title' => 'Algorithms / Autonomy / CV / ML',                  'description' => null, 'question_type_id' => 11, 'deleted' => false],
            ['id' => 10, 'title' => 'Systems Integration / Field Test / Validation',    'description' => null, 'question_type_id' => 11, 'deleted' => false],
            ['id' => 11, 'title' => 'QA / Test Engineering',                             'description' => null, 'question_type_id' => 11, 'deleted' => false],
            ['id' => 12, 'title' => 'Simulation / Modeling / Visualization (R&D)',      'description' => null, 'question_type_id' => 11, 'deleted' => false],
            ['id' => 13, 'title' => 'DevOps / Infrastructure / Security (R&D)',         'description' => null, 'question_type_id' => 11, 'deleted' => false],
            ['id' => 14, 'title' => 'Technical Writing / Documentation / Engineering Ops','description' => null, 'question_type_id' => 11, 'deleted' => false],

            // ── Domain (type 2) — Non-Engineering ─────────────────────────────
            ['id' => 15, 'title' => 'Product & Delivery',        'description' => null, 'question_type_id' => 11, 'deleted' => false],
            ['id' => 16, 'title' => 'Production / Operations',   'description' => null, 'question_type_id' => 11, 'deleted' => false],
            ['id' => 17, 'title' => 'QA / VTK / Quality Control','description' => null, 'question_type_id' => 11, 'deleted' => false],
            ['id' => 18, 'title' => 'Go-to-Market & Corporate',  'description' => null, 'question_type_id' => 11, 'deleted' => false],
            ['id' => 19, 'title' => 'People & Operations',       'description' => null, 'question_type_id' => 11, 'deleted' => false],

            // ── SubDomain (type 3) — Engineering ──────────────────────────────
            ['id' => 20, 'title' => 'Engineering Management',                 'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 21, 'title' => 'Technical Leadership (Team Level)',       'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 22, 'title' => 'Architecture / System Ownership',        'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 23, 'title' => 'Lead Engineers (Senior IC)',              'description' => null, 'question_type_id' => 12, 'deleted' => false],
            // under "2. Software Engineering (R&D)"
            ['id' => 24, 'title' => 'Backend / Application Engineering',        'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 25, 'title' => 'Frontend', 'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 26, 'title' => 'Systems / Linux Software',                 'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 27, 'title' => 'Hardware / Electronics',                   'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 28, 'title' => 'PCB / RF / FPGA',                          'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 29, 'title' => 'Control & Navigation',                     'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 30, 'title' => 'Computer Vision',                          'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 31, 'title' => 'Machine Learning',                         'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 32, 'title' => 'Embedded AI',                              'description' => null, 'question_type_id' => 12, 'deleted' => false],

            // ── SubDomain (type 3) — Non-Engineering ──────────────────────────
            ['id' => 33, 'title' => 'Product Management',                          'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 34, 'title' => 'Project / Program Management',               'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 35, 'title' => 'Business / System Analysis',                 'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 36, 'title' => 'Manufacturing / Production Engineering',     'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 37, 'title' => 'Additive Manufacturing / 3D Printing',       'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 38, 'title' => 'Assembly / Technicians / Operators',         'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 39, 'title' => 'Warehouse / Inventory / Logistics',          'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 40, 'title' => 'Operations Management (Production Context)', 'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 41, 'title' => 'Production Quality Control',                 'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 42, 'title' => 'R&D / Product QA',                           'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 43, 'title' => 'Testing & Validation Operations',            'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 44, 'title' => 'Procurement & Supply Chain',                 'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 45, 'title' => 'Sales & Business Development',               'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 46, 'title' => 'Marketing / Communications',                 'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 47, 'title' => 'Grants / Fundraising / Tenders',            'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 48, 'title' => 'Corporate Operations',                       'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 49, 'title' => 'People & Talent',                            'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 50, 'title' => 'Finance & Accounting',                       'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 51, 'title' => 'Legal & Compliance',                         'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 52, 'title' => 'Operations / Administration',                'description' => null, 'question_type_id' => 12, 'deleted' => false],
            ['id' => 53, 'title' => 'Training / Instructors',                     'description' => null, 'question_type_id' => 12, 'deleted' => false],

            // ── Roles (type 4) — Engineering ──────────────────────────────────
            // 1.1 Engineering Management
            ['id' =>  54, 'title' => 'Head of Engineering',  'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  55, 'title' => 'Engineering Manager',  'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 1.2 Technical Leadership
            ['id' =>  56, 'title' => 'Engineering Lead / Tech Lead (MilTech)', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 1.3 Architecture / System Ownership
            ['id' =>  57, 'title' => 'Chief Architect / System Architect', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 1.4 Lead Engineers
            ['id' =>  58, 'title' => 'Lead Backend Developer',              'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  59, 'title' => 'Lead C++ Engineer (Hardware & Software)', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  60, 'title' => 'Lead C++ / Computer Vision Engineer', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 2.1 Backend / Application Engineering
            ['id' => 284, 'title' => 'PHP',    'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 285, 'title' => 'Python', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 286, 'title' => 'Node.js','description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 287, 'title' => 'Java',   'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 288, 'title' => 'C#',     'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 289, 'title' => 'Rust',   'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 290, 'title' => 'C/C++',  'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 2.2 Frontend
            ['id' => 291, 'title' => 'React',      'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 292, 'title' => 'JavaScript',  'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 293, 'title' => 'TypeScript',  'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 2.3 Systems / Linux Software
            ['id' =>  63, 'title' => 'Systems / Linux Software Engineer', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 3. Embedded & Firmware (direct roles — no SubDomain)
            ['id' =>  64, 'title' => 'Embedded Linux Engineer',              'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  65, 'title' => 'Embedded Core Engineer (MCU / Firmware)', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  66, 'title' => 'Autopilot / Flight Stack Engineer',    'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  67, 'title' => 'Motor Control Engineer (FOC / ESC)',   'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  68, 'title' => 'Embedded Video Engineer',              'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 4.1 Hardware / Electronics
            ['id' =>  69, 'title' => 'Hardware Engineer',             'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  70, 'title' => 'Hardware Engineer (R&D)',        'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  71, 'title' => 'Hardware Engineer (UAV)',        'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  72, 'title' => 'Hardware Engineer (Integration)','description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 4.2 PCB / RF / FPGA
            ['id' =>  73, 'title' => 'PCB Design Engineer',        'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  74, 'title' => 'ECAD Engineer',              'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  75, 'title' => 'FPGA Engineer',              'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  76, 'title' => 'RF Engineer',                'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  77, 'title' => 'Power Electronics Engineer', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  78, 'title' => 'Antenna Engineer',           'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 5. Mechanical / CAD (direct roles)
            ['id' =>  79, 'title' => 'CAD Engineer',                        'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  80, 'title' => 'Industrial / Product Designer (R&D)', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  81, 'title' => 'Aviation / UAV Design Engineer',      'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  82, 'title' => 'Prototyping / Process Engineer',      'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 6. Robotics / UAV (direct roles)
            ['id' =>  83, 'title' => 'Robotics Engineer',                                      'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  84, 'title' => 'Robotics Engineer (Autonomous UAV)',                     'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  85, 'title' => 'UAV Engineer (UAV Systems)',                             'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  86, 'title' => 'UAV R&D Engineer',                                       'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  87, 'title' => 'Field Engineer (Robotic Systems Integration & Testing)', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 7.1 Control & Navigation
            ['id' =>  88, 'title' => 'GNC / Control Engineer',       'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 7.2 Computer Vision
            ['id' =>  89, 'title' => 'Computer Vision Engineer',     'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 7.3 Machine Learning
            ['id' =>  90, 'title' => 'ML / Deep Learning Engineer',  'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 7.4 Embedded AI
            ['id' =>  91, 'title' => 'Embedded ML / Edge AI Engineer','description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 8. Systems Integration (direct roles)
            ['id' =>  92, 'title' => 'Integration Engineer',                               'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  93, 'title' => 'Field Test / Validation Engineer',                   'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  94, 'title' => 'Flight Data Analyst / Flight Data Reporting Engineer','description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 9. QA / Test Engineering (direct roles)
            ['id' =>  95, 'title' => 'QA Engineer',                                        'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  96, 'title' => 'Manual QA Engineer',                                 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  97, 'title' => 'QA Engineer (Embedded / UAV)',                       'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' =>  98, 'title' => 'Embedded Systems (Hardware) QA / Embedded QA Lead', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 10. Simulation (direct role)
            ['id' =>  99, 'title' => 'Simulation Engineer', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 11. DevOps / Infrastructure (direct roles)
            ['id' => 100, 'title' => 'DevOps Engineer',                                      'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 101, 'title' => 'DevSecOps Engineer',                                   'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 102, 'title' => 'Infrastructure / Systems Engineer (R&D)',              'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 103, 'title' => 'Cloud & Security Engineer',                            'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 104, 'title' => 'Cybersecurity Engineer (Embedded / Connected Systems)','description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 12. Technical Writing (direct roles)
            ['id' => 105, 'title' => 'Technical Writer',                    'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 106, 'title' => 'Technical Writer (R&D / Military Tech)','description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 107, 'title' => 'Technical Documentation Engineer',    'description' => null, 'question_type_id' => 13, 'deleted' => false],

            // ── Roles (type 4) — Non-Engineering ──────────────────────────────
            // 1.1 Product Management
            ['id' => 108, 'title' => 'Product Manager (Defense / MilTech)',    'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 109, 'title' => 'Technical / Hardware Product Manager',   'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 110, 'title' => 'Product Owner (Delivery-focused)',       'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 1.2 Project / Program Management
            ['id' => 111, 'title' => 'Project Manager',  'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 112, 'title' => 'Program Manager',  'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 113, 'title' => 'Delivery Manager', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 1.3 Business / System Analysis
            ['id' => 114, 'title' => 'Business Analyst', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 115, 'title' => 'System Analyst',   'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 116, 'title' => 'Product Analyst',  'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 2.1 Manufacturing / Production Engineering
            ['id' => 117, 'title' => 'Manufacturing / Production Engineer',     'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 118, 'title' => 'Production Manager / Head of Production', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 2.2 Additive Manufacturing
            ['id' => 119, 'title' => 'Additive Manufacturing Engineer / 3D Printing Engineer', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 2.3 Assembly
            ['id' => 120, 'title' => 'Assembly Technician / Production Operator', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 2.4 Warehouse
            ['id' => 121, 'title' => 'Warehouse / Inventory Specialist', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 2.5 Operations Management
            ['id' => 122, 'title' => 'Operations Manager (Production)', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 3.1 Production Quality Control
            ['id' => 123, 'title' => 'Quality Control Inspector (VTK)', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 3.2 R&D / Product QA
            ['id' => 124, 'title' => 'QA Engineer (Non-Engineering)',        'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 125, 'title' => 'QA Lead / Quality Assurance Lead',     'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 3.3 Testing & Validation Operations
            ['id' => 126, 'title' => 'Test Technician / Test Operator', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 4.1 Procurement & Supply Chain
            ['id' => 127, 'title' => 'Procurement / Supply Chain Specialist', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 4.2 Sales & Business Development
            ['id' => 128, 'title' => 'Sales Manager / Business Development Manager (Defense)', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 4.3 Marketing / Communications
            ['id' => 129, 'title' => 'Marketing / Communications Manager', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 4.4 Grants / Fundraising / Tenders
            ['id' => 130, 'title' => 'Grant / Tender Manager', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 4.5 Corporate Operations
            ['id' => 131, 'title' => 'Corporate Operations / Administrative Manager', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 5.1 People & Talent
            ['id' => 132, 'title' => 'Recruiter / Talent Acquisition Specialist', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            ['id' => 133, 'title' => 'HR Manager / People Partner',               'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 5.2 Finance & Accounting
            ['id' => 134, 'title' => 'Finance / Accounting Specialist', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 5.3 Legal & Compliance
            ['id' => 135, 'title' => 'Legal Counsel / Compliance Specialist', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 5.4 Operations / Administration
            ['id' => 136, 'title' => 'Operations / Administrative Manager', 'description' => null, 'question_type_id' => 13, 'deleted' => false],
            // 5.5 Training / Instructors
            ['id' => 137, 'title' => 'Training Instructor / Technical Trainer', 'description' => null, 'question_type_id' => 13, 'deleted' => false],

            // ── Інше (Custom) — по одній на кожне питання типу Role ───────────
            ['id' => 294, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q8
            ['id' => 295, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q9
            ['id' => 296, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q10
            ['id' => 297, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q11
            ['id' => 298, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q12
            ['id' => 299, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q13
            ['id' => 300, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q14
            ['id' => 301, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q15
            ['id' => 302, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q21
            ['id' => 303, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q22
            ['id' => 304, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q23
            ['id' => 305, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q24
            ['id' => 306, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q25
            ['id' => 307, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q26
            ['id' => 308, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q27
            ['id' => 309, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q28
            ['id' => 310, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q29
            ['id' => 311, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q30
            ['id' => 312, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q31
            ['id' => 313, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q32
            ['id' => 314, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q33
            ['id' => 315, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q34
            ['id' => 316, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q35
            ['id' => 317, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q36
            ['id' => 318, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q37
            ['id' => 319, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q38
            ['id' => 320, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q39
            ['id' => 321, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q40
            ['id' => 322, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q41
            ['id' => 323, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q42
            ['id' => 324, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q43
            ['id' => 325, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q44
            ['id' => 326, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q45
            ['id' => 327, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q46
            ['id' => 328, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q47
            ['id' => 329, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q48
            ['id' => 330, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q49
            ['id' => 331, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q50
            ['id' => 332, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q51
            ['id' => 333, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q52
            ['id' => 334, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q53
            ['id' => 335, 'title' => 'Інше', 'description' => null, 'question_type_id' => 1, 'deleted' => false], // Q54
        ]);
    }
}
