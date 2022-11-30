@extends('admin.layouts.layout')

@section('content')
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Создатать статью</h1>
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
                       <h3 class="card-title">Создание статьи</h3>
                    </div>
                    <form method="POST" action="{{ route('admin.tags.store') }}">
                        @csrf

                       <div class="card-body">
                          <div class="form-group">
                             <label for="title">Название</label>
                             <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter title">
                          </div>
                          <div class="form-group">
                             <label for="description">Описание</label>
                             <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
                          </div>
                          <div class="form-group">
                             <label for="content">Контент</label>
                             <textarea class="form-control" name="content" id="content" cols="30" rows="5"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="category"></label>
                            <select class="custom-select form-control-border" id="category" name="category">
                               <option>Value 1</option>
                            </select>
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
