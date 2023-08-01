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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Create Skill") }}
                </div>

                <form action="{{ route('admin.edit-section.skills.store') }}" method="POST">
                    @csrf
                    <div class="container mb-4">
                        <label for="skill" class="mb-1">Skill Name</label>
                        <input type="text" class="form-control rounded" id="skill" name="skill" required>
                    </div>
                    <div class="container mb-3">
                        <div style="display: flex; flex-direction: column; align-items: center">
                            <label for="proficient">Proficient</label>
                            <input type="range" value="" min="1" max="100" oninput="this.nextElementSibling.value = this.value" style="width: 80%;" class="my-2" id="proficient" name="proficient" required>
                            <output style="color: orangered;">50</output>
                        </div>
                    </div>
                    <div class="m-4" align="center">
                        <button class="btn btn-secondary px-12 bg-dark hover:text-gray-500 rounded" type="submit">Create Skill</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</x-app-layout>
