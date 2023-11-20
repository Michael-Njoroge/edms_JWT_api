<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('group_permissions')->insert([
            'group_id' => '1',
            'folder_id' => '1',
            'view_users' => '1',
            'add_user' => '1',
            'assign_user_group' => '1',
            'view_user' => '1',
            'update_user' => '1',
            'delete_user' => '1',
            'view_groups' => '1',
            'add_group' => '1',
            'view_group' => '1',
            'update_group' => '1',
            'delete_group' => '1',
            'view_group_memberships' => '1',
            'add_group_membership' => '1',
            'view_group_membership' => '1',
            'update_group_membership' => '1',
            'delete_group_membership' => '1',
            'view_group_permissions' => '1',
            'add_group_permission' => '1',
            'view_group_permission' => '1',
            'update_group_permission' => '1',
            'delete_group_permission' => '1',
            'view_folders' => '1',
            'create_folder' => '1',
            'open_folder' => '1',
            'update_folder' => '1',
            'delete_folder' => '1',
            'view_documents' => '1',
            'add_document' => '1',
            'view_document' => '1',
            'update_document' => '1',
            'delete_document' => '1',
            'view_fields' => '1',
            'add_field' => '1',
            'view_field' => '1',
            'update_field' => '1',
            'delete_field' => '1',
            'view_docfields' => '1',
            'create_docfield' => '1',
            'view_docfield' => '1',
            'update_docfield' => '1',
            'delete_docfield' => '1',
            'view_worksteps' => '1',
            'add_workstep' => '1',
            'view_workstep' => '1',
            'update_workstep' => '1',
            'delete_workstep' => '1',
            'view_possible_actions' => '1',
            'add_possible_action' => '1',
            'view_possible_action' => '1',
            'update_possible_action' => '1',
            'delete_possible_action' => '1',
            'view_workstep_results' => '1',
            'add_workstep_result' => '1',
            'view_workstep_result' => '1',
            'rewind_workstep_result' => '1',
            'delete_workstep_result' => '1',
            'created_at' => now(),
            'updated_at' => now()
         ]);
    }
}
