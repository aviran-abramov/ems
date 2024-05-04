<x-layout>
    <div class="w-[90%] m-auto border-2 border-gray-300 mt-4 rounded-md">
        <table class="table mx-auto">
            <thead class=" border-b-2 border-neutral-200">
                <tr>
                    <th></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>ID</th>
                    <th>Date Added</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($employees as $employee)
                <tr class="{{ $loop->even ? 'bg-base-300' : '' }} hover:bg-gray-300">
                    <td>{{ $loop->iteration }}</th>
                    <td>{{ $employee->first_name }}</th>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->phone_number }}</td>
                    <td>{{ $employee->identity_number }}</td>
                    <td>{{ $employee->created_at->format('d-m-Y') }}</td>
                    <td class="{{ $employee->is_active ? 'bg-green-500' : 'bg-orange-500' }}">{{ $employee->is_active ? 'Active' : 'Inactive' }}</td>
                    <td class="flex items-center gap-2">
                        <a class="bg-purple-500 px-2 py-1 rounded text-white" href="{{ url('dashboard/employees/'.$employee->id.'/edit') }}">Edit</a>
                        <a class="bg-red-500 px-2 py-1 rounded text-white" href="{{ url('dashboard/employees/'.$employee->id.'/delete') }}">Delete</a>
                        <form class="mb-0" method="POST" action="{{ url('/dashboard/employees') }}">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="employee_id" value="{{ $employee->id }}">

                            <button class="{{ $employee->is_active ? 'bg-orange-500' : 'bg-green-600' }} px-2 py-1 rounded text-white" type="submit" class="bg-blue-500 px-2 py-1 rounded text-white">
                                {{ $employee->is_active ? 'Deactivate' : 'Activate' }}
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>