@extends('layouts.admin')

@section('content')
<div class="bg-white shadow-md p-6 rounded-lg">
    <h2 class="text-xl font-bold text-pink-600 mb-4">Contact Submissions</h2>

    @if(session('success'))
    <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="bg-pink-500 text-white">
                <th class="py-2 px-4 border">#</th>
                <th class="py-2 px-4 border">Name</th>
                <th class="py-2 px-4 border">Email</th>
                <th class="py-2 px-4 border">Phone</th>
                <th class="py-2 px-4 border">Message</th>
                <th class="py-2 px-4 border">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr class="border">
                <td class="py-2 px-4">{{ $loop->iteration }}</td>
                <td class="py-2 px-4">{{ $contact->name }}</td>
                <td class="py-2 px-4">
                    <a href="mailto:{{ $contact->email }}" class="text-blue-500 hover:underline">
                        {{ $contact->email }}
                    </a>
                </td>
                <td class="py-2 px-4">
                    <a href="tel:{{ $contact->phone_number }}" class="text-green-500 hover:underline">
                        {{ $contact->phone_number }}
                    </a>
                </td>
                <td class="py-2 px-4">
                    <button onclick="openModal('message-{{ $contact->id }}')"
                        class="text-pink-600 hover:underline">
                        {{ Str::limit($contact->message, 50) }}
                    </button>
                </td>
                <td class="py-2 px-4">{{ $contact->created_at->format('Y-m-d') }}</td>
            </tr>

            <!-- Modal -->
            <div id="message-{{ $contact->id }}" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden flex items-center justify-center">
                <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                    <h2 class="text-xl font-bold text-pink-600 mb-4">Full Message</h2>
                    <p class="text-gray-800">{{ $contact->message }}</p>
                    <div class="mt-4 flex justify-end">
                        <button onclick="closeModal('message-{{ $contact->id }}')"
                            class="bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-700">
                            Close
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
    }
</script>
@endsection