<x-app-layout>
    <x-slot name="header">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Section') }}
        </h2>
            <x-nav-link :href="route('admin.edit-section.hero.index')" :active="request()->routeIs('admin.edit-section.hero.index')">
                {{ __('Hero') }}
            </x-nav-link>
            <x-nav-link :href="route('admin.edit-section.aboutme.index')" :active="request()->routeIs('admin.edit-section.aboutme.index')">
                {{ __('About Me') }}
            </x-nav-link>
        </div>
    </x-slot>

</x-app-layout>
