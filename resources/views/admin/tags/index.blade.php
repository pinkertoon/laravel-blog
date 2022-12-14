@extends('admin.layouts.layout')

@section('content')
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Главная</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.tags.create') }}" class="btn btn-primary mb-3">Добавить категорию</a>
                @if (!empty($tags))
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-nowrap">
                        <thead>
                           <tr>
                              <th style="width: 10px">#</th>
                              <th>Title</th>
                              <th>Slug</th>
                              <th style="width: 40px">Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                            <tr>
                                <td>{{ $tag->id }}</td>
                                <td>{{ $tag->title }}</td>
                                <td>{{ $tag->slug }}</td>
                                <td>
                                  <a href="{{ route('admin.tags.edit', ['tag' => $tag->id]) }}" class="btn btn-info btn-sm float-left mr-1">
                                      <i class="fas fa-pencil-alt"></i>
                                  </a>
                                  <form action="{{ route('admin.tags.destroy', ['tag' => $tag->id]) }}" method="POST" class="float-left">
                                    @csrf
                                    @method('DELETE')
                                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Вы уверены что хоитите удалить?')">
                                          <i class="fas fa-trash-alt"></i>
                                      </button>
                                  </form>
                                </td>
                             </tr>
                            @endforeach
                        </tbody>
                     </table>
                    </div>


                </div>
                @else
                    <p>Категорий пока нет</p>
                @endif

            <!-- /.card-body -->
            <div class="card-footer">
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        <div class="pagination pagination-sm">
            {{ $tags }}
        </div>
        </section>
        <!-- /.content -->
@endsection
