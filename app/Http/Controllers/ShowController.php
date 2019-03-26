<?php

namespace App\Http\Controllers;

error_reporting(E_ALL);

use App\Helpers\PremiereHelper;
use App\Models\Faq;
use App\Models\Film;
use App\Models\Job;
use App\Models\News;
use App\Models\Order;
use App\Models\Page;
use App\Models\Payment;
use App\Models\Session;
use App\Models\Settings;
use Illuminate\Support\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Mockery\Exception;

class ShowController extends Controller
{

    public function welcome(){
        return view('welcome');
    }
    public function catalog(){
        return view('catalog');
    }
    public function news(){
        return view('news.index');
    }

    public function newsShow(){
        return view('news.show');
    }

    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }
    public function product(){
        return view('product');
    }
    public function faq(){
        return view('faq');
    }
    public function delivery(){
        return view('delivery');
    }
    public function profile(){
        return view('profile');
    }




   

}
