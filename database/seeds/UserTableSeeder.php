<?php 
namespace Database\Seeds; 
use Illuminate\Database\Seeder;//これを追加しないとエラーになります！
use App\User;//これを追加しないとエラーになります！Appの名前空間を変えている場合は適宜変更を忘れずに！
  
class UserTableSeeder extends Seeder {
   
    public function run() {
        \DB::table('users')->delete();
        User::create(array(
            'id' => 1,
            'email' => 'suzuki_ichiro@test.com',
            'name' => 'suzuki_ichiro',
            'password' => \Hash::make('password') 
        ));
    }
}
