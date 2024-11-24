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
        $admin = User::where('id',1)->first();

        if(!isset($admin->id)){
            $admin = User::create([
                'id'=>1,
                'nameEn'=>'Super',
                'nameAr'=>'الفائق',
                'lnameEn'=>'Admin',
                'lnameAr'=>'المشرف',
                'email' => 'admin@jusour.qa',
                'phone'=>'00000000',
                'password'=>Hash::make('jusour@2024'),
                'status'=>'Active'
            ]);
        }else{
            $admin->assignRole('');
            $admin->givePermissionTo([]);
        }
        $admin->assignRole('Super Admin');
        $admin->givePermissionTo([
            'view-ceo-message',
            'edit-ceo-message',
            'view-mission-and-vision',
            // 'create-mission-and-vision',
            'edit-mission-and-vision',
            'edit-main-mission-and-vision',
            'delete-mission-and-vision',
            'view-board-of-director',
            'create-board-of-director',
            'edit-board-of-director',
            'edit-main-board-of-director',
            'delete-board-of-director',
            'view-announcement',
            'create-announcement',
            'edit-announcement',
            'delete-announcement',
            'view-link',
            'create-link',
            'edit-link',
            'delete-link',
            'view-event',
            'create-event',
            'edit-event',
            'delete-event',
            'view-modal-page',
            // 'create-modal-page',
            'edit-modal-page',
            // 'delete-modal-page',
            'view-download-center',
            'create-download-center',
            'edit-download-center',
            'delete-download-center',
            'view-organization',
            'create-organization',
            'edit-organization',
            'delete-organization',
            'view-user',
            'create-user',
            'edit-user',
            'delete-user',
            'view-role',
            'create-role',
            'edit-role',
            'delete-role',
            'view-useful-contact',
            'create-useful-contact',
            'edit-useful-contact',
            'delete-useful-contact',
            'view-contact',
            // 'create-contact',
            // 'edit-contact',
            'delete-contact',
            'audit-ceo-message',
            'audit-mission-and-vision',
            'audit-main-mission-and-vision',
            'audit-board-of-director',
            'audit-main-board-of-director',
            'audit-announcement',
            'audit-link',
            'audit-event',
            'audit-modal-page',
            'audit-download-center',
            'audit-organization',
            'audit-user',
            'audit-role',
            'audit-useful-contact',
            'audit-contact',
            'audit-view'
        ]);
    }
}
