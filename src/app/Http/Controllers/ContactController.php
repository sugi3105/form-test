<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
     public function index()
    {
        $categories = Category::all();
        return view('contact.index', compact('categories'));
    }
    public function confirm(ContactRequest $request)
    {
         $data = $request->validated();
       
         //$contact = $request->all();
         //$category = Category::find($data['category_id']);
        return view('contact.confirm', compact('data'));
    }
    public function thanks(Request $request)
    {
        //$data = $request->validate();
          $data = $request->all();
          unset($data['_token']);
       
        Contact::create($data);
            //'category_id' => $data['category_id'],
            //'name' => $data['name'],
            //'gender' => $data['gender'],
            //'email' => $data['email'],
            //'tel' => $data['tel'],
            //'postcode' => $data['postcode'],
            //'address' => $data['address'],
            //'building' => $data['building'],
            //'detail' => $data['detail'],
        //]);
    
        return view('contact.thanks');
    }
    //
}
