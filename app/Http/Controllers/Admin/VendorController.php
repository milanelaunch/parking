<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\VendorDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class VendorController extends Controller
{
    public function index(VendorDataTable $VendorDataTable)
    {
        return $VendorDataTable->render('admin.Vendor.index');
    }
}
