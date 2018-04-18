<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Super Admin';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('admin');
        $user->profile_picture = ('a');
        $user->save();
    }
}
