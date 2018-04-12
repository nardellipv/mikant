<?php

namespace App\Http\Controllers\Back;

use App\ModelBack\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

    public function show()
    {
        $blogs = Blog::get();

        return view('back.layouts.parts.blog.list', compact('blogs'));
    }

    public function create()
    {
        return view('back.layouts.parts.blog.create');
    }


    public function store(Request $request)
    {


        $blog = new Blog;
        $blog->title = $request['title'];
        $blog->body = $request['body'];
        $blog->user_id = auth()->user()->id;

        if ($request->photo) {

            $path = Storage::disk('public')->put('/fotos/blog', $request->photo);
            $blog->photo = $path;

        }
        $blog->save();

        $blogs = Blog::get();

        Session::flash('message', 'Entrada ' . $blog->title . ' creada correctamente.');
        return view('back.layouts.parts.blog.list', compact('blogs'));
    }

    public function edit(Request $request, $id)
    {
        $blog = Blog::find($id);


        return view('back.layouts.parts.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request['title'];
        $blog->body = $request['body'];
        $blog->user_id = auth()->user()->id;

        if ($request->photo) {

            $path = Storage::disk('public')->put('/fotos/blog', $request->photo);
            $blog->photo = $path;

        }
        $blog->save();

        return back();
    }

    public function active($id)
    {
        $blog = Blog::find($id);
        $blog->status = 'ACTIVE';

        $blog->save();

        Session::flash('message', 'Entrada ' . $blog->title . ' activada correctamente.');
        return back();
    }

    public function desactive($id)
    {
        $blog = Blog::find($id);
        $blog->status = 'DESACTIVE';

        $blog->save();

        Session::flash('message', 'Entrada ' . $blog->title . ' desactivada correctamente.');
        return back();
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        Session::flash('message', 'Entrada ' . $blog->title . ' eliminada correctamente.');
        return back();
    }
}
