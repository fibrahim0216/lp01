<?php

namespace App\Http\Controllers;
use App\Person;

use Illuminate\Http\Request;

class personController extends Controller
{
    public function index(){
    	$person_list = Person::all();
    	//dd($person_list->toArray());

    	return view('personlist', compact('person_list'));
    }
}

// model represent a table in database
// model creation
// migration what is
//creation of migration
// creating column in migration
// model create with migration
// select all statement
// model convention
// overright primarykey
// overright table name
