<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Storage;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'item_type' => 'required',
            'item_condition' => 'required',
            'item_description' => 'required',
            'comments' => 'nullable',
            'amount' => 'required|integer',
            'image_url' => 'nullable|url',
        ]);

        Item::create($data);

        return redirect()->route('items.index')->with('success', 'Item added successfully.');
    }

    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $data = $request->validate([
            'item_type' => 'required',
            'item_condition' => 'required',
            'item_description' => 'required',
            'comments' => 'nullable',
            'amount' => 'required|integer',
            'image_url' => 'nullable|url',
        ]);

        $item->update($data);

        return redirect()->route('items.index')->with('success', 'Item updated successfully.');
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
    }
}
