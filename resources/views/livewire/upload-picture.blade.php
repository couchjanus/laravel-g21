<div>
   <form wire:submit.prevent="save">
    @if($pictures)
    @foreach($pictures as $picture)
        <img src="{{ $picture->temporaryUrl() }}" width="120">
    @endforeach
    @endif
    <input type="file" wire:model="pictures" multiple>

    @error('picture') <span class="error">{{ $message }}</span> @enderror

    <button type="submit">Save Photo</button>
</form>
</div>
