<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

        	'site_name'=> "Laravel's Blog",
        	'contact_number'=> '01744-1322123',
            'contact_email'=> 'www.cmtziad@gmail.com',
            'address'=> "Dhaka,Bangladesh",
            'logo'=> "uploads/settings/logo.png",
        	'favicon'=> "uploads/settings/favicon.png",
        ]);
    }
}
