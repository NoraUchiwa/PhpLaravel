<?php

namespace App\Http\Controllers;

use App\Spending;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class SpendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spendings = Spending::orderBy('created_at', 'DESC')->with('users')->paginate(env('APP_PAGINATE'));

        return view('back.spending.index',[
            'spendings' => $spendings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('name', 'id')->all();
        return view('back.spending.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SpendingRequest $request)
    {


        $part = count($request->users); // nombre de personne qui ont été coché

        $spending = Spending::create($request->all()); // assignation de masse

        $spending->users()->attach($request->users, ['price' => $request->price/$part]);


        return redirect()->route('spending.index')->with('message', ['type' => 'succes', 'content' => 'Succes']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       $spending =  Spending::find($id);

        return view('back.spending.show', compact('spending'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::pluck('name', 'id')->all();
        $spending = Spending::find($id);

        $checkedUsers = $spending->users()->pluck('id')->all(); // utilisateurs sélectionnés

        return view('back.spending.edit', compact('spending', 'checkedUsers', 'users') );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SpendingRequest $request, Spending $spending)
    {

        $part = count($request->users); // nombre de personnes cochées

        $spending->update($request->all());

        $spending->users()->detach();

        $spending->users()->attach($request->users, ['price' => $request->price/$part]);
        
        return redirect()->route('spending.index')->with('message', ['type' => 'succes', 'content' => 'Succes']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spending = Spending::find($id);
        $spending->delete();
        //->with renvoie une notif de nom message avec le message deleted success
        return redirect()->route('spending.index')->with('message' , [
            'type' => 'success',
            'content' => 'Success Deleted'
        ]);
    }
}
