<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $popular = Post::where('published', 'yes')
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();

        $posts = Post::where('published', 'yes')
            ->whereNotIn('id', $popular->pluck('id'))
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('index', compact('popular', 'posts'));
    }

    // admin
    public function adminIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required|string|max:255',
            'content'    => 'required|string',
            'published'  => 'required|in:yes,no',
            'publisher'  => 'nullable|string|max:255',
            'category'   => 'nullable|string|max:255',
            'event_date' => 'nullable|date',
            'image'      => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img', 'public');
            $imagePath = '/storage/' . $imagePath;
        }

        Post::create([
            'title'      => $request->title,
            'content'    => $request->content,
            'published'  => $request->published,
            'publisher'  => $request->publisher,
            'category'   => $request->category,
            'event_date' => $request->event_date,
            'image'      => $imagePath,
        ]);

        return redirect()->route('admin.posts.index')
            ->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function detail(string $id)
    {
        $post = Post::findOrFail($id);
        $post->increment('views');
        return view('detail', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('admin.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'      => 'required|string|max:255',
            'content'    => 'required|string',
            'published'  => 'required|in:yes,no',
            'publisher'  => 'nullable|string|max:255',
            'category'   => 'nullable|string|max:255',
            'event_date' => 'nullable|date',
            'image'      => 'nullable|image|max:2048',
        ]);

        $post = Post::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img', 'public');
            $post->image = '/storage/' . $imagePath;
        }

        $post->title      = $request->title;
        $post->content    = $request->content;
        $post->published  = $request->published;
        $post->publisher  = $request->publisher;
        $post->category   = $request->category;
        $post->event_date = $request->event_date;
        $post->save();

        return redirect()->route('admin.posts.index')
            ->with('success', 'Berita berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from destroy.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.posts.index')
            ->with('success', 'Berita berhasil dihapus!');
    }
}