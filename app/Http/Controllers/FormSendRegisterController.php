<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormSendRegister;
use Illuminate\Support\Facades\Password;

class FormSendRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("formsendregister");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form = $request->all();
        $form['name'] = $request->name;
        $form['email'] = $request->email;
        $form['phone'] = $request->phone;
        $form['message'] = $request->message;
        $form['select_department'] = $request->department;
        FormSendRegister::create($form);

        return redirect()->back()->withSuccess('Your message has been sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormSendRegister $formDestroy)
    {
        $formDestroy = FormSendRegister::first();
        // dd($formDestroy);
        $formDestroy->delete();

        return redirect()->route('register')->withSuccess('Delete successfully!');
    }
}
