extends('index')

@section('konten')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">PROMOTION</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Promotion</a></li>
              <li class="breadcrumb-item active">Code Promotion</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@csrf
<tbody>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Kode_Kupon</th>
            </tr>
        </thead>

    
        @foreach ($data as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->nama}}</td>
                <td>{{$d->jumlah}}</td>
                <td>{{$d->kode_kupon}}</td>

            <td>

            <form action="{{route('delete', $d->id)}}" method="post">
                    @csrf
                    @method('DELETE')
            
            <button type="submit" class="btn btn-danger">Hilangkan</button>

            <a href="{{route('promotion.edit', $d->id)}}" class="btn btn-warning">Edit</a>
              
            </td>
            
            </tr>
            </form>

        @endforeach
        </table>
</tbody>



@endsection