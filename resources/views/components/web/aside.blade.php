<div>
    @foreach($categories as $category)
        
        @if($category->status !== 1)
            @continue
        @endif
        <li>{{ $category->name }}</li>
    @endforeach
</div>