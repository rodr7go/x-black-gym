<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUsers = [
            'name' => 'Rodrigo López',
            'email' => 'rodr7go.lg@gmail.com',
            'password' => bcrypt('secret'),
            'is_admin' => 1,
            'registered_at' => Carbon::now()->toDateString(),
        ];

        \DB::table('users')->insert( $adminUsers);
        User::factory()->count(30)->create();
    }
}
