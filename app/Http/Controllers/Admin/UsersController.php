<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkAge');
    }
    public function listUsers()
    {
        return "List: users - Admin/Users controller";
    }
}
