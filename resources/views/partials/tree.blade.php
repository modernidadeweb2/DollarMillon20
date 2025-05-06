@foreach($children as $child)
    <div class="bg-blue-100 p-4 rounded">
        <p class="font-semibold">{{ $child->name }}</p>
        <small>Email: {{ $child->email }}</small>

        <div class="mt-2 pl-2 border-l border-gray-400">
            @foreach($child->children->take(3) as $grandchild)
                <div class="pl-2">
                    <p class="text-sm">{{ $grandchild->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endforeach
