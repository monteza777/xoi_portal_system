<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'first_name' => 'Super','last_name'=>'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$qMw6ru5dUj.YLRbrzpIzSOta4geCuwl0/zwtR7.h15hf96qYV1.u6', 'role_id' => 1, 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
