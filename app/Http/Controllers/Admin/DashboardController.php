<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function changePassword()
    {
        return view('admin.auth.change-pass');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_pass' => 'required',
            'new_pass' => 'required|confirmed|min:6'
        ]);
        $id         = Auth::id();
        $selectData = Admin::where('id', $id)->first();
        $password   = $selectData->password;

        if (Hash::check($request->old_pass, $password)) {
            $newPass        = bcrypt($request->new_pass);
            $updatePassword = Admin::where('id', $id)->update(['password' => $newPass]);
            if ($updatePassword) {
                Auth::guard('admin')->logout();
                return redirect()->route('admin.login');
            }
            return redirect()->back()->withSuccess('Password Update Successfully...');
        } else {
            return redirect()->back()->withDanger('Old Password does not match with our database');
        }
    }
}
