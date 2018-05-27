<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
class ContactController extends Controller
{
    protected $contact;

    public function __construct(Contact $contact)
    {

    	$this->contact = $contact;
    }

    public function editContact()
    {
    	$_contact = $this->contact->getObj();

        if(!$_contact)
        {
            // return abort(404); 
        }

        $contact_jp = $_contact->translate('jp');
        $contact_fr = $_contact->translate('fr');

        return view('admin.contact.edit',['contact' => $_contact,'contact_jp' => $contact_jp,'contact_fr' => $contact_fr]);

    }

    public function editRequestContact(ContactRequest $request)
    {
        // try
        // {
        //     $_contact = $this->contact->get()->first();
        //     $_contact->email = $request->input('email');
        //     $_contact->phone = $request->input('phone');
        //     $_contact->save();

        //     $_contact->translateOrNew('en')->address = $request->input('address');

        //     if($request->has('address-ge'))
        //     {
        //         $_contact->translateOrNew('ge')->address = $request->input('address-ge');
        //     }
        //     if($_contact->save())
        //     {
        //         return back()->with('success','Contact edited'); //redirect()->route('services')->with('success','service added');
        //     }
        //     return back()->with('error','Contact not edited');   
            
        // }catch(Exception $ex)
        // {
        //     return back()->with('error',$ex->getMessage());
        // }
        // return view('admin.contact.edit');        
    }
}
