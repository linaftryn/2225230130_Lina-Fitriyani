@extends('students.layout')
@section('content')

<div class="card">
    <div class="card-header"><h2>Tampil Data Pengunjung</h2></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Nama  : {{ $students->nama }}</h5>
            <h5 class="card-title">NO HP  : {{ $students->nohp }}</h5>
            <h5 class="card-title">Asal Daerah : {{ $students->asaldaerah }}</h5>
            <h5 class="card-title">Tanggal Kunjungan : {{ $students->tanggalkunjungan }}</h5>
        </div>
    </div>