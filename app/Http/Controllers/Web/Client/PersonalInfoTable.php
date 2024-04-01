<?php

namespace App\Http\Controllers\Web\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

use App\Models\ProfileInformation;

class PersonalInfoTable extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        if ($request->ajax()) {

            $personalinfo = ProfileInformation::select('id', 'first_name', 'middle_name', 'surname', 'created_at');

            return DataTables::of($personalinfo)
                ->addColumn('action', 'personalinfo.table-buttons')
                ->toJson();
        }
    }
}
