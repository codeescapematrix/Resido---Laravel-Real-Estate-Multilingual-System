<div class="form-group">
    <label class="control-label">Title</label>
    <input name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control">
</div>

<div class="form-group">
    <label class="control-label">Description</label>
    <textarea name="description" class="form-control" rows="3">{{ Arr::get($attributes, 'description') }}</textarea>
</div>
