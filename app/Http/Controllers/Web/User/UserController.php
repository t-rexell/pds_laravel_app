<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
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
    public function index()
    {

        // // search input
        // $searchVal = $request->search ?? null;
        // // paginate with query
        // $users = User::all();
        // // $users = User::where('name', 'LIKE', '%'.$searchVal.'%')->whereNot('id', auth()->user()->id)->paginate(5)->withQueryString();

        return view('user.index');
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
    public function store(StoreUserRequest $request)
    {

        // validated data
        $data = $request->validated();

        // dd($data);

        // Insert new User
        $user                                 = new User;
        $user->first_name                     = $data['first_name'];
        $user->middle_name                     = $data['middle_name'];
        $user->last_name                     = $data['last_name'];
        $user->email                         = $data['email'];
        $user->password                     = $data['password'];
        $user->save();

        // redirection
        return redirect()->route('users.index');
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
    public function update(UpdateUserRequest $request, User $user)
    {
        // validated data
		$data = $request->validated();

		// Update User
		$user->first_name 		= $data['first_name'];
		$user->middle_name 		= $data['middle_name'];
		$user->last_name 			= $data['last_name'];
		$user->email 					= $data['email'];

		// optional password updating
		if ( isset($data['password']) ) {
			$user->password	= $data['password'];
		}

		$user->save();

		// redirection
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
