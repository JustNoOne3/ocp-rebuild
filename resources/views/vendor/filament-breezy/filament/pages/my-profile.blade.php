<x-filament::page>
    <style>
        .fi-body{
            background-image: url({{asset('images/dash-bg4.png')}});
            background-size: cover;
            background-repeat: no-repeat;
        }
        .fi-topbar nav{
            background-color: #0A083B;
            opacity: 90%; 
        }
        .fi-topbar-item-label{
            font-weight: bold;
        }
        .fi-header-heading{
            color: #ffff;
        }
        .dark .fi-body {
            background-image : url({{asset('images/dark-dash-bg.png')}});
            background-size: cover;
            background-position: center top;
            background-repeat: no-repeat;
        }
        .dark .fi-topbar nav{
            opacity: 90%;
        }
        .fi-section{
            opacity: 95%;
        }
        .fi-modal-trigger{
            opacity: 100%;
        }

        /* Admin Page Css */
        .fi-sidebar {
            background-image : url({{asset('images/sidebar-bg.png')}});
            background-size: cover;
            background-position: center bottom;
            background-repeat: no-repeat;
        }
        .dark .fi-sidebar {
            background-image : url({{asset('images/sidebar-bg2.png')}});
            background-size: cover;
            background-position: center bottom;
            background-repeat: no-repeat;
        }
        .dark .fi-topbar nav{
            background-color: #454A54;
        }
        .fi-sidebar-header{
            background-color: #0A083B;
        }

    </style>
    <div class="space-y-6 divide-y divide-gray-900/10 dark:divide-white/10">
        @foreach ($this->getRegisteredMyProfileComponents() as $component)
            @unless(is_null($component))
                @livewire($component)
            @endunless
        @endforeach
    </div>
</x-filament::page>
