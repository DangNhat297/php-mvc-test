<?php 

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller 
{
    public function index()
    {
        $data = Product::query()->latest('id')->get();

        return $this->view('screens.admin.list-product', [
            'products' => $data
        ]);
    }

    public function create()
    {
        return $this->view('screens.admin.add-product');
    }

    public function store()
    {
        $request = (object) $_POST;
        $file = (object) $_FILES['thumbnail'];

        $data = [
            'name' => $request->name,
            'short_desc' => $request->short_desc,
            'price' => $request->price,
            'discount' => $request->discount,
            'status' => $request->status,
            'description' => $request->description,
            'thumbnail' => basename($file->name)
        ];

        move_uploaded_file($file->tmp_name, getcwd().DIRECTORY_SEPARATOR.'/public/assets/images/products/' . basename($file->name));

        Product::query()->create($data);

        $data = Product::query()->latest('id')->get();
        $noti['success'] = 'Thêm sản phẩm thành công';

        return $this->view('screens.admin.list-product', [
            'products' => $data,
            'notify' => $noti
        ]);
    }

    public function edit($id)
    {
        $product = Product::query()->find($id);

        return $this->view('screens.admin.edit-product', ['product' => $product]);
    }

    public function update($id) 
    {
        $noti['success'] = 'Cập nhật sản phẩm thành công';
        $request = (object) $_POST;

        $data = [
            'name' => $request->name,
            'short_desc' => $request->short_desc,
            'price' => $request->price,
            'discount' => $request->discount,
            'status' => $request->status,
            'description' => $request->description,
        ];

        if (!empty($_FILES['thumbnail']) && $_FILES['thumbnail']['size'] != 0) {
            $file = (object) $_FILES['thumbnail'];
            $data['thumbnail'] = basename($file->name);
            move_uploaded_file($file->tmp_name, getcwd().DIRECTORY_SEPARATOR.'/public/assets/images/products/' . basename($file->name));
        }

        Product::query()->find($id)->update($data);

        $data = Product::query()->latest('id')->get();

        return $this->view('screens.admin.list-product', [
            'notify' => $noti,
            'products' => $data
        ]);
    }

    public function destroy($id) 
    {
        $noti['success'] = 'Xóa sản phẩm thành công';

        Product::destroy($id);

        $data = Product::query()->latest('id')->get();

        return $this->view('screens.admin.list-product', [
            'notify' => $noti,
            'products' => $data
        ]);
    }
}