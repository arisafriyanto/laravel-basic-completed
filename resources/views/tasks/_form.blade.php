<div class="col-md-10">
    <input type="text" name="list" class="form-control @error('list') is-invalid @enderror"
        placeholder="The name of the task" autofocus value="{{ old('list', $task->list) }}">

    @error('list')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>

<div class="col-md-2">

    <button class="btn btn-primary" type="submit">{{ $submit }}</button>
</div>
