<?php

namespace App\Http\Controllers;

use App\Models\MedicalExam;
use Illuminate\Http\Request;

class MedicalExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $data = $request->validate([
            'age' => 'required|integer',
            'gender' => 'required|string',
            'chief_complaint' => 'required|string',
            'medical_history' => 'required|string',
            'vitals' => 'nullable|string',
        ]);

        // フォームデータを使って MedicalExam モデルを作成して保存
       MedicalExam::create($data);

        // データの保存が成功したらリダイレクト
        return redirect()->route('home')
            ->with('success', '検査情報が保存されました。');
    
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
