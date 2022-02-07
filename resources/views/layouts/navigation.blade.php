<header class="flex flex-wrap items-center justify-between py-4 md:py-8">
    <a href="{{ route('landing') }}" aria-label="Vertex IT" title="Vertex IT">
        <img src="{{ asset('img/logo.svg') }}" class="h-5 sm:h-6 md:h-7" alt="Vertex IT logo">
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
    <nav class="navigation toggle">
        <a
            href="{{ route('landing') }}"
            class="navigation-item @if(Route::currentRouteName() === 'landing') active  @endif"
        >
            Home
        </a>
        <a
            href="{{ route('services') }}"
            class="navigation-item @if(Route::currentRouteName() === 'services') active  @endif"
        >
            Services
        </a>
        <a
            href="{{ route('projects') }}"
            class="navigation-item @if(Route::currentRouteName() === 'projects' || Request::is('projects/*')) active  @endif"
        >
            Our work
        </a>
        <a
            href="{{ route('contact') }}"
            class="navigation-item @if(Route::currentRouteName() === 'contact') active  @endif"
        >
            Contact us
        </a>
    </nav>
</header>
