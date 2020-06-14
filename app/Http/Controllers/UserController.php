<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\User;

use Illuminate\Database\Eloquent\Model;



class UserController extends Controller
{
    
    public function uploadAvatar(Request $request)
    
    {

       // $request->image->store('images','public');

       User::find(1)->update(['avatar'=>'asdff']);
             return 'uploaded';
             
         
    }
    
    
    
    
    
    public function index()
    
        {

           /* $data = [
                
                'name' => 'gd',
                'email' => 'gd@gnail.com',

                'password' => 'azerty',

                
            ];

            */

            //User::create($data);
            

           // DB::insert('insert into users (name,email,password) 
           // values (?,?,?)', ['abi',' abi@gmail.com' ,'password']);
            
            //$users = DB::select('select * from users');
           // return $users ;

           //DB::update('update users set name = ? where id = 1' , ['azra']);
             

            // DB::delete('delete  from users where id=1');

           //$users = DB::select('select * from users');


           // return $users ;

          //$user = new User();

          // $user->name ='aisha111';

          // $user->email ='abi111@gmail.com';

           //$user->password = bcrypt('password111');

         // $user->save();

          // $users = DB::select('select * from users');


         // $user1 = User::all();
          // return $user1;
         // User::where('id', 4)->delete();

         return view('home'); 
        }
}
