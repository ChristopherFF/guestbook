<?php

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
        DB::table('users')->insert([
            [
                'first_name' => 'Christopher',
                'last_name' => 'Jacobs',
                'email' => 'christopheruj@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => '$2y$10$.Vhq0nqy1Xfik4X5ZoE/AOWYqv4vDCJeyN7NIROKoSyCTSbGAj7Ye',
                'is_admin' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'first_name' => 'Admin',
                'last_name' => 'Person',
                'email' => 'admin@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => '$2y$10$.Vhq0nqy1Xfik4X5ZoE/AOWYqv4vDCJeyN7NIROKoSyCTSbGAj7Ye',
                'is_admin' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ]
        ]);
    }
}
