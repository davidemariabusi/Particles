@label([
    'label' => $label ?? old('label'),
    'id' => $id ?? old('id'),
    'tooltip' => $tooltip ?? old('$tooltip'),
    'required' => $required ?? old('required')
])
@endlabel
<input
    @particlesId([
        'id' => $id ?? old('id')
    ])
    @endparticlesId
    @particlesType([
        'type' => $type ?? 'text'
    ])
    @endparticlesType
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
    @particlesValue([
        'value' => $value ?? old('value')
    ])
    @endparticlesValue
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
