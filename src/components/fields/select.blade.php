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
        'class' => $class ?? 'form-control'
    ])
    @endparticlesClass
    @particlesName([
        'name' => $name ?? old('name')
    ])
    @endparticlesName
    @particlesStyle([
        'style' => $style ?? old('style')
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
>
    <option value="" selected disabled>
        @if ( isset($disabledText) && !empty($disabledText)  )
            {{ $disabledText }}
        @else
            {{ __('Select an option')  }}
        @endif
    </option>
    {{ $slot }}
</select>
