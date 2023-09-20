<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ftkp;
use App\Mcust;
use App\Spkh;
use App\Kategori;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::all();
        $kategori = Kategori::all();
        $ftkp = Ftkp::all();
        $mcust = Mcust::all();
        $spkh = Spkh::all();

        $jmlh_mcust = $mcust->count();
        $jmlh_user = $user->count();
        $jmlh_kategori = $kategori->count();
        $jmlh_ftkp = $ftkp->count();
        $jmlh_spkh = $spkh->count();

        return view('home', compact('jmlh_mcust', 'jmlh_kategori', 'jmlh_user', 'jmlh_ftkp', 'jmlh_spkh'));
    }
}
