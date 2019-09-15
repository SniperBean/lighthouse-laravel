<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dateNow = Carbon::now()->toDateTimeString();
        DB::table('users')->insert([
            'name' => '測試員A', 
            'email' => 'handsomeboy@coolmail.com',
            'password' => bcrypt('1234'),
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);

        DB::table('users')->insert([
            'name' => '測試員B', 
            'email' => 'pretty@coolmail.com',
            'password' => bcrypt('4321'), 
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);

        DB::table('users')->insert([
            'name' => '測試員C', 
            'email' => 'hotdog@coolmail.com',
            'password' => bcrypt('abcd'), 
            'created_at' => $dateNow,
            'updated_at' => $dateNow
        ]);
    }
}
