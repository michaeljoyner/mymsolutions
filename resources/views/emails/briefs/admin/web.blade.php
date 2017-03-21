@include('emails.briefs.admin.general')
<h2 style="text-align:center;color:#F2842E;">Website Brief</h2>

<p style="color:#3EB7AE;">Do you have your own domain?</p>
@if($webBrief['hasdomain'] === 0)
    <p>No, I would like you to to that for me</p>
@elseif($webBrief['hasdomain'] === 1)
    <p>No, but I will get it myself</p>
@elseif($webBrief['hasdomain'] === 2)
    <p>Yes, I already have one</p>
@endif

@if($webBrief['domain'] != '')
    <p>Our domain: <a href="{{ $webBrief['domain'] }}">{{ $webBrief['domain'] }}</a></p>
@endif

<p style="color:#3EB7AE;">Do you have your own hosting?</p>
@if($webBrief['webhosting'] === 0)
    <p>No, we would like you to organise that for me</p>
@elseif($webBrief['webhosting'] === 1)
    <p>No, but we will organise it myself</p>
@elseif($webBrief['webhosting'] === 2)
    <p>Yes, we already have hosting</p>
@endif

@if($webBrief['webhosting_details'])
    <p>{{ $webBrief['webhosting_details'] }}</p>
@endif

<p style="color:#3EB7AE;">What type of website would you like developed?</p>
@if($webBrief['webtype'] === 'company')
    <p>Company site (a few pages and features such as home page, services/products, about us, contact form, company information, etc)</p>
@elseif($webBrief['webtype'] === 'blog')
    <p>Blog (main purpose of the site is for regular postings of any sort, such as a personal or company blog, articles, news, etc)</p>
@elseif($webBrief['webtype'] === 'portfolio')
    <p>Portfolio</p>
@elseif($webBrief['webtype'] === 'ecommerce')
    <p>E-Commerce site</p>
@elseif($webBrief['webtype'] === 'webapp')
    <p>Web app (site performs a specific function)</p>
@elseif($webBrief['webtype'] === 'other')
    <p>Other</p>
@endif

@if($webBrief['webtype_details'] != '')
    <p>Some details: {{ $webBrief['webtype_details'] }}</p>
@endif

<p style="color:#3EB7AE;">Once your site is completed, how would you like to manage the sites content?</p>
@if($webBrief['webcm'] === 'none')
    <p>The content will mostly remain unchanged, aside from small revisions</p>
@elseif($webBrief['webcm'] === 'minor')
    <p>Most of the content would remain unchanged, but I would like to be able to change certain elements myself (i.e certain images or sections of text)</p>
@elseif($webBrief['webcm'] === 'nonblog cms')
    <p>I wont be blogging, but I need to add other forms of content myself (such as events, image galleries, products, portfolio projects)</p>
@elseif($webBrief['webcm'] === 'blog')
    <p>It’s a blog</p>
@elseif($webBrief['webcm'] === 'other')
    <p>Other</p>
@endif

@if($webBrief['webcm_details'] != '')
    <p>More on content management: {{ $webBrief['webcm_details'] }}</p>
@endif

<p style="color:#3EB7AE;">What social media interaction would you like on your site?</p>
<p>{{ $webBrief['websocial'] }}</p>

<p style="color:#3EB7AE;">What are the definite requirements for your site?</p>
<p>{{ $webBrief['webrequirements'] }}</p>

<p style="color:#3EB7AE;">Is there a certain direction you want to see your website go?</p>
<p>{{ $webBrief['webdirection'] }}</p>

<p style="color:#3EB7AE;">What is the target market of your site and would you be able to describe your average user?</p>
<p>{{ $webBrief['webtarget'] }}</p>