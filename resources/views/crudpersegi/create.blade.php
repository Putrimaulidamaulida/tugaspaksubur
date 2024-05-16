@extends('template.index')

@section('title', 'Latihan 6 CRUD Persegi Panjang')

@section('content')


<h2>Latihan 6 CRUD Hitung Luas Keliling Persegi
Panjang</h2>
    <form action="{{ route('crudpersegi.store') }}"
    method="POST">
@csrf
<table>
    <tr>
        <td><label
        for="panjang">Panjang:</label></td>
        <td><input type="text" name="panjang"
        required></td>
    </tr>
    <tr>
        <td><label
        for="lebar">Lebar:</label></td>
        <td><input type="text" name="lebar"
        required></td>
    </tr>
    <tr>
    <td colspan="2">
    <button type="submit">Hitung</button>
    <button><a href="{{

route('crudpersegi.index') }}" style="text-
decoration:none;">Batal</a></button>

    </td>
    </tr>
    </table>
    </form>
    @endsection