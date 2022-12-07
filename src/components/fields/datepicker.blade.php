@label([
    'label' => $label ?? old('label'),
    'id' => $id ?? old('id'),
    'tooltip' => $tooltip ?? old('$tooltip'),
    'required' => $required ?? old('required')
])
@endlabel
<div class="input-group input-date">
    <input
        @particlesType([
            'type' => $type ?? 'text'
        ])
        @endparticlesType
        @particlesId([
            'id' => $id ?? old('id')
        ])
        @endparticlesId
        @particlesClass([
            'class' => $class ?? 'form-control date-picker'
        ])
        @endparticlesClass
        @particlesName([
            'name' => $name ?? old('name')
        ])
        @endparticlesName
        @particlesValue([
            'value' => $value ?? old('value')
        ])
        @endparticlesValue
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
    <div class="input-group-append">
        <span class="input-group-text">
            <i class="fa fa-calendar"></i>
        </span>
    </div>
</div>
