@include('emails.briefs.admin.general')
<h2 style="text-align:center;color:#F2842E;">Branding Brief</h2>

<p style="color:#3EB7AE;">What are you after?</p>
<p>{{ $brandBrief['brandmaterials'] }}</p>

<p style="color:#3EB7AE;">Where and how will it be used?</p>
<p>{{ $brandBrief['branduse'] }}</p>

<p style="color:#3EB7AE;">What are the specifics?</p>
<p>{{ $brandBrief['brandspecifics'] }}</p>

<p style="color:#3EB7AE;">Is there a certain direction you want to see it go in? Any specific ideas or imagery?</p>
<p>{{ $brandBrief['branddirection'] }}</p>

@if(isset($imageFiles) && count($imageFiles) > 0)
    <p>{{ count($imageFiles) }} image file(s) were uploaded. See attachments.</p>
@endif

@if(isset($docFiles) && count($docFiles) > 0)
    <p>{{ count($docFiles) }} doc file(s) were uploaded. See attachments.</p>
@endif

<p style="color:#3EB7AE;">Are there any restrictions or unique requests?</p>
<p>{{ $brandBrief['brandrestrictions'] }}</p>

<p style="color:#3EB7AE;">Is there any particular colour scheme you want to use?</p>
<p>{{ $brandBrief['brandcolour'] }}</p>