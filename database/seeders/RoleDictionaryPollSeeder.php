<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleDictionaryPollSeeder extends Seeder
{
    public function run(): void
    {
        // ── Poll ──────────────────────────────────────────────────────────────
        DB::table('polls')->insert([
            ['id' => 1, 'title' => 'MilTech / Defense Salary & Market Review', 'description' => 'Мета опитування — зібрати дані для MilTech / Defense Salary & Market Report, який відображатиме реальний стан ринку: компенсації, бенефіти, умови роботи та фактори вибору роботодавця. Всі відповіді анонімні та використовуються лише в агрегованому вигляді.'],
        ]);

        // ── Poll ↔ Question mappings ──────────────────────────────────────────
        // order = question_type_id питання (1, 2, 3 або 4)
        DB::table('poll_question')->insert([
            ['poll_id' => 1, 'question_id' =>  1, 'order' => 1], // ALL ROLES — MilTech / Defense          (type 1)
            ['poll_id' => 1, 'question_id' =>  2, 'order' => 2], // ENGINEERING / R&D                      (type 2)
            ['poll_id' => 1, 'question_id' =>  3, 'order' => 2], // NON-ENGINEERING MASTER STRUCTURE        (type 2)
            ['poll_id' => 1, 'question_id' =>  4, 'order' => 3], // 1. Engineering Management / R&D Leadership (type 3)
            ['poll_id' => 1, 'question_id' =>  5, 'order' => 3], // 2. Software Engineering (R&D)           (type 3)
            ['poll_id' => 1, 'question_id' =>  6, 'order' => 3], // 4. Hardware Engineering & Electronics   (type 3)
            ['poll_id' => 1, 'question_id' =>  7, 'order' => 3], // 7. Algorithms / Autonomy / CV / ML      (type 3)
            ['poll_id' => 1, 'question_id' =>  8, 'order' => 4], // 3. Embedded & Firmware Engineering      (type 4)
            ['poll_id' => 1, 'question_id' =>  9, 'order' => 4], // 5. Mechanical / CAD / Industrial / Aviation Design (type 4)
            ['poll_id' => 1, 'question_id' => 10, 'order' => 4], // 6. Robotics / UAV / UGV / Platform Engineering (type 4)
            ['poll_id' => 1, 'question_id' => 11, 'order' => 4], // 8. Systems Integration / Field Test / Validation (type 4)
            ['poll_id' => 1, 'question_id' => 12, 'order' => 4], // 9. QA / Test Engineering                (type 4)
            ['poll_id' => 1, 'question_id' => 13, 'order' => 4], // 10. Simulation / Modeling / Visualization (R&D) (type 4)
            ['poll_id' => 1, 'question_id' => 14, 'order' => 4], // 11. DevOps / Infrastructure / Security (R&D) (type 4)
            ['poll_id' => 1, 'question_id' => 15, 'order' => 4], // 12. Technical Writing / Documentation / Engineering Ops (type 4)
            ['poll_id' => 1, 'question_id' => 16, 'order' => 3], // 1. Product & Delivery                   (type 3)
            ['poll_id' => 1, 'question_id' => 17, 'order' => 3], // 2. Production / Operations              (type 3)
            ['poll_id' => 1, 'question_id' => 18, 'order' => 3], // 3. QA / VTK / Quality Control           (type 3)
            ['poll_id' => 1, 'question_id' => 19, 'order' => 3], // 4. Go-to-Market & Corporate             (type 3)
            ['poll_id' => 1, 'question_id' => 20, 'order' => 3], // 5. People & Operations                  (type 3)
            ['poll_id' => 1, 'question_id' => 21, 'order' => 4], // 1.1 Engineering Management              (type 4)
            ['poll_id' => 1, 'question_id' => 22, 'order' => 4], // 1.2 Technical Leadership (Team level)   (type 4)
            ['poll_id' => 1, 'question_id' => 23, 'order' => 4], // 1.3 Architecture / System Ownership     (type 4)
            ['poll_id' => 1, 'question_id' => 24, 'order' => 4], // 1.4 Lead Engineers (Senior IC)          (type 4)
            ['poll_id' => 1, 'question_id' => 25, 'order' => 4], // 2.1 Backend / Application Engineering   (type 4)
            ['poll_id' => 1, 'question_id' => 26, 'order' => 4], // 2.2 Frontend / Full Stack (Internal Software) (type 4)
            ['poll_id' => 1, 'question_id' => 27, 'order' => 4], // 2.3 Systems / Linux Software            (type 4)
            ['poll_id' => 1, 'question_id' => 28, 'order' => 4], // 4.1 Hardware / Electronics              (type 4)
            ['poll_id' => 1, 'question_id' => 29, 'order' => 4], // 4.2 PCB / RF / FPGA                     (type 4)
            ['poll_id' => 1, 'question_id' => 30, 'order' => 4], // 7.1 Control & Navigation                (type 4)
            ['poll_id' => 1, 'question_id' => 31, 'order' => 4], // 7.2 Computer Vision                     (type 4)
            ['poll_id' => 1, 'question_id' => 32, 'order' => 4], // 7.3 Machine Learning                    (type 4)
            ['poll_id' => 1, 'question_id' => 33, 'order' => 4], // 7.4 Embedded AI                         (type 4)
            ['poll_id' => 1, 'question_id' => 34, 'order' => 4], // 1.1 Product Management                  (type 4)
            ['poll_id' => 1, 'question_id' => 35, 'order' => 4], // 1.2 Project / Program Management        (type 4)
            ['poll_id' => 1, 'question_id' => 36, 'order' => 4], // 1.3 Business / System Analysis          (type 4)
            ['poll_id' => 1, 'question_id' => 37, 'order' => 4], // 2.1 Manufacturing / Production Engineering (type 4)
            ['poll_id' => 1, 'question_id' => 38, 'order' => 4], // 2.2 Additive Manufacturing / 3D Printing (type 4)
            ['poll_id' => 1, 'question_id' => 39, 'order' => 4], // 2.3 Assembly / Technicians / Operators  (type 4)
            ['poll_id' => 1, 'question_id' => 40, 'order' => 4], // 2.4 Warehouse / Inventory / Logistics   (type 4)
            ['poll_id' => 1, 'question_id' => 41, 'order' => 4], // 2.5 Operations Management (Production Context) (type 4)
            ['poll_id' => 1, 'question_id' => 42, 'order' => 4], // 3.1 Production Quality Control          (type 4)
            ['poll_id' => 1, 'question_id' => 43, 'order' => 4], // 3.2 R&D / Product QA                    (type 4)
            ['poll_id' => 1, 'question_id' => 44, 'order' => 4], // 3.3 Testing & Validation Operations     (type 4)
            ['poll_id' => 1, 'question_id' => 45, 'order' => 4], // 4.1 Procurement & Supply Chain          (type 4)
            ['poll_id' => 1, 'question_id' => 46, 'order' => 4], // 4.2 Sales & Business Development        (type 4)
            ['poll_id' => 1, 'question_id' => 47, 'order' => 4], // 4.3 Marketing / Communications          (type 4)
            ['poll_id' => 1, 'question_id' => 48, 'order' => 4], // 4.4 Grants / Fundraising / Tenders      (type 4)
            ['poll_id' => 1, 'question_id' => 49, 'order' => 4], // 4.5 Corporate Operations                (type 4)
            ['poll_id' => 1, 'question_id' => 50, 'order' => 4], // 5.1 People & Talent                     (type 4)
            ['poll_id' => 1, 'question_id' => 51, 'order' => 4], // 5.2 Finance & Accounting                (type 4)
            ['poll_id' => 1, 'question_id' => 52, 'order' => 4], // 5.3 Legal & Compliance                  (type 4)
            ['poll_id' => 1, 'question_id' => 53, 'order' => 4], // 5.4 Operations / Administration         (type 4)
            ['poll_id' => 1, 'question_id' => 54, 'order' => 4], // 5.5 Training / Instructors              (type 4)
        ]);
    }
}
