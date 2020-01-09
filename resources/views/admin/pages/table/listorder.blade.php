@extends('admin.layouts.master')
@section('title', 'Đơn Hàng')
@section('content')
<div class="content-wrapper">
  <div class="col-md-12">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title">Inbox</h3>
        <div class="card-tools">
          <div class="input-group input-group-sm">
            <input type="text" class="form-control" placeholder="Search Mail">
            <div class="input-group-append">
              <div class="btn btn-primary">
                <i class="fas fa-search"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-tools -->
      </div>
      <div class="mailbox-controls">
        <!-- Check all button -->
        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
        </button>
        <div class="btn-group">
          <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
          <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
          <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
        </div>
        <!-- /.btn-group -->
        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
        <div class="float-right">
          1-50/200
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
          </div>
          <!-- /.btn-group -->
        </div>
        <!-- /.float-right -->
      </div>
      <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
          <tbody>
            <tr>
              <td>
                <div class="icheck-primary">
                  <input type="checkbox" value="" id="check1">
                  <label for="check1"></label>
                </div>
              </td>
              <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
              <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
              <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b>
                 - Trying to find a solution to this problem...
              </td>
              <td class="mailbox-attachment"></td>
              <td class="mailbox-date">5 mins ago</td>
            </tr> 
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
@section('footerJavascript')
    <!-- <script src="/js/product.js"></script> -->
    <script>
      $(function () {
        //Enable check and uncheck all functionality
        $('.checkbox-toggle').click(function () {
          var clicks = $(this).data('clicks')
          if (clicks) {
            //Uncheck all checkboxes
            $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
            $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
          } else {
            //Check all checkboxes
            $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
            $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
          }
          $(this).data('clicks', !clicks)
        })

        //Handle starring for glyphicon and font awesome
        $('.mailbox-star').click(function (e) {
          e.preventDefault()
          //detect type
          var $this = $(this).find('a > i')
          var glyph = $this.hasClass('glyphicon')
          var fa = $this.hasClass('fa')

          //Switch states
          if (glyph) {
            $this.toggleClass('glyphicon-star')
            $this.toggleClass('glyphicon-star-empty')
          }

          if (fa) {
            $this.toggleClass('fa-star')
            $this.toggleClass('fa-star-o')
          }
        })
      })

    </script>
@endsection