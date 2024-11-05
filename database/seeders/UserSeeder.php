<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin = User::create([
            'nameEn'=>'Super',
            'nameAr'=>'الفائق',
            'lnameEn'=>'Admin',
            'lnameAr'=>'المشرف',
            'email' => 'admin@jusour.qa',
            'phone'=>'00000000',
            'password'=>Hash::make('jusour@2024'),
            'status'=>'Active'
        ]);
    }
}
