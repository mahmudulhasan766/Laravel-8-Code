<h1>My Show Page</h1>

<?php
    echo 5+5;
?>
<br>
{{ 56+45}}

{{$title}}
<br>
{{$age}}
@if($age>$age2)
<h1>Age is Big</h1>
@elseif($age==$age2)
<h1>age is same</h1>
@else
<h1>Age 2 is Big</h1>

@endif

@for($i=0;$i<50;$i+=2)
<br>
{{$i}}
@endfor
