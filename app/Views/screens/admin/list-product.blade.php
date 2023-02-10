@extends('layouts.admin.master')

@section('main')
<div class="row">
    <div class="col-md-12">
        @if (isset($notify['success']))
            <div class="alert alert-success mt-3">{{$notify['success']}}</div>
        @endif
        @if (isset($notify['error']))
            <div class="alert alert-danger mt-3">{{$notify['error']}}</div>
        @endif
        <div class="card mt-3">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th>Giảm giá</th>
                            <th>Lượt xem</th>
                            <th>Trạng thái</th>
                            <th class="text-right">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td><img src="{{ '/public/assets/images/products/' . $product->thumbnail }}" style="width:150px;height:150px;object-fit:cover"></td>
                                <td class="font-weight-bold">{{ $product->name }}</td>
                                <td class="font-weight-bold">{{ priceFormat($product->price) }}</td>
                                <td><span class="badge bg-primary">{{ $product->discount }}%</span></td>
                                <td><span class="badge bg-primary">{{ $product->view }}</span></td>
                                <td>{!! $product->status == 1 ? '<span class="badge bg-success">Bật</span>' : '<span class="badge bg-danger">Tắt</span>' !!}</td>
                                <td class="text-right">
                                    <a href="{{route("admin/product/{$product->id}/edit")}}" class="btn btn-success"><i class="far fa-edit"></i></a>
                                    <a href="{{route("admin/product/{$product->id}/delete")}}" data-type-btn="delete" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-script')
<script>
    $(document).ready(function(){
        $('[data-type-btn="delete"]').click(function(e){
            let _this = $(this)
            e.preventDefault()
            Swal.fire({
                title: 'Bạn có chắc muốn xóa sản phẩm này?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Có, xóa ngay!',
                cancelButtonText: 'Hủy'
            }).then((result) => {
                if (result.isConfirmed) {
                    return window.location.href = _this.attr('href')
                } 
                return false
            })
        })
    })
</script>
@endsection