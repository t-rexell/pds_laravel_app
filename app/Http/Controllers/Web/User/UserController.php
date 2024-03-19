<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\StoreUserRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\View\View;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {

        // search input
        $searchVal = $request->search ?? null;
        // paginate with query
        $users = User::all();
        // $users = User::where('name', 'LIKE', '%'.$searchVal.'%')->whereNot('id', auth()->user()->id)->paginate(5)->withQueryString();

        return view('user.index', compact('users', 'searchVal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        // Retrieve the validated input...
        $validated = $request->validated();

        // store new User to database
        $user                       = new User;
        $user->first_name                 = $validated['first_name'];
        $user->middle_name                 = $validated['middle_name'];
        $user->last_name                 = $validated['last_name'];
        $user->email                = $validated['email'];
        $user->password             = Hash::make($validated['password']);
        $user->save();

        // Alert::success('User Successfully Added', '');
        // redirect to users page
        return redirect()->route('users.index')->with('status', 'User has been successfully added.');
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
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
