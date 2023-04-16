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
               'email'=>'11201085@student.itk.ac.id',
               'type'=>1,
               'password'=> bcrypt('admin1234'),
            ],
            [
               'name'=>'Manager User',
               'email'=>'1120@student.itk.ac.id',
               'type'=> 2,
               'password'=> bcrypt('mitra1234'),
            ],
            [
               'name'=>'User',
               'email'=>'11201003@student.itk.ac.id',
               'type'=>0,
               'password'=> bcrypt('user1234'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}