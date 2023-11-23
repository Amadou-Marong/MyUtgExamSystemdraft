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

        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions

        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'update users']);

        Permission::create(['name' => 'create courses']);
        Permission::create(['name' => 'update courses']);
        Permission::create(['name' => 'delete courses']);

        Permission::create(['name' => 'create questions']);
        Permission::create(['name' => 'delete questions']);
        Permission::create(['name' => 'publish questions']);
        Permission::create(['name' => 'unpublish questions']);
        Permission::create(['name' => 'answer questions']);

        Permission::create(['name' => 'view results']);

        $superAdminRole = Role::create(['name' => 'super-admin'])
        // $superAdminRole->givePermissionTo(Permission::all());
            ->givePermissionTo(['create users', 'delete users', 'update users', 
                               'create courses', 'update courses', 'delete courses']);

        $adminRole = Role::create(['name' => 'admin'])
            ->givePermissionTo(['publish questions', 'unpublish questions', 'view results']);

        $teacherRole = Role::create(['name' => 'teacher'])
            ->givePermissionTo(['publish questions', 'unpublish questions', 'view results']);
            

        $studentRole = Role::create(['name' => 'student'])
            ->givePermissionTo(['answer questions', 'view results']);


        // ASSiGN ROLES TO USERS
        
        $superAdmin = User::create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@superadmin.com',
            'password' => bcrypt('password')
        ]);

        
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        $teacher = User::create([
            'name' => 'Teacher',
            'email' => 'teacher@teacher.com',
            'password' => bcrypt('password')
        ]);
          
        $student = User::create([
            'name' => 'Student',
            'email' => 'student@student.com',
            'password' => bcrypt('password')
        ]);   
        // NOW WE CONFIGURE PERMISSIONS
       
        
        // foreach($permissions as $permission){
        //     foreach($permission as $p){
        //         Permission::create(['name' => $p]);
        //     }
        // }
     
        
        // NOW WE ASSIGN PERMISSIONS TO ROLES
        // $super_admin_role->syncPermissions([
        //     'create-course',
        //     'edit-course',
        //     'delete-course',
        //     'create-question',
        //     'edit-question',
        //     'delete-question',
        //     'create-answer',
        //     'edit-answer',
        //     'delete-answer',
        //     'create-user',
        //     'edit-user',
        //     'delete-user',
        //     'create-role',
        //     'edit-role',
        //     'delete-role',
        // ]);        
        // $admin_role->syncPermissions([
        //     'create-course',
        //     'edit-course',
        //     'delete-course',
        //     'create-question',
        //     'edit-question',
        //     'delete-question',
        //     'create-answer',
        //     'edit-answer',
        //     'delete-answer',
        //     'create-user',
        //     'edit-user',
        //     'delete-user',
        //     'create-role',
        //     'edit-role',
        //     'delete-role',
        // ]);
        // $teacher_role->syncPermissions([
        //     'create-question',
        //     'edit-question',
        //     'delete-question',
        //     'create-answer',
        //     'edit-answer',
        //     'delete-answer',
        // ]);
        // $student_role->syncPermissions([
        //     'select-answer',
        //     'update-answer',
        //     'delete-answer',
        // ]);

    }
}

