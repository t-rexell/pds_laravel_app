<x-app-layout>

    <x-heading>
        <x-slot:title>
            Users
        </x-slot:title>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('users.create') }}"
                class="btn btn-sm btn-gray-800 d-inline-flex align-items-center animate-up-2">
                <i class="icon icon-xs me-2 bi bi-plus-lg"></i>
                Add User
            </a>
        </div>
    </x-heading>
    <div class="table-settings mb-4">
        <div class="row align-items-center justify-content-between">
            <div class="col-9 col-lg-8 d-md-flex">
                <div class="input-group me-2 me-lg-3 fmxw-300">
                    <span class="input-group-text">
                        <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <input id="custom-search-field" type="text" class="form-control" placeholder="Search user..">
                </div>
            </div>
            <div class="col-3 col-lg-4 d-flex justify-content-end">
                <x-table-page-length></x-table-page-length>
            </div>
        </div>
    </div>
    <div class="card mb-5">
        <div class="card-body">
            <x-table id="userTable">
                <thead class="thead-light">
                    <tr>
                        <th class="rounded-start">First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th class="rounded-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </x-table>
        </div>
    </div>

    {{-- modal --}}
    <x-modal modal-id="delete-user-modal" button-id="destroy-user" type="delete" label="User" />

    @push('scripts')
        <script type="text/javascript" src="{{ asset('js/page/user/index.js') }}"></script>
    @endpush
</x-app-layout>
