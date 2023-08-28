<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\UplodeTrait;
use App\Models\Image;
use App\Models\Post;
use Throwable;
class PostController extends Controller
{
    use UplodeTrait;
    public function index(){

        try {
            $posts = Post::paginate(15);
            return view('admin.post.index',compact('posts'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function delete($id){

        try {
            if ($delete = Post::find($id)){
                $delete->delete();
                Image::where('post_id',$id)->delete();
            }
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function create(){
        try {
            return view('admin.post.create');
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function store(Request $request){
        try {
            $post = Post::create([
                'image'=>$this->uploud($request->image),
                'title_ar'=>$request->title_ar,
                'title_en'=>$request->title_en,
                'text_ar'=>$request->text_ar,
                'text_en'=>$request->text_en,
                'views'=>0
            ]);
            foreach($request->images as $image){
                Image::create([
                    'image'=>$this->uploud($image),
                    'post_id'=>$post->id
                ]);
            }
            return redirect()->back();
        }catch (Throwable $e){
           return view('error.error');
        }
    }

    public function edite($id){
        try {
            $data = Post::where('id',$id)->first();
            return view('admin.post.edite',compact('data','id'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function update(Request $request){
        try {
            if($request->image == null){
                $image = $request->old_image;
            }else{
                $image = $this->uploud($request->image);
            }
            Post::find($request->id)->update([
                'image'=>$image,
                'text_ar'=>$request->text_ar,
                'text_en'=>$request->text_en,
                'title_ar'=>$request->title_ar,
                'title_en'=>$request->title_en
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function indexSlider($id){
        try {
            $images = Image::where('post_id',$id)->paginate(15);
            return view('admin.post.slider',compact('images','id'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function deleteSlide($id){
        try {
            Image::find($id)->delete();
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function createSlide($id){
        try {
            return view('admin.post.create_slider',compact('id'));
        }catch (Throwable $e){
            return view('error.error');
        }
    }

    public function storeSlide(Request $request){
        try {
            Image::create([
                'image'=>$this->uploud($request->image),
                'post_id'=>$request->id
            ]);
            return redirect()->back();
        }catch (Throwable $e){
            return view('error.error');
        }
    }
}
