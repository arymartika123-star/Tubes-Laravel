<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Akun Admin
        $admin = User::query()->firstOrNew(['email' => 'admin@gmail.com']);
        $admin->fill([
            'name' => 'Admin',
            'password' => Hash::make('admin'),
        ]);
        $admin->role = 'admin';
        $admin->email_verified_at ??= now();
        $admin->save();

        // 2. Akun Staff
        $staff = User::query()->firstOrNew(['email' => 'staff@gmail.com']);
        $staff->fill([
            'name' => 'Staff',
            'password' => Hash::make('staff'),
        ]);
        $staff->role = 'staff';
        $staff->email_verified_at ??= now();
        $staff->save();
    }
}