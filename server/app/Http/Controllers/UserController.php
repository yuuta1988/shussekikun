<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Store;
use App\Models\Category;
use App\Models\Organization;
use Auth;
use App\Enums\User\Role;
use Carbon\Carbon;
use DB;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index(Request $request)
    {
        $params = $request->query();

        $users = User::where('store_id', Auth::user()->store_id)
            ->where('role', Role::Normal)
            ->serachKeyword($params['keyword'] ?? null)
            ->categoryFilter($params['category'] ?? null)
            ->genderFilter($params['gender'] ?? null)
            ->orderBy('id', 'desc')
            ->paginate(20);

        return view('user.index')->with([
            'users' => $users,
            'params' => $params,
        ]);
    }

    public function show(Request $request)
    {
        $user = User::where('id', $request->id)
            ->where('role', Role::Normal)
            ->where('store_id', Auth::user()->store_id)
            ->firstOrFail();

        return view('user.show')->with([
            'user' => $user
        ]);
    }

    public function rank(Request $request)
    {
        $dt = Carbon::now();
        $params = $request->query();

        $yearUsers = User::select(DB::raw('count(*) as attendance_count, users.id as userid, users.sei, users.mei'))
            ->leftJoin('attendances', 'attendances.user_id', '=', 'users.id')
            ->where('users.role', Role::Normal)
            ->where('users.store_id', Auth::user()->store_id)
            ->categoryFilter($params['category'] ?? null)
            ->whereYear('attendances.date', $params['year'] ?? $dt->year)
            ->groupBy('userid')
            ->orderBy('attendance_count', 'desc')
            ->take(10)
            ->get();

        if ($yearUsers->isNotEmpty()) {
            $yearTitle = $this->user->getNumbering($yearUsers)['title'];
            $yearCount = $this->user->getNumbering($yearUsers)['count'];
        }

        $monthlyUsers = User::select(DB::raw('count(*) as attendance_count, users.id as userid, users.sei, users.mei'))
            ->leftJoin('attendances', 'attendances.user_id', '=', 'users.id')
            ->where('users.role', Role::Normal)
            ->where('users.store_id', Auth::user()->store_id)
            ->categoryFilter($params['category'] ?? null)
            ->whereYear('attendances.date', $params['year'] ?? $dt->year)
            ->whereMonth('attendances.date', $params['month'] ?? $dt->month)
            ->groupBy('userid')
            ->orderBy('attendance_count', 'desc')
            ->take(10)
            ->get();

        if ($monthlyUsers->isNotEmpty()) {
            $monthlyTitle = $this->user->getNumbering($monthlyUsers)['title'];
            $monthlyCount = $this->user->getNumbering($monthlyUsers)['count'];
        }

        return view('user.rank')->with([
            'yearTitle' => $yearTitle ?? '',
            'yearCount' => $yearCount ?? '',
            'monthlyTitle' => $monthlyTitle ?? '',
            'monthlyCount' => $monthlyCount ?? '',
            'params' => $params
        ]);
    }
}
