<x-app-layout>
    <x-slot name="header">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="{{route('admin.edit-section.index')}}">
            {{ __('Edit Section') }}
            </a>
        </h2>
            @include('components.navedit')
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 px-12 text-gray-900 dark:text-gray-100 d-flex justify-content-between align-items-center">
                    {{ __("Edit Section Skills") }}
                    <a href="{{route('admin.edit-section.portofolio.create')}}" class="btn btn-secondary px-12 hover:text-gray-500 hover:bg-dark-1000 rounded text-white">Add Skills</a>
                </div>

                <div class="table-responsive px-6">
                    <table class="table table-striped table-hover border">
                        <thead class="mx-auto">
                            <tr>
                                <th class="text-center">No</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Detail</th>
                                <th>URL</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="mx-auto">
                            @foreach ($portofolio as $portofolio)
                            <tr>
                                <td class="text-center align-middle">
                                    {{$loop->iteration}}
                                </td>
                                <td class="align-middle">
                                    <img src="{{asset('storage/assets/' . $portofolio->image)}}" class="lazy img-fluid zoom-image" alt="" style="max-width: 90px;">
                                </td>
                                <td class="align-middle">
                                    {{$portofolio->title}}
                                </td>
                                <td class="align-middle">
                                    {{$portofolio->description}}
                                </td>
                                <td class="align-middle">
                                    {{$portofolio->category}}
                                </td>
                                <td class="align-middle">
                                    <img src="{{asset('storage/assets/' . $portofolio->detail)}}" class="lazy img-fluid zoom-image" alt="" style="max-width: 90px;">
                                </td>
                                <td class="align-middle">
                                    {{$portofolio->url}}
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex align-items-center gap-2">
                                        <form action="{{route('admin.edit-section.portofolio.destroy', $portofolio->id)}}" method="post" onsubmit="return confirm('Yakin Hapus data?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm active" type="submit"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    @push('after-script')
    @if ($message = Session::get('successdelete'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Portofolio deleted successfully!',
                showConfirmButton: true,
                timer: 2000
            })
        </script>
    @endif
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Portofolio Created successfully!',
                showConfirmButton: true,
                timer: 2000
            })
        </script>
    @endif
    @endpush

</x-app-layout>
