@extends('adminlte::page')

@section('title', 'E-Library')

@section('content_header')
    <h1>Halaman Kelola Kelas</h1>
@stop

@section('content')
@include('flash::message')
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                      <a href="{{ route('admin.classes.create') }}" class="btn btn-success">
                          <span class="fa fa-plus"> Tambah Data Kelas</span>
                      </a>
                  </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="tables" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th width="1%">No</th>
                        <th>Kelas</th>
                        <th>Tanggal Input</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        @php
                          $no = 1;
                        @endphp
                          @foreach ($class as $item)
                            <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->created_at }}</td>
                              <td align="center">
                                <a href="#" class="btn btn-warning btn-simple btn-xs btn-edit" title="Edit" data-name='{{$item->name}}' data-url='{{ route('admin.classes.edit', $item->id) }}'> <span class="fa fa-edit"></span></a>
                                <a href="#" class="btn btn-danger btn-simple btn-xs btn-delete" title="Delete" data-name='{{$item->name}}' data-url='{{ route('admin.classes.destroy', $item->id) }}'> <span class="fa fa-trash"></span></a>
                              </td>
                            </tr>
                          @endforeach
                      </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
@stop
