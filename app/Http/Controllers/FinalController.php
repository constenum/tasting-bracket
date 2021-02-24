<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FinalController extends Controller
{
    public function final(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->except(['_token']));
        $request->session()->flash('success', 'Your vote has been recorded successfully');
        return redirect(route('home'));
    }
}
