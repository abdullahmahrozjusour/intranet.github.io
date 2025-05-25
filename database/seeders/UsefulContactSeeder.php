<?php

namespace Database\Seeders;

use App\Models\UsefulContact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsefulContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('useful_contacts')->whereIn('id',[1,2,3,4])->delete();
        DB::table('useful_contacts')->insert([
            [
                'id'=>1,
                'nameEn'=>'Operation',
                'nameAr'=>'عملية',
                'addressEn'=>'14th floor , Doha Tower',
                'addressAr'=>'14th الطابق، برج الدوحة',
                'email'=>'operation@jusour.qa',
                'phone'=>'44011044',
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id'=>2,
                'nameEn'=>'Marketing and Communication',
                'nameAr'=>'التسويق و الاتصالات',
                'addressEn'=>'14th floor , Doha Tower',
                'addressAr'=>'14th الطابق، برج الدوحة',
                'email'=>'communication@jusour.qa',
                'phone'=>'44011023',
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id'=>3,
                'nameEn'=>'Corporate Support',
                'nameAr'=>'دعم الشركات',
                'addressEn'=>'14th floor , Doha Tower',
                'addressAr'=>'14th الطابق، برج الدوحة',
                'email'=>'support@jusour.qa',
                'phone'=>'44011031',
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'id'=>4,
                'nameEn'=>'Finance',
                'nameAr'=>'تمويل',
                'addressEn'=>'14th floor , Doha Tower',
                'addressAr'=>'14th الطابق، برج الدوحة',
                'email'=>'finance@jusour.qa',
                'phone'=>'44011037',
                'status'=>'Active',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ]);
    }
}
