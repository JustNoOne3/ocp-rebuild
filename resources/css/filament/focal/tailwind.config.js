import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/Focal/**/*.php',
        './resources/views/filament/focal/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
}
