<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\error;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    {
        $user = User::where(['email' => $request->email])->first();
        // print($user);
        if (!$user) {
            return ('User doesnot exist');
        }
        if (Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => 'success',
                'data' => $user
            ]);
        } else {
            return ('wrong credentials');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function SignUp(Request $request)
    {
        $fullname = $request->fullname;
        $email = $request->email;
        $password = $request->password;

        $user = new User;
        $user->fullname = $fullname;
        $user->email = $email;
        $user->role = "author";
        $user->password = Hash::make($password);

        try {
            $user->save();
            return ('details submited successfully');
        } catch (\Throwable $e) {
            return ('Email already exist');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function allUsers()
    {
        $users = User::all();
        return $users;
    }

    public function count()
    {
        $usersadmin = User::select()->where('role','admin')->get();
        $usersAuthor = User::select()->where('role','author')->get();

        $authornum = $usersAuthor->count();
        $adminnum = $usersadmin->count();

        return [
            'adminCount' => $adminnum,
            'authorCount' => $authornum
        ];
    }

    public function adminsOnly()
    {
        $usersonly = User::select()->where('role','admin')->get();
        return $usersonly;
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        // return $user;
        if ($user->role == 'admin') {
            return "Cannot delete";
        } else {
            $user->delete();
            return ("user Deleted successfully");
        }
    }
}
