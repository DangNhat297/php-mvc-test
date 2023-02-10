@extends('layouts.admin.master')

@section('main')
<form action="{{ route('admin/product/'.$product->id.'/edit') }}" method="POST" class="mt-3"
    enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-12">
        </div>
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thông Tin Sản Phẩm</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" class="form-control" value="{{ $product->name }}" name="name"
                            placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label>Giá sản phẩm</label>
                        <input type="number" class="form-control" value="{{ $product->price }}" name="price"
                            placeholder="Nhập giá sản phẩm">
                    </div>
                    <div class="form-group">
                        <label>% Giảm giá</label>
                        <input type="number" min="0" max="100" value="{{ $product->discount }}" class="form-control"
                            name="discount" placeholder="Nhập % giảm giá">
                    </div>
                    <div class="form-group">
                        <label>Mô tả ngắn</label>
                        <textarea name="short_desc" rows="3" class="form-control"
                            placeholder="Nhập mô tả ngắn">{{ $product->short_desc }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội dung sản phẩm</label>
                        <textarea name="description" id="description" rows="3" class="form-control"
                            placeholder="Nhập nội dung sản phẩm">{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="mr-4">Trạng thái</label>
                        <div class="icheck-primary d-inline mr-3">
                            <input type="radio" name="status" value="1" id="radioSuccess1"
                                {{ $product->status == 1 ? 'checked' : '' }}>
                            <label for="radioSuccess1">
                                Bật
                            </label>
                        </div>
                        <div class="icheck-primary d-inline">
                            <input type="radio" name="status" value="0" id="radioSuccess2"
                                {{ $product->status == 0 ? 'checked' : '' }}>
                            <label for="radioSuccess2">
                                Tắt
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Cập nhật</button>
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
                            <input type="file" class="custom-file-input" accept=".jpeg,.png,.jpg" name="thumbnail"
                                id="thumbnail">
                            <label class="custom-file-label" for="thumbnail">Chọn ảnh mới</label>
                        </div>
                    </div>
                    <div class="form-group preview-image" data-current-image="{{$product->thumbnail}}" style="margin-top: 10px;">
                        <img src='{{'/public/assets/images/products/' . $product->thumbnail}}' style='display:block;margin:10px auto;width: auto;height: 150px;object-fit:cover;border:1px solid #3699ff;border-radius:5px;' />
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('custom-script')
<script>
    $(document).ready(function() {
        CKEDITOR.replace('description')
        $(function() {
            bsCustomFileInput.init()
        })

        $('#thumbnail').on('change', function(){
            if($(this)[0].files.length == 0){
                let img = $(this).closest('.card-body').find('.preview-image').data('current-image')
                $(this).closest('.card-body').find('.preview-image').html(`<img src='{{'/public/assets/images/products/`+ img +`'}}' style='display:block;margin:10px auto;width: auto;height: 150px;object-fit:cover;border:1px solid #3699ff;border-radius:5px;' />`)
            }
        })
    })
</script>
@endsection
