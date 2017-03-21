<h1>General Information</h1>
<div class="row">
    <div class="col-md-5">
        <!-- text input for contact_person -->
        <div class="form-group">
            {!! Form::label('contact_person', 'Contact Name') !!}
            {!! $errors->first('contact_person', '<span class="text-danger">:message</span>') !!}
            {!! Form::text('contact_person', Input::old('contact_person'), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>
    <div class="col-md-offset-2 col-md-5">
        <!-- form input for email -->
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! $errors->first('email', '<span class="text-danger">:message</span>') !!}
            {!! Form::email('email', Input::old('email'), ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-5">
        <!-- text input for company -->
        <div class="form-group">
            {!! Form::label('company', 'Name of business') !!}
            {!! $errors->first('company', '<span class="text-danger">:message</span>') !!}
            {!! Form::text('company', Input::old('company'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-offset-2 col-md-5">
        <!-- text input for industry -->
        <div class="form-group">
            {!! Form::label('industry', 'Industry') !!}
            {!! $errors->first('industry', '<span class="text-danger">:message</span>') !!}
            {!! Form::text('industry', Input::old('industry'), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-5">
        <!-- text input for since -->
        <div class="form-group">
            {!! Form::label('since', 'No. of years operating') !!}
            {!! $errors->first('since', '<span class="text-danger">:message</span>') !!}
            {!! Form::text('since', Input::old('since'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-offset-2 col-md-5">
        <!-- text input for website -->
        <div class="form-group">
            {!! Form::label('website', 'Current website') !!}
            {!! $errors->first('website', '<span class="text-danger">:message</span>') !!}
            {!! Form::text('website', Input::old('website'), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<!-- textarea for background -->
<div class="form-group">
    {!! Form::label('background', 'Tell us a bit about your business:') !!}
    {!! $errors->first('background', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('background', Input::old('background'), ['class' => 'form-control', 'placeholder' => 'Background, Services, Products, Influences, etc.']) !!}
</div>
<!-- textarea for reaction -->
<div class="form-group">
    {!! Form::label('reaction', 'Who is your target market and what reaction do you hope they will have:') !!}
    {!! $errors->first('reaction', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('reaction', Input::old('reaction'), ['class' => 'form-control']) !!}
</div>
<!-- textarea for nutshell -->
<div class="form-group">
    {!! Form::label('nutshell', 'What 3 (or more) words describe your company:') !!}
    {!! $errors->first('nutshell', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('nutshell', Input::old('nutshell'), ['class' => 'form-control', 'placeholder' => "Don't be shy"]) !!}
</div>