<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('accounts')->delete();
        
        \DB::table('accounts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'account_name' => 'Admin'
            ),
            1 => 
            array (
                'id' => 2,
                'account_name' => 'Studio'
            ),
            02 => 
            array (
                'id' => 3,
                'account_name' => 'Doctor'
            ),
            3 => 
            array (
                'id' => 4,
                'account_name' => 'Assistant'
            ),
            4 => 
            array (
                'id' => 5,
                'account_name' => 'Secrtary'
            ),
            0 => 
            array (
                'id' => 1,
                'account_name' => 'Patient'
            ),
        ));
        
    }
}