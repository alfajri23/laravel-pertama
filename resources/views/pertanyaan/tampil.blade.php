@extends ('admin.master')

@section ('content')

<h4>{{$post->judul}}</h4>
<h5>{{$post->isi}}<h5>
<p>{{$post->tanggal_dibuat}}</p>

@endsection