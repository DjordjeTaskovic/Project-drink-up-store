<form action="
@if($action == "products.update")
 {{ route($action, $product->id) }}
 @else {{ route($action) }}
 @endif"
 method="POST" enctype="multipart/form-data">
    @csrf
     @if($action == "products.update")
        @method('PUT')
    @endif
    <div class="form-group">
        <input type="hidden" class="form-control" id="ID" name="ID"
        value="{{ $product->id ?? old('id') }}"/>
        <label class="label" for="name">Product Name</label>
        <input type="text" class="form-control" id="product_name" name="product_name"
         value="{{ $product->product_name ?? old('product_name') }}" />

            @error('product_name')
            <div class="alert alert-danger">
                {{$message}}
            </div> @enderror
    </div>
    <div class="form-group">
        <label class="label" for="description">Description</label>
        <textarea class="form-control" id="info" rows="3" name="info">
            {{ $product->info ?? old('info') }}</textarea>
        @error('info')
            <div class="alert alert-danger">
                {{$message}}
            </div> @enderror
    </div>
    <div class="form-group">
        <label class="label" for="price">Price</label>
        <input type="text" class="form-control" id="price"
        name="price" value="{{ $product->price ?? old('price') }}" />
        @error('price')
            <div class="alert alert-danger">
                {{$message}}
            </div>@enderror
    </div>

    <div class="form-group">

        <label class="label" for="state">Product availability</label><br/>
        <select name="state_id[]" id="state" class="form-control">
            <option value="0">Select from below</option>
            @foreach ($availability as $state)
            <option value="{{$state->id}}"
                @if(isset($product) &&
                in_array($state->id , $product->availabilities()->pluck('availability_id')->toArray()))
                    selected
                @elseif(is_array(old('availability_id')) && in_array($state->id, old('availability_id') ) )
                    selected
                @endif
                >
                {{$state->state }}
            </option>
            @endforeach
        </select>
        @error('state')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="label" for="categories">Choose a Category</label>
        <div class="row mx-1">
            @foreach($categories as $category)
            <div class="custom-control custom-checkbox mr-5">
                <input type="checkbox" class="custom-control-input insertcat"
                id="category{{ $category->id }}"
                name="category_id[]" value="{{ $category->id }}"
                    @if(isset($product) &&
                    in_array($category->id , $product->categories()->pluck('category_id')->toArray()))
                        checked
                    @elseif(is_array(old('category_id')) && in_array($category->id, old('category_id')))
                        checked
                    @endif
                />
                <label class="custom-control-label" for="category{{ $category->id }}">
                    {{ $category->category_name}}</label>
            </div>
            @endforeach
        </div>
        @error('category_id')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="label" for="image">Choose image</label>
        <input type="file" class="form-control" id="image" name="image"
        />
        @error('image')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <button class="btn btn-primary w-50" type="submit">Submit</button>
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
</form>
