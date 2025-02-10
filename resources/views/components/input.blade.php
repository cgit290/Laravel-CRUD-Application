<div class="mb-3">
    <label for="name" class="form-label">{{$label}}</label>
    <input type="{{$type}}" class="form-control" name="{{$name}}" value="{{$value}}" >
    <span class="text-danger">
        @error($name)
            {{$message}}
        @enderror
    </span>
</div>