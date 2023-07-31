<x-app-layout>
    <x-slot name="header">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"><a href="{{route('admin.edit-section.index')}}">
            {{ __('Edit Section') }}
        </a></h2>
        <x-nav-link :href="route('admin.edit-section.aboutme')" :active="request()->routeIs('admin.edit-section.aboutme')">
            {{ __('About Me') }}
        </x-nav-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Edit Section Hero") }}
                </div>

                <form action="{{route('admin.edit-section.update', $socials->first()->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    @foreach ($socials as $socials)
                    <div class="container mb-3">
                        <label for="linkedin">Linkedin</label>
                        <input type="text" class="form-control rounded" id="linkedin" name="linkedin" value='{{$socials->linkedin}}'>
                    </div>
                    <div class="container mb-3">
                        <label for="github">Github</label>
                        <input type="text" class="form-control rounded" id="github" name="github" value='{{$socials->github}}'>
                    </div>
                    <div class="container mb-3">
                        <label for="twitter">Twitter</label>
                        <input type="text" class="form-control rounded" id="twitter" name="twitter" value='{{$socials->twitter}}'>
                    </div>
                    <div class="container mb-3">
                        <label for="instagram">Instagram</label>
                        <input type="text" class="form-control rounded" id="instagram" name="instagram" value='{{$socials->instagram}}'>
                    </div>
                    <div class="container mb-3">
                        <label for="gmail">Gmail</label>
                        <input type="text" class="form-control rounded" id="gmail" name="gmail" value='{{$socials->gmail}}'>
                    </div>
                    <div class="m-4" align="center">
                        <button class="btn btn-secondary px-12 bg-dark hover:text-gray-500 rounded" type="submit">Save Edit</button>
                    </div>
                    @endforeach
                </form>

            </div>
        </div>
    </div>
    @push('after-script')
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Your edit has been saved',
                showConfirmButton: true,
                timer: 2000
            })
        </script>
    @endif
    @endpush

</x-app-layout>
