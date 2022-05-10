<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;

class KecamatanController extends Controller
{
    //
    function __construct()
    {
         $this->middleware('permission:kecamatan-list|kecamatan-create|kecamatan-edit|kecamatan-delete', ['only' => ['index','show']]);
         $this->middleware('permission:kecamatan-create', ['only' => ['create','store']]);
         $this->middleware('permission:kecamatan-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:kecamatan-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $kecamatans = Kecamatan::latest()->paginate(5);
        return view('kecamatans.index',compact('kecamatans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kecamatans.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nama' => 'required',
            'kode' => 'required',
        ]);
    
        Kecamatan::create($request->all());
    
        return redirect()->route('kecamatans.index')
                        ->with('success','Kecamatan created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kecamatan $kecamatan)
    {
        return view('kecamatans.show',compact('kecamatan'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kecamatan $kecamatan)
    {
        return view('kecamatans.edit',compact('kecamatan'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kecamatan $kecamatan)
    {
         request()->validate([
            'nama' => 'required',
            'kode' => 'required',
        ]);
    
        $kecamatan->update($request->all());
    
        return redirect()->route('kecamatans.index')
                        ->with('success','Kecamatan updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kecamatan $kecamatan)
    {
        $kecamatan->delete();
    
        return redirect()->route('kecamatans.index')
                        ->with('success','Kecamatan deleted successfully');
    }
}
