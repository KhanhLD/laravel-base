<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@framgia.com',
            'password' => '123456',
        ]);

        if($user) {
            echo "Seeding User data has done.\n";
        } else {
            echo "Seeding User data has fail.\n";
        }
    }
}
