<h2 style="text-align:center;"><span style="color:#3EB7AE;">{{ $generalBrief['contact_person'] }} </span>
        @if($generalBrief['company'] != '')
            from<span style="color:#3EB7AE;"> {{ $generalBrief['company'] }}</span>
        @endif
         has submitted a brief.</h2>

        <h3 style="text-align:center;color:#F2842E;">Here is a bit about us</h3>

        @if($generalBrief['since'] != '' && $generalBrief['industry'] != '')
            <p>We have been operating in the <span style="color:#3EB7AE;">{{ $generalBrief['industry'] }}</span> industry for <span style="color:#3EB7AE;">{{ $generalBrief['since'] }} years</span></p>
        @endif

        @if($generalBrief['since'] != '' && $generalBrief['industry'] == '')
            <p>We have been operating for <span style="color:#3EB7AE;">{{ $generalBrief['since'] }} years.</span></p>
        @endif

        @if($generalBrief['since'] == '' && $generalBrief['industry'] != '')
            <p>We operate in the <span style="color:#3EB7AE;">{{ $generalBrief['industry'] }}</span> industry</p>
        @endif

        @if($generalBrief['background'] != '')
            <p><span style="color:#3EB7AE;">A little about our background:</span> {{ $generalBrief['background'] }}</p>
        @endif

        @if($generalBrief['reaction'] != '')
            <p><span style="color:#3EB7AE;">Who we are targeting and what reaction we hope to achieve:</span> {{ $generalBrief['reaction'] }}</p>
        @endif

        @if($generalBrief['nutshell'] != '')
            <p><span style="color:#3EB7AE;">This is us in a nutshell:</span> {{ $generalBrief['nutshell'] }}</p>
        @endif

        @if($generalBrief['website'] != '')
            <p>Our current website is <a href="{{ $generalBrief['website'] }}">{{ $generalBrief['website'] }}</a></p>
        @endif
