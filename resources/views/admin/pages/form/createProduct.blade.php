<div id="addEditUser" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <form id="frmAddEditUser" enctype="multipart/form-data">
          <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create New User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div id="flash" style="text-align:center ; color:green" ></div>
            <input hidden id="Id" name="Id">
            <div class="modal-body">
                <div style="text-align:center">
                    <div class="row">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Tên</label>
                            <input type="text" class="form-control" id="productName" name="productName" placeholder="Example input">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">loại sản phẩm</label>
                            <select class="form-control" id="Roles" ></select>
                            {{-- <input type="number" id='productLineId'  , name="productLineId"> --}}
                            
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">quy mô</label>
                            <input type="text" class="form-control" id="productScale"name='productScale'placeholder="Another input">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="formGroupExampleInput2">nhà sản suất</label>
                            <input type="text" class="form-control" id="productVendor" name="productVendor" placeholder="Another input">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">mô tả</label>
                            <input type="text" class="form-control" id="productDescription" name="productDescription" placeholder="Another input">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">số lượng</label>
                            <input type="number" class="form-control" id="quantityInStock" name='quantityInStock'placeholder="Another input">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group">
                            <label for="formGroupExampleInput2">đơn giá</label>
                            <input type="decimal" class="form-control" id="buyPrice" name="buyPrice" placeholder="Another input">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">MSRP</label>
                            <input type="number" class="form-control" id="MSRP" name="MSRP" placeholder="Another input">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Hình ảnh</label>
                            <input type="text" class="form-control" id="image" name="image" placeholder="Another input">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                <a href="javascript:;" class="btn btn-danger" onclick="product.save()">Save</a>
            </div>
        </div>
    </form>
</div>