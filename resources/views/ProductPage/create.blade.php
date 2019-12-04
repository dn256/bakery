@extends('layouts.master')
@section('title')
    <title>Mew Bakery</title>
@stop

@section('script')
    <script>
        var count = 0;
        $(document).ready(() => {
            createUploadImg();
        });

        function createUploadImg() {
            $('input[type="file"]').each(function(){
                var $file = $(this),
                    $label = $file.next('label'),
                    $labelText = $label.find('span'),
                    labelDefault = $labelText.text();

                $file.on('change', function(event){
                    var fileName = $file.val().split( '\\' ).pop(),
                        tmppath = URL.createObjectURL(event.target.files[0]);
                    if( fileName ){
                        count++;
                        $label
                            .addClass('file-ok')
                            .css('background-image', 'url(' + tmppath + ')');
                        $labelText.text(fileName);
                        createDiv();
                    }else{
                        $label.removeClass('file-ok');
                        $labelText.text(labelDefault);
                    }
                });
            });
        }

        function createDiv() {
            var newDiv = document.createElement('div');
            newDiv.className = 'wrap-custom-file';
            newDiv.innerHTML = "<input type='file' name='inputImage"+count+"' id='inputImage"+count+"' accept='.jpg, .png'/>\n"+
                "<label for='inputImage"+count+"'>\n" +
                "<span>Chọn hình ảnh sản phẩm</span>\n" +
                "<i class='fa fa-plus-circle'></i>\n" +
                "</label>";
            document.getElementById('formContainer').appendChild(newDiv);

            $('input[type="file"]').each(function(){
                var $file = $(this),
                    $label = $file.next('label'),
                    $labelText = $label.find('span'),
                    labelDefault = $labelText.text();

                $file.on('change', function(event){
                    var fileName = $file.val().split( '\\' ).pop(),
                        tmppath = URL.createObjectURL(event.target.files[0]);
                    if( fileName ){
                        count++;
                        $label
                            .addClass('file-ok')
                            .css('background-image', 'url(' + tmppath + ')');
                        $labelText.text(fileName);
                    }else{
                        $label.removeClass('file-ok');
                        $labelText.text(labelDefault);
                    }
                });
            });
        }
    </script>
@stop

@section('content')
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Thêm sản phẩm mới</h3>
            </div>
        </div>
    </section>

    <section>
        <div class="container-post-cake bg-light">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" >
                    <form id="formContainer" action = "/postProduct" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Product Name">Tên sản phẩm</label>
                            <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="Product Name">Giá thành</label>
                            <input type="number" name="price" class="form-control" placeholder="Nhập giá tiền">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="Product Name" style="float: left">Loại bánh</label>
                            <select class="product_select">
                                @foreach($cakeTypes as $type)
                                    <option value="{{ $type -> id }}">{{ $type -> name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br><br><br><br>
                        <div class="wrap-custom-file">
                            <input type="file" name="inputImage" id="inputImage" accept=".jpg, .png"/>
                            <label for="inputImage">
                                <span>Chọn hình ảnh sản phẩm</span>
                                <i class="fa fa-plus-circle"></i>
                            </label>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

@stop