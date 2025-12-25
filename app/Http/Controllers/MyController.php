<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvalue;
    protected $myvalue2;
    public $myval = "";
    // constructor
    // MyController()
    function __construct(){

    }

    function index(){
        return view('myview.index');
    }

    function info(){
        return view('myview.info');
    }

    function calculate(Request $req){
        echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('myview.calculate', $data);
    }

    public function workshop()
    {
        return view('html101');
    }

    public function store(Request $request)
    {
        return view('myview.result', [
            'fname'     => $request->fname,
            'lname'     => $request->lname,
            'birthdate' => $request->birthdate,
            'gender'    => $request->gender,
            'address'   => $request->address,
            'color'     => $request->color,
            'theme'     => $request->theme,
            'agreement' => $request->agreement
        ]);
    }
}
