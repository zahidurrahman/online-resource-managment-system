<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([

          [
              'name' => 'Admin 1',
              'email' => 'admin@gmail.com',
              'phone' => '01714123456',
              'role' => '1',
              'password' => bcrypt('123456789'),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ],
          [
              'name' => 'Admin 2',
              'email' => 'admin2@gmail.com',
              'phone' => '01714123456',
              'role' => '1',
              'password' => bcrypt('123456789'),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ],
          [
              'name' => 'Admin 3',
              'email' => 'admin3@gmail.com',
              'phone' => '01714123456',
              'role' => '1',
              'password' => bcrypt('123456789'),
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]

      ]);
    }
}
