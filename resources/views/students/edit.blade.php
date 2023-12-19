@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="nama" id="nama" value="{{$students->nama}}" class="form-control"></br>
        <label>NO HP</label>
        <input type="text" name="nohp" id="nohp" value="{{$students->nohp}}" class="form-control"></br>
        <label>Asal Daerah</label>
        <input type="text" name="asaldaerah" id="asaldaerah" value="{{$students->asaldaerah}}" class="form-control"></br>
        <label>Tanggal Kunjungan</label>
        <input type="text" name="tanggalkunjungan" id="tanggalkunjungan" value="{{$students->email}}" class="form-control"></br>
       <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop