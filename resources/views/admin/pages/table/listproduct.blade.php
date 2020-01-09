@extends('admin.layouts.master')
@section('title', 'Product')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hi Vọng sẽ giàu</h1>
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
              <h3 class="card-title">Muốn thấy tương lai , thì xem hiện tại</h3>
            </div>
            {{-- thêm mới --}}
            <div class="card-body">
              <div class="col-12 mb-3">
                <a href="javascript:void(0);" class="btn btn-info"
                   onclick="product.openAddEditUser()">Create</a>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>tên</th>
                  <th>loại sản phẩm</th>
                  <th>quy mô</th>
                  <th>nhà sản suất</th>
                  <th>mô tả</th>
                  <th>số lượng</th>
                  <th>đơn giá</th>
                  <th>MSRP</th>
                  <th>ảnh</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody id="tbProduct">
                  {{-- đỗ dữ liệu --}}
                </tbody>
                <tfoot>
                 <tr>
                  <th>tên</th>
                  <th>loại sản phẩm</th>
                  <th>quy mô</th>
                  <th>nhà sản suất</th>
                  <th>mô tả</th>
                  <th>số lượng</th>
                  <th>đơn giá</th>
                  <th>MSRP</th>
                  <th>ảnh</th>
                  <th>action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            @include('admin.pages.form.createProduct')
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
@section('footerJavascript')
      <script src="/js/product.js"></script>
@endsection
