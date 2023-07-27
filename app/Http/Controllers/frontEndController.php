<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request; // Import the Request class from the correct namespace

use App\Models\UsersModel;
use App\Models\Search;





class frontEndController extends Controller
{

    public function index()
    {
        //$model = new UsersModel();
        //3 types
        // $model = new UsersModel();
        // $users = UsersModel::all();

        //  return view('welcome', compact('users'));
        //  $model = new UsersModel();
        //  $data['users'] = $model->all();
        //  return view('welcome', $data);

        //$data['users'] = $model->all();
        //$data['users']= $model->get();

        // $data['users'] =$model->find(3);
        // print_r($data['users']);exit();

        // $user = $model::find(3);

        //  // Check if the user with ID 3 exists
        //  if ($user) {
        //      var_dump($user);
        //  } else {
        //      echo "User not found.";
        //  }

        //  exit();

        // return view('welcome', compact('data'));
        // $users =  $model->get();
        //print_r($email);exit();

        //return view('welcome');

    }

    public function home()
    {
        $model = new UsersModel();
        $users = $model::all(); //select * from UsersModel
        $user = $model->find(1); // select * from UsersModel where user_id=1;
        //$user=$model->where('user_id',43)->first();
        //return $user;
        // $users=$model->whereIn('user_id',[34,43])->get();
        //return $users;
        $active = $model::active()->latest()->limit(10)->get();
        $user = $model->count();
        //return $users;
        return view('home', ['users' => $users, 'user' => $user, 'active' => $active]);
    }

    public function aboutUs()
    {

        return view('about');
    }
    public function contactUs()
    {
        return view('contact');
    }

    //adduser post
    public function store(Request $request)
    {

        //    $name = request('name');
        //    $email= request('email');
        //    $date_of_birth= request('date_of_birth');
        //    $status= request('status');
        // $model = new UsersModel();
        // $model::create([
        //     'name' => request('name'),
        //     'email' =>   request('email'),
        //     'date_of_birth' => request('date_of_birth'),
        //     'password' => bcrypt('newone'),
        //     'status' => request('status')

        // ]);

        //eth email id check cheyum then same email anel kerila chage varila
        // $user = client::firstOrCreate([
        //     'email'=> request('email')
        // ],[
        //     'name'=>request('name'),
        //     'date_of_birth'=> request('date_of_birth'),
        //     'status'=> request('status')
        // ]);

        //this is very nice eth email vach ninaku ah data update cheyam

        //     $users = $model::updateOrCreate([
        //     'email'=>request('email'),

        //   ],[

        //     'name'=>request('name'),
        //     'date_of_birth'=>request('date_of_birth'),
        //     'password'=>bcrypt('newone'),
        //     'status'=>request('status')

        //   ]);

        $model = new UsersModel();
        $model::create([
            'name' => request('name'),
            'email' =>   request('email'),
            'date_of_birth' => request('date_of_birth'),
            'password' => bcrypt('newone'),
            'status' => request('status')

        ]);

        //session msg always works in redirect
        return redirect()->route('home')->with('success', 'User Added successfully');
    }

    // public function users(){
    //     $model = new client();
    //     $active = $model->active()->latest()->limit(10)->get();
    //   //  print_r( $active);exit();

    //     return view('users',['users'=>$active]);
    // }

    //edit user
    public function edit($user_id)
    {
        //return decrypt($user_id);

        $model = new UsersModel();
        // $user =$model::where('user_id',$user_id)->first();//ethum same ann 
        $user = $model::find(decrypt($user_id));
        //return $user;
        return view('edit', ['user' => $user]);
    }

    //update post
    public function update()
    {
        $user_id = decrypt(request('user_id')); //eth ellam eduth tharum
        // return request()->only('_token', 'status');// eth e 2 enam mathram return cheyum
        //request()->except('_token');  e token ellathe baki data request ullath tharum.
        // return request()->except('_token', 'status');
        $model = new UsersModel();
        $user = $model::find($user_id);
        // return $user;
        $user->update([
            'name' => request('name'),
            'email' =>   request('email'),
            'date_of_birth' => request('date_of_birth'),
            'password' => bcrypt('newone'),
            'status' => request('status')

        ]);

        return redirect()->route('home')->with('success', 'User updated successfully');
    }

    //delete
    public function delete($user_id)
    {
        $model = new UsersModel();
        $user = $model::find(decrypt($user_id));
        $user->delete();
        return redirect()->route('home')->with('success', 'User deleted successfully');
    }


    //class search
    public function search()
    {
        return view('classSearch');
    }

    public function result()
    {
        return view('resultPage');
    }

    //class serach
    public function classResult()
    {
        $model = new Search();
        $model::updateOrCreate([
            'code' => request('search'),
        ], [
            'date_of_birth' => request('dob'),
        ]);
        // $model::create([

        //     'date_of_birth' => request('dob'),
        // ]);
        return redirect()->route('result');
    }



    //products
    public function products()
    {
        return view('product');
    }


    //demo function
    // public function demo()
    // {
    //     $name = 'aki';
    //     $age = 25;
    //     $colors = [
    //         'green', 'yello', 'blue',
    //     ];
    //     return view('demo', ['name' => $name, 'age' => $age, 'color' => $colors]);
    // }
}
