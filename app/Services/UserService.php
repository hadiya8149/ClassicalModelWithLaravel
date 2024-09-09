<?php 
namespace App\Services;
use ILluminate\Support\Facades\Auth;

use App\Models;
class UserService {
    
    public function store($email, $password, $name)
    {
        $password = bcrypt($validated["password"]);
        User::create(
            [
                "email"=>$email,
                "password"=>$password,
                "name"=>$name
            ]
            );
        return true;
    }
    
    public function login($email, $password)
    {
        $token = Auth::attempt(["email"=>$email, "password"=>$password]);

        if (!$token) 
        {
            return false;
        }
        else
        {
            return $token;

        }
    }

    public function getPermissions()
    {
        $user = User::auth();
        $role = $user->getRoleNames();
        $perm = $user->permissions;
        return $perm;
    }
}