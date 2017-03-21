<h1>So you want a logo...</h1>
<div class="row">
    <div class="col-md-4">
        <p class="question">Do you have an existing logo?</p>
    </div>
    <div class="col-md-4">
        <!-- radio input for haslogo -->
        <label>Yes
        {!! Form::radio('haslogo', '1', Input::old('haslogo') == '1') !!}
        </label>
    </div>
    <div class="col-md-4">
        <!-- radio input for haslogo -->
        <label>No
        {!! Form::radio('haslogo', '0', Input::old('haslogo') == '0') !!}
        </label>
    </div>
</div>
<!-- logo file upload area-->
<div class="row">
    <div class="col-md-offset-1 col-md-9 file-select-area">
    @if(Session::has('logoUploadErrors'))
        @foreach(Session::get('logoUploadErrors') as $uploadError)
            <p class="text-danger">{{ $uploadError }}</p>
        @endforeach
    @endif
        <label for="logo_files">
            If you have an existing logo, or if you have any images you want to share with us, please upload them here.<span class="file-browse-btn">Browse files</span>
            <input type="file" multiple="true" name="logo_uploads[]" class="form-control" id="logo_files"/>
        </label>
    </div>
</div>
<div id="logo-upload-progress-box"></div>
<!-- textarea for colour -->
<div class="form-group">
    {!! Form::label('colour', 'Does your business have a colour scheme you want us to follow?') !!}
    {!! $errors->first('colour', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('colour', Input::old('colour'), ['class' => 'form-control']) !!}
</div>
<!-- textarea for logodirection -->
<div class="form-group">
    {!! Form::label('logodirection', 'Is there a certain direction you want your logo to go in?') !!}
    {!! $errors->first('logodirection', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('logodirection', Input::old('logodirection'), ['class' => 'form-control', 'placeholder' => 'Tell us any ideas or visions you may have.']) !!}
</div>
<!-- textarea for logorestrictions -->
<div class="form-group">
    {!! Form::label('logorestrictions', 'Are there any restrictions?') !!}
    {!! $errors->first('logorestrictions', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('logorestrictions', Input::old('logorestrictions'), ['class' => 'form-control', 'placeholder' => 'Is there anything the logo MUST or MUST NOT include?']) !!}
</div>
<!-- textarea for logorequirements -->
<div class="form-group">
    {!! Form::label('logorequirements', 'What are your final requirements?') !!}
    {!! $errors->first('logorequirements', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('logorequirements', Input::old('logorequirements'), ['class' => 'form-control', 'placeholder' => 'What do you need to receive (file types, etc.)']) !!}
</div>