<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
      {
        $data = [
            [
                'name' => 'tanapon',
                'email' => 'bbtanapon@gmail.com',
                'password' => Hash::make('0840'),
                'role' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Phatthanadol',
                'email' => 'filmerrede@gmail.com',
                'password' => Hash::make('0840'),
                'role' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

            DB::table('users')->insert($data);
    }
}