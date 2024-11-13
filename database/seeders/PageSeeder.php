<?php

namespace Database\Seeders;

use App\Constants\Type;
use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            [
                'id'=>1,
                'titleEn'=>'Our Mission & Vision',
                'titleAr'=>'مهمتنا ورؤيتنا',
                'shortDescEn'=>NULL,
                'shortDescAr'=>NULL,
                'descEn'=>'Our mission is to empower and inspire communities through innovative programs and sustainable initiatives that promote growth, education, and social equity. We are dedicated to fostering collaboration and driving positive change that enhances the quality of life for all individuals. We envision a world where every individual has access to opportunities that enable them to thrive—characterized by inclusivity, empowerment, and sustainable progress, where communities are resilient, vibrant, and connected.',
                'descAr'=>'مهمتنا هي تمكين وإلهام المجتمعات من خلال البرامج المبتكرة والمبادرات المستدامة التي تعزز النمو والتعليم والعدالة الاجتماعية. نحن ملتزمون بتعزيز التعاون وقيادة التغيير الإيجابي الذي يعزز نوعية الحياة لجميع الأفراد. نحن نتصور عالمًا يتمتع فيه كل فرد بإمكانية الوصول إلى الفرص التي تمكنه من الازدهار - والتي تتميز بالشمولية والتمكين والتقدم المستدام، حيث تكون المجتمعات مرنة وحيوية ومتصلة.',
                'type'=>Type::TYPE_MISSION_VISION,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id'=>2,
                'titleEn'=>'<p>Board</p><p><strong class="font-semibold">of Members</strong></p>',
                'titleAr'=>'سبورة <br /> من الأعضاء',
                'shortDescEn'=>'Guiding Leadership and Strategic Direction',
                'shortDescAr'=>'توجيه القيادة والتوجيه الاستراتيجي',
                'descEn'=>'The Board of Members is composed of dedicated individuals who bring diverse expertise and insights to guide our organization. Together, they are committed to fostering growth, ensuring accountability, and shaping the strategic vision that drives our mission forward. Their collaborative leadership plays a crucial role in steering our initiatives and enhancing our impact within the community.',
                'descAr'=>'يتكون مجلس الأعضاء من أفراد متفانين يقدمون خبرات ورؤى متنوعة لتوجيه منظمتنا. وهم ملتزمون معًا بتعزيز النمو، وضمان المساءلة، وصياغة الرؤية الاستراتيجية التي تدفع مهمتنا إلى الأمام. تلعب قيادتهم التعاونية دورًا حاسمًا في توجيه مبادراتنا وتعزيز تأثيرنا داخل المجتمع.',
                'type'=>Type::TYPE_DIRECTOR,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id'=>3,
                'titleEn'=>'Message from CEO',
                'titleAr'=>'السياسات',
                'shortDescEn'=>NULL,
                'shortDescAr'=>NULL,
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
                'type'=>Type::TYPE_CEO_MESSAGE,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        ]);
        DB::table('page_data')->insert([
            [
                'id'=>1,
                'pageId'=>1,
                'logo'=>'destination-white.png',
                'titleEn'=>'Our Mission',
                'titleAr'=>'مهمتنا',
                'nameEn'=>NULL,
                'nameAr'=>NULL,
                'designationEn'=>NULL,
                'designationAr'=>NULL,
                'descEn'=>'Our mission To deliver a suite of high-quality services that serves both job seekers and employers to retain and attract talent for employment in Qatar’s labour market.',
                'descAr'=>'مهمتنا تقديم مجموعة من الخدمات عالية الجودة التي تخدم الباحثين عن عمل وأصحاب العمل على حد سواء للاحتفاظ بالمواهب وجذبها للعمل في سوق العمل القطري.',
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id'=>2,
                'pageId'=>1,
                'logo'=>'eye-white.png',
                'titleEn'=>'Our Vision',
                'titleAr'=>'رؤيتنا',
                'nameEn'=>NULL,
                'nameAr'=>NULL,
                'designationEn'=>NULL,
                'designationAr'=>NULL,
                'descEn'=>'To be a key stimulus for Qatar’s labor market and a leader in enabling partnerships.',
                'descAr'=>'أن نكون حافزاً رئيسياً لسوق العمل في قطر ورائداً في تمكين الشراكات.',
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id'=>3,
                'pageId'=>1,
                'logo'=>'shield-white.png',
                'titleEn'=>'Our Values',
                'titleAr'=>'قيمنا',
                'nameEn'=>NULL,
                'nameAr'=>NULL,
                'designationEn'=>NULL,
                'designationAr'=>NULL,
                'descEn'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel est dolor. Nunc consequat dapibus neque, et rutrum libero. Maecenas vel dignissim elit, non blandit ligula. Quisque in lacinia leo. Phasellus sed suscipit neque. Fusce ultricies justo eget ultrices ullamcorper.',
                'descAr'=>'لوريم إيبسوم دولور سيت أميت، consectetur adipiscing إيليت. Curabitur vel est dolor. Nunc consequat dapibus neque، et rutrum libero. Maecenas vel كرامة النخبة، غير لطيفة. Quisque في لاسينيا ليو. Phasellus sed suscipit neque. Fusce ultricies justo eget ultrices ullamcorper.',
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id'=>4,
                'pageId'=>2,
                'logo'=>'ali.jpg',
                'titleEn'=>'Ministry of Labour',
                'titleAr'=>'وزارة العمل',
                'nameEn'=>'Dr. Ali bin Samikh Al Marri',
                'nameAr'=>'الدكتور علي بن صميخ المري',
                'designationEn'=>'President',
                'designationAr'=>'رئيس',
                'descEn'=>NULL,
                'descAr'=>NULL,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id'=>5,
                'pageId'=>2,
                'logo'=>'ateeq.png',
                'titleEn'=>'Ministry of Interior Representative',
                'titleAr'=>'ممثل وزارة الداخلية',
                'nameEn'=>'Mohammad Ahmad Al-Ateeq Al-Dosari',
                'nameAr'=>'محمد أحمد العتيق الدوسري',
                'designationEn'=>'Vice President',
                'designationAr'=>'نائب الرئيس',
                'descEn'=>NULL,
                'descAr'=>NULL,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id'=>6,
                'pageId'=>2,
                'logo'=>'abdullah.jpg',
                'titleEn'=>'Qatar University Representative',
                'titleAr'=>'ممثل جامعة قطر',
                'nameEn'=>'Dr. Omar Mohammad Abdullah Al-Ansari',
                'nameAr'=>'د.عمر محمد عبدالله الأنصاري',
                'designationEn'=>'Member',
                'designationAr'=>'عضو',
                'descEn'=>NULL,
                'descAr'=>NULL,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id'=>7,
                'pageId'=>2,
                'logo'=>'majid.jpeg',
                'titleEn'=>'Ministry of Commerce and Industry Representative',
                'titleAr'=>'ممثل وزارة التجارة والصناعة',
                'nameEn'=>'His Excellency Mr. Saleh bin Majid Al-Khulaifi',
                'nameAr'=>'معالي السيد صالح بن ماجد الخليفي',
                'designationEn'=>'Member',
                'designationAr'=>'عضو',
                'descEn'=>NULL,
                'descAr'=>NULL,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id'=>8,
                'pageId'=>2,
                'logo'=>'hamad.png',
                'titleEn'=>'Member of the Board of Directors - Representative of Qatar Chamber',
                'titleAr'=>'عضو مجلس الإدارة - ممثل غرفة قطر',
                'nameEn'=>'Mr. Saleh bin Hamad Al Sharqi',
                'nameAr'=>'السيد صالح بن حمد الشرقي',
                'designationEn'=>'Member',
                'designationAr'=>'عضو',
                'descEn'=>NULL,
                'descAr'=>NULL,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id'=>9,
                'pageId'=>2,
                'logo'=>'khalifa.jpg',
                'titleEn'=>'Al Jazeera Network Representative',
                'titleAr'=>'ممثل شبكة الجزيرة',
                'nameEn'=>'Mr. Mohammed bin Abdullah Al Khalifa',
                'nameAr'=>'السيد محمد بن عبدالله آل خليفة',
                'designationEn'=>'Member',
                'designationAr'=>'عضو',
                'descEn'=>NULL,
                'descAr'=>NULL,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id'=>10,
                'pageId'=>2,
                'logo'=>'najwa.webp',
                'titleEn'=>'Member of the Board of Directors - Representative of the Ministry of labor',
                'titleAr'=>'عضو مجلس الإدارة - ممثل عن وزارة العمل',
                'nameEn'=>'Sheikha Najwa bint Abdulrahman Al-Thani',
                'nameAr'=>'الشيخة نجوى بنت عبدالرحمن آل ثاني',
                'designationEn'=>'Assistant Undersecretary for Migrant Labor Affairs at the Ministry of Labor',
                'designationAr'=>'الوكيل المساعد لشؤون العمالة الوافدة بوزارة العمل',
                'descEn'=>NULL,
                'descAr'=>NULL,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id'=>11,
                'pageId'=>2,
                'logo'=>'ghanem.jpg',
                'titleEn'=>'Ministry of Culture Representative',
                'titleAr'=>'ممثل وزارة الثقافة',
                'nameEn'=>'His Excellency Dr. Ghanem bin Mubarak Al Ali',
                'nameAr'=>'معالي الدكتور غانم بن مبارك العلي',
                'designationEn'=>'Member',
                'designationAr'=>'عضو',
                'descEn'=>NULL,
                'descAr'=>NULL,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id'=>12,
                'pageId'=>2,
                'logo'=>'mohsen.jpg',
                'titleEn'=>'Qatar Airways Representative',
                'titleAr'=>'ممثل الخطوط الجوية القطرية',
                'nameEn'=>'Mohsen Alyafei',
                'nameAr'=>'محسن اليافعي',
                'designationEn'=>'Executive Vice President',
                'designationAr'=>'نائب الرئيس التنفيذي',
                'descEn'=>NULL,
                'descAr'=>NULL,
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ]);
    }
}
