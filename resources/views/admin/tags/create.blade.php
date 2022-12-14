@extends('admin.layouts.layout')

@section('content')
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Создатать тэг</h1>
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
                <div class="card card-primary">
                    <div class="card-header">
                       <h3 class="card-title">Создание категории</h3>
                    </div>
                    <form method="POST" action="{{ route('admin.tags.store') }}">
                        @csrf
                       <div class="card-body">
                          <div class="form-group">
                             <label for="title">Название</label>
                             <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter title">
                          </div>
                       </div>
                       <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Сохранить</button>
                       </div>
                    </form>
                 </div>
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
            Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

        </section>
        <!-- /.content -->
@endsection
