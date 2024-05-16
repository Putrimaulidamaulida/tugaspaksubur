@extends('template.index') //menggunakan template
pada latihan sebelumnya

@section('title','Latihan 6 CRUD Persegi Panjang')

@section('content')

<h2>Latihan 6 CRUD Hitung Luas Keliling Persegi
    Panjang</h2>
        <button><a href="{{ route('crudpersegi.create') }}"
        style="text-decoration: none;">Tambah
    Perhitungan</a></button>
    <table border="1px">
<thead>
    <tr>
        <th>Nomor</th>
        <th>Panjang</th>
        <th>Lebar</th>
        <th>Luas</th>
        <th>Keliling</th>
        <th>Aksi</th>
    </tr>
    </thead>
<tbody>
    @foreach ($crudpersegis as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->panjang }}</td>
        <td>{{ $item->lebar }}</td>
        <td>{{ $item->luas }}</td>
        <td>{{ $item->keliling }}</td>
        <td>
    <button><a href="{{

    route('crudpersegi.edit', $item->id) }}" style="text-
    decoration:none;">Edit</a></button>

<form action="{{
    route('crudpersegi.destroy', $item->id) }}"
    method="POST">
    @csrf
@method('DELETE')
<button type="submit">Hapus</button>
    </form>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    @endsection