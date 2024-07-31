<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">

        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <style>
            [x-cloak] {
                display: none !important;
            }

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
            .fi-logo::after {
                content: "ERS"
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
                opacity: 90%;
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
                background-color: #140F50;
            }
        </style>

        @filamentStyles
        @vite('resources/css/app.css')
    </head>

    <body class="antialiased">
        {{ $slot }}

        @livewire('notifications')

        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>
