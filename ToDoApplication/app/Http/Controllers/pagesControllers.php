<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class pagesControllers extends Controller {

      public function index()
    {
        return "Ths is the Home page ";
    }

	public function contact()
    {
	   return "This is a contact page";
	}
  
}
                                                                                                                                                                                   