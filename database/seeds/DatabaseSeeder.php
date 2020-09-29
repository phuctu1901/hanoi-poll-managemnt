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
//        $seeds = array
        DB::table('permissions')->insert(['name'=>'Tạo cuộc trưng cầu ý kiến mới', 'guard_name'=>'poll_create']);
    }
}
