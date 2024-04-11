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
use Illuminate\Http\Response;

class UserController extends Controller
{

    public function index()
    {
        return view('user.index');
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(StoreUserRequest $request)
    {

        $data = $request->validated();

        $user                                 = new User;
        $user->first_name                     = $data['first_name'];
        $user->middle_name                     = $data['middle_name'];
        $user->last_name                     = $data['last_name'];
        $user->email                         = $data['email'];
        $user->password                     = $data['password'];
        $user->save();

        Alert::toast('User Successfully Added', 'success');

        return redirect()->route('users.index');
    }

    public function show(string $id)
    {

    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        // validated data
        $data = $request->validated();

        // Update User
        $user->first_name         = $data['first_name'];
        $user->middle_name         = $data['middle_name'];
        $user->last_name             = $data['last_name'];
        $user->email                     = $data['email'];

        // optional password updating
        if (isset($data['password'])) {
            $user->password    = $data['password'];
        }

        $user->save();

        Alert::toast('User Successfully Updated', 'success');

        return redirect()->route('users.index');
    }
    public function destroy(Request $request, User $user)
    {
        if ( $request->ajax() ) {

			$user->delete();
			return response()->json([
				'success' => true,
                'message' => 'User Successfully Deleted'
            ], Response::HTTP_OK);

		}

    }
}
