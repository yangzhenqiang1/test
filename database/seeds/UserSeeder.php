<?php

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
        //
        DB::table('users')->delete();

        for ($i=0; $i < 10; $i++) {
            \App\User::create([
                'name'   => 'name '.$i,
                'email'    => 'email@'.$i.'.com',
                'password' => md5($i),
                'remember_token' =>md5($i+1),
                'created_at' =>time(),
                'updated_at' =>time(),
            ]);
        }
    }
}
