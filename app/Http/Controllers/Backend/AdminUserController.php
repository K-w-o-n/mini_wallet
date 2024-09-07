<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
class AdminUserController extends Controller
{
    public function index() {
    
        return view('backend.admin_user.index');
    }

    public function ssd() {
        $admin_user = AdminUser::query();

        return DataTables::make($admin_user)->toJson();
    }
}
