<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Contracts\Foundation\Application as AppContract;
use Illuminate\Http\RedirectResponse as Response;
class CategoryController extends Controller
{
    public function getListCategory(): ViewContract|AppContract
    {
        $categories = Category::all();
        $category = Category::orderBy('created_at', 'DESC')->get();
        $time = now();
        return view('admin.categories.index', compact('category','categories','time'));
    }
    public function createNewCategory(): ViewContract|AppContract
    {
        $category = $this->getCategories();
        return view('admin.categories.create',compact('category'));
    }
    public function saveNewCategory(StoreCategoryRequest $request): Response
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        Category::create($request->all());
        return redirect()->back()->with('success', 'Thêm danh mục thành công');
    }
    public function getOneCategoryById(Category $category): ViewContract|AppContract
    {
        $categories = $this->getCateParents($category->id);
        $dfs = $this->getDFS($category->parent_cate);
        return view('admin.categories.show', compact('category','categories','dfs'));
    }
    public function editOneCategory(Category $category):  ViewContract|AppContract
    {
        $categories = $this->getCategories();
        return view('admin.categories.update', compact('category','categories'));
    }

    public function updateOneCategory(UpdateCategoryRequest $request, Category $category): Response
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $category->update($request->all());

        return redirect()->route('category.index')->with('success', 'Cập nhật danh mục thành công');
    }

    public function deleteOneCategory(Category $category): Response
    {
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Danh mục đã xóa thành công');
    }
    public function getCategories(): array
    {
        $categories = Category::all();
        $listCategory = [];
        Category::recursive($categories, $parents = 0, $level = 1 , $listCategory);
        return $listCategory;
    }
    public function getCateParents(string $id){
        $variable = $this->getCategories();
        foreach ($variable as $key => $value) {
            $listParentCate = [];
            if ($value->parent_cate == 0) {
                $listParentCate[]= $value;
                unset($variable[$key]);
                foreach ($variable as $key2 => $value2) {
                    if($value2->parent_cate >0){
                        $listParentCate[] = $value2;
                        unset($variable[$key2]);
                    }else{
                        break;
                    }
                }
            }
            if (Category::in_array($id, $listParentCate)) {
                return $listParentCate;
            }
        }

    }
    public function getDFS( $id): ?array
    {
        if($id == null){
            return null;
        }
        $variable = $this->getCategories();
        $array = [];
        Category::findPathToRoot($variable, $id, $array);
        return $array;
    }
}
