<?php

namespace App\Http\Controllers;

use App\Http\Requests\product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\CategoriesProducts;
use App\Models\Category;
use App\Models\ImageDetailProduct;
use App\Models\ListDescriptionProduct;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse as JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function getListProduct(): Factory|Application|View|RedirectResponse
    {
        try {
            $category = Category::all();
            $product = Product::orderBy('created_at', 'DESC')->get();
            return view('admin.products.index',compact('product','category'));
        } catch (\Throwable $th) {
            return back()->with('fail', 'Truy cập thất bại');
        }
    }

    public function createNewProduct(): Factory|Application|View|RedirectResponse
    {
        try {
            $category = $this->getCategories();
            return view('admin.products.create',compact('category'));
        } catch (\Throwable $th) {
            return back()->with('fail','Truy cập trang thất bại');
        }
    }

    public function saveNewProduct(StoreProductRequest $request): RedirectResponse
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        try {
            $fileName = $request->image->getClientOriginalName();
            $request->image->storeAs('public/images',$fileName);
            $product = new Product();
            $product->name = $request->name;
            $product->slug=$request->slug;
            $product->price=$request->price;
            $product->sale = $request->sale;
            $product->status=$request->status;
            $product->prior=$request->prior;
            $product->image=$fileName;
            $product->description=$request->description;
            if ($request->cate !== null) {
                $product->category_id = $request->cate[0];
            }else{
                $product->category_id = '1';
            }
            $product->quantity = $request->quantity;
            $product->save();
            if ($request->cate !== null) {
                $product->categories()->sync($request['cate']);
            }

            if($product &&$request->hasFile('images')){
                foreach ($request->images as $key => $value) {
                    $fileName_1 = $value->getClientOriginalName();
                    $value->storeAs('public/images',$fileName_1);
                    ImageDetailProduct::create([
                        'product_id' => $product->id,
                        'image' =>$fileName_1
                    ]);
                }
            }
            return redirect()->route('product.index')->with('success', 'Thêm sản phẩm thành công!');
        } catch (\Throwable $th) {
            return back()->with('fail', 'Thêm sản phẩm thất bại');
        }
    }
    public function getOneProduct(Product $product):Factory|Application|View|RedirectResponse
    {
        try {
            $categories = $this->getCategories();
            return view('admin.products.show', compact('product','categories'));
        } catch (\Throwable $th) {
            return back()->with('fail','Truy cập thất bại');
        }
    }

    public function editOneProduct(Product $product): Factory|Application|View|RedirectResponse
    {
        try {
            $category = $this->getCategories();
            $listImage = ImageDetailProduct::all();
            $listCate = CategoriesProducts::all();
            return view('admin.products.update', compact('product','category','listImage','listCate'));
        } catch (\Throwable $th) {
            return back()->with('fail','Truy cập thất bại');
        }
    }

    public function updateOneProduct(UpdateProductRequest $request, Product $product): RedirectResponse
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        try {
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/storage/images'), $filename);
                // unlink(public_path('/storage/images/' . $product->image));
                $product->image = $filename;
            }
            $product->name = $request->input('name');
            $product->slug=$request->slug;
            $product->price=$request->price;
            $product->sale = $request->sale;
            $product->status=$request->status;
            $product->prior=$request->prior;
            $product->description=$request->description;
            if ($request->cate !==null) {
                $product->category_id = $request->cate[0];
            }else{
                $product->category_id = '1';
            }
            $product->quantity = $request->quantity;
            $product->save();
            if ($request->has('cate')) {
                $product->categories()->sync($request['cate']);
            }

            if ($request->hasFile('images')) {
                $images = $request->file('images');


                $oldImages = ImageDetailProduct::where('product_id', $product->id)->get();
                foreach ($oldImages as $oldImage) {
                    File::delete(public_path('/storage/images/' . $oldImage->listimage));
                    $oldImage->delete();
                }


                foreach ($images as $image) {
                    $filename = time() .  rand(1000,9999) . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('/storage/images'), $filename);
                    $listImage = new ImageDetailProduct;
                    $listImage->product_id = $product->id;
                    $listImage->listimage =  $filename;
                    $listImage->save();
                }
            }

            return redirect()->back()->with('success', 'Cập nhật sản phẩm thành công!');
        } catch (\Throwable $th) {
            return back()->with('fail', 'Cập nhật sản phẩm thất bại');
        }
    }
    public function deleteImage(string $id): JsonResponse
    {
        $image = ImageDetailProduct::find($id);
        $image->delete();

        unlink(public_path('/storage/images/' . $image->filename));
        return response()->json(['success' => 'Ảnh chi tiết đã xóa thành công !']);
    }

    public function deleteOneProduct(Product $product): RedirectResponse
    {
        $images = ImageDetailProduct::where('product_id', $product->id)->get();
        foreach ($images as $image) {
            File::delete(public_path('/storage/images/' .$image->listimage));
        }

        File::delete(public_path('/storage/images/' .$product->image));

        $product->delete();
        return redirect()->route('product.index')->with('success', 'Sản phẩm đã được xóa thành công!');
    }

    public function createDetail(String $id): Factory|Application|View|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        try {
            $product = Product::findOrFail($id);
            return view('admin.products.detail',compact('product'));
        } catch (\Throwable $th) {
            return back()->with('fail','Try cập trang thất bại ');
        }
    }
    public function saveNewDetail(Request $request,Product $product): RedirectResponse
    {
        try {
            $data = $request->all();
            $chunks = array_chunk($data, 2);
            $data = collect($chunks);
            $data->shift();
            foreach ($data as $key => $value) {
                if($value[0] == null || $value[1] ==null || $value[0] == null && $value[1] ==null){
                    continue;
                }
                ListDescriptionProduct::create([
                    'product_id'=> $product->id,
                    'key_detail'=>$value[0],
                    'value_detail'=>$value[1]
                ]);
            }
            return redirect()->back()->with('success','Cập nhật chi tiết sản phẩm thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail','Cập nhập chi tiết sản phẩm thất bại');
        }
    }
    public function deleteOneDetail(string $id): RedirectResponse
    {
        try {
            $ct = ListDescriptionProduct::findOrFail($id);
            $ct->delete();
            return redirect()->back()->with('success','Xóa chi tiết sản phẩm thành công');
        } catch (\Throwable $th) {
            return back()->with('fail', 'Xóa chi tiết sản phẩm thất bại');
        }
    }
    public function saveUpdateDetail(Request $request,$id): RedirectResponse
    {
        try {
            $detail = ListDescriptionProduct::where('id',$id)->first();
            $detail->key_detail = $request->key;
            $detail->value_detail = $request->value;
            $detail->save();
            return redirect()->back()->with('success','Cập nhật chi tiết sản phẩm thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail','Cập nhật chi tiết sản phẩm thất bại');
        }
    }
    public function getCategories(): array
    {
        $categories = Category::all();
        $listCategory = [];
        Category::recursive($categories, $parents = 0, $level = 1 , $listCategory);
        return $listCategory;
    }
}
