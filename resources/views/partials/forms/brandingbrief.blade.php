<h1>So you want some branding...</h1>
<!-- textarea for brandmaterials -->
<div class="form-group">
    {!! Form::label('brandmaterials', 'What are you after?') !!}
    {!! $errors->first('brandmaterials', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('brandmaterials', Input::old('brandmaterials'), ['class' => 'form-control', 'placeholder' => 'Business card, brochure, t-shirt, book/album cover, marketing material, print/online ad, etc.']) !!}
</div>
<!-- textarea for branduse -->
<div class="form-group">
    {!! Form::label('branduse', 'Where and how will it be used?') !!}
    {!! $errors->first('branduse', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('branduse', Input::old('branduse'), ['class' => 'form-control']) !!}
</div>
<!-- textarea for brandspecifics -->
<div class="form-group">
    {!! Form::label('brandspecifics', 'What are the specifics?') !!}
    {!! $errors->first('brandspecifics', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('brandspecifics', Input::old('brandspecifics'), ['class' => 'form-control', 'placeholder' => 'Size, shape, dimensions, folds, measurements, etc.']) !!}
</div>
<!-- textarea for branddirection -->
<div class="form-group">
    {!! Form::label('branddirection', 'Is there a certain direction you want it to go in?') !!}
    {!! $errors->first('branddirection', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('branddirection', Input::old('branddirection'), ['class' => 'form-control', 'placeholder' => 'Tell us any ideas or visions you may have.']) !!}
</div>
<!-- brand file upload area-->
<div class="row">
    <div class="col-md-offset-1 col-md-9 file-select-area">
    @if(Session::has('brandUploadErrors'))
        @foreach(Session::get('brandUploadErrors') as $uploadError)
            <p class="text-danger">{{ $uploadError }}</p>
        @endforeach
    @endif
        <label for="brand_files">
            If you have any image or document files you would like to share to convey your ideas, please upload them here.<span class="file-browse-btn">Browse files</span>
            <input type="file" multiple="true" name="brand_uploads[]" class="form-control" id="brand_files"/>
        </label>
    </div>
</div>
<div id="brand-file-upload-progress-box"></div>
<!-- textarea for brandcolour -->
<div class="form-group">
    {!! Form::label('brandcolour', 'Do you have a colour scheme you want us to follow?') !!}
    {!! $errors->first('brandcolour', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('brandcolour', Input::old('brandcolour'), ['class' => 'form-control']) !!}
</div>
<!-- textarea for brandrestrictions -->
<div class="form-group">
    {!! Form::label('brandrestrictions', 'Any restrictions or unique requests?') !!}
    {!! $errors->first('brandrestrictions', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('brandrestrictions', Input::old('brandrestrictions'), ['class' => 'form-control', 'placeholder' => 'Anything else we need to know?']) !!}
</div>