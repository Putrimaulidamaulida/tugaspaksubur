<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrudPersegi;
class CrudPersegiController extends Controller
{
    public function index()
{
    $crudpersegis = CrudPersegi::all();
    return view('crudpersegi.index',
    compact('crudpersegis'));
    }
    public function create()
    {
    return view('crudpersegi.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $input['luas'] =
        $input['panjang']*$input['lebar'];
        $input['keliling'] = 2 * ($input['panjang'] +
        $input['lebar']);
        CrudPersegi::create($input);
        return redirect()->route('crudpersegi.index');
    }
    public function edit($id)
    {
        $crudpersegi = CrudPersegi::findOrFail($id);
        return view('crudpersegi.edit',
        compact('crudpersegi'));
    }
    public function update(Request $request, $id)
    {
        $crudpersegi = CrudPersegi::findOrFail($id);
        $input = $request->all();
        $input['luas'] = $input['panjang']*$input['lebar'];
        $input['keliling'] = 2 * ($input['panjang'] +
        $input['lebar']);
        $crudpersegi->update($input);
        return redirect()->route('crudpersegi.index');
    }
    public function destroy($id)
    {
        $crudpersegi = CrudPersegi::findOrFail($id);
        $crudpersegi->delete();
        return redirect()->route('crudpersegi.index');
}
    //
}
