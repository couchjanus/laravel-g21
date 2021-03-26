<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
<form wire:submit.prevent="save">
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-name">
        Product Name
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-name" type="text" placeholder="Product name" wire:model="name">
      <p class="text-red text-xs italic">Please fill out this field.</p>
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-price">
        Product Price
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-price" type="text" placeholder="Product price" wire:model="price">
    </div>
  </div>
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-full px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-description">
        description
      </label>
      <textarea class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="grid-description" type="password" wire:model="description">
      </textarea>
    </div>
  </div>

  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-full px-3">
        <div class="mx-3 md:flex mb-3">
             @if($pictures)
                @foreach($pictures as $picture)
                    <img src="{{ $picture->temporaryUrl() }}" width="120">
                @endforeach
              @endif
            </div>  
            <input type="file" wire:model="pictures" multiple>
            @error('pictures.*') <span class="error">{{ $message }}</span> @enderror
    </div>
  </div>
  <div class="-mx-3 md:flex mb-2">
    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-brand">
        Brand
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-brand" wire:model="brand_id">
          <option>choose one of them...</option>
          @foreach($brands as $key => $val)
          <option value="{{$key}}">{{$val}}</option>
          @endforeach
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
          <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-category">
        Category
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-category" wire:model="category_id">
          <option>choose one of them...</option>
          @foreach($categories as $key => $val)
            <option value="{{$key}}">{{$val}}</option>
          @endforeach
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
          <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-status">
        Status
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-status" wire:model="status">
        <option>choose one of them...</option>
           @foreach($productArray as $key => $val)
          <option value="{{$key}}">{{$val}}</option>
          @endforeach
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
          <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
  </div>
  <div class="flex p-1">
    <button role="submit" type="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400">Add Bew Product</button> 
  </div>
  </form>
</div>