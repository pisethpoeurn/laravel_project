<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function action(){
        $action = "Action";
        return view('page.action',compact('action'));
    }
    public function about(){
        $about = "About";
        return view("page.about")->with('about',$about);
    }
    public function join(){
        $title = "";
        return view('page.join');
    }
    public function news(){
        return view('page.news');
    }
    public function contact(){
        return view('page.contact');
    }
    public function customer(){
        $customers = ["Chandaraty","maly","Sampas","Donat"];
        return view('customer' , compact("customers"));
    }
    public function listCustomer () {
        $customer = array(
        '0'=>array('id' => 1,'name' => 'Chandaraty','email' => 'chandaraty@example.org'),
        '1'=>array('id' => 2,'name' => 'Maly','email' => 'maly@example.org'),
        '2'=>array('id' => 3,'name' => 'Samphas','email' =>'samphas@example.org'),
        '3'=>array('id' => 4,'name' => 'Donat','email' => 'donat@example.org')
        );
        return view('customer' , compact("customer"));
    }
}
