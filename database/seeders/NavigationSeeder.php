<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Navigation;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Navigation::create([
            'name'      => 'Konfigurasi',
            'url'       => 'konfigurasi',
            'icon'      => 'bi bi-menu-button-wide',
            'main_menu'     => null,
        ]);

        Navigation::create([
            'name'      => 'Roles',
            'url'       => 'konfigurasi/roles',
            'icon'      => 'bi bi-circle',
            'main_menu'     => 1,
        ]);

        Navigation::create([
            'name'      => 'Permissions',
            'url'       => 'konfigurasi/permissions',
            'icon'      => 'bi bi-circle',
            'main_menu'     => 1,
        ]);

        Navigation::create([
            'name'      => 'Users',
            'url'       => 'konfigurasi/users',
            'icon'      => 'bi bi-circle',
            'main_menu'     => 1,
        ]);

        Navigation::create([
            'name'      => 'Masters',
            'url'       => 'master',
            'icon'      => 'bi bi-journal-text',
            'main_menu'     => null,
        ]);

        Navigation::create([
            'name'      => 'Codeukers',
            'url'       => 'master/codeukers',
            'icon'      => 'bi bi-circle',
            'main_menu'     => 5,
        ]);

        Navigation::create([
            'name'      => 'Branchcodes',
            'url'       => 'master/branchcodes',
            'icon'      => 'bi bi-circle',
            'main_menu'     => 5,
        ]);

        Navigation::create([
            'name'      => 'Employes',
            'url'       => 'master/employes',
            'icon'      => 'bi bi-circle',
            'main_menu'     => 5,
        ]);

        Navigation::create([
            'name'      => 'Transaksi FLM',
            'url'       => 'transaksi',
            'icon'      => 'bi bi-menu-button-wide',
            'main_menu'     => null,
        ]);

        Navigation::create([
            'name'      => 'Teams',
            'url'       => 'transaksi/teams',
            'icon'      => 'bi bi-circle',
            'main_menu'     => 9,
        ]);

        Navigation::create([
            'name'      => 'Atms',
            'url'       => 'master/mesins',
            'icon'      => 'bi bi-circle',
            'main_menu'     => 5,
        ]);
        
        Navigation::create([
            'name'      => 'Username',
            'url'       => 'konfigurasi/usernames',
            'icon'      => 'bi bi-circle',
            'main_menu'     => 1,
        ]);


        

    }
}
