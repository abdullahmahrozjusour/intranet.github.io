<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name'=>'view-ceo-message',
                'value'=>'ceo-message',
                'guard_name'=>'web'
            ],
            [
                'name'=>'edit-ceo-message',
                'value'=>'ceo-message',
                'guard_name'=>'web'
            ],
            [
                'name'=>'audit-ceo-message',
                'value'=>'ceo-message',
                'guard_name'=>'web'
            ],
            [
                'name'=>'view-mission-and-vision',
                'value'=>'mission-and-vision',
                'guard_name'=>'web'
            ],
            // [
            //     'name'=>'create-mission-and-vision',
            //     'value'=>'mission-and-vision',
            //     'guard_name'=>'web'
            // ],
            [
                'name'=>'edit-mission-and-vision',
                'value'=>'mission-and-vision',
                'guard_name'=>'web'
            ],
            [
                'name'=>'edit-main-mission-and-vision',
                'value'=>'mission-and-vision',
                'guard_name'=>'web'
            ],
            [
                'name'=>'delete-mission-and-vision',
                'value'=>'mission-and-vision',
                'guard_name'=>'web'
            ],
            [
                'name'=>'audit-mission-and-vision',
                'value'=>'mission-and-vision',
                'guard_name'=>'web'
            ],
            [
                'name'=>'audit-main-mission-and-vision',
                'value'=>'mission-and-vision',
                'guard_name'=>'web'
            ],
            [
                'name'=>'view-board-of-director',
                'value'=>'board-of-director',
                'guard_name'=>'web'
            ],
            [
                'name'=>'create-board-of-director',
                'value'=>'board-of-director',
                'guard_name'=>'web'
            ],
            [
                'name'=>'edit-board-of-director',
                'value'=>'board-of-director',
                'guard_name'=>'web'
            ],
            [
                'name'=>'edit-main-board-of-director',
                'value'=>'board-of-director',
                'guard_name'=>'web'
            ],
            [
                'name'=>'delete-board-of-director',
                'value'=>'board-of-director',
                'guard_name'=>'web'
            ],
            [
                'name'=>'audit-board-of-director',
                'value'=>'board-of-director',
                'guard_name'=>'web'
            ],
            [
                'name'=>'audit-main-board-of-director',
                'value'=>'board-of-director',
                'guard_name'=>'web'
            ],
            [
                'name'=>'view-announcement',
                'value'=>'announcement',
                'guard_name'=>'web'
            ],
            [
                'name'=>'create-announcement',
                'value'=>'announcement',
                'guard_name'=>'web'
            ],
            [
                'name'=>'edit-announcement',
                'value'=>'announcement',
                'guard_name'=>'web'
            ],
            [
                'name'=>'delete-announcement',
                'value'=>'announcement',
                'guard_name'=>'web'
            ],
            [
                'name'=>'audit-announcement',
                'value'=>'announcement',
                'guard_name'=>'web'
            ],
            [
                'name'=>'view-link',
                'value'=>'link',
                'guard_name'=>'web'
            ],
            [
                'name'=>'create-link',
                'value'=>'link',
                'guard_name'=>'web'
            ],
            [
                'name'=>'edit-link',
                'value'=>'link',
                'guard_name'=>'web'
            ],
            [
                'name'=>'delete-link',
                'value'=>'link',
                'guard_name'=>'web'
            ],
            [
                'name'=>'audit-link',
                'value'=>'link',
                'guard_name'=>'web'
            ],
            [
                'name'=>'view-event',
                'value'=>'event',
                'guard_name'=>'web'
            ],
            [
                'name'=>'create-event',
                'value'=>'event',
                'guard_name'=>'web'
            ],
            [
                'name'=>'edit-event',
                'value'=>'event',
                'guard_name'=>'web'
            ],
            [
                'name'=>'delete-event',
                'value'=>'event',
                'guard_name'=>'web'
            ],
            [
                'name'=>'audit-event',
                'value'=>'event',
                'guard_name'=>'web'
            ],
            [
                'name'=>'view-modal-page',
                'value'=>'modal-page',
                'guard_name'=>'web'
            ],
            // [
            //     'name'=>'create-modal-page',
            //     'value'=>'modal-page',
            //     'guard_name'=>'web'
            // ],
            [
                'name'=>'edit-modal-page',
                'value'=>'modal-page',
                'guard_name'=>'web'
            ],
            // [
            //     'name'=>'delete-modal-page',
            //     'value'=>'modal-page',
            //     'guard_name'=>'web'
            // ],
            [
                'name'=>'audit-modal-page',
                'value'=>'modal-page',
                'guard_name'=>'web'
            ],
            [
                'name'=>'view-download-center',
                'value'=>'download-center',
                'guard_name'=>'web'
            ],
            [
                'name'=>'create-download-center',
                'value'=>'download-center',
                'guard_name'=>'web'
            ],
            [
                'name'=>'edit-download-center',
                'value'=>'download-center',
                'guard_name'=>'web'
            ],
            [
                'name'=>'delete-download-center',
                'value'=>'download-center',
                'guard_name'=>'web'
            ],
            [
                'name'=>'audit-download-center',
                'value'=>'download-center',
                'guard_name'=>'web'
            ],
            [
                'name'=>'view-organization',
                'value'=>'organization',
                'guard_name'=>'web'
            ],
            [
                'name'=>'create-organization',
                'value'=>'organization',
                'guard_name'=>'web'
            ],
            [
                'name'=>'edit-organization',
                'value'=>'organization',
                'guard_name'=>'web'
            ],
            [
                'name'=>'delete-organization',
                'value'=>'organization',
                'guard_name'=>'web'
            ],
            [
                'name'=>'audit-organization',
                'value'=>'organization',
                'guard_name'=>'web'
            ],
            [
                'name'=>'view-user',
                'value'=>'user',
                'guard_name'=>'web'
            ],
            [
                'name'=>'create-user',
                'value'=>'user',
                'guard_name'=>'web'
            ],
            [
                'name'=>'edit-user',
                'value'=>'user',
                'guard_name'=>'web'
            ],
            [
                'name'=>'delete-user',
                'value'=>'user',
                'guard_name'=>'web'
            ],
            [
                'name'=>'audit-user',
                'value'=>'user',
                'guard_name'=>'web'
            ],
            [
                'name'=>'view-role',
                'value'=>'role',
                'guard_name'=>'web'
            ],
            [
                'name'=>'create-role',
                'value'=>'role',
                'guard_name'=>'web'
            ],
            [
                'name'=>'edit-role',
                'value'=>'role',
                'guard_name'=>'web'
            ],
            [
                'name'=>'delete-role',
                'value'=>'role',
                'guard_name'=>'web'
            ],
            [
                'name'=>'audit-role',
                'value'=>'role',
                'guard_name'=>'web'
            ],
            [
                'name'=>'view-useful-contact',
                'value'=>'useful-contact',
                'guard_name'=>'web'
            ],
            [
                'name'=>'create-useful-contact',
                'value'=>'useful-contact',
                'guard_name'=>'web'
            ],
            [
                'name'=>'edit-useful-contact',
                'value'=>'useful-contact',
                'guard_name'=>'web'
            ],
            [
                'name'=>'delete-useful-contact',
                'value'=>'useful-contact',
                'guard_name'=>'web'
            ],
            [
                'name'=>'audit-useful-contact',
                'value'=>'useful-contact',
                'guard_name'=>'web'
            ],
            [
                'name'=>'view-contact',
                'value'=>'contact',
                'guard_name'=>'web'
            ],
            // [
            //     'name'=>'create-contact',
            //     'value'=>'contact',
            //     'guard_name'=>'web'
            // ],
            // [
            //     'name'=>'edit-contact',
            //     'value'=>'contact',
            //     'guard_name'=>'web'
            // ],
            [
                'name'=>'delete-contact',
                'value'=>'contact',
                'guard_name'=>'web'
            ],
            [
                'name'=>'audit-contact',
                'value'=>'contact',
                'guard_name'=>'web'
            ],
            [
                'name'=>'audit-view',
                'value'=>'audit',
                'guard_name'=>'web'
            ],
        ];

        // DB::table('model_has_permissions')->delete();
        // DB::table('model_has_permissions')->delete();
        // DB::table('permissions')->delete();

        foreach ($permissions as $permission) {
            Permission::updateOrCreate($permission);
        }
    }
}
