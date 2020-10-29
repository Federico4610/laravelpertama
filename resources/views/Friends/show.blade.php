@extends('layouts.app')

@section('title' , 'Cobaaa')

@section('content')
<div class="card">
    <div class="card-body">
        <h3>Nama teman : {{$friends['nama']}} </h3>
        <h3>No Telp teman : {{$friends['no_telp']}} </h3>
        <h3>Alamat teman: {{$friends['alamat']}} </h3>
    </div>
</div>
@endsection


