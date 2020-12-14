<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Datapemohon;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function list()
    {
        $datapemohon = Datapemohon::latest()->get();
        return view('admin.list')
            ->withDatapemohon($datapemohon);
    }
}
