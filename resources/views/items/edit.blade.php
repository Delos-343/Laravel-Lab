@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">
        Edit Item
    </h1>
    <form action="{{ route('items.update', $item) }}" method="POST" class="w-1/2 mx-auto">
        @csrf
        @method('PATCH')
        <div class="mb-4">
            <label for="item_type" class="block text-gray-700">
                Item Type
            </label>
            <select name="item_type" id="item_type" class="w-full border rounded px-4 py-2">
                <option value="option1" @if($item->item_type == 'option1') selected @endif>
                    Tools &nbsp; Equipment
                </option>
                <option value="option2" @if($item->item_type == 'option2') selected @endif>
                    Amenities
                </option>
            </select>
        </div>
        <div class="mb-4">
            <label for="item_condition" class="block text-gray-700">
                Item Condition
            </label>
            <select name="item_condition" id="item_condition" class="w-full border rounded px-4 py-2">
                <option value="condition1" @if($item->item_condition == 'condition1') selected @endif> Normal </option>
                <option value="condition2" @if($item->item_condition == 'condition2') selected @endif> Depleted </option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            Update
        </button>
    </form>
</div>
@endsection
