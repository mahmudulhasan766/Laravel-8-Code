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

{{$i}}
@endfor
<br/>
@switch($it)
    @case(1)
        First case...
        @break

    @case(2)
        Second case...
        @break
    @default
        Default case...
@endswitch
<br/>
@switch($test)
    @case(1)
        Words
        @break
    @case(2)
        Other Words
        @break
    @default
        Default  
           words
@endswitch
<br>

@unless($fl)
    <h1>Hello i'm </h1>
@endunless

@isset($ist)
    <h1>this value is true</h1>
@endisset

@isset($ist)
  <h1>hvcn cvhbcvh hcxh ch</h1>
@endisset

@empty ($emt)
    empty

@endempty
