<?php

namespace Database\Seeders;

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

        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
