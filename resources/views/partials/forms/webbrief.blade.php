<h1>So you want a website...</h1>
<h2>Hosting details</h2>
<p class="question">Do you have your own domain name (website address)?</p>
<div class="row">
    <div class="col-md-4">
        <!-- radio input for hasdomain -->
        <label>
        {!! Form::radio('hasdomain', '1', Input::old('hasdomain') == '1') !!}
        Yes, I already have one
        </label>
    </div>
    <div class="col-md-4">
        <!-- radio input for hasdomain -->
        <label>
        {!! Form::radio('hasdomain', '0', Input::old('hasdomain') == '0') !!}
         No, I would like you to do that for me
        </label>
    </div>
    <div class="col-md-4">
        <!-- radio input for hasdomain -->
        <label>
        {!! Form::radio('hasdomain', '2', Input::old('hasdomain') == '2') !!}
         No, but I will get it myself
        </label>
    </div>
</div>
<!-- text input for domain -->
<div class="form-group">
    {!! Form::label('domain', 'If you have your own domain, please enter it, or if you want one, what domain would you like?') !!}
    {!! $errors->first('domain', '<span class="text-danger">:message</span>') !!}
    {!! Form::text('domain', Input::old('domain'), ['class' => 'form-control']) !!}
</div>
<p class="question">Do you have your own hosting?</p>
<div class="row">
    <div class="col-md-4">
        <!-- radio input for webhosting -->
        <label>
        {!! Form::radio('webhosting', '1', Input::old('webhosting') == '1') !!}
         Yes, I already have hosting
        </label>
    </div>
    <div class="col-md-4">
        <!-- radio input for webhosting -->
        <label>
        {!! Form::radio('webhosting', '0', Input::old('webhosting') == '0') !!}
         No, I would like you to do that for me
        </label>
    </div>
    <div class="col-md-4">
        <!-- radio input for webhosting -->
        <label>
        {!! Form::radio('webhosting', '2', Input::old('webhosting') == '2') !!}
         No, but I will do it myself
        </label>
    </div>
</div>
<!-- text input for webhosting_details -->
<div class="form-group">
    {!! Form::label('webhosting_details', 'If you have your own hosting, or plan to get your own hosting, please describe your hosting setup.') !!}
    {!! $errors->first('webhosting_details', '<span class="text-danger">:message</span>') !!}
    {!! Form::text('webhosting_details', Input::old('webhosting_details'), ['class' => 'form-control']) !!}
</div>
<h2>Website details</h2>
<p class="question">What type of website would you like developed?</p>
<ul class="options-list">
    <li>
        <!-- radio input for webtype -->
        <label>
        {!! Form::radio('webtype', 'company', Input::old('webtype') == 'company') !!}
         Company site (a few pages and features such as home page, services/products, about us, contact form, company information, etc)
        </label>
    </li>
    <li>
        <!-- radio input for webtype -->
        <label>
        {!! Form::radio('webtype', 'blog', Input::old('webtype') == 'blog') !!}
         Blog (main purpose of the site is for regular postings of any sort, such as a personal or company blog, articles, news, etc)
        </label>
    </li>
    <li>
        <!-- radio input for webtype -->
        <label>
        {!! Form::radio('webtype', 'portfolio', Input::old('webtype') == 'portfolio') !!}
         Portfolio
        </label>
    </li>
    <li>
        <!-- radio input for webtype -->
        <label>
        {!! Form::radio('webtype', 'ecommerce', Input::old('webtype') == 'ecommerce') !!}
         E-Commerce site
        </label>
    </li>
    <li>
        <!-- radio input for webtype -->
        <label>
        {!! Form::radio('webtype', 'webapp', Input::old('webtype') == 'webapp') !!}
         Web app (site performs a specific function)
        </label>
    </li>
    <li>
        <!-- radio input for webtype -->
        <label>
        {!! Form::radio('webtype', 'other', Input::old('webtype') == 'other') !!}
         Other (If your site is not described to your satisfaction above, select this and describe it below)
        </label>
    </li>
</ul>
<!-- textarea for webtype_details -->
<div class="form-group">
    {!! Form::label('webtype_details', 'Feel free to add extra details about what type of site you want here') !!}
    {!! $errors->first('webtype_details', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('webtype_details', Input::old('webtype_details'), ['class' => 'form-control', 'placeholder' => 'If you answered Other above, please complete this section']) !!}
</div>
<p class="question">Once your site is completed, how would you like to manage the sites content?</p>
<ul class="options-list">
    <li>
        <!-- radio input for webcm -->
        <label>
        {!! Form::radio('webcm', 'static', Input::old('webcm') == 'static') !!}
         The content will mostly remain unchanged, aside from small revisions
        </label>
    </li>
    <li>
        <!-- radio input for webcm -->
        <label>
        {!! Form::radio('webcm', 'minor', Input::old('webcm') == 'minor') !!}
         Most of the content would remain unchanged, but I would like to be able to change certain elements myself (i.e certain images or sections of text)
        </label>
    </li>
    <li>
        <!-- radio input for webcm -->
        <label>
        {!! Form::radio('webcm', 'nonblogcms', Input::old('webcm') == 'nonblogcms') !!}
         I wont be blogging, but I need to add other forms of content myself (such as events, image galleries, products, portfolio projects)
        </label>
    </li>
    <li>
        <!-- radio input for webcm -->
        <label>
        {!! Form::radio('webcm', 'blogcms', Input::old('webcm') == 'blogcms') !!}
         It's a blog
        </label>
    </li>
    <li>
        <!-- radio input for webcm -->
        <label>
        {!! Form::radio('webcm', 'other', Input::old('webcm') == 'other') !!}
         Other, described below
        </label>
    </li>
</ul>
<!-- textarea for webcm_details -->
<div class="form-group">
    {!! Form::label('webcm_details', 'Feel free to describe how you would like to manage your sites content') !!}
    {!! $errors->first('webcm_details', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('webcm_details', Input::old('webcm_details'), ['class' => 'form-control', 'placeholder' => 'If you answered Other above, please complete this section']) !!}
</div>
<!-- textarea for websocial -->
<div class="form-group">
    {!! Form::label('websocial', 'What social media interaction would you like on your site?') !!}
    {!! $errors->first('websocial', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('websocial', Input::old('websocial'), ['class' => 'form-control']) !!}
</div>
<!-- textarea for webtarget -->
<div class="form-group">
    {!! Form::label('webtarget', 'What is the target market of your site and who would be your average user?') !!}
    {!! $errors->first('webtarget', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('webtarget', Input::old('webtarget'), ['class' => 'form-control']) !!}
</div>
<!-- textarea for webrequirements -->
<div class="form-group">
    {!! Form::label('webrequirements', 'What are the definite requirements for your site?') !!}
    {!! $errors->first('webrequirements', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('webrequirements', Input::old('webrequirements'), ['class' => 'form-control', 'placeholder' => 'It MUST or MUST NOT include...']) !!}
</div>
<!-- textarea for webdirection -->
<div class="form-group">
    {!! Form::label('webdirection', 'Is there a ceratin direction you want to see your website go?') !!}
    {!! $errors->first('webdirection', '<span class="text-danger">:message</span>') !!}
    {!! Form::textarea('webdirection', Input::old('webdirection'), ['class' => 'form-control', 'placeholder' => 'Tell us any ideas or visions you may have.']) !!}
</div>
