<?php

namespace App\Http\Controllers;

use App\Models\MedicalExam;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;

class MedicalExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('process');
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

        // フォームデータを使って MedicalExam モデルを作成して保存し、保存したデータを取得
        $exam = MedicalExam::create($data);

        $skywayApiKey = env('SKYWAY_API_KEY');

        return view('skyway', ['exam' => $exam, 'hideSidebar' => true, 'skywayApiKey' => $skywayApiKey]);
    }

    // この下試しです。2023.10.10.21.43/////////////////////////////////
    public function showById($id)
    {
        $exam = MedicalExam::find($id);

        if (!$exam) {
            return redirect()->back()->with('error', 'Medical Exam not found.');
        }

        $skywayApiKey = env('SKYWAY_API_KEY');

        // 以下の行で、$exam が null でないことを再確認します。
        assert($exam !== null, "Unexpected state: $exam is null.");
        
        return view('skyway', ['exam' => $exam, 'skywayApiKey' => $skywayApiKey]);
    }

    // この上試しです。////////////////////////////////////////////////
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function showLatest()
    {
        $exam = MedicalExam::latest()->first();

        if (!$exam) {
            return redirect('form-detail')->with('error', 'Medical Exam data not found.');
        }

        return view('skyway', ['exam' => $exam]);
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
