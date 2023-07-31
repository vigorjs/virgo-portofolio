<x-app-layout>
    <x-slot name="header">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="{{route('admin.edit-section.index')}}">
            {{ __('Edit Section') }}
            </a>
        </h2>
            <x-nav-link :href="route('admin.edit-section.aboutme')" :active="request()->routeIs('admin.edit-section.aboutme')">
                {{ __('About Me') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Edit Section About Me") }}
                </div>

                <form action="{{ route('admin.edit-section.aboutme.update', ['id' => $sectionprofiles->first()->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    @foreach ($sectionprofiles as $sectionprofiles)
                    <div class="container mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control border rounded px-2" name="image" id="image" accept="image/*">
                        <span class="text-secondary">Jika tidak ingin mengganti gambar jangan diisi!</span>
                    </div>
                    <div class="container mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control rounded" id="name" name="name" value='{{$sectionprofiles->name}}'>
                    </div>
                    <div class="container mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value='{{$sectionprofiles->phone}}'>
                    </div>
                    <div class="container mb-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value='{{$sectionprofiles->email}}'>
                    </div>
                    <div class="container mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value='{{$sectionprofiles->address}}'>
                    </div>
                    <div class="container mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="3" class="form-control">{{$sectionprofiles->description}}</textarea>
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
