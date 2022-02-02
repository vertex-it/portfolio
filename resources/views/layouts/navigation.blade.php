<header class="flex flex-wrap items-center justify-between py-4 md:py-8">
    <a href="/" aria-label="Vertex IT" title="Vertex IT">
        <img
            src="{{ asset('img/logo.svg') }}"
            class="h-7"
            alt="Vertex IT logo"
        >
    </a>
    <div class="flex md:hidden">
        <button class="p-1 text-red-500 focus:outline-none focus:ring-2 focus:ring-red-500" id="hamburger">
            <svg
                width="20"
                height="20"
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>
        </button>
    </div>
    <nav class="toggle hidden md:flex w-full md:w-auto md:space-x-8 mt-4 md:mt-0 tracking-tighter">
        <a
            href="{{ route('landing') }}" aria-label="Our product" title="Our product"
            class="block md:inline-block py-3 text-center text-lg md:text-left md:py-0 border-b border-gray-200 md:border-0 text-gray-900 transition-colors duration-200 hover:text-red-600 @if(Route::currentRouteName() === 'landing') text-red-500 font-semibold  @endif"
        >
            Home
        </a>
        <a
            href="{{ route('services') }}"
            aria-label="Our services"
            title="Our services"
            class="block md:inline-block py-3 text-center text-lg md:text-left md:py-0 border-b border-gray-200 md:border-0 text-gray-900 transition-colors duration-200 hover:text-red-500 @if(Route::currentRouteName() === 'services') text-red-500 font-semibold  @endif"
        >
            Services
        </a>
        <a
            href="{{ route('projects') }}" aria-label="Product pricing" title="Product pricing"
            class="block md:inline-block py-3 text-center text-lg md:text-left md:py-0 border-b border-gray-200 md:border-0 text-gray-900 transition-colors duration-200 hover:text-red-500 @if(Route::currentRouteName() === 'projects') text-red-500 font-semibold  @endif"
        >
            Our work
        </a>
        <a
            href="{{ route('contact') }}" aria-label="Product pricing" title="Product pricing"
            class="block md:inline-block py-3 text-center text-lg md:text-left md:py-0 border-b border-gray-200 md:border-0 text-gray-900 transition-colors duration-200 hover:text-red-500 @if(Route::currentRouteName() === 'contact') text-red-500 font-semibold  @endif"
        >
            Contact us
        </a>
    </nav>
</header>
