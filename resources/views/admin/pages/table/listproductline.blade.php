@extends('admin.layouts.master')
@section('title', 'Product')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            {{-- thêm mới --}}
            <div class="card-body">
              <div class="col-12 mb-3">
                <a href="javascript:void(0);" class="btn btn-info"
                   onclick="productline.openAddEditUser()">Create</a>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>stt</th>
                  <th>tên</th>
                  <th>mô tả</th>
                  <th>ảnh</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody id="tbProducLine">
                  {{-- đỗ dữ liệu --}}
                </tbody>
                <tfoot>
                <tr>
                  <th>stt</th>
                  <th>tên</th>
                  <th>mô tả</th>
                  <th>ảnh</th>
                  <th>action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            @include('admin.pages.form.createProductLine')
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
@section('footerJavascript')
      <script src="/js/site.js"></script>
@endsection
