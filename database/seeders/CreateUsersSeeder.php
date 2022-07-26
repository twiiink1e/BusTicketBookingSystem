<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@gmail.com',
               'type'=>1,
               'password'=> bcrypt('888888888'),
            ]
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}