<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UserDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(UserDataTable $UserDataTable)
    {
        return $UserDataTable->render('admin.User.index');
    }
}
