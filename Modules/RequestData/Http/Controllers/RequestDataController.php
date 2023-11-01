<?php

namespace Modules\RequestData\Http\Controllers;

use App\Models\Kelas;
use App\Models\Prodi;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RequestDataController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('requestdata::index');
    }

    public function prodi(Request $request)
    {
        $prodi = Prodi::where('id_fakultas', $request->id_fakultas)->get();
        return view(
            'requestdata::prodi',
            [
                'prodies' => $prodi,
                'id'    => $request->id ?? '',
            ]
        );
    }


    public function kelas(Request $request)
    {
        $kelas = Kelas::where('id_prodi', $request->id_prodi)->get();
        return view(
            'requestdata::kelas',
            [
                'kelas' => $kelas,
                'id'    => $request->id ?? '',
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('requestdata::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('requestdata::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('requestdata::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
