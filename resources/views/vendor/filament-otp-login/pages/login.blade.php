<style>
    .fi-logo{
        display: none;
    }
    .fi-body{
        background-image: url({{asset('images/login-bg1.jpg')}});
        background-size: cover;
        background-repeat: no-repeat;
    }
    .dark .fi-body {
        background-image : url({{asset('images/dark-login-bg2.png')}});
        background-size: cover;
        background-position: center bottom;
        background-repeat: no-repeat;
        /* background-image : none; */
    }
    .fi-simple-main{
        max-width: 1000px;
        width: 1000px;
        max-height: 650px;
        height: 650px;
    }
    .fi-simple-page{
        max-width: 400px;
        width: 400px;
        max-height: 600px;
        height: 600px;
        margin-top: 10%;
    }
    .modal-img{
        width: 500px;
        margin-top: 15%;
        margin-left: -25px;
    }
    .modal-cont-1{
        padding-top: 5%;
    }
    .modal-cont-2{
        max-width: 900px;
        width: 900px;
        max-height: 120px;
        height: 120px;
        margin-top: -190px;
        padding: 20px;
        opacity: 75%;
    }
    .modal-notice{
        margin-left: -5px;
    }
    .modal-icon{
        max-width: 20px;
        width: 20px;
    }
    .modal-notice-text{
        margin-left: -4px;
    }
</style>
<div class="grid grid-flow-col">
@livewireStyles
<img class="modal-img" src="{{asset('storage/sites/logo.png')}}" >
<x-filament-panels::page.simple>
    @livewireScripts
    @if (filament()->hasRegistration())
        <x-slot name="subheading">
            {{ __('filament-panels::pages/auth/login.actions.register.before') }}

            {{ $this->registerAction }}
        </x-slot>
    @endif

    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::AUTH_LOGIN_FORM_BEFORE, scopes: $this->getRenderHookScopes()) }}

    @switch($this->step)

        @case(1)
            <x-filament-panels::form wire:submit="sendOtp">
                {{ $this->form }}

                <x-filament-panels::form.actions
                    :actions="$this->getCachedFormActions()"
                    :full-width="true"
                />
            </x-filament-panels::form>
            @break
        @default

            <x-filament-panels::form wire:submit="authenticate">
                {{ $this->otpForm }}
                <x-filament-panels::form.actions
                    :actions="$this->getOtpFormActions()"
                    :full-width="true"
                />

                <div wire:ignore x-data="{
                        timeLeft: $wire.countDown,
                        timerRunning: false,
                        resendCode() {
                            this.timeLeft = $wire.countDown;
                            this.$refs.resendLink.classList.add('hidden');
                            this.$refs.timerWrapper.classList.remove('hidden');
                            this.startTimer();
                            this.$dispatch('resendCode');
                        },
                        startTimer() {
                            this.timerRunning = true;
                            const interval = setInterval(() => {
                                if (this.timeLeft <= 0) {
                                    clearInterval(interval);
                                    this.timerRunning = false;
                                    this.$refs.resendLink.classList.remove('hidden');
                                    this.$refs.timerWrapper.classList.add('hidden');
                                }
                                this.timeLeft -= 1;
                                this.$refs.timeLeft.value = this.timeLeft;
                            }, 1000);
                        },
                        init() {
                            this.startTimer();
                            document.addEventListener('countDownStarted', () => {
                                this.startTimer();
                            });
                        }
                    }">
                    <div x-show="timerRunning" class="timer font-semibold resend-link text-end text-primary-600 text-sm" x-ref="timerWrapper">
                        <span x-text="timeLeft"></span> {{ __('filament-otp-login::translations.view.time_left') }}
                    </div>
                    <a x-on:click="resendCode" x-show="!timerRunning" x-ref="resendLink" class="hidden cursor-pointer font-semibold resend-link text-end text-primary-600 text-sm">
                        {{ __('filament-otp-login::translations.view.resend_code') }}
                    </a>
                    <input type="hidden" x-ref="timeLeft" name="timeLeft" />
                </div>

            </x-filament-panels::form>
    @endswitch

    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::AUTH_LOGIN_FORM_AFTER, scopes: $this->getRenderHookScopes()) }}
</x-filament-panels::page.simple>

</div>
