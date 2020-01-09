var productline = productline || {};
productline.drawTable = function(){
    $.ajax({
        url:'/api/admin/loaisanpham/',
        method : 'GET',
        dataType : 'json',
        success : function(data){
            $('#tbProducLine').empty();
            $.each(data, function(index, value){
                $('#tbProducLine').append(
                    "<tr>"+
                        "<td>"+ value.id + "</td>" +
                        "<td>" + value.name + "</td>" +
                        "<td>" +  value.textDescription + "</td>" +
                        "<td>" + "<img class='img-product' src='/productline/"+ value.image + "'>" + "</td>" +
                        "<td>" + 
                            "<a href='javascript:;' onclick=productline.getDetail(" + value.id + ")><i class='fa fa-edit'></i></a> " +
                            "<a href='javascript:;' onclick=productline.delete(" + value.id + ")><i class='fa fa-trash'></i></a>" +
                        "</td>" +
                    "</tr>"
                );
            });
        }
    });
};
productline.save = function(){
    if($('#frmAddEditUser').valid()){
        var dataObj = {};
        if($('#Id').val() == 0){
            dataObj.name = $('#name').val();
            dataObj.textDescription = $('#textDescription').val();
            dataObj.image = $('#image').val();
            $.ajax({
                url: '/api/admin/loaisanpham/',
                method: 'POST',
                data: JSON.stringify(dataObj),
                dataType: 'json',
                contentType: 'application/json',
                success: function (data) {
                    $('#addEditModel').modal('hide');
                    productline.drawTable();
                }
            });
        }else{
            dataObj.name = $('#name').val();
            dataObj.textDescription = $('#textDescription').val();
            dataObj.image = $('#image').val();
            dataObj.id = $('#Id').val();
            $.ajax({
                url: '/api/admin/loaisanpham/' + dataObj.id,
                method: 'PUT',
                data: JSON.stringify(dataObj),
                dataType: 'json',
                contentType: 'application/json',
                success: function (data) {
                    $('#addEditModel').modal('hide');
                    productline.drawTable();
                }
            });
        }
    }
};


productline.openAddEditUser = function(){
    productline.resetForm();
    $('#addEditUser').modal('show');
};

productline.resetForm = function () {
    $('#name').val('');
    $('#textDescription').val('');
    $('#image').val('');
    $('#Id').val(0);
    $('#addEditModel').find('.modal-title').text('Create New User');
    $("#frmAddEditUser").validate().resetForm();
};

productline.getDetail = function (id) {
    productline.resetForm();
    $.ajax({
        url: '/api/admin/loaisanpham/' + id,
        method: 'GET',
        dataType: 'json',
        contentType: 'application/json',
        success: function (data) {
            $('#name').val(data.name);
            $('#textDescription').val(data.textDescription);
            $('#image').val(data.image);
            $('#Id').val(data.id);
            $('#addEditUser').find('.modal-title').text('Update User');
            $('#addEditUser').modal('show');
        }
    });
};


productline.delete = function (id) {
    bootbox.confirm({
        message: "Are you sure to delete this product?",
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-success'
            },
            cancel: {
                label: 'No',
                className: 'btn-danger'
            }
        },
        callback: function (result) {
            if (result) {
                $.ajax({
                    url: '/api/admin/loaisanpham/' + id,
                    method: 'DELETE',
                    dataType: 'json',
                    contentType: 'application/json',
                    success: function (data) {
                        productline.drawTable();
                    }
                });
            }
        }
    });
};

productline.init =function () {
    productline.drawTable();
};

$(document).ready(function () {
    productline.init();
});
