<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use App\Models\ContactData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function __construct()
    {
        // Page Title
        $this->module_title = 'Contact';

        // module name
        $this->module_name = 'contact';

        // directory path of the module
        $this->module_path = 'contact';

        // module icon
        $this->module_icon = 'c-icon fas fa-bell';

        // module model name, path
        $this->module_model = "App\Models\User";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;

        $module_action = 'List';
        $datas = ContactData::orderBy('id', 'desc')->paginate(10);
        return view(
            "backend.$module_path.index",
            compact('datas','module_title', 'module_name', 'module_path', 'module_icon', 'module_action')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new ContactData();
        $contact->full_name = $request->input('full_name');
        $contact->company = $request->input('company');
        $contact->email = $request->input('email');
        $contact->note = $request->input('note');
        $contact->type = $request->input('type');
        $dataMail = ContactData::create($request->all());
        // mail contact
        // Mail::to($contact->email)->send(new ContactMail($dataMail));
        return $dataMail ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
