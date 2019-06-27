<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        for ($i=0; $i<=3; $i++) {

            $random = Str::random(10);

            DB::table('contact')->insert([


                'name' => $random,
                'email' => $random,


            ]);

        }


        }


}
