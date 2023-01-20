<?php

namespace App\Http\Controllers;

use App\Models\QRCode;
use Illuminate\Http\Request;

class QRCodeController extends Controller
{
    public function index(){
        $qrcodes = QRCode::latest()->paginate(S);
        return view('dynamic-qr-code-generator.index', compact('qrcodes'))->with('i', (request()->input('page', 1)-1)*5);
    }
    
    public function create()
    {
        return view('contacts.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Contact::create($input);
        return redirect('contact')->with('flash_message', 'Contact Addedd!');  
    }
 
    
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contacts.show')->with('contacts', $contact);
    }
 
    
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit')->with('contacts', $contact);
    }
 
  
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('contact')->with('flash_message', 'Contact Updated!');  
    }
 
  
    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('contact')->with('flash_message', 'Contact deleted!');  
    }
}
