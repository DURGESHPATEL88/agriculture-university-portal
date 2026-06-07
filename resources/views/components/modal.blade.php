@props(['id', 'maxWidth', 'name', 'show' => false, 'focusable' => false])

@php
$show = $attributes->get('show', false);
$name = $attributes->get('name');
$focusable = $attributes->get('focusable', false);

$id = $id ?? ($name ?? md5($attributes->wire('model') ? (string) $attributes->wire('model') : 'default'));

$maxWidth = [
    'sm' => 'sm:max-w-sm',
    'md' => 'sm:max-w-md',
    'lg' => 'sm:max-w-lg',
    'xl' => 'sm:max-w-xl',
    '2xl' => 'sm:max-w-2xl',
][$maxWidth ?? '2xl'];
@endphp

<div
    @if(isset($__livewire))
        x-data="{ show: @entangle($attributes->wire('model')) }"
    @else
        x-data="{
            show: @js($show),
            focusables() {
                // All focusable elements
                let selector = 'a, button, input, textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'
                return [...$el.querySelectorAll(selector)]
                    // filter out visible ones
                    .filter(el => ! el.hasAttribute('disabled') && el.offsetWidth > 0 && el.offsetHeight > 0)
            },
            firstFocusable() { return this.focusables()[0] },
            lastFocusable() { return this.focusables()[this.focusables().length - 1] },
            nextFocusable() { return this.focusables()[this.focusables().indexOf(document.activeElement) + 1] || (this.focusables()[0] || $el) },
            prevFocusable() { return this.focusables()[this.focusables().indexOf(document.activeElement) - 1] || (this.focusables()[this.focusables().length - 1] || $el) },
        }"
        x-on:open-modal.window="show = ($event.detail === '{{ $name ?? '' }}'); if (show && {{ $focusable ? 'true' : 'false' }}) { $nextTick(() => { firstFocusable().focus() }) }"
        x-on:close-modal.window="show = ($event.detail === '{{ $name ?? '' }}') ? false : show"
        x-on:keydown.tab.prevent="$event.shiftKey ? prevFocusable().focus() : nextFocusable().focus()"
    @endif
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-show="show"
    id="{{ $id }}"
    class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
    style="display: none;"
>
    <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
        <div class="absolute inset-0 bg-gray-500 dark:bg-gray-900 opacity-75"></div>
    </div>

    <div x-show="show" class="mb-6 bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto"
                    x-trap.inert.noscroll="show"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        {{ $slot }}
    </div>
</div>
