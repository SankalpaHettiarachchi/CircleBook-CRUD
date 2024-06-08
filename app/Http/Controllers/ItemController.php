<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\DescriptionList\Node\Description;

class ItemController extends Controller
{

    public function index()
    {
        $items = Item::all();
        return view('welcome',['items'=>$items]);
    }

    public function create()
    {
        return view("add_item");

    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required','string',
            'description'=>'required','string',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image_path = $image->move(public_path('images/'), $imageName);
            $image_path = 'images/' . $imageName;
        }
        DB::table('items')->insert([
            'name' =>  $request->name,
            'description' => $request->description,
            'image_path' => isset($image_path) ? $image_path : null,
        ]);
        return redirect(url('/Item'));
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('view_item',['item'=>$item]);
    }

    public function edit(Item $item,$id)
    {
        $item = Item::findOrFail($id);
        return view('update_item',['item'=>$item]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image_path = $image->move(public_path('images/'), $imageName);
            $image_path = 'images/' . $imageName;
        }
        DB::table('items')
            ->where('id', $id)
            ->update([
                'name' => $validatedData['name'],
                'description' =>  $validatedData['description'],
                'image_path' => isset($image_path) ? $image_path : null,
            ]);
        return redirect(url('/Item'));

    }

    public function destroy(Item $item,$id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect(url('/Item'));
    }
}
