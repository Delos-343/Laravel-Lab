@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">
        My Items
    </h1>
    <a href="{{ route('items.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">
        Add Item
    </a>
    <table class="w-full mt-4">
        <thead>
            <tr>
                <th class="border px-4 py-2">
                    Type
                </th>
                <th class="border px-4 py-2">
                    Condition
                </th>
                <th class="border px-4 py-2">
                    Description
                </th>
                <th class="border px-4 py-2">
                    Amount
                </th>
                <th class="border px-4 py-2">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td class="border px-4 py-2">
                    {{ $item->item_type }}
                </td>
                <td class="border px-4 py-2">
                    {{ $item->item_condition }}
                </td>
                <td class="border px-4 py-2">
                    {{ $item->item_description }}
                </td>
                <td class="border px-4 py-2">
                    {{ $item->amount }}
                </td>
                <td class="border px-4 py-2">
                    <a href="{{ route('items.edit', $item) }}" class="text-blue-500">
                        Edit
                    </a>
                    <form action="{{ route('items.destroy', $item) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
