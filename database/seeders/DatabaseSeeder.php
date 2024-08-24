<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Storage::disk('public')->deleteDirectory('media');
        Storage::disk('public')->deleteDirectory('users');
        Storage::disk('public')->makeDirectory('media');
        Storage::disk('public')->makeDirectory('users');

        $roleSuper = Role::create([
            'name' => 'Super Admin',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'Admin',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'Editor',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'Author',
            'guard_name' => 'web',
        ]);

        Role::create([
            'name' => 'User',
            'guard_name' => 'web',
        ]);

        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@cms.test',
        ]);

        $user->assignRole($roleSuper);

        Category::create([
            'name' => ["es" => "Sin categoría", "en" => "Without category"],
            'slug' => ["es" => "sin-categoría", "en" => "without-category"],
        ]);

        $this->call([
            PageSeeder::class,
        ]);
    }
}
