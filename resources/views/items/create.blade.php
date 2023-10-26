@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">
        Create Item
    </h1>
    <form action="{{ route('items.store') }}" method="POST" class="w-1/2 mx-auto">
        @csrf
        <div class="mb-4">
            <label for="item_type" class="block text-gray-700">
                Item Type
            </label>
            <select name="item_type" id="item_type" class="w-full border rounded px-4 py-2">
                <option value="option1"> Tools &nbsp; Equipment </option>
                <option value="option2"> Amenities </option>
            </select>
        </div>
        <div class="mb-4">
            <label for="item_condition" class="block text-gray-700">
                Item Condition
            </label>
            <select name="item_condition" id="item_condition" class="w-full border rounded px-4 py-2">
                <option value="condition1"> Normal </option>
                <option value="condition2"> Depleted </option>
            </select>
        </div>
        <div class="mb-4">
            <label for="item_description" class="block text-gray-700">
                Description
            </label>
            <input type="text" name="item_description" id="item_description" class="w-full border rounded px-4 py-2">
        </div>
        <div class="mb-4">
            <label for="comments" class="block text-gray-700">
                Comments
            </label>
            <textarea name="comments" id="comments" class="w-full border rounded px-4 py-2"></textarea>
        </div>
        <div class="mb-4">
            <label for="amount" class="block text-gray-700">
                Amount
            </label>
            <input type="number" name="amount" id="amount" class="w-full border rounded px-4 py-2">
        </div>
        <div class="mb-4">
            <label for="image_url" class="block text-gray-700">
                Image URL
            </label>
            <input type="text" name="image_url" id="image_url" class="w-full border rounded px-4 py-2">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            Submit
        </button>
    </form>
</div>
@endsection
