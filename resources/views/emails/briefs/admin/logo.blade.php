@include('emails.briefs.admin.general')
<h2 style="text-align:center;color:#F2842E;">Logo Brief</h2>
<p style="color:#3EB7AE;">Do you have an existing logo?</p>
@if($logoBrief['haslogo'] === 0)
    <p>No, we don't</p>
@elseif($logoBrief['haslogo'] === 1)
    <p>Yes, we do.</p>
@endif

@if(isset($files) && count($files) > 0)
    <p>{{ count($files) }} images have been sent. See attachments.</p>
@endif

<p style="color:#3EB7AE;">Does your company have a colour scheme you want the logo to follow?</p>
<p>{{ $logoBrief['colour'] }}</p>

<p style="color:#3EB7AE;">Is there a certain direction you want your logo to go in?</p>
<p>{{ $logoBrief['logodirection'] }}</p>

<p style="color:#3EB7AE;">Are there any restrictions?</p>
<p>{{ $logoBrief['logorestrictions'] }}</p>

<p style="color:#3EB7AE;">What are your final requirements?</p>
<p>{{ $logoBrief['logorequirements'] }}</p>