<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleDictionaryConditionsSeeder extends Seeder
{
    public function run(): void
    {
        // Хелпер для генерації condition JSON
        $cond = function (int $questionId, array $answerIds): string {
            return json_encode([
                'required'   => [(string) $questionId => $answerIds],
                'prohibited' => [],
                'sufficient' => [],
            ]);
        };

        // Q1 (ALL ROLES) не має умов — завжди показується першим

        DB::table('question_conditions')->insert([

            // ── Питання 2-го рівня (Track → Domain) ──────────────────────────
            // Q2 показується коли на Q1 вибрано відповідь 1 (ENGINEERING / R&D)
            ['poll_id' => 1, 'question_id' =>  2, 'condition' => $cond(1, [1]),  'active' => true],
            // Q3 показується коли на Q1 вибрано відповідь 2 (NON-ENGINEERING)
            ['poll_id' => 1, 'question_id' =>  3, 'condition' => $cond(1, [2]),  'active' => true],

            // ── Питання 3-го рівня під ENGINEERING (Domain → SubDomain) ──────
            // Q4 — коли на Q2 вибрано відповідь 3  (1. Engineering Management / R&D Leadership)
            ['poll_id' => 1, 'question_id' =>  4, 'condition' => $cond(2, [3]),  'active' => true],
            // Q5 — коли на Q2 вибрано відповідь 4  (2. Software Engineering R&D)
            ['poll_id' => 1, 'question_id' =>  5, 'condition' => $cond(2, [4]),  'active' => true],
            // Q6 — коли на Q2 вибрано відповідь 6  (4. Hardware Engineering & Electronics)
            ['poll_id' => 1, 'question_id' =>  6, 'condition' => $cond(2, [6]),  'active' => true],
            // Q7 — коли на Q2 вибрано відповідь 9  (7. Algorithms / Autonomy / CV / ML)
            ['poll_id' => 1, 'question_id' =>  7, 'condition' => $cond(2, [9]),  'active' => true],

            // ── Питання 4-го рівня під ENGINEERING (Domain → Role напряму) ───
            // Q8  — коли на Q2 вибрано відповідь 5  (3. Embedded & Firmware Engineering)
            ['poll_id' => 1, 'question_id' =>  8, 'condition' => $cond(2, [5]),  'active' => true],
            // Q9  — коли на Q2 вибрано відповідь 7  (5. Mechanical / CAD / Industrial / Aviation Design)
            ['poll_id' => 1, 'question_id' =>  9, 'condition' => $cond(2, [7]),  'active' => true],
            // Q10 — коли на Q2 вибрано відповідь 8  (6. Robotics / UAV / UGV / Platform Engineering)
            ['poll_id' => 1, 'question_id' => 10, 'condition' => $cond(2, [8]),  'active' => true],
            // Q11 — коли на Q2 вибрано відповідь 10 (8. Systems Integration / Field Test / Validation)
            ['poll_id' => 1, 'question_id' => 11, 'condition' => $cond(2, [10]), 'active' => true],
            // Q12 — коли на Q2 вибрано відповідь 11 (9. QA / Test Engineering)
            ['poll_id' => 1, 'question_id' => 12, 'condition' => $cond(2, [11]), 'active' => true],
            // Q13 — коли на Q2 вибрано відповідь 12 (10. Simulation / Modeling / Visualization R&D)
            ['poll_id' => 1, 'question_id' => 13, 'condition' => $cond(2, [12]), 'active' => true],
            // Q14 — коли на Q2 вибрано відповідь 13 (11. DevOps / Infrastructure / Security R&D)
            ['poll_id' => 1, 'question_id' => 14, 'condition' => $cond(2, [13]), 'active' => true],
            // Q15 — коли на Q2 вибрано відповідь 14 (12. Technical Writing / Documentation / Engineering Ops)
            ['poll_id' => 1, 'question_id' => 15, 'condition' => $cond(2, [14]), 'active' => true],

            // ── Питання 3-го рівня під NON-ENGINEERING (Domain → SubDomain) ──
            // Q16 — коли на Q3 вибрано відповідь 15 (1. Product & Delivery)
            ['poll_id' => 1, 'question_id' => 16, 'condition' => $cond(3, [15]), 'active' => true],
            // Q17 — коли на Q3 вибрано відповідь 16 (2. Production / Operations)
            ['poll_id' => 1, 'question_id' => 17, 'condition' => $cond(3, [16]), 'active' => true],
            // Q18 — коли на Q3 вибрано відповідь 17 (3. QA / VTK / Quality Control)
            ['poll_id' => 1, 'question_id' => 18, 'condition' => $cond(3, [17]), 'active' => true],
            // Q19 — коли на Q3 вибрано відповідь 18 (4. Go-to-Market & Corporate)
            ['poll_id' => 1, 'question_id' => 19, 'condition' => $cond(3, [18]), 'active' => true],
            // Q20 — коли на Q3 вибрано відповідь 19 (5. People & Operations)
            ['poll_id' => 1, 'question_id' => 20, 'condition' => $cond(3, [19]), 'active' => true],

            // ── Питання 4-го рівня під Engineering SubDomains ─────────────────
            // під Q4 (1. Engineering Management / R&D Leadership)
            // Q21 — коли на Q4 вибрано відповідь 20 (1.1 Engineering Management)
            ['poll_id' => 1, 'question_id' => 21, 'condition' => $cond(4, [20]), 'active' => true],
            // Q22 — коли на Q4 вибрано відповідь 21 (1.2 Technical Leadership Team level)
            ['poll_id' => 1, 'question_id' => 22, 'condition' => $cond(4, [21]), 'active' => true],
            // Q23 — коли на Q4 вибрано відповідь 22 (1.3 Architecture / System Ownership)
            ['poll_id' => 1, 'question_id' => 23, 'condition' => $cond(4, [22]), 'active' => true],
            // Q24 — коли на Q4 вибрано відповідь 23 (1.4 Lead Engineers Senior IC)
            ['poll_id' => 1, 'question_id' => 24, 'condition' => $cond(4, [23]), 'active' => true],

            // під Q5 (2. Software Engineering R&D)
            // Q25 — коли на Q5 вибрано відповідь 24 (2.1 Backend / Application Engineering)
            ['poll_id' => 1, 'question_id' => 25, 'condition' => $cond(5, [24]), 'active' => true],
            // Q26 — коли на Q5 вибрано відповідь 25 (2.2 Frontend / Full Stack Internal Software)
            ['poll_id' => 1, 'question_id' => 26, 'condition' => $cond(5, [25]), 'active' => true],
            // Q27 — коли на Q5 вибрано відповідь 26 (2.3 Systems / Linux Software)
            ['poll_id' => 1, 'question_id' => 27, 'condition' => $cond(5, [26]), 'active' => true],

            // під Q6 (4. Hardware Engineering & Electronics)
            // Q28 — коли на Q6 вибрано відповідь 27 (4.1 Hardware / Electronics)
            ['poll_id' => 1, 'question_id' => 28, 'condition' => $cond(6, [27]), 'active' => true],
            // Q29 — коли на Q6 вибрано відповідь 28 (4.2 PCB / RF / FPGA)
            ['poll_id' => 1, 'question_id' => 29, 'condition' => $cond(6, [28]), 'active' => true],

            // під Q7 (7. Algorithms / Autonomy / CV / ML)
            // Q30 — коли на Q7 вибрано відповідь 29 (7.1 Control & Navigation)
            ['poll_id' => 1, 'question_id' => 30, 'condition' => $cond(7, [29]), 'active' => true],
            // Q31 — коли на Q7 вибрано відповідь 30 (7.2 Computer Vision)
            ['poll_id' => 1, 'question_id' => 31, 'condition' => $cond(7, [30]), 'active' => true],
            // Q32 — коли на Q7 вибрано відповідь 31 (7.3 Machine Learning)
            ['poll_id' => 1, 'question_id' => 32, 'condition' => $cond(7, [31]), 'active' => true],
            // Q33 — коли на Q7 вибрано відповідь 32 (7.4 Embedded AI)
            ['poll_id' => 1, 'question_id' => 33, 'condition' => $cond(7, [32]), 'active' => true],

            // ── Питання 4-го рівня під Non-Engineering SubDomains ─────────────
            // під Q16 (1. Product & Delivery)
            // Q34 — коли на Q16 вибрано відповідь 33 (1.1 Product Management)
            ['poll_id' => 1, 'question_id' => 34, 'condition' => $cond(16, [33]), 'active' => true],
            // Q35 — коли на Q16 вибрано відповідь 34 (1.2 Project / Program Management)
            ['poll_id' => 1, 'question_id' => 35, 'condition' => $cond(16, [34]), 'active' => true],
            // Q36 — коли на Q16 вибрано відповідь 35 (1.3 Business / System Analysis)
            ['poll_id' => 1, 'question_id' => 36, 'condition' => $cond(16, [35]), 'active' => true],

            // під Q17 (2. Production / Operations)
            // Q37 — коли на Q17 вибрано відповідь 36 (2.1 Manufacturing / Production Engineering)
            ['poll_id' => 1, 'question_id' => 37, 'condition' => $cond(17, [36]), 'active' => true],
            // Q38 — коли на Q17 вибрано відповідь 37 (2.2 Additive Manufacturing / 3D Printing)
            ['poll_id' => 1, 'question_id' => 38, 'condition' => $cond(17, [37]), 'active' => true],
            // Q39 — коли на Q17 вибрано відповідь 38 (2.3 Assembly / Technicians / Operators)
            ['poll_id' => 1, 'question_id' => 39, 'condition' => $cond(17, [38]), 'active' => true],
            // Q40 — коли на Q17 вибрано відповідь 39 (2.4 Warehouse / Inventory / Logistics)
            ['poll_id' => 1, 'question_id' => 40, 'condition' => $cond(17, [39]), 'active' => true],
            // Q41 — коли на Q17 вибрано відповідь 40 (2.5 Operations Management Production Context)
            ['poll_id' => 1, 'question_id' => 41, 'condition' => $cond(17, [40]), 'active' => true],

            // під Q18 (3. QA / VTK / Quality Control)
            // Q42 — коли на Q18 вибрано відповідь 41 (3.1 Production Quality Control)
            ['poll_id' => 1, 'question_id' => 42, 'condition' => $cond(18, [41]), 'active' => true],
            // Q43 — коли на Q18 вибрано відповідь 42 (3.2 R&D / Product QA)
            ['poll_id' => 1, 'question_id' => 43, 'condition' => $cond(18, [42]), 'active' => true],
            // Q44 — коли на Q18 вибрано відповідь 43 (3.3 Testing & Validation Operations)
            ['poll_id' => 1, 'question_id' => 44, 'condition' => $cond(18, [43]), 'active' => true],

            // під Q19 (4. Go-to-Market & Corporate)
            // Q45 — коли на Q19 вибрано відповідь 44 (4.1 Procurement & Supply Chain)
            ['poll_id' => 1, 'question_id' => 45, 'condition' => $cond(19, [44]), 'active' => true],
            // Q46 — коли на Q19 вибрано відповідь 45 (4.2 Sales & Business Development)
            ['poll_id' => 1, 'question_id' => 46, 'condition' => $cond(19, [45]), 'active' => true],
            // Q47 — коли на Q19 вибрано відповідь 46 (4.3 Marketing / Communications)
            ['poll_id' => 1, 'question_id' => 47, 'condition' => $cond(19, [46]), 'active' => true],
            // Q48 — коли на Q19 вибрано відповідь 47 (4.4 Grants / Fundraising / Tenders)
            ['poll_id' => 1, 'question_id' => 48, 'condition' => $cond(19, [47]), 'active' => true],
            // Q49 — коли на Q19 вибрано відповідь 48 (4.5 Corporate Operations)
            ['poll_id' => 1, 'question_id' => 49, 'condition' => $cond(19, [48]), 'active' => true],

            // під Q20 (5. People & Operations)
            // Q50 — коли на Q20 вибрано відповідь 49 (5.1 People & Talent)
            ['poll_id' => 1, 'question_id' => 50, 'condition' => $cond(20, [49]), 'active' => true],
            // Q51 — коли на Q20 вибрано відповідь 50 (5.2 Finance & Accounting)
            ['poll_id' => 1, 'question_id' => 51, 'condition' => $cond(20, [50]), 'active' => true],
            // Q52 — коли на Q20 вибрано відповідь 51 (5.3 Legal & Compliance)
            ['poll_id' => 1, 'question_id' => 52, 'condition' => $cond(20, [51]), 'active' => true],
            // Q53 — коли на Q20 вибрано відповідь 52 (5.4 Operations / Administration)
            ['poll_id' => 1, 'question_id' => 53, 'condition' => $cond(20, [52]), 'active' => true],
            // Q54 — коли на Q20 вибрано відповідь 53 (5.5 Training / Instructors)
            ['poll_id' => 1, 'question_id' => 54, 'condition' => $cond(20, [53]), 'active' => true],
        ]);
    }
}
