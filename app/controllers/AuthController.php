<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Models\User;
class AuthController extends Controller
{
public function showLogin()
{
return $this->view('login');
}
public function login()
{
// TODO: Handle login (check user + password_verify)
}
public function showRegister()
{
return $this->view('register');
}

public function register()
{
// TODO: Insert new user into DB
// password_hash before save
}
public function logout()
{
// TODO: Destroy session and redirect
}
}