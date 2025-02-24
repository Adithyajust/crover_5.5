<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRolePermissionSeede extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $default_user_value = [
            'email_verified_at' => now(),
            'password'  => '$2y$10$XaStxu13uhcBVacCd2SlF.Q572y5DxuivQZBtkgULVdOZ5S0BpAEu',
            'remember_token'    => Str::random(10),
        ];

        DB::beginTransaction();

        try {
            //code...
            $pinca = User::create(array_merge([
                'email'     => 'pinca@gmail.com',
                'name'      => 'pinca',
                'jabatan'   => 'Pinca'
            ], $default_user_value));

            $supervisor = User::create(array_merge([
                'email'     => 'supervisor@gmail.com',
                'name'      => 'supervisor',
                'jabatan'   => 'Supervisor'
            ], $default_user_value));

            $admin = User::create(array_merge([
                'email'     => 'admin@gmail.com',
                'name'      => 'admin',
                'jabatan'   => 'Admin CRO'
            ], $default_user_value));

            $cpc = User::create(array_merge([
                'email'     => 'cpc@gmail.com',
                'name'      => 'cpc',
                'jabatan'   => 'CPC'
            ], $default_user_value));

            $administrator = User::create(array_merge([
                'email'     => 'it@gmail.com',
                'name'      => 'Adithya',
                'jabatan'   => 'Administrator'
            ], $default_user_value));

            $role_pinca = Role::create(['name' => 'Pinca']);
            $role_supervisor = Role::create(['name' => 'Supervisor']);
            $role_admin = Role::create(['name' => 'Admin CRO']);
            $role_cpc = Role::create(['name' => 'CPC']);
            $role_administrator = Role::create(['name' => 'Administrator']);

            $permission     = Permission::create(['name' => 'read konfigurasi', 'slug' => 'read konfigurasi']); // induk menu
            $permission     = Permission::create(['name' => 'read master', 'slug' => 'read master']);
            $permission     = Permission::create(['name' => 'read transaksi', 'slug' => 'read transaksi']);

            // submenu
            $permission     = Permission::create(['name' => 'read konfigurasi/roles', 'slug' => 'read roles']);
            $permission     = Permission::create(['name' => 'create konfigurasi/roles', 'slug' => 'create roles']);
            $permission     = Permission::create(['name' => 'update konfigurasi/roles', 'slug' => 'update roles']);
            $permission     = Permission::create(['name' => 'delete konfigurasi/roles', 'slug' => 'delete roles']);

            $permission     = Permission::create(['name' => 'read konfigurasi/permissions', 'slug' => 'read permissions']);
            $permission     = Permission::create(['name' => 'create konfigurasi/permissions', 'slug' => 'create permissions']);
            $permission     = Permission::create(['name' => 'update konfigurasi/permissions', 'slug' => 'update permissions']);
            $permission     = Permission::create(['name' => 'delete konfigurasi/permissions', 'slug' => 'delete permissions']);

            $permission     = Permission::create(['name' => 'read konfigurasi/users', 'slug' => 'read users']);
            $permission     = Permission::create(['name' => 'create konfigurasi/users', 'slug' => 'create users']);
            $permission     = Permission::create(['name' => 'update konfigurasi/users', 'slug' => 'update users']);
            $permission     = Permission::create(['name' => 'delete konfigurasi/users', 'slug' => 'delete users']);

            $permission     = Permission::create(['name' => 'read konfigurasi/usernames', 'slug' => 'read usernames']);
            $permission     = Permission::create(['name' => 'create konfigurasi/usernames', 'slug' => 'create usernames']);
            $permission     = Permission::create(['name' => 'update konfigurasi/usernames', 'slug' => 'update usernames']);
            $permission     = Permission::create(['name' => 'delete konfigurasi/usernames', 'slug' => 'delete usernames']);

            $permission     = Permission::create(['name' => 'read konfigurasi/navigations', 'slug' => 'read navigations']);
            $permission     = Permission::create(['name' => 'create konfigurasi/navigations', 'slug' => 'create navigations']);
            $permission     = Permission::create(['name' => 'update konfigurasi/navigations', 'slug' => 'update navigations']);
            $permission     = Permission::create(['name' => 'delete konfigurasi/navigations', 'slug' => 'delete navigations']);



            $permission     = Permission::create(['name' => 'read master/codeukers', 'slug' => 'read codeukers']);
            $permission     = Permission::create(['name' => 'create master/codeukers', 'slug' => 'create codeukers']);
            $permission     = Permission::create(['name' => 'update master/codeukers', 'slug' => 'update codeukers']);
            $permission     = Permission::create(['name' => 'delete master/codeukers', 'slug' => 'delete codeukers']);

            $permission     = Permission::create(['name' => 'read master/branchcodes', 'slug' => 'read branchcodes']);
            $permission     = Permission::create(['name' => 'create master/branchcodes', 'slug' => 'create branchcodes']);
            $permission     = Permission::create(['name' => 'update master/branchcodes', 'slug' => 'update branchcodes']);
            $permission     = Permission::create(['name' => 'delete master/branchcodes', 'slug' => 'delete branchcodes']);

            $permission     = Permission::create(['name' => 'read master/employes', 'slug' => 'read employes']);
            $permission     = Permission::create(['name' => 'create master/employes', 'slug' => 'create employes']);
            $permission     = Permission::create(['name' => 'update master/employes', 'slug' => 'update employes']);
            $permission     = Permission::create(['name' => 'delete master/employes', 'slug' => 'delete employes']);

            $permission     = Permission::create(['name' => 'read master/mesins', 'slug' => 'read mesins']);
            $permission     = Permission::create(['name' => 'create master/mesins', 'slug' => 'create mesins']);
            $permission     = Permission::create(['name' => 'update master/mesins', 'slug' => 'update mesins']);
            $permission     = Permission::create(['name' => 'delete master/mesins', 'slug' => 'delete mesins']);

            $permission     = Permission::create(['name' => 'read transaksi/teams', 'slug' => 'read teams']);
            $permission     = Permission::create(['name' => 'create transaksi/teams', 'slug' => 'create teams']);
            $permission     = Permission::create(['name' => 'update transaksi/teams', 'slug' => 'update teams']);
            $permission     = Permission::create(['name' => 'delete transaksi/teams', 'slug' => 'delete teams']);


           // memberi akse
           $role_administrator->givePermissionTo('read konfigurasi/roles');
           $role_administrator->givePermissionTo('create konfigurasi/roles');
           $role_administrator->givePermissionTo('update konfigurasi/roles');
           $role_administrator->givePermissionTo('delete konfigurasi/roles', 'read konfigurasi');

           $role_administrator->givePermissionTo('read konfigurasi/permissions');
           $role_administrator->givePermissionTo('create konfigurasi/permissions');
           $role_administrator->givePermissionTo('update konfigurasi/permissions');
           $role_administrator->givePermissionTo('delete konfigurasi/permissions');

           $role_administrator->givePermissionTo('read konfigurasi/users');
           $role_administrator->givePermissionTo('create konfigurasi/users');
           $role_administrator->givePermissionTo('update konfigurasi/users');
           $role_administrator->givePermissionTo('delete konfigurasi/users');

           $role_administrator->givePermissionTo('read konfigurasi/usernames');
           $role_administrator->givePermissionTo('create konfigurasi/usernames');
           $role_administrator->givePermissionTo('update konfigurasi/usernames');
           $role_administrator->givePermissionTo('delete konfigurasi/usernames');

           $role_administrator->givePermissionTo('read konfigurasi/navigations');
           $role_administrator->givePermissionTo('create konfigurasi/navigations');
           $role_administrator->givePermissionTo('update konfigurasi/navigations');
           $role_administrator->givePermissionTo('delete konfigurasi/navigations');

           $role_administrator->givePermissionTo('read master/codeukers');
           $role_administrator->givePermissionTo('create master/codeukers');
           $role_administrator->givePermissionTo('update master/codeukers');
           $role_administrator->givePermissionTo('delete master/codeukers');


           $role_administrator->givePermissionTo('read master/branchcodes');
           $role_administrator->givePermissionTo('create master/branchcodes');
           $role_administrator->givePermissionTo('update master/branchcodes');
           $role_administrator->givePermissionTo('delete master/branchcodes');

           $role_administrator->givePermissionTo('read master/mesins');
           $role_administrator->givePermissionTo('create master/mesins');
           $role_administrator->givePermissionTo('update master/mesins');
           $role_administrator->givePermissionTo('delete master/mesins');

           $role_administrator->givePermissionTo('read master/employes');
           $role_administrator->givePermissionTo('create master/employes');
           $role_administrator->givePermissionTo('update master/employes');
           $role_administrator->givePermissionTo('delete master/employes', 'read master');

           $role_administrator->givePermissionTo('read transaksi/teams');
           $role_administrator->givePermissionTo('create transaksi/teams');
           $role_administrator->givePermissionTo('update transaksi/teams');
           $role_administrator->givePermissionTo('delete transaksi/teams', 'read transaksi');

            $pinca->assignRole('Pinca');
            $supervisor->assignRole('Supervisor');
            $admin->assignRole('Admin CRO');
            $cpc->assignRole('CPC');
            $administrator->assignRole('Administrator');

            DB::commit();

        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
