<?php

use Illuminate\Database\Seeder;

class Memberseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('member')-> delete();
      \DB::table('member')-> insert(array(
        0 => array(
        'name' => 'Kai',
        'first_Name'=> 'Kimura',
        'role'=> 'User',
        'user_id'=> '100',

      )
    ));
    }
}
