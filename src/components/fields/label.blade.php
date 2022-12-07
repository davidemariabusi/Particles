@if ( isset($label) && !empty($label) )
    <label
        @if ( isset($id) && !empty($id) )
            for="{{ $id }}"
        @endif
    >
        {{ $label  }} {{ isset($required) && $required === true ? '*' : null }}
        @if ( isset($tooltip) && count($tooltip) > 0 )
            @tooltip([
                'tooltipName' => $tooltip['name'],
                'tooltipContent' => $tooltip['content'],
            ])
            @endtooltip
        @endif
    </label>
@endif
