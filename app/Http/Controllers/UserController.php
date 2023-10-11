<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\Offermail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($type)
    {
        $users = User::where('qualification_year_1', 'LIKE', '%' . $type . '%')->get();


        return view('search', compact('users'));
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
        //
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
        $user = Auth::user();
        if (!$user) {
            // セッションにログインユーザーがない場合の処理
            return redirect()->route('login')->with('error', 'ログインしてください。');
        }
        return view('form-detail', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = Auth::user();



        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            // 'role' => 'required|string',
            'is_requester' => 'required|integer',
            'specialty' => 'required|string',
            'qualification_year_1' => 'required|string',
            'qualification_year_2' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $user->update($data);

        return redirect()->route('home')->with('success', 'プロフィールが更新されました。');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function selectedUser(Request $request)
    {
        $selectedUserId = $request->input('selected_user');
        $selectedUser = User::find($selectedUserId);
        Mail::to($selectedUser)->send(new Offermail($request->user()));

        // 'qualification_year_1' => '超音波検査士（九州） 腹部/上腹部/下腹部',
        return view('process', compact('selectedUser'));
    }

}
