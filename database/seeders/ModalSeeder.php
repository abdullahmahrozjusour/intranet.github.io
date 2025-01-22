<?php

namespace Database\Seeders;

use App\Constants\Type;
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
        DB::table('modals')->whereIn('id',[1,2,3,4,5,6,7,8,9,10,11,12])->delete();
        $data = [
            [
                'id'=>1,
                'titleEn'=>'Policies',
                'titleAr'=>'السياسات',
                'descEn'=>'<p>At Jusour, our policies are designed to ensure a safe, respectful, and productive environment for all
            employees,
            partners, and stakeholders. Our commitment to ethical practices and compliance with regulations is
            fundamental
            to our mission.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Code of Conduct</h4>
        <p>We uphold the highest standards of integrity and professionalism. All employees are expected to act in a
            manner
            that reflects our values and fosters a positive work environment. Discrimination, harassment, or any form of
            misconduct will not be tolerated.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Equal Employment Opportunity</h4>
        <p>We are dedicated to providing equal employment opportunities for all individuals, regardless of race, color,
            religion, gender, sexual orientation, age, disability, or any other protected characteristic. We believe in
            diversity and inclusion as essential components of our success.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Confidentiality</h4>
        <p>All employees must respect the confidentiality of sensitive information. This includes proprietary data,
            employee records, and client information. Breaches of confidentiality may result in disciplinary action.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Health and Safety</h4>
        <p>We prioritize the health and safety of our employees and stakeholders. Compliance with safety regulations and
            protocols is mandatory. Employees are encouraged to report unsafe conditions and practices.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Leave of Absence</h4>
        <p>Our leave policy provides guidelines for various types of leave, including medical, parental, and personal
            leave. Employees are encouraged to familiarize themselves with these provisions and submit requests in
            advance
            when possible.</p>',
                'descAr'=>NULL,
                'type'=>Type::TYPE_INFORMATION_TECHNOLOGY,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>2,
                'titleEn'=>'Procedures',
                'titleAr'=>'إجراءات',
                'descEn'=>'<p>At Jusour, our policies are designed to ensure a safe, respectful, and productive environment for all employees,
                partners, and stakeholders. Our commitment to ethical practices and compliance with regulations is fundamental
                to our mission.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Code of Conduct</h4>
            <p>We uphold the highest standards of integrity and professionalism. All employees are expected to act in a manner
                that reflects our values and fosters a positive work environment. Discrimination, harassment, or any form of
                misconduct will not be tolerated.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Equal Employment Opportunity</h4>
            <p>We are dedicated to providing equal employment opportunities for all individuals, regardless of race, color,
                religion, gender, sexual orientation, age, disability, or any other protected characteristic. We believe in
                diversity and inclusion as essential components of our success.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Confidentiality</h4>
            <p>All employees must respect the confidentiality of sensitive information. This includes proprietary data,
                employee records, and client information. Breaches of confidentiality may result in disciplinary action.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Health and Safety</h4>
            <p>We prioritize the health and safety of our employees and stakeholders. Compliance with safety regulations and
                protocols is mandatory. Employees are encouraged to report unsafe conditions and practices.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Leave of Absence</h4>
            <p>Our leave policy provides guidelines for various types of leave, including medical, parental, and personal
                leave. Employees are encouraged to familiarize themselves with these provisions and submit requests in advance
                when possible.</p>',
                'descAr'=>NULL,
                'type'=>Type::TYPE_INFORMATION_TECHNOLOGY,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>3,
                'titleEn'=>'Policies',
                'titleAr'=>'السياسات',
                'descEn'=>'<p>At Jusour, our policies are designed to ensure a safe, respectful, and productive environment for all
            employees,
            partners, and stakeholders. Our commitment to ethical practices and compliance with regulations is
            fundamental
            to our mission.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Code of Conduct</h4>
        <p>We uphold the highest standards of integrity and professionalism. All employees are expected to act in a
            manner
            that reflects our values and fosters a positive work environment. Discrimination, harassment, or any form of
            misconduct will not be tolerated.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Equal Employment Opportunity</h4>
        <p>We are dedicated to providing equal employment opportunities for all individuals, regardless of race, color,
            religion, gender, sexual orientation, age, disability, or any other protected characteristic. We believe in
            diversity and inclusion as essential components of our success.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Confidentiality</h4>
        <p>All employees must respect the confidentiality of sensitive information. This includes proprietary data,
            employee records, and client information. Breaches of confidentiality may result in disciplinary action.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Health and Safety</h4>
        <p>We prioritize the health and safety of our employees and stakeholders. Compliance with safety regulations and
            protocols is mandatory. Employees are encouraged to report unsafe conditions and practices.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Leave of Absence</h4>
        <p>Our leave policy provides guidelines for various types of leave, including medical, parental, and personal
            leave. Employees are encouraged to familiarize themselves with these provisions and submit requests in
            advance
            when possible.</p>',
                'descAr'=>NULL,
                'type'=>Type::TYPE_LEGAL,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>4,
                'titleEn'=>'Procedures',
                'titleAr'=>'إجراءات',
                'descEn'=>'<p>At Jusour, our policies are designed to ensure a safe, respectful, and productive environment for all employees,
                partners, and stakeholders. Our commitment to ethical practices and compliance with regulations is fundamental
                to our mission.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Code of Conduct</h4>
            <p>We uphold the highest standards of integrity and professionalism. All employees are expected to act in a manner
                that reflects our values and fosters a positive work environment. Discrimination, harassment, or any form of
                misconduct will not be tolerated.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Equal Employment Opportunity</h4>
            <p>We are dedicated to providing equal employment opportunities for all individuals, regardless of race, color,
                religion, gender, sexual orientation, age, disability, or any other protected characteristic. We believe in
                diversity and inclusion as essential components of our success.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Confidentiality</h4>
            <p>All employees must respect the confidentiality of sensitive information. This includes proprietary data,
                employee records, and client information. Breaches of confidentiality may result in disciplinary action.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Health and Safety</h4>
            <p>We prioritize the health and safety of our employees and stakeholders. Compliance with safety regulations and
                protocols is mandatory. Employees are encouraged to report unsafe conditions and practices.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Leave of Absence</h4>
            <p>Our leave policy provides guidelines for various types of leave, including medical, parental, and personal
                leave. Employees are encouraged to familiarize themselves with these provisions and submit requests in advance
                when possible.</p>',
                'descAr'=>NULL,
                'type'=>Type::TYPE_LEGAL,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>5,
                'titleEn'=>'Policies',
                'titleAr'=>'السياسات',
                'descEn'=>'<p>At Jusour, our policies are designed to ensure a safe, respectful, and productive environment for all
            employees,
            partners, and stakeholders. Our commitment to ethical practices and compliance with regulations is
            fundamental
            to our mission.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Code of Conduct</h4>
        <p>We uphold the highest standards of integrity and professionalism. All employees are expected to act in a
            manner
            that reflects our values and fosters a positive work environment. Discrimination, harassment, or any form of
            misconduct will not be tolerated.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Equal Employment Opportunity</h4>
        <p>We are dedicated to providing equal employment opportunities for all individuals, regardless of race, color,
            religion, gender, sexual orientation, age, disability, or any other protected characteristic. We believe in
            diversity and inclusion as essential components of our success.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Confidentiality</h4>
        <p>All employees must respect the confidentiality of sensitive information. This includes proprietary data,
            employee records, and client information. Breaches of confidentiality may result in disciplinary action.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Health and Safety</h4>
        <p>We prioritize the health and safety of our employees and stakeholders. Compliance with safety regulations and
            protocols is mandatory. Employees are encouraged to report unsafe conditions and practices.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Leave of Absence</h4>
        <p>Our leave policy provides guidelines for various types of leave, including medical, parental, and personal
            leave. Employees are encouraged to familiarize themselves with these provisions and submit requests in
            advance
            when possible.</p>',
                'descAr'=>NULL,
                'type'=>Type::TYPE_AUDIT,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>6,
                'titleEn'=>'Procedures',
                'titleAr'=>'إجراءات',
                'descEn'=>'<p>At Jusour, our policies are designed to ensure a safe, respectful, and productive environment for all employees,
                partners, and stakeholders. Our commitment to ethical practices and compliance with regulations is fundamental
                to our mission.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Code of Conduct</h4>
            <p>We uphold the highest standards of integrity and professionalism. All employees are expected to act in a manner
                that reflects our values and fosters a positive work environment. Discrimination, harassment, or any form of
                misconduct will not be tolerated.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Equal Employment Opportunity</h4>
            <p>We are dedicated to providing equal employment opportunities for all individuals, regardless of race, color,
                religion, gender, sexual orientation, age, disability, or any other protected characteristic. We believe in
                diversity and inclusion as essential components of our success.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Confidentiality</h4>
            <p>All employees must respect the confidentiality of sensitive information. This includes proprietary data,
                employee records, and client information. Breaches of confidentiality may result in disciplinary action.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Health and Safety</h4>
            <p>We prioritize the health and safety of our employees and stakeholders. Compliance with safety regulations and
                protocols is mandatory. Employees are encouraged to report unsafe conditions and practices.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Leave of Absence</h4>
            <p>Our leave policy provides guidelines for various types of leave, including medical, parental, and personal
                leave. Employees are encouraged to familiarize themselves with these provisions and submit requests in advance
                when possible.</p>',
                'descAr'=>NULL,
                'type'=>Type::TYPE_AUDIT,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>7,
                'titleEn'=>'Policies',
                'titleAr'=>'السياسات',
                'descEn'=>'<p>At Jusour, our policies are designed to ensure a safe, respectful, and productive environment for all
            employees,
            partners, and stakeholders. Our commitment to ethical practices and compliance with regulations is
            fundamental
            to our mission.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Code of Conduct</h4>
        <p>We uphold the highest standards of integrity and professionalism. All employees are expected to act in a
            manner
            that reflects our values and fosters a positive work environment. Discrimination, harassment, or any form of
            misconduct will not be tolerated.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Equal Employment Opportunity</h4>
        <p>We are dedicated to providing equal employment opportunities for all individuals, regardless of race, color,
            religion, gender, sexual orientation, age, disability, or any other protected characteristic. We believe in
            diversity and inclusion as essential components of our success.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Confidentiality</h4>
        <p>All employees must respect the confidentiality of sensitive information. This includes proprietary data,
            employee records, and client information. Breaches of confidentiality may result in disciplinary action.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Health and Safety</h4>
        <p>We prioritize the health and safety of our employees and stakeholders. Compliance with safety regulations and
            protocols is mandatory. Employees are encouraged to report unsafe conditions and practices.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Leave of Absence</h4>
        <p>Our leave policy provides guidelines for various types of leave, including medical, parental, and personal
            leave. Employees are encouraged to familiarize themselves with these provisions and submit requests in
            advance
            when possible.</p>',
                'descAr'=>NULL,
                'type'=>Type::TYPE_PROCUREMENT,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>8,
                'titleEn'=>'Procedures',
                'titleAr'=>'إجراءات',
                'descEn'=>'<p>At Jusour, our policies are designed to ensure a safe, respectful, and productive environment for all employees,
                partners, and stakeholders. Our commitment to ethical practices and compliance with regulations is fundamental
                to our mission.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Code of Conduct</h4>
            <p>We uphold the highest standards of integrity and professionalism. All employees are expected to act in a manner
                that reflects our values and fosters a positive work environment. Discrimination, harassment, or any form of
                misconduct will not be tolerated.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Equal Employment Opportunity</h4>
            <p>We are dedicated to providing equal employment opportunities for all individuals, regardless of race, color,
                religion, gender, sexual orientation, age, disability, or any other protected characteristic. We believe in
                diversity and inclusion as essential components of our success.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Confidentiality</h4>
            <p>All employees must respect the confidentiality of sensitive information. This includes proprietary data,
                employee records, and client information. Breaches of confidentiality may result in disciplinary action.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Health and Safety</h4>
            <p>We prioritize the health and safety of our employees and stakeholders. Compliance with safety regulations and
                protocols is mandatory. Employees are encouraged to report unsafe conditions and practices.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Leave of Absence</h4>
            <p>Our leave policy provides guidelines for various types of leave, including medical, parental, and personal
                leave. Employees are encouraged to familiarize themselves with these provisions and submit requests in advance
                when possible.</p>',
                'descAr'=>NULL,
                'type'=>Type::TYPE_PROCUREMENT,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>9,
                'titleEn'=>'Policies',
                'titleAr'=>'السياسات',
                'descEn'=>'<p>At Jusour, our policies are designed to ensure a safe, respectful, and productive environment for all
            employees,
            partners, and stakeholders. Our commitment to ethical practices and compliance with regulations is
            fundamental
            to our mission.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Code of Conduct</h4>
        <p>We uphold the highest standards of integrity and professionalism. All employees are expected to act in a
            manner
            that reflects our values and fosters a positive work environment. Discrimination, harassment, or any form of
            misconduct will not be tolerated.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Equal Employment Opportunity</h4>
        <p>We are dedicated to providing equal employment opportunities for all individuals, regardless of race, color,
            religion, gender, sexual orientation, age, disability, or any other protected characteristic. We believe in
            diversity and inclusion as essential components of our success.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Confidentiality</h4>
        <p>All employees must respect the confidentiality of sensitive information. This includes proprietary data,
            employee records, and client information. Breaches of confidentiality may result in disciplinary action.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Health and Safety</h4>
        <p>We prioritize the health and safety of our employees and stakeholders. Compliance with safety regulations and
            protocols is mandatory. Employees are encouraged to report unsafe conditions and practices.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Leave of Absence</h4>
        <p>Our leave policy provides guidelines for various types of leave, including medical, parental, and personal
            leave. Employees are encouraged to familiarize themselves with these provisions and submit requests in
            advance
            when possible.</p>',
                'descAr'=>NULL,
                'type'=>Type::TYPE_HUMAN_RESOURCE,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>10,
                'titleEn'=>'Procedures',
                'titleAr'=>'إجراءات',
                'descEn'=>'<p>At Jusour, our policies are designed to ensure a safe, respectful, and productive environment for all employees,
                partners, and stakeholders. Our commitment to ethical practices and compliance with regulations is fundamental
                to our mission.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Code of Conduct</h4>
            <p>We uphold the highest standards of integrity and professionalism. All employees are expected to act in a manner
                that reflects our values and fosters a positive work environment. Discrimination, harassment, or any form of
                misconduct will not be tolerated.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Equal Employment Opportunity</h4>
            <p>We are dedicated to providing equal employment opportunities for all individuals, regardless of race, color,
                religion, gender, sexual orientation, age, disability, or any other protected characteristic. We believe in
                diversity and inclusion as essential components of our success.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Confidentiality</h4>
            <p>All employees must respect the confidentiality of sensitive information. This includes proprietary data,
                employee records, and client information. Breaches of confidentiality may result in disciplinary action.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Health and Safety</h4>
            <p>We prioritize the health and safety of our employees and stakeholders. Compliance with safety regulations and
                protocols is mandatory. Employees are encouraged to report unsafe conditions and practices.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Leave of Absence</h4>
            <p>Our leave policy provides guidelines for various types of leave, including medical, parental, and personal
                leave. Employees are encouraged to familiarize themselves with these provisions and submit requests in advance
                when possible.</p>',
                'descAr'=>NULL,
                'type'=>Type::TYPE_HUMAN_RESOURCE,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>11,
                'titleEn'=>'Policies',
                'titleAr'=>'السياسات',
                'descEn'=>'<p>At Jusour, our policies are designed to ensure a safe, respectful, and productive environment for all
            employees,
            partners, and stakeholders. Our commitment to ethical practices and compliance with regulations is
            fundamental
            to our mission.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Code of Conduct</h4>
        <p>We uphold the highest standards of integrity and professionalism. All employees are expected to act in a
            manner
            that reflects our values and fosters a positive work environment. Discrimination, harassment, or any form of
            misconduct will not be tolerated.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Equal Employment Opportunity</h4>
        <p>We are dedicated to providing equal employment opportunities for all individuals, regardless of race, color,
            religion, gender, sexual orientation, age, disability, or any other protected characteristic. We believe in
            diversity and inclusion as essential components of our success.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Confidentiality</h4>
        <p>All employees must respect the confidentiality of sensitive information. This includes proprietary data,
            employee records, and client information. Breaches of confidentiality may result in disciplinary action.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Health and Safety</h4>
        <p>We prioritize the health and safety of our employees and stakeholders. Compliance with safety regulations and
            protocols is mandatory. Employees are encouraged to report unsafe conditions and practices.</p>

        <h4 class="mt-5 mb-1 text-xl font-semibold">Leave of Absence</h4>
        <p>Our leave policy provides guidelines for various types of leave, including medical, parental, and personal
            leave. Employees are encouraged to familiarize themselves with these provisions and submit requests in
            advance
            when possible.</p>',
                'descAr'=>NULL,
                'type'=>Type::TYPE_GENERAL_SERVICE,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'id'=>12,
                'titleEn'=>'Procedures',
                'titleAr'=>'إجراءات',
                'descEn'=>'<p>At Jusour, our policies are designed to ensure a safe, respectful, and productive environment for all employees,
                partners, and stakeholders. Our commitment to ethical practices and compliance with regulations is fundamental
                to our mission.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Code of Conduct</h4>
            <p>We uphold the highest standards of integrity and professionalism. All employees are expected to act in a manner
                that reflects our values and fosters a positive work environment. Discrimination, harassment, or any form of
                misconduct will not be tolerated.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Equal Employment Opportunity</h4>
            <p>We are dedicated to providing equal employment opportunities for all individuals, regardless of race, color,
                religion, gender, sexual orientation, age, disability, or any other protected characteristic. We believe in
                diversity and inclusion as essential components of our success.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Confidentiality</h4>
            <p>All employees must respect the confidentiality of sensitive information. This includes proprietary data,
                employee records, and client information. Breaches of confidentiality may result in disciplinary action.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Health and Safety</h4>
            <p>We prioritize the health and safety of our employees and stakeholders. Compliance with safety regulations and
                protocols is mandatory. Employees are encouraged to report unsafe conditions and practices.</p>

            <h4 class="mt-5 mb-1 text-xl font-semibold">Leave of Absence</h4>
            <p>Our leave policy provides guidelines for various types of leave, including medical, parental, and personal
                leave. Employees are encouraged to familiarize themselves with these provisions and submit requests in advance
                when possible.</p>',
                'descAr'=>NULL,
                'type'=>Type::TYPE_GENERAL_SERVICE,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ];
        foreach ($data as $key => $value) {
            Modal::create($value);
        }
    }
}
