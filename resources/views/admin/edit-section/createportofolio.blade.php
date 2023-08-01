<x-app-layout>
    <x-slot name="header">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <a href="{{ route('admin.edit-section.index') }}">
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
                    {{ __("Create New Portofolio") }}
                    <a href="{{ route('admin.edit-section.portofolio') }}" class="btn btn-secondary px-12 hover:text-gray-500 hover:bg-dark-1000 rounded text-white">Back to List</a>
                </div>

                <div class="p-6">
                    <form action="{{ route('admin.edit-section.portofolio.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" id="image" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" name="category" id="category" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="detail" class="form-label">Detail</label>
                            <input type="file" name="detail" id="detail" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="url" class="form-label">URL</label>
                            <input type="text" name="url" id="url" class="form-control" required>
                        </div>
                        <div class="m-4" align="center">
                            <button class="btn btn-secondary px-12 bg-dark hover:text-gray-500 rounded" type="submit">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
