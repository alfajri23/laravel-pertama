@extends ('admin.master')
@section ('content')

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan/{{$post->id}}" method="POST">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputPertanyaan">Pertanyaan</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="{{old('judul',$post->judul)}}">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputPassword1">Isi Pertanyaan</label>
                    <input type="text" class="form-control" name="isi" id="isi" value="{{old('isi',$post->isi)}}">
                    @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                

                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Dibuat</label>
                    <input type="date" class="form-control" name="tgl_buat" id="tgl_buat" value="{{old('tgl_buat',$post->tanggal_dibuat)}}">
                    @error('tgl_buat')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  

                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


@endsection