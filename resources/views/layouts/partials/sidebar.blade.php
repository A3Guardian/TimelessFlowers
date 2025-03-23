<div class="fixed top-0 left-0 h-full w-64 bg-white shadow-lg transition-transform transform -translate-x-full md:translate-x-0" id="sidebar">
    <div class="p-4 text-xl font-semibold">
        <div class="text-3xl font-bold text-gray-900 whitespace-nowrap">
            Timeless Flowers<span class="text-pink-500">.</span>
        </div>
    </div>

    <ul class="mt-6">
        <li class="px-4 py-2 hover:bg-gray-300">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="px-4 py-2 hover:bg-gray-300">
            <a href="#">Users</a>
        </li>
        <li class="px-4 py-2 hover:bg-gray-300">
            <a href="#">Settings</a>
        </li>
        <li class="px-4 py-2 hover:bg-gray-300">
            <a href="{{ route('admin.contacts') }}">Contact Submissions</a>
        </li>
    </ul>
</div>

<!-- Toggle Button -->
<button class="md:hidden absolute top-4 left-4 bg-pink-500 text-white p-2 rounded" onclick="toggleSidebar()">
    ☰
</button>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('-translate-x-full');
    }
</script>