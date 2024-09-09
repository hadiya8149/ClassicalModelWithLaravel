<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

use App\Http\Requests\SignupRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ForgotPassword;
use ILluminate\Support\Facades\Auth;
use JWTAuth;
use App\Helpers\Helpers;
use App\Models\User;
use App\SErvices\UserService;
class UserController extends Controller
{
    private $userService;
    public function __construct(UserService $userService){
        $this->userService = $userService;
    }
    public function store(SignupRequest $request)
    {
        $validated = $request->validated();
        $email = $validated["email"];
        $password = bcrypt($validated["password"]);
        $name = $validated["name"];

        $isSignedUp =  $this->userService->store($email, $password, $name);
        if ($isSignedUp){
            return Helpers::sendSuccessResponse(200, 'User signed up successfully', []);
        }
        else{
            return Helpers::sendFailureResponse(200, 'Could not signup please try again later', []);
        }
    }
    
    public function login(LoginRequest $request)
    {
        $validatedData = $request->validated();
    
        $email = $validatedData['email'];
        $password = $validatedData['password'];
        $token = $this->userService->login($email, $password);
        if (!$token) 
        {
            return Helpers::sendJsonResponse(401, "Invalid credentials", []);
        }
        else{
            return Helpers::sendJsonResponse(200, "Logged in successfully", ["Authorization"=>["token"=>$token]]);

        }      
    }

    public function getPermissions()
    {
        $user = User::auth();
        $permissions = $this->userService->getPermissions();
        return Helpers::sendJsonResponse(200, 'User permissions', ["permissions"=>$permissions]);
    }
}
