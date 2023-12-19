{{-- If else --}}
@if ($num === 1)
<p>The number is one.</p>
@elseif ($num === 2)
<p>The number is two</p>
@else
<p>them number// sets</p>
@endif;
<br/>

{{-- Switch --}}

@switch($num)
  @case(1)
      First case. . .
      @break

  @case(2)
      Second case. . .
      @break

  @default
      Default case. . .
@endswitch
<br/>

{{-- Loops --}}

<br/>

@for ($i = 0; $i < 10; $i++)
  The current value is {{ $i }} <br/>
@endfor

{{-- @while (true)
<p>I'm looping forever.</p>
@endwhile --}}
