<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DetailPinjam;
use Illuminate\Http\Request;

class DetailPinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $detailpinjam = DetailPinjam::where('inventaris_id', 'LIKE', "%$keyword%")
                ->orWhere('jumlah', 'LIKE', "%$keyword%")
                ->orWhere('peminjaman_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $detailpinjam = DetailPinjam::latest()->paginate($perPage);
        }

        return view('detail-pinjam.index', compact('detailpinjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('detail-pinjam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        DetailPinjam::create($requestData);

        return redirect('detail-pinjam')->with('flash_message', 'DetailPinjam added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $detailpinjam = DetailPinjam::findOrFail($id);

        return view('detail-pinjam.show', compact('detailpinjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $detailpinjam = DetailPinjam::findOrFail($id);

        return view('detail-pinjam.edit', compact('detailpinjam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $detailpinjam = DetailPinjam::findOrFail($id);
        $detailpinjam->update($requestData);

        return redirect('detail-pinjam')->with('flash_message', 'DetailPinjam updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        DetailPinjam::destroy($id);

        return redirect('detail-pinjam')->with('flash_message', 'DetailPinjam deleted!');
    }
}
