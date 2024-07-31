import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/BwcFocal/**/*.php',
        './resources/views/filament/bwc-focal/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
}
