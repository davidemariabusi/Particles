@label([
    'label' => $label ?? old('label'),
    'id' => $id ?? old('id'),
    'tooltip' => $tooltip ?? old('$tooltip'),
    'required' => $required ?? old('required')
])
@endlabel
<textarea
    @particlesId([
        'id' => $id ?? old('id')
    ])
    @endparticlesId
    @if ( isset($ckeditor) && $ckeditor === true )
        @particlesClass([
            'class' => $class ?? 'form-control ckeditor'
        ])
        @endparticlesClass
    @else
        @particlesClass([
            'class' => $class ?? 'form-control'
        ])
        @endparticlesClass
    @endif
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
    @particlesRows([
        'rows' => $rows ?? old('rows')
    ])
    @endparticlesRows
    @particlesDatas([
        'datas' => $datas ?? []
    ])
    @endparticlesDatas
>{{ $slot }}</textarea>
