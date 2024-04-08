<?php

namespace App\Http\Controllers;

use App\Models\Post;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Http\user;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class PostController extends Controller
{

    public function news(Request $request)
    {
        $category = $request->input("category");
        $years = $request->input("years");
        if ($category) {
            $posts = Post::where("category", $category)->latest()->paginate(5);
        } elseif ($years) {
            $posts = Post::where("years", $years)->latest()->paginate(5);
        } else {

            $posts = Post::latest('years')->paginate(6);
        }
        return view("news", compact("posts"));
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $description = $request->description;

        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="UTF-8">' . $description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $srcAttribute = $img->getAttribute('src');
            if (preg_match('/^data:image\/(\w+);base64,/', $srcAttribute, $type)) {
                $data = substr($srcAttribute, strpos($srcAttribute, ',') + 1);
                $type = strtolower($type[1]);
                if (!in_array($type, ['jpeg', 'jpg', 'gif', 'png'])) {
                    continue;
                }
                $data = base64_decode($data);
                if ($data === false) {
                    continue;
                }
                $image_name = "/upload/" . time() . $key . '.' . $type;
                if (!file_put_contents(public_path() . $image_name, $data)) {
                    continue;
                }

                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
        }
        $description = $dom->saveHTML();

        Post::create([
            'title' => $request->title,
            'category' => $request->category,
            'years' => $request->years,
            'description' => $description

        ]);

        return redirect('/posts');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('show', compact('post'));
    }
    // public function show_admin($id)
    // {
    //     $post = Post::find($id);
    //     return view('show_admin', compact('post'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $description = $request->description;

        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="UTF-8">' . $description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $srcAttribute = $img->getAttribute('src');
            if (preg_match('/^data:image\/(\w+);base64,/', $srcAttribute, $type)) {
                $data = substr($srcAttribute, strpos($srcAttribute, ',') + 1);
                $type = strtolower($type[1]);
                if (!in_array($type, ['jpeg', 'jpg', 'gif', 'png'])) {
                    continue;
                }
                $data = base64_decode($data);
                if ($data === false) {
                    continue;
                }
                $image_name = "/upload/" . time() . $key . '.' . $type;
                if (!file_put_contents(public_path() . $image_name, $data)) {
                    continue;
                }

                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
        }
        $description = $dom->saveHTML();


        $post->update([
            'title' => $request->title,
            'description' => $description
        ]);

        return redirect('/posts');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $dom = new DOMDocument();
        $dom->loadHTML($post->description, 9);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            $src = $img->getAttribute('src');
            $path = Str::of($src)->after('/');


            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $post->delete();
        return redirect()->back();
    }

    public function showLatestNews()
    {
        // Check for connection status
        $connected = $this->checkConnection();

        // Fetch latest news from the backend
        $latestNews = collect(); // Initialize as empty collection

        if ($connected) {
            $latestNews = post::latest()->take(1)->get(); // Assuming you have a 'News' model
        }

        return view('latest_news', compact('latestNews', 'connected'));
    }

    // Function to check connection status
    private function checkConnection()
    {
        // Perform some checks to determine connection status
        // For simplicity, I'll just return true here
        return true;
    }

    public function year($data)
    {
        $posts = Post::where('years', $data)->latest()->paginate(5);

        return view('news', compact('', 'data'));
    }
}
