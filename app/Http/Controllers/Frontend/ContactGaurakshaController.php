<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactGaurakshaController extends Controller
{
    public function index()
   {
    return view('frontend.contact_gauraksha');
   }
}
