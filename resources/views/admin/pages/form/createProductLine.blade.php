<div id="addEditUser" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
      <form id="frmAddEditUser">
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">Create New User</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <input hidden id="Id" name="Id">
              <div class="modal-body">
                  <div class="row form-group">
                      <div class="col-4">
                          <label>Tên Loại Sản Phẩm</label>
                      </div>
                      <div class="col-8">
                          <input type="text" id="name" name="name"
                                  class="form-control"
                                  data-rule-required="true">
                      </div>
                  </div>
                  <div class="row form-group">
                          <div class="col-4">
                              <label>image</label>
                          </div>
                          {{-- <div class="col-8">
                              <input type="text" id="image" name="image" class="form-control" data-rule-required="true">
                          </div> --}}
                          <input id="image" type='file' name="image"  data-rule-required="true">
                          <p id="b64"></p>
                          <img id="img" height="150">
                      </div>
                  <div class="row form-group">
                          <div class="col-4">
                              <label>UserMobile</label>
                          </div>
                          <div class="col-8">
                              <input type="text" id="textDescription" name="textDescription" class="form-control" data-rule-required="true">
                          </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                  <a href="javascript:;" class="btn btn-danger" onclick="productline.save()">Save</a>
              </div>
          </div>
      </form>
  </div>