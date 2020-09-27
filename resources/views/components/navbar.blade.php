<div class="bg-gray-900 text-gray-400 rounded-b-lg lg:rounded-none">
    <div
        class="bg-cool-gray-500 mx-4 py-5 block flex flex-col md:flex-row md:justify-between leading-loose font-medium">
        <ul class="flex flex-col md:flex-row items-center">
            <li>
                <a href="#" class="mx-3">Home</a>
            </li>

            <li>
                <a href="#" class="mx-3">Dashboard</a>
            </li>
        </ul>

        <ul class="flex flex-col md:flex-row items-center">
            @guest
            <li>
                <a href="{{ route('auth.register') }}" class="mx-3">Register</a>
            </li>

            <li>
                <a href="#" class="mx-3">Login</a>
            </li>

            @else
            <li>
                <a href="#" class="mx-3">{{ auth()->user()->name }}</a>
            </li>

            <li>
                <a href="#" class="mx-3">Logout</a>
            </li>
            @endguest
        </ul>
    </div>
</div>
