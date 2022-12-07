@label([
    'label' => $label ?? old('label'),
    'id' => $id ?? old('id'),
    'tooltip' => $tooltip ?? old('$tooltip'),
    'required' => $required ?? old('required')
])
@endlabel
<select
    @particlesId([
        'id' => $id ?? old('id')
    ])
    @endparticlesId
    @particlesClass([
        'class' => $class ?? 'form-control multiple-select'
    ])
    @endparticlesClass
    @particlesName([
        'name' => $name ?? old('name')
    ])
    @endparticlesName
    @particlesStyle([
        'style' => $style ?? 'width: 100%;'
    ])
    @endparticlesStyle
    @particlesReadonly([
        'readonly' => $readonly ?? old('readonly')
    ])
    @endparticlesReadonly
    @particlesDisabled([
        'disabled' => $disabled ?? old('disabled')
    ])
    @endparticlesDisabled
    @particlesRequired([
        'required' => $required ?? old('required')
    ])
    @endparticlesRequired
    @particlesDatas([
        'datas' => $datas ?? []
    ])
    @endparticlesDatas
    {{--Specific to multiple--}}
    @if ( !isset($multiple) || $multiple === true )
        multiple="multiple"
    @endif
    @if ( isset($dataPlaceholder) && !empty($dataPlaceholder) )
        data-placeholder="{{ $dataPlaceholder }}"
    @else
        data-placeholder="{{ __('Select an option') }}"
    @endif
    @if ( isset($dataAllowClear) && !empty($dataAllowClear) )
        data-allow-clear="{{ $dataAllowClear }}"
    @else
        data-allow-clear="true"
    @endif
    @if ( isset($dataTags) && !empty($dataTags) )
        data-tags="{{ $dataTags }}"
    @endif
>
    {{ $slot }}
</select>
