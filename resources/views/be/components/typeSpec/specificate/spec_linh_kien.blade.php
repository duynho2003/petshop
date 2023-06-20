<h4 class="card-title">Type Linh Kiện</h4>

<div class="form-group">
    <label>Name Linh Kiện</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Name"  autofocus>
    {{-- @error('name')
        <div class="alert alert-warning d-flex align-items-center mt-3" role="alert">
            <div class="required_error">
                {{ $message }}
            </div>
        </div>
    @enderror --}}
</div>
