<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Inventari;
use App\Jeni;
use App\Ruang;
use Illuminate\Http\Request;

class InventarisController extends Controller
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
      $inventaris = Inventari::where('nama', 'LIKE', "%$keyword%")
      ->orWhere('kondisi', 'LIKE', "%$keyword%")
      ->orWhere('keterangan', 'LIKE', "%$keyword%")
      ->orWhere('jumlah', 'LIKE', "%$keyword%")
      ->orWhere('jenis_id', 'LIKE', "%$keyword%")
      ->orWhere('ruang_id', 'LIKE', "%$keyword%")
      ->orWhere('kode_inventaris', 'LIKE', "%$keyword%")
      ->orWhere('user_id', 'LIKE', "%$keyword%")
      ->latest()->paginate($perPage);
    } else {
      $inventaris = Inventari::latest()->paginate($perPage);
    }

    return view('inventaris.index', compact('inventaris'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\View\View
  */
  public function create()
  {
    $jenises = Jeni::pluck('nama','id');
    $ruangs = Ruang::pluck('nama','id');
    return view('inventaris.create', compact('jenises','ruangs'));
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

    Inventari::create($requestData);

    return redirect('inventaris')->with('flash_message', 'Inventari added!');
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
    $inventari = Inventari::findOrFail($id);

    return view('inventaris.show', compact('inventari'));
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
    $inventari = Inventari::findOrFail($id);
    $jenises = Jeni::pluck('nama','id');
    $ruangs = Ruang::pluck('nama','id');
    return view('inventaris.edit', compact('inventari','jenises','ruangs'));
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

    $inventari = Inventari::findOrFail($id);
    $inventari->update($requestData);

    return redirect('inventaris')->with('flash_message', 'Inventari updated!');
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
    Inventari::destroy($id);

    return redirect('inventaris')->with('flash_message', 'Inventari deleted!');
  }
}
