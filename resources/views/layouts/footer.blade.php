<footer class="pt-16 app-container">
    <div class="flex flex-col lg:flex-row flex-wrap lg:flex-nowrap justify-between mb-14 lg:mb-24">
        <div class="mb-16 lg:mb-0">
            <a class="mb-4 lg:mb-8 block" href="{{ route('landing') }}" title="Vertex IT logo">
                <img src="{{ asset('img/logo.svg') }}" style="height: 25px;" alt="">
            </a>
            <ul class="leading-loose">
                <li class="text-gray-600">Uroša Predića 14</li>
                <li class="text-gray-600">76300 Bijeljina</li>
                <li class="text-gray-600">Bosnia and Herzegovina</li>
                <li class="text-gray-600">VAT ID 511637020004</li>
            </ul>
        </div>
        <div class="mb-12 lg:mb-0">
            <h5 class="mb-4 lg:mb-8 text-sm font-semibold text-gray-400 tracking-wider uppercase">Contact Info</h5>
            <ul class="leading-loose">
                <li class="text-gray-600">info@vertex-it.com</li>
                <li class="text-gray-600">Ulica Uroša Predića 14</li>
                <li class="text-gray-600">Bijeljina</li>
            </ul>
        </div>
        <div>
            <h5 class="mb-4 lg:mb-8 text-sm font-semibold text-gray-400 tracking-wider uppercase">Links</h5>
            <ul class="leading-loose">
                <li>
                    <a class="text-gray-600 hover:text-red-500" href="{{ route('landing') }}">Home</a>
                </li>
                <li>
                    <a class="text-gray-600 hover:text-red-500" href="{{ route('services') }}">Services</a>
                </li>
                <li>
                    <a class="text-gray-600 hover:text-red-500" href="#">Our work</a>
                </li>
                <li>
                    <a class="text-gray-600 hover:text-red-500" href="#">Contact us</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="py-8 border-t border-gray-150">
        <p class="text-gray-500 text-center">
            &copy; {{ now()->year }} {{ config('app.name') }}
        </p>
    </div>
</footer>
