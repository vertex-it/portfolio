<div class="relative bg-gray-50 overflow-hidden">
    <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full" aria-hidden="true">
        <div class="relative h-full max-w-7xl mx-auto">
            <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
            </svg>
            <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
            </svg>
        </div>
    </div>

    <div class="relative pb-4 lg:pb-24">
        <div class="app-container">
            @include('layouts.navigation')
        </div>

        <main class="app-container mt-16 lg:mt-24">

            <div class="mb-10 max-w-2xl mx-auto">
                @if (isset($breadcrumbs))
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol role="list" class="flex items-center mx-auto mb-6">
                            <li>
                                <div>
                                    <a href="{{ route('landing') }}" class="text-gray-400 hover:text-gray-500">
                                        <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                        </svg>
                                        <span class="sr-only">Home</span>
                                    </a>
                                </div>
                            </li>

                            <li class="ml-4">
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <a href="{{ $breadcrumbs['url'] }}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                                        {{ $breadcrumbs['parent'] }}
                                    </a>
                                </div>
                            </li>
                        </ol>
                    </nav>
                @endif
                <h1 class="page-main-title">
                    {{ $title }}
                </h1>
                <p class="page-main-description">
                    {{ $description }}
                </p>
                @if (isset($createdAt, $minutesToRead))
                    <div class="text-gray-400 uppercase tracking-tight text-center mt-10">
                        <span>{{ $createdAt }}</span>
                        &middot;
                        <span>{{ $minutesToRead }}</span>
                    </div>
                @endif
            </div>
        </main>
    </div>
</div>
