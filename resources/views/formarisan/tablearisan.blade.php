@extends('layout.master')
@section('content')
<div class="card-body">
  <a href="{{ url ('/formarisan') }}" class="btn btn-primary">Add</a>
  <div class="table table-responsive table-light table-bordered table-hover">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Open Slot</th>
          <th scope="col">Keterangan Open Slot</th>
          <th scope="col">Gambar Open Slot</th>
          <th colspan="2" style="text-align:center">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tablearisan as $keys=>$value)
        <tr>
          <td>{{ $value->id }}</td>
          <td>{{ $value->openslot }}</td>
          <td>{{ $value->keteranganopenslot }}</td>
          <td><img src="storage\app\public {{ $value->gambaropenslot }}"></td>
          {{-- <td><img src="{{ url('buatgambar/'.$id) }}" width="500px"></td> --}}
          <td> <div class="col text-center">
            <a href="{{ url('tablearisan/'.$value->id.'/edit') }}" class="btn btn-info" >Update</a>
            </div>
            <td>
              <form action="{{ url('tablearisan/'.$value->id) }}" method="POST">
              @csrf
              <div class="col text-center">
              <input type="hidden" name="_method" value="DELETE">
              <button class="btn btn-danger" type="submit" >DELETE</button>
              </div></td>
          
        </tr>
            
        @endforeach
      </tbody>
    </table>
  </div>
</div>
    
@endsection