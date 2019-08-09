<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ContactController extends Controller
{

    public function index()
    {
        dd('trtr');
    }

    public function all()
    {
        $contact = Contact::all();

        return DataTables::of($contact)->addColumn('action', function ($contact){
          '<a onclick="showData('.$contact->id.')" class="btn btn-success">Show</a>'. ' '.
          '<a onclick="editForm('.$contact->id.')" class="btn btn-primary">Show</a>'.' '.
          '<a onclick="deleteForm('.$contact->id.')" class="btn btn-danger">Show</a>';
        });
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
