@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper" style="min-height: 1200.88px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update #{{ $maker->id }}</h1>
                </div>
                <div class="col-sm-6">
                    @include('admin.includes.breadcrumb', ['breadcrumbs' => [
                    'makers' =>route('admin.makers.index'),
                    'Update #'.$maker->id,
                    ]])
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <!-- form start -->
                    <form method="POST" action="{{ route('admin.makers.update',$maker->id) }}">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $maker->name }}" class="form-control">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>



                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
