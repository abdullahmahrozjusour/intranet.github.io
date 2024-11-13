<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::disableForeignKeyConstraints();
        // DB::table('model_has_roles')->where('model_id',1)->delete();
        // Role::where('name', 'Super Admin')->delete();
        $admin = Role::updateOrCreate(['name' => 'Super Admin']);
        $admin->givePermissionTo([]);
        $admin->givePermissionTo([
            'view-ceo-message',
            'edit-ceo-message',
            'view-mission-and-vision',
            // 'create-mission-and-vision',
            'edit-mission-and-vision',
            'update-mission-and-vision',
            'delete-mission-and-vision',
            'view-board-of-director',
            'create-board-of-director',
            'edit-board-of-director',
            'update-board-of-director',
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
        ]);
    }
}
