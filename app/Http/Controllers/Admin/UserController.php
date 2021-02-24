<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Controller;

use App\Http\Requests\StoreUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        if(Gate::denies('logged-in')) {
            dd('no access allowed');
        }

        if (Gate::allows('is-admin')) {
            return view('admin.users.index', [
                'users' => User::paginate(5)
            ]);
        }

        dd('you need to be an admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return \view('admin.users.create', ['roles' => Role::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUserRequest $request)
    {
//      Use if not using fortify Action
//        $validatedData = $request->validated();
//        $user = User::create($validatedData);

        // Using Fortify Action
        $newUser = new CreateNewUser();
        $user = $newUser->create($request->only(['name', 'email', 'password', 'password_confirmation']));

        $user->roles()->sync($request->roles);

        Password::sendResetLink($request->only(['email']));

        $request->session()->flash('success', 'The user has been created successfully');

        return redirect(route('admin.users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id)
    {
        return \view('admin.users.edit',
            [
                'roles' => Role::all(),
                'user' => User::find($id)
            ]);
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
        $user = User::findOrFail($id);

//  Option to flash error message: must change findOrFail above to find
//        if(!$user)
//        {
//            $request->session()->flash('error', 'The user cannot be updated');
//
//            return redirect(route('admin.users.index'));
//        }

        $user->update($request->except(['_token', 'roles']));

        $user->roles()->sync($request->roles);

        $request->session()->flash('success', 'The user has been updated successfully');

        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        User::destroy($id);

        $request->session()->flash('success', 'The user has been deleted successfully');

        return redirect(route('admin.users.index'));
    }
}
