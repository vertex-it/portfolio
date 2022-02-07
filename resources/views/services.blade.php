@extends('layouts.master')

@section('title', 'Services')

@section('content')
    @include('components.subpage-main-section', [
        'title' => 'Services',
        'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.'
    ])

    <div class="py-12 md:py-16 overflow-hidden lg:py-24">
        <div class="relative app-container">

            <div class="relative lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                <div class="relative">
                    <h2
                        class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl"
                        id="web-development"
                    >
                        Web Development
                    </h2>
                    <p class="mt-6 text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur minima sequi recusandae, porro maiores officia assumenda aliquam laborum ab aliquid veritatis impedit odit adipisci optio iste blanditiis facere. Totam, velit.
                    </p>

                    <dl class="mt-10 space-y-10">
                        <div class="relative">
                            <dt>
                                <p class="text-lg font-bold">Latest technologies</p>
                            </dt>
                            <dd class="mt-2 text-sm text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <p class="text-lg leading-6 font-semibold text-gray-900">Competitive exchange rates</p>
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <p class="text-lg leading-6 font-semibold text-gray-900">Something else</p>
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </dd>
                        </div>
                    </dl>
                </div>

                <div class="mt-10 -mx-4 relative lg:mt-0" aria-hidden="true">
                    <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404">
                        <defs>
                            <pattern id="ca9667ae-9f92-4be7-abcb-9e3d727f2941" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="784" height="404" fill="url(#ca9667ae-9f92-4be7-abcb-9e3d727f2941)" />
                    </svg>
                    <img class="relative mx-auto rounded-md" width="490" src="img/dev.svg" alt="">
                </div>
            </div>

            <div class="relative mt-12 sm:mt-16 lg:mt-24">
                <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
                    <div class="lg:col-start-2">
                        <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl">
                            Consulting
                        </h3>
                        <p class="mt-3 text-lg text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ex obcaecati natus eligendi delectus, cum deleniti sunt in labore nihil quod quibusdam expedita nemo.
                        </p>

                        <dl class="mt-10 space-y-10">
                            <div class="relative">
                                <dt>
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                        <!-- Heroicon name: outline/annotation -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Mobile notifications</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                                </dd>
                            </div>

                            <div class="relative">
                                <dt>
                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                        <!-- Heroicon name: outline/mail -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Reminder emails</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                                </dd>
                            </div>
                        </dl>
                    </div>

                    <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
                        <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404" aria-hidden="true">
                            <defs>
                                <pattern id="e80155a9-dfde-425a-b5ea-1f6fadd20131" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="784" height="404" fill="url(#e80155a9-dfde-425a-b5ea-1f6fadd20131)" />
                        </svg>
                        <img class="relative mx-auto" width="490" src="img/consulting.svg" alt="">
                    </div>
                </div>
            </div>

            <div class="relative lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center mt-12 sm:mt-16 lg:mt-24">
                <div class="relative">
                    <h2 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl">
                        Outsourcing
                    </h2>
                    <p class="mt-6 text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur minima sequi recusandae, porro maiores officia assumenda aliquam laborum ab aliquid veritatis impedit odit adipisci optio iste blanditiis facere. Totam, velit.
                    </p>

                    <dl class="mt-10 space-y-10">
                        <div class="relative">
                            <dt>
                                <p class="text-lg font-bold">Latest technologies</p>
                            </dt>
                            <dd class="mt-2 text-sm text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <p class="text-lg leading-6 font-semibold text-gray-900">Competitive exchange rates</p>
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <p class="text-lg leading-6 font-semibold text-gray-900">Something else</p>
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </dd>
                        </div>
                    </dl>
                </div>

                <div class="mt-10 -mx-4 relative lg:mt-0" aria-hidden="true">
                    <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404">
                        <defs>
                            <pattern id="ca9667ae-9f92-4be7-abcb-9e3d727f2941" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="784" height="404" fill="url(#ca9667ae-9f92-4be7-abcb-9e3d727f2941)" />
                    </svg>
                    <img class="relative mx-auto rounded-md" width="490" src="img/dev.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    <section class="app-container py-12 md:py-24">
        <div class="mb-10 md:mb-24">
            <p class="landing-section-title-info text-center">Our tools</p>
            <h2 class="landing-section-title text-center">
                Technology stack
            </h2>
            <p class="landing-section-description text-center">
                A proven combination of CMS systems, frameworks and front-end languages
            </p>
        </div>
        <div class="technology-stack-grid">
            <div class="technology-item">
                <a href="laravel.html">
                    <div class="technology-image">
                        <img src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="">
                    </div>
                    <div class="technology-name">Laravel</div>
                </a>
            </div>

            <div class="technology-item">
                <a href="laravel.html">
                    <div class="technology-image">
                        <img src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="">
                    </div>
                    <div class="technology-name">Laravel</div>
                </a>
            </div>
            <div class="technology-item">
                <a href="laravel.html">
                    <div class="technology-image">
                        <img src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="">
                    </div>
                    <div class="technology-name">Laravel</div>
                </a>
            </div>
            <div class="technology-item">
                <a href="laravel.html">
                    <div class="technology-image">
                        <img src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="">
                    </div>
                    <div class="technology-name">Laravel</div>
                </a>
            </div>
            <div class="technology-item">
                <a href="laravel.html">
                    <div class="technology-image">
                        <img src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="">
                    </div>
                    <div class="technology-name">Laravel</div>
                </a>
            </div>
            <div class="technology-item">
                <a href="laravel.html">
                    <div class="technology-image">
                        <img src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="">
                    </div>
                    <div class="technology-name">Laravel</div>
                </a>
            </div>
            <div class="technology-item">
                <a href="laravel.html">
                    <div class="technology-image">
                        <img src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="">
                    </div>
                    <div class="technology-name">Laravel</div>
                </a>
            </div>
            <div class="technology-item">
                <a href="laravel.html">
                    <div class="technology-image">
                        <img src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="">
                    </div>
                    <div class="technology-name">Laravel</div>
                </a>
            </div><div class="technology-item">
                <a href="laravel.html">
                    <div class="technology-image">
                        <img src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="">
                    </div>
                    <div class="technology-name">Laravel</div>
                </a>
            </div>


        </div>
    </section>

    @include('components.cta')
@endsection
