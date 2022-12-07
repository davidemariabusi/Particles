<?php

namespace Dmb\Particles;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ParticlesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/components', 'particles');

        Blade::component('particles::fields.checkbox', 'checkbox');
        Blade::component('particles::fields.datepicker', 'datepicker');
        Blade::component('particles::fields.input', 'input');
        Blade::component('particles::fields.label', 'label');
        Blade::component('particles::fields.multiple', 'multiple');
        Blade::component('particles::fields.radio', 'radio');
        Blade::component('particles::fields.select', 'select');
        Blade::component('particles::fields.textarea', 'textarea');
        Blade::component('particles::fields.tooltip', 'tooltip');

        Blade::component('particles::fields.particles.class', 'particlesClass');
        Blade::component('particles::fields.particles.datas', 'particlesDatas');
        Blade::component('particles::fields.particles.disabled', 'particlesDisabled');
        Blade::component('particles::fields.particles.id', 'particlesId');
        Blade::component('particles::fields.particles.name', 'particlesName');
        Blade::component('particles::fields.particles.readonly', 'particlesReadonly');
        Blade::component('particles::fields.particles.required', 'particlesRequired');
        Blade::component('particles::fields.particles.rows', 'particlesRows');
        Blade::component('particles::fields.particles.style', 'particlesStyle');
        Blade::component('particles::fields.particles.type', 'particlesType');
        Blade::component('particles::fields.particles.value', 'particlesValue');
    }
}
