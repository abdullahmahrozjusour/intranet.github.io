<?php

namespace Database\Seeders;

use App\Models\Modal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modals')->whereIn('id',[1,2,3])->delete();
        $data = [
            [
                'id'=>1,
                'titleEn'=>'Policies',
                'titleAr'=>'السياسات',
                'descEn'=>'<p>At Jusour, our policies are designed to ensure a safe, respectful, and productive environment for
                        all employees, partners, and stakeholders. Our commitment to ethical practices and compliance
                        with
                        regulations is fundamental to our mission.</p>

                    <strong>Code of Conduct</strong>

                    <p>
                        We uphold the highest standards of integrity and professionalism. All employees are expected to
                        act
                        in a manner that reflects our values and fosters a positive work environment. Discrimination,
                        harassment, or any form of misconduct will not be tolerated.
                    </p>


                    <strong>Equal Employment Opportunity</strong>

                    <p>We are dedicated to providing equal employment opportunities for all individuals, regardless of
                        race, color, religion, gender, sexual orientation, age, disability, or any other protected
                        characteristic. We believe in diversity and inclusion as essential components of our success.
                    </p>


                    <strong>Confidentiality</strong>

                    <p>All employees must respect the confidentiality of sensitive information. This includes
                        proprietary
                        data, employee records, and client information. Breaches of confidentiality may result in
                        disciplinary action.</p>


                    <strong>Health and Safety</strong>

                    <p>We prioritize the health and safety of our employees and stakeholders. Compliance with safety
                        regulations and protocols is mandatory. Employees are encouraged to report unsafe conditions and
                        practices.</p>


                    <strong>Leave of Absence</strong>

                    <p>Our leave policy provides guidelines for various types of leave, including medical, parental, and
                        personal leave. Employees are encouraged to familiarize themselves with these provisions and
                        submit
                        requests in advance when possible.</p>',
                'descAr'=>NULL,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>2,
                'titleEn'=>'Procedures',
                'titleAr'=>'إجراءات',
                'descEn'=>'<p>At Jusour, our procedures provide clear guidelines for carrying out essential processes and tasks
                        efficiently and effectively. Adhering to these procedures ensures consistency, accountability,
                        and
                        compliance across all areas of our organization.</p>


                    <strong>1. Onboarding Process</strong>
                    <ul>
                        <li><strong>Objective:</strong> To integrate new employees smoothly into the organization.</li>
                        <li><strong>Steps:</strong></li>
                        <ul>
                            <li>Complete necessary paperwork (employment contract, tax forms, etc.).</li>
                            <li>Schedule orientation sessions covering company policies, culture, and benefits.</li>
                            <li>Assign a mentor or buddy to assist the new hire during the first month.</li>
                            <li>Provide necessary training and resources for their role.</li>
                        </ul>
                    </ul>



                    <strong>2. Performance Review Process</strong>

                    <ul>
                        <li><strong>Objective:</strong> To evaluate employee performance and provide feedback for
                            professional development.</li>
                        <li><strong>Steps:</strong></li>
                        <ul>
                            <li>Schedule performance reviews annually or biannually.</li>
                            <li>Employees complete a self-assessment prior to the review meeting.</li>
                            <li>Managers assess performance based on predefined criteria.</li>
                            <li>Conduct a one-on-one meeting to discuss feedback and set goals.</li>
                            <li>Document the review and share it with HR.</li>
                        </ul>
                    </ul>

                    <strong>3. Leave Request Procedure</strong>
                    <ul>
                        <li><strong>Objective:</strong> To manage employee leave requests fairly and efficiently.</li>
                        <li><strong>Steps:</strong></li>
                        <ul>
                            <li>Employees submit a leave request form at least [X days/weeks] in advance.</li>
                            <li>Direct supervisors review and approve the request based on staffing needs.</li>
                            <li>HR updates the leave records and informs the employee of the approval status.</li>
                            <li>For emergency leave, employees should notify their supervisor as soon as possible.</li>
                        </ul>
                    </ul>

                    <strong>4. Expense Reimbursement Procedure</strong>
                    <ul>
                        <li><strong>Objective: </strong> To facilitate the reimbursement of business-related expenses
                            incurred by employees.</li>
                        <li><strong>Steps:</strong></li>
                        <ul>
                            <li>Employees complete an expense reimbursement form, attaching receipts.</li>
                            <li>Employees complete an expense reimbursement form, attaching receipts.</li>
                            <li>Submit the form to the direct supervisor for approval.</li>
                            <li>Approved forms are sent to the finance department for processing.</li>
                            <li>Reimbursements are issued within [X days] of approval.</li>
                        </ul>
                    </ul>


                    <strong>5. Incident Reporting Procedure</strong>

                    <ul>
                        <li><strong>Objective:</strong> To ensure timely reporting and handling of workplace incidents.
                        </li>
                        <li>Steps:</li>
                        <ol>
                            <li>Employees report incidents to their supervisor or HR immediately.</li>
                            <li>Complete an incident report form detailing the incident.</li>
                            <li>HR investigates the incident and documents findings.</li>
                            <li>Follow-up actions are taken as needed, and employees are informed of the outcome.</li>
                        </ol>
                    </ul>

                    <strong>6. Training and Development Procedure</strong>
                    <ul>
                        <li><strong>Objective:</strong> To promote continuous learning and professional growth.</li>
                        <li>Steps:</li>
                        <ul>
                            <li>Identify training needs through performance reviews or employee requests.</li>
                            <li>Submit a training request to HR with details of the desired training.</li>
                            <li>HR evaluates and approves training requests based on budget and relevance.</li>
                            <li>Employees complete the training and provide feedback to HR.</li>
                        </ul>
                    </ul>',
                'descAr'=>NULL,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>3,
                'titleEn'=>'Message from CEO',
                'titleAr'=>'السياسات',
                'descEn'=>'<p> The selection of our new company name, Jusour, indicates the essence of our purpose. Alongside
                        our
                        partners, we seek to build innovative and sustainable bridges to connect employers and
                        prospective
                        employees. We want to transform dreams to opportunities and aspirations to accomplishments.</p>

                    <p> It is my pleasure, alongside my colleagues at Jusour, to contribute to this exceptional
                        opportunity
                        to impact our nation’s Vision 2030.</p>

                    <p> Our success at Jusour rests on innovative ideas and adaptive solutions. For this reason, we
                        worked
                        with our partners to develop employment programs using platform technology solutions to identify
                        distinguishing professional skills and experiences, referencing international best practices to
                        consider the rights of all parties, and recognizing the importance of robust and effective
                        legislations to address market challenges.</p>

                    <p>We invite you all to be our partners in our efforts to develop and advance, building bridges
                        towards
                        our aspiration and working together for an inclusive and dynamic labour market. We are certain
                        that
                        our collective efforts will have a positive impact towards our collective goals.</p>

                    <p>Let us work together to build our common future, unifying against challenges with unprecedented
                        determination and passion.</p>',
                'descAr'=>NULL,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        ];
        foreach ($data as $key => $value) {
            Modal::create($value);
        }
    }
}
