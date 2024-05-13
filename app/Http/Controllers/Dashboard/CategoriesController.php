<?php

namespace App\Http\Controllers\Dashboard;

use Exception;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();//return collection obj implement array access
        return view('dashboard.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parents=Category::all();
        $category=new Category();//empty obj avoid error in _Form in value="{{$category->name}}..."

        return view('dashboard.categories.create',compact('parents','category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Request merge
        $request->merge([
            'slug'=>Str::slug($request->post('name'))
        ]);

        //upload image
        $data=$request->except('image');

        if($request->hasFile('image')){
            $file=$request->file('image');//return obj uploaded file
            $path=$file->store('uploads',['disk'=>'public']);
           // $path=$file->store('categories',['disk'=>'uploads']);

            $data['image']=$path;
        }

        //Mass assignment
        $category=Category::create($data);
        //PRG
        return redirect()->route('dashboard.categories.index')->with('success','Category created successufully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
        $category=Category::findOrFail($id);
           
        } catch (Exception $e) {
           return redirect()->route('dashboard.categories.index')->with('info','record not found');
        }
        // if(!$category){abort(404);}
        $parents=Category::where('id','<>',$id)->get();

        return view('dashboard.categories.edit',compact('category','parents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)  //string $id
    {
        $category=Category::findOrFail($id);

        $old_image = $category->image;//catch old image before update
        
       
         //upload image
         $data = $request->except('image');
         //dd($data);
         if($request->hasFile('image')){

            //dd($request->all());

             $file=$request->file('image');//return obj uploaded file
             $path=$file->store('uploads',['disk'=>'public']);

             
             $data['image']=$path;
         }

       

        $category->update($data);

        //Delete old image if exists
        if($old_image && isset($data['image'])){
            Storage::disk('public')->delete($old_image);
        }

        return redirect()->route('dashboard.categories.index')->with('success','Category updated successufully');
        // $category->update([
        //     'name'=>$request->name,
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $category=Category::findOrFail($id);
         $category->delete();

         if($category->image){
            Storage::disk('public')->delete($category->image);
         }

        //Category::destroy($id);

        return redirect()->route('dashboard.categories.index')->with('success','Category deleted successufully');
    }

    protected function uploadImage(Request $request){
           if($request->hasFile('image')){

            //dd($request->all());

             $file=$request->file('image');//return obj uploaded file
             $path=$file->store('uploads',['disk'=>'public']);

             
             return $path;
         }
    }
}
