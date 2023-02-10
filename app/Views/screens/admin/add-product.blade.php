@extends('layouts.admin.master')

@section('main')
<form action="{{route('admin/product/create')}}" method="POST" class="mt-3" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-12">
            @if (isset($notify['success']))
            <div class="alert alert-success mt-3">{{$notify['success']}}</div>
        @endif
        @if (isset($notify['error']))
            <div class="alert alert-danger mt-3">{{$notify['error']}}</div>
        @endif
        </div>
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thông Tin Sản Phẩm</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label>Giá sản phẩm</label>
                        <input type="number" class="form-control" name="price" placeholder="Nhập giá sản phẩm">
                    </div>
                    <div class="form-group">
                        <label>% Giảm giá</label>
                        <input type="number" min="0" max="100" class="form-control" name="discount" placeholder="Nhập % giảm giá">
                    </div>
                    <div class="form-group">
                        <label>Mô tả ngắn</label>
                        <textarea name="short_desc" rows="3" class="form-control" placeholder="Nhập mô tả ngắn"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội dung sản phẩm</label>
                        <textarea name="description" id="description" rows="3" class="form-control" placeholder="Nhập nội dung sản phẩm"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="mr-4">Trạng thái</label>
                        <div class="icheck-primary d-inline mr-3">
                          <input type="radio" name="status" value="1" id="radioSuccess1" checked>
                          <label for="radioSuccess1">
                              Bật
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" name="status" value="0" id="radioSuccess2">
                          <label for="radioSuccess2">
                              Tắt
                          </label>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Thêm</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Ảnh đại diện</h3>
                </div>
                <div class="card-body">
                    <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" accept=".jpeg,.png,.jpg" name="thumbnail" id="thumbnail">
                          <label class="custom-file-label" for="thumbnail">Chọn ảnh</label>
                        </div>
                    </div>
                    <div class="form-group preview-image" style="margin-top: 10px;"></div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('custom-script')
<script>
    $(document).ready(function(){
        CKEDITOR.replace('description')
        $(function () {
            bsCustomFileInput.init()
        })
    })
</script>
@endsection