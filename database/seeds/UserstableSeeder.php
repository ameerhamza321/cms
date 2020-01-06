<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\wherePivotIn;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB:table('role_user')->truncate();

        $adminrole = Role::where('name', 'admin')->first();
        $authorrole = Role::where('name', 'author')->first();
        $userrole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name'=>'Admin User',
            'email'=>'admin@admin.com',
            'password'=> Hash::make('password'),
            ]);

             $author = User::create([
                 'name'=>'Author User',
                 'email'=>'author@author.com',
                 'password'=> Hash::make('password')
]);
                  $user = User::create([
                      'name'=>'Generic User',
                      'email'=>'user@admin.user',
                      'password'=> Hash::make('password')


        ]);


        $admin->roles()->attach($adminrole);
        $author->roles()->attach($authorrole);
        $user->roles()->attach($userrole);






    }




}
