<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
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
      $peminjaman = Peminjaman::where('tanggal_pinjam', 'LIKE', "%$keyword%")
      ->orWhere('tanggal_kembali', 'LIKE', "%$keyword%")
      ->orWhere('status', 'LIKE', "%$keyword%")
      ->orWhere('pegawai_id', 'LIKE', "%$keyword%")
      ->latest()->paginate($perPage);
    } else {
      $peminjaman = Peminjaman::latest()->paginate($perPage);
    }

    return view('peminjaman.index', compact('peminjaman'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\View\View
  */
  public function create()
  {
    $pegawais = Pegawai::pluck('nama','id');
    return view('peminjaman.create', compact('pegawais'));
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

    Peminjaman::create($requestData);

    return redirect('peminjaman')->with('flash_message', 'Peminjaman added!');
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
    $peminjaman = Peminjaman::findOrFail($id);
    $pegawais = Pegawai::pluck('nama','id');
    return view('peminjaman.show', compact('peminjaman','pegawais'));
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
    $peminjaman = Peminjaman::findOrFail($id);
    $pegawais = Pegawai::pluck('nama','id');

    return view('peminjaman.edit', compact('peminjaman','pegawais'));
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

    $peminjaman = Peminjaman::findOrFail($id);
    $peminjaman->update($requestData);

    return redirect('peminjaman')->with('flash_message', 'Peminjaman updated!');
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
    Peminjaman::destroy($id);

    return redirect('peminjaman')->with('flash_message', 'Peminjaman deleted!');
  }
}
