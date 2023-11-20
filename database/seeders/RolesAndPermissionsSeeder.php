<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // \App\Models\User::factory(10)->create();



        // ASSiGN ROLES TO USERS

        $super_admin_role = Role::create(['name' => 'superadmin']);
        $super_admin = User::create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@superadmin.com',
            'password' => bcrypt('password')
        ]);

        $admin_role = Role::create(['name' => 'admin']);
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        // $user_role = Role::create(['name' => 'user']);
        // $user = User::create([
        //     'name' => 'user',
        //     'email' => 'user@user.com',
        //     'password' => bcrypt('password')
        // ]);
        // $user->assignRole($user_role);

        $teacher_role = Role::create(['name' => 'teacher']);
        $teacher = User::create([
            'name' => 'Teacher',
            'email' => 'teacher@teacher.com',
            'password' => bcrypt('password')
        ]);
          
        
        $student_role = Role::create(['name' => 'student']);
        $student = User::create([
            'name' => 'Student',
            'email' => 'student@student.com',
            'password' => bcrypt('password')
        ]);   
        // NOW WE CONFIGURE PERMISSIONS
       
        
        $admin_permissions = [
            'create-course',
            'edit-course',
            'delete-course',
            'create-question',
            'edit-question',
            'delete-question',
            'create-answer',
            'edit-answer',
            'delete-answer',
            'create-user',
            'edit-user',
            'delete-user',
            'create-role',
            'edit-role',
            'delete-role',
        ];
        $teacher_permissions = [
            'create-course',
            'edit-course',
            'delete-course',
            'create-question',
            'edit-question',
            'delete-question',
            'create-answer',
            'edit-answer',
            'delete-answer',
        ];
        $student_permissions = [
            'create-answer',
            'edit-answer',
            'delete-answer',
        ];

        $permissions = [$admin_permissions, $teacher_permissions, $student_permissions];

        foreach($permissions as $permission){
            foreach($permission as $p){
                Permission::create(['name' => $p]);
            }
        }
        foreach($admin_permissions as $admin_permission){
            Permission::create(['name' => $admin_permission]);
        }
        foreach($teacher_permissions as $teacher_permission){
            Permission::create(['name' => $teacher_permission]);
        }
        foreach($student_permissions as $studen_permission){
            Permission::create(['name' => $student_permission]);
        }
        
        // NOW WE ASSIGN PERMISSIONS TO ROLES
        
        $admin_role->syncPermissions($admin_permissions);
        $teacher_role->syncPermissions($teacher_permissions);
        $student_role->syncPermissions($student_permissions);
    }
}


// ASSiGN ROLES TO USERS
