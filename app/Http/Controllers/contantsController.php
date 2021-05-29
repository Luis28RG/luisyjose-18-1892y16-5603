<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Http\Requests\ContactoPostRequest;
use Illuminate\Http\Request;

class contantsController extends Controller
{
    public function index(Request $request)
    {
        $data = contacto::all();


        return view('contacto.mostrar', compact('data'));
    }

    public function create()
    {
        return view('contacto.create');
    }

    public function store(ContactoPostRequest $request)
    {
        $data = $request->validated();
        $contacto= Contacto::create($data);
        return redirect()->route('contacto.index');
    }




}
