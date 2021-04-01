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
            [
                'name' => 'Rodrigo López',
                'email' => 'rodr7go.lg@gmail.com',
                'password' => bcrypt('Pass.temp123'),
                'is_admin' => 1,
                'registered_at' => Carbon::now()->toDateString(),
                'created_by' => 1
            ],
            [
                'name' => 'Isaac R.',
                'email' => 'direccion@xblackgym.fit',
                'password' => bcrypt('IsaakR123'),
                'is_admin' => 1,
                'registered_at' => Carbon::now()->toDateString(),
                'created_by' => 1

            ],
            [
                'name' => 'Victor Herrera',
                'email' => 'victor@xblackgym.fit',
                'password' => bcrypt('VictorHxbg'),
                'is_admin' => 1,
                'registered_at' => Carbon::now()->toDateString(),
                'created_by' => 1

            ],
            [
                'name' => 'Carlos Sosa',
                'email' => 'carlos@xblackgym.fit',
                'password' => bcrypt('CarlosSxbg'),
                'is_admin' => 1,
                'registered_at' => Carbon::now()->toDateString(),
                'created_by' => 1

            ]
        ];

        \DB::table('users')->insert( $adminUsers);
//        User::factory()->count(30)->create();
    }
}
