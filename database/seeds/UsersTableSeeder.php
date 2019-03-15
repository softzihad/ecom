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
       $user = App\User::create([
        
        	'name'=> 'zihad',
        	'email'=> 'zihad@gmail.com',
        	'password'=> bcrypt('zihad123'),
            'admin'=> 1
        ]);


        App\Profile::create([

            'user_id'=> $user->id,
            'image'=> 'uploads/user/1.jpg',
            'about'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In iure est nesciunt dolorem doloremque, fugit, temporibus aperiam soluta reiciendis necessitatibus? Dolores, qui, odio. Impedit tempora rem molestias, tenetur omnis iusto.',
            'facebook'=>'facebook.com',
            'youtube'=> 'youtube.com'
        ]);
    }

}
