<?php

namespace App\Http\Controllers;

use App\Http\Resources\UrlResource;
use App\Models\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function index()
    {
        return UrlResource::collection(Url::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'url' => ['required'],
            'shorten' => ['required'],
            'timeout' => ['required', 'date'],
        ]);

        return new UrlResource(Url::create($data));
    }

    public function show(Url $url)
    {
        return new UrlResource($url);
    }

    public function update(Request $request, Url $url)
    {
        $data = $request->validate([
            'url' => ['required'],
            'shorten' => ['required'],
            'timeout' => ['required', 'date'],
        ]);

        $url->update($data);

        return new UrlResource($url);
    }

    public function destroy(Url $url)
    {
        $url->delete();

        return response()->json();
    }
}
