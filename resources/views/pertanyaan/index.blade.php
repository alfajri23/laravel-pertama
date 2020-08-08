@extends ('admin.master')

@section ('content')

<div class="col-12">
            <div class="card">
            <a class="btn btn-primary " href="/pertanyaan/create">Create New </a>
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Judul</th>
                      <th>Tanggal Buat</th>
                      <th>Isi</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($post as $key => $posts)
                    <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{$posts->judul}}</td>
                      <td>{{$posts->tanggal_dibuat}}</td>
                      <td><span class="tag tag-success">{{$posts->isi}}</span></td>
                      <td>
                        <a href="/pertanyaan/{{$posts->id}}" class="btn btn-info btn-sm">Show</a>
                        <a href="/pertanyaan/{{$posts->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                        <form action="/pertanyaan/{{$posts->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger btn-lg">
                        </form>
                      </td>
                    </tr>
                    @empty
                    <p>empty<p>
                 @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
@endsection