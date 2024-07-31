<x-filament-panels::page.simple>
    <style>
        .fi-body{
            background-image: url({{asset('images/login-bg1.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <x-filament-panels::form wire:submit="authenticate">
        {{ $this->form }}

        <x-filament-panels::form.actions :actions="$this->getCachedFormActions()"
            :full-width="$this->hasFullWidthFormActions()" />
    </x-filament-panels::form>
</x-filament-panels::page.simple>
