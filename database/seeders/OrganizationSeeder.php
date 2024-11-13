<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('organizations')->where('id',1)->delete();
        Organization::create([
            'id'=>1,
            'nameEn'=>'Eng. Abdul Hadi Burgan',
            'nameAr'=>'المهندس عبد الهادي برقان',
            'designationEn'=>'CEO',
            'designationAr'=>'المدير التنفيذي',
            'parentId'=>NULL,
            'image'=>'ceo.png',
            'status'=>'Active',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
