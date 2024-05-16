@extends('template.index')
@section('title', 'Latihan 6 CRUD Persegi Panjang')
@section('content')
<h2>Edit - Hitung Luas Keliling Persegi Panjang</h2>
<form action="{{ route('crudpersegi.update',
$crudpersegi->id) }}" method="POST">
@csrf
@method('PUT')
<table>
<tr>
<td><label
for="panjang">Panjang:</label></td>
<td><input type="text" name="panjang"
value="{{ $crudpersegi->panjang }}" required></td>
</tr>
<tr>
<td><label
for="lebar">Lebar:</label></td>
<td><input type="text" name="lebar"
value="{{ $crudpersegi->lebar }}" required></td>
</tr>
<tr>
<td><label
for="luas">Luas:</label></td>
<td><input type="text" name="luas"
value="{{ $crudpersegi->luas }}" disabled></td>
</tr>
<tr>
<td><label
for="keliling">Keliling:</label></td>
<td><input type="text"
name="keliling" value="{{ $crudpersegi->keliling }}"
disabled></td>
</tr>
<tr>
<td colspan="2"> <button
type="submit">Update </button>
<button><a href="{{

route('crudpersegi.index') }}" style="text-
decoration:none;">Batal</a></button>

</td>
</tr>
</table>
</form>
@endsection