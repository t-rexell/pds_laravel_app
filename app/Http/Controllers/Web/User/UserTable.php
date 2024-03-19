<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

use App\Models\User;

class UserTable extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if ($request->ajax()) {

            $users = User::select('id', 'first_name', 'middle_name', 'last_name', 'email')->where('id', '!=', auth()->user()->id);

            return DataTables::of($users)
                ->addColumn('action', 'user.table-buttons')
                ->toJson();
        }
    }
}
