<div class="form-group">
    <label class="control-label">Title</label>
    <input name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="Search Perfect Place In Your City">
</div>
<div class="form-group">
    <label class="control-label">Description</label>
    <textarea name="description" data-shortcode-attribute="content" class="form-control" rows="3">{{ $content }}</textarea>
</div>
<div class="form-group">
    <label class="control-label">Background</label>
    {!! Form::mediaImage('bg', Arr::get($attributes, 'bg')) !!}
</div>
<div class="form-group">
    <label class="control-label">Text Button</label>
    <input name="btntext" value="{{ Arr::get($attributes, 'btntext') }}" class="form-control" placeholder="Explore More Property">
</div>
<div class="form-group">
    <label class="control-label">Link Button</label>
    <input name="btnlink" value="{{ Arr::get($attributes, 'btnlink') }}" class="form-control" placeholder="https://abc.com">
</div>
