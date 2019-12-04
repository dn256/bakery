<?php

namespace App\Http\Controllers;

use App\Events\DirectChatEvent;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function loadPage(){
        return view("welcome");
    }

    public function loadHome(){
        return view("home");
    }

    public function loadMenu(){
        return view("MenuPage/menu");
    }

    public function loadProducts(){
        return view("products");
    }

    public function loadProductDetails(){
        return view('ProductPage.show');
    }

    public function loadCart(){
        return view('cart');
    }

    public function loadCheckOut(){
        return view('checkout');
    }

    public function loadAboutUs(){
        return view("aboutus");
    }

    public function loadContact(){
        return view("contact");
    }

    public function loadError404(){
        return view("404");
    }

    public function loadCharImage(){
        return view("charimage");
    }

    public function loadCommingSoon(){
        return view("commingsoon");
    }

    public function sent(Request $request){
        $customerchess = $request -> query -> get('customermess','cho zui');
        event(new DirectChatEvent($customerchess));
        return "Message \"$customerchess\" đã thực hiện!";
    }
}
