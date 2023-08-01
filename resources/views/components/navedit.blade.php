<x-nav-link :href="route('admin.edit-section.aboutme')" :active="request()->routeIs('admin.edit-section.aboutme')">
    {{ __('About Me') }}
</x-nav-link>
<x-nav-link :href="route('admin.edit-section.skills')" :active="request()->routeIs('admin.edit-section.skills')">
    {{ __('Skills') }}
</x-nav-link>
<x-nav-link :href="route('admin.edit-section.portofolio')" :active="request()->routeIs('admin.edit-section.portofolio')">
    {{ __('Portofolio') }}
</x-nav-link>
