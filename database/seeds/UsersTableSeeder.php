<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Disable foreign key constraint check
      DB::statement('SET FOREIGN_KEY_CHECKS = 0');

      // Reset the table
      DB::table('users')->truncate();

      // Insert 3 users
      DB::table('users')->insert([
        [
          'name'     => 'Makara Chhin',
          'email'    => 'makarachhin@test.com',
          'password' => bcrypt('secret'),
        ],
        [
          'name'     => 'Rotha Chhin',
          'email'    => 'rothachhin@test.com',
          'password' => bcrypt('secret'),
        ],
        [
          'name'     => 'Ly Dara',
          'email'    => 'dara@test.com',
          'password' => bcrypt('secret'),
        ],
      ]);

    }
}
