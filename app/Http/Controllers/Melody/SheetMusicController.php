<?php

namespace App\Http\Controllers\Melody;

use App\Http\Controllers\Controller;
use App\Http\Requests\Melody\StoreSheetMusicRequest;
use App\Http\Requests\Melody\UpdateSheetMusicRequest;
use App\Models\Melody\SheetMusic;

class SheetMusicController extends Controller
{
    /**cd Desktop
     * Display a listing of the resource.
     */
    public function index()
    {
        return SheetMusic::orderBy('created_at', 'desc')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSheetMusicRequest $request)
    {
        $data = $request->validated();
        $sheetMusic = SheetMusic::create($data);
        return response()->json($sheetMusic, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sheetMusic = SheetMusic::findOrFail($id);
        return response()->json($sheetMusic, 200);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSheetMusicRequest $request, string $id)
    {
        $data = $request->validated();
        $sheetMusic = SheetMusic::findOrFail($id);
        $sheetMusic->update($data);
        return response()->json($sheetMusic, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sheetMusic = SheetMusic::findOrFail($id);
        $sheetMusic->delete();
        return response()->json(['message' => 'Sheet music deleted successfully'], 200);    
    }
}
