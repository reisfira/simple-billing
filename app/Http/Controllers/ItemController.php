<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Masterfile\Item;
use App\Models\Masterfile\Category;

class ItemController extends Controller
{
    public function index()
    {
        $data = [];
        $data['resources'] = Item::all();

        return view('item.index', $data);
    }

    public function create()
    {
        $data = [];
        $data['categories'] = Category::pluck('name', 'code')->toArray();

        return view('item.create', $data);
    }

    public function store (Request $request)
    {
        $resource = Item::create([
            'code' => $request['code'],
            'name' => $request['name'],
            'category_code' => $request['category_code'],
            'description' => $request['description'],
        ]);

        return redirect()->route('item.index');
    }

    public function edit($id)
    {
        $data = [];
        $data['resource'] = Item::find($id);
        $data['categories'] = Category::pluck('name', 'code')->toArray();

        return view('item.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $resource = Item::find($id);
        $resource->update([
            'code' => $request['code'],
            'name' => $request['name'],
            'category_code' => $request['category_code'],
            'description' => $request['description'],
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $resource = Item::find($id);
        $resource->delete();

        return redirect()->route('item.index');
    }
}
