
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Particles - compose your form
[![Latest Version on Packagist](https://img.shields.io/packagist/v/dmb/particles.svg?style=flat-square)](https://packagist.org/packages/dmb/particles)
---
A package that provides blade components, compatible with Laravel 6 and earlier, to compose forms in a more structured and easy way.
---

## Installation

You can install the package via composer:

```bash
composer require dmb/particles
```

## Usage

Using Particles is pretty straightforward. Each component renders the html markup and takes advantage of the convenience and modularity of the parameters which, in some cases, have default values that can be overridden.

All components are based on [bootstrap 4](https://getbootstrap.com/docs/4.6/getting-started/introduction/)

The components available are:

- checkbox
- datepicker - *based on [Datepicker for Bootstrap v1.9.0](https://github.com/uxsolutions/bootstrap-datepicker)* 
- input
- label
- multiple - *based on [Selec2](https://select2.github.io)*
- radio
- select
- textarea - *ckeditor option based on [CkEditor](https://ckeditor.com)*
- tooltip - *dependecy [FancyBox](http://fancyapps.com/fancybox/)*

Supported parameters are

- label: string
- tooltip: array *<name,content>*
- id: int
- type: string *default: text|radio|checkbox*
- class: string *default: form-control|form-control date-picker|form-control multiple-select*
- name: string
- value: string
- style: string *inline style default: width: 100%;|null*
- readonly: ?bool *default null*
- required: ?bool *default null - if true, an asterisk is placed next to the label*
- disabled: ?bool *default null*
- datas: array *<[key,value]> dynamically render data-attributes*

Specific parameters for the textarea component are

- ckeditor: ?bool *default null - if true, activate the ckeditor plugin*
- rows: int *default 3*

Specific parameters for the select component are

- disableText: string *default __('Select an option')*

Specific parameters for the multiple component are

- multiple: ?bool *default mutiple="multiple"*
- dataPlaceholder: ?string *default __('Select an option')*
- dataAllowClear: ?bool *default true*
- dataTags: ?bool

Specific parameters for the radio and checkbox component are

- styleText: string *default margin-left:5px*

*The select, multiple and the textarea components can use the slot to place the relative code between the opening and closing of the component itself*

## Some examples

```blade
@input([
    'label' => 'Label',
    'name' => 'name',
    'tooltip' => [
        'name' => 'name',
        'content' => 'Content text'
    ],
    'value' => 'value',
    'required' => true
])
@endinput
```

```blade
@select([
    'label' => 'Age',
    'name' => 'age',
    'tooltip' => [
        'name' => 'age',
        'content' => 'Lorem ipsum age.'
    ],
    'required' => true
])
    @foreach ( [30,31,32,33,34] as $age )
        <option
            value="{{ $age }}"
            {{ $age === 34 ? 'selected' : null }}
        >
            {{ $age }}
        </option>
    @endforeach
@endselect
```

```blade
@textarea([
    'label' => 'Description',
    'name' => 'description',
    'tooltip' => [
        'name' => 'description',
        'content' => 'Lorem ispum description'
    ],
    'rows' => 10,
    'required' => true,
    'readonly' => true
])
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sed necessitatibus dignissimos sint porro fugiat natus, eligendi obcaecati nulla itaque expedita commodi tenetur neque quos, sequi pariatur quidem provident reiciendis.
@endtextarea
```

```blade
@multiple([
    'label' => 'Roles',
    'name' => 'roles',
    'dataTags' => true,
    'required' => true
])
    @foreach ( ['Superadmin','Admin','User'] as $role )
        <option
            value="{{ $role }}"
            {{ $role === 'Admin' ? 'selected' : null }}
        >
            {{ $role }}
        </option>
    @endforeach
@endmultiple
```

***The complete documentation with all the parameters, the functionalities and the will be published soon.***

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Davide Maria Busi](https://github.com/davidemariabusi)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
