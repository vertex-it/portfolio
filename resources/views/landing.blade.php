@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
    <div class="border-b border-gray-100 lg:h-screen">
        <div class="flex flex-col justify-between h-full app-container">
            @include('layouts.navigation')
            <section class="flex flex-wrap justify-between py-10">
                <div
                    class="w-full md:w-1/2 order-2 md:order-1 flex flex-col justify-center md:items-start mb-16 md:mb-0 md:pr-10"
                    data-aos="fade-down"
                    data-aos-duration="1300"
                >
                    <h1 class="lg:leading-tight tracking-tight text-center md:text-left text-4xl lg:text-5xl font-bold text-gray-900 mb-5 lg:mb-7">
                        Full-cycle web <span class="text-red-500 h1">development company</span>
                    </h1>
                    <p class="text-center md:text-left text-lg mb-7 text-gray-600 leading-7">
                        Innovative web applications tailor-made for your specific online business requirements.
                        From Bijeljina, Bosnia and Herzegovina.
                    </p>
                    <a href="{{ route('contact') }}" class="button-main" title="Contact us">
                        Contact us
                    </a>
                </div>
                <div class="w-full md:w-1/2 order-1 md:order-2 md:pl-20 mb-10 md:mb-0">
                    <img
                        class="w-2/3 md:w-full mx-auto max-w-72 md:max-w-full max-h-72 md:max-h-full"
                        alt="hero"
                        src="{{ asset('img/hero.svg') }}"
                        data-aos="fade-left"
                        data-aos-duration="1300"
                    >
                </div>
            </section>
            <div class="pb-16">
                <div class="max-w-2xl mx-auto grid grid-cols-1 gap-y-10 gap-x-12 lg:max-w-none lg:grid-cols-3">
                    <div class="sm:flex lg:block ">
                        <div class="sm:flex-shrink-0">
                            <div class="flow-root">
                                <svg class="h-14" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"></path><path d="M17.272 8.685a1 1 0 111.456-1.37l4 4.25a1 1 0 010 1.37l-4 4.25a1 1 0 01-1.456-1.37l3.355-3.565-3.355-3.565zm-10.544 0L3.373 12.25l3.355 3.565a1 1 0 01-1.456 1.37l-4-4.25a1 1 0 010-1.37l4-4.25a1 1 0 011.456 1.37z" fill="#EF4444"></path><rect fill="#EF4444" opacity=".3" transform="rotate(15 12 12)" x="11" y="4" width="2" height="16" rx="1"></rect></g></svg>
                            </div>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3 lg:mt-5 lg:ml-0">
                            <div class="text-lg font-medium text-gray-900">
                                Web Development
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                Innovative web applications tailor-made for your specific online business requirements.
                            </p>
                        </div>
                    </div>

                    <div class="sm:flex lg:block">
                        <div class="sm:flex-shrink-0">
                            <div class="flow-root">
                                <svg class="h-14" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"></path><path d="M13.686 18.708C15.91 17.82 18.683 17.25 22 17V5.506a.5.5 0 00-.513-.5C18.658 5.078 15.83 5.743 13 7v11.244a.5.5 0 00.686.464z" fill="#EF4444"></path><path d="M2.686 18.708C4.91 17.82 7.683 17.25 11 17V5.506a.5.5 0 00-.513-.5C7.658 5.078 4.83 5.743 2 7v11.244a.5.5 0 00.686.464z" fill="#EF4444" opacity=".3"></path></g></svg>
                            </div>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3 lg:mt-5 lg:ml-0">
                            <div class="text-lg font-medium text-gray-900">
                                Consulting
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                It&#039;s not actually free we just price it into the products. Someone&#039;s paying for it, and it&#039;s not us.
                            </p>
                        </div>
                    </div>

                    <div class="sm:flex lg:block">
                        <div class="sm:flex-shrink-0">
                            <div class="flow-root">
                                <svg class="h-14" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"></path><path d="M2.56 10.682l2.122-2.121a1.5 1.5 0 012.121 0l2.122 2.121a1.5 1.5 0 010 2.121l-2.122 2.122a1.5 1.5 0 01-2.121 0l-2.121-2.122a1.5 1.5 0 010-2.121zm12 0l2.122-2.121a1.5 1.5 0 012.121 0l2.122 2.121a1.5 1.5 0 010 2.121l-2.122 2.122a1.5 1.5 0 01-2.121 0l-2.121-2.122a1.5 1.5 0 010-2.121z" fill="#EF4444" opacity=".3"></path><path d="M8.56 16.682l2.122-2.121a1.5 1.5 0 012.121 0l2.122 2.121a1.5 1.5 0 010 2.121l-2.122 2.122a1.5 1.5 0 01-2.121 0l-2.121-2.122a1.5 1.5 0 010-2.121zm0-12l2.122-2.121a1.5 1.5 0 012.121 0l2.122 2.121a1.5 1.5 0 010 2.121l-2.122 2.122a1.5 1.5 0 01-2.121 0L8.561 6.803a1.5 1.5 0 010-2.121z" fill="#EF4444"></path></g></svg>
                            </div>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3 lg:mt-5 lg:ml-0">
                            <div class="text-lg font-medium text-gray-900">
                                Outsourcing
                            </div>
                            <p class="mt-2 text-sm text-gray-500">
                                It&#039;s not actually free we just price it into the products. Someone&#039;s paying for it, and it&#039;s not us.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-b from-gray-50 to-white border-b border-gray-100">
        <div class="app-container">
            <section
                class="py-20"
                data-aos="fade-left"
                data-aos-duration="1200"
            >
                <div class="grid gap-5 row-gap-10 lg:grid-cols-2">
                    <div class="flex flex-col justify-center">
                        <div class="max-w-xl mb-6">
                            <p class="landing-section-title-info">Who we are</p>
                            <h2 class="landing-section-title">
                                The quick, brown fox jumps over a lazy dog
                            </h2>
                            <p class="landing-section-description">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
                            </p>
                        </div>
                        <div class="grid space-y-3 sm:gap-2 sm:grid-cols-2 sm:space-y-0">
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex">
                                    <span class="mr-2 text-red-500">
                                        <svg
                                            width="5"
                                            height="5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </span>
                                    A slice of heaven
                                </li>
                                <li class="flex">
                                    <span class="mr-2 text-red-500">
                                        <svg
                                            width="5"
                                            height="5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </span>
                                    Disrupt inspire
                                </li>
                                <li class="flex">
                                    <span class="mr-2 text-red-500">
                                        <svg
                                            width="5"
                                            height="5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </span>
                                    Preliminary thinking
                                </li>
                            </ul>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex">
                                    <span class="mr-2 text-red-500">
                                        <svg
                                            width="5"
                                            height="5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </span>
                                    Flipboard curmudgeon
                                </li>
                                <li class="flex">
                                    <span class="mr-2 text-red-500">
                                        <svg
                                            width="5"
                                            height="5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </span>
                                    Storage shed
                                </li>
                                <li class="flex">
                                    <span class="mr-2 text-red-500">
                                        <svg
                                            width="5"
                                            height="5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </span>
                                    Satoshi Nakamoto
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <img
                            class="object-cover w-full h-56 rounded shadow-lg sm:h-96"
                            src="https://images.pexels.com/photos/927022/pexels-photo-927022.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=3&amp;h=750&amp;w=1260"
                            alt=""
                        />
                    </div>
                </div>
            </section>
            <section
                class="my-20"
                data-aos="fade-down"
                data-aos-duration="1200"
            >
                <div class="mb-24 max-w-2xl mx-auto">
                    <p class="landing-section-title-info text-center">Technology</p>
                    <h2 class="landing-section-title text-center">Our main technology stack</h2>
                    <p class="landing-section-description text-center">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
                    </p>
                </div>
                <div class="main-technology-grid">
                    <a href="laravel.html">
                        <div
                            class="main-technology-card"
                            data-aos="zoom-out"
                            data-aos-duration="1000"
                        >
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" class="mx-auto h-20" alt="">
                            <div class="font-medium text-2xl mb-5 mt-12">Laravel</div>
                            <p class="text-gray-500 text-sm leading-relaxed tracking-wide">
                                Web application framework with expressive, elegant syntax.
                            </p>
                        </div>
                    </a>
                    <a href="laravel.html">
                        <div
                            class="main-technology-card"
                            data-aos="zoom-out"
                            data-aos-duration="1000"
                            data-aos-delay="300"
                        >
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/2367px-Vue.js_Logo_2.svg.png" class="mx-auto h-20" alt="">
                            <div class="font-medium text-2xl mb-5 mt-12">Vue JS</div>
                            <p class="text-gray-500 text-sm leading-relaxed tracking-wide">
                                Progressive framework for building user interfaces.
                            </p>
                        </div>
                    </a>
                    <a href="laravel.html">
                        <div
                            class="main-technology-card"
                            data-aos="zoom-out"
                            data-aos-duration="1000"
                            data-aos-delay="600"
                        >
                            <img src="https://www.docker.com/sites/default/files/d8/2019-07/Moby-logo.png" class="mx-auto h-20" alt="">
                            <div class="font-medium text-2xl mb-5 mt-12">Docker</div>
                            <p class="text-gray-500 text-sm leading-relaxed tracking-wide">
                                Open platform for developing, shipping, and running applications.
                            </p>
                        </div>
                    </a>
                </div>
            </section>
            <section
                class="my-32"
                data-aos="fade-right"
                data-aos-duration="1200"
            >
                <div class="grid gap-6 row-gap-10 lg:grid-cols-2">
                    <div class="lg:py-6 lg:pr-16">
                        <p class="landing-section-title-info">Our process</p>
                        <h2 class="landing-section-title mb-10">
                            Development process
                        </h2>
                        <div class="flex">
                            <div class="flex flex-col items-center mr-4">
                                <div>
                                    <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                        <svg
                                            class="w-4 text-red-500"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            viewBox="0 0 24 24"
                                        >
                                            <line
                                                fill="none"
                                                stroke-miterlimit="10"
                                                x1="12"
                                                y1="2"
                                                x2="12"
                                                y2="22"
                                            ></line>
                                            <polyline
                                                fill="none"
                                                stroke-miterlimit="10"
                                                points="19,15 12,22 5,15"
                                            ></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-px h-full bg-gray-300"></div>
                            </div>
                            <div class="pt-1 pb-8">
                                <p class="mb-2 text-lg">Planning and design</p>
                                <p class="text-gray-500 text-sm">
                                    All recipes are written using certain conventions, which define the characteristics of common ingredients. The rules vary from place to place.
                                </p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex flex-col items-center mr-4">
                                <div>
                                    <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                        <svg
                                            class="w-4 text-red-500"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            viewBox="0 0 24 24"
                                        >
                                            <line
                                                fill="none"
                                                stroke-miterlimit="10"
                                                x1="12"
                                                y1="2"
                                                x2="12"
                                                y2="22"
                                            ></line>
                                            <polyline
                                                fill="none"
                                                stroke-miterlimit="10"
                                                points="19,15 12,22 5,15"
                                            ></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-px h-full bg-gray-300"></div>
                            </div>
                            <div class="pt-1 pb-8">
                                <p class="mb-2 text-lg">Development</p>
                                <p class="text-gray-500 text-sm">
                                    The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. Michael Knight a young loner.
                                </p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex flex-col items-center mr-4">
                                <div>
                                    <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                        <svg
                                            class="w-4 text-red-500"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            viewBox="0 0 24 24"
                                        >
                                            <line
                                                fill="none"
                                                stroke-miterlimit="10"
                                                x1="12"
                                                y1="2"
                                                x2="12"
                                                y2="22"
                                            ></line>
                                            <polyline
                                                fill="none"
                                                stroke-miterlimit="10"
                                                points="19,15 12,22 5,15"
                                            ></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-px h-full bg-gray-300"></div>
                            </div>
                            <div class="pt-1 pb-8">
                                <p class="mb-2 text-lg">Testing</p>
                                <p class="text-gray-500 text-sm">
                                    Tell them I hate them. Is the Space Pope reptilian!? Tell her she looks thin. Hello, little man. I will destroy you!
                                </p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex flex-col items-center mr-4">
                                <div>
                                    <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                                        <svg class="w-6 text-red-500" stroke="currentColor" viewBox="0 0 24 24">
                                            <polyline
                                                fill="none"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-miterlimit="10"
                                                points="6,12 10,16 18,8"
                                            ></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-1">
                                <p class="mb-2 text-lg">Deliver the project</p>
                                <p class="text-gray-500 text-sm"></p>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <img
                            class="inset-0 object-cover object-bottom w-full rounded shadow-lg h-96 lg:absolute lg:h-full"
                            src="https://images.pexels.com/photos/3184287/pexels-photo-3184287.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                            alt=""
                        />
                    </div>
                </div>
            </section>
        </div>
    </div>
    <section class="portfolio-section border-b border-gray-100">
        <div class="py-20 app-container">
            <div class="mb-24 max-w-2xl mx-auto">
                <span class="landing-section-title-info text-center">Case study</span>
                <h2 class="landing-section-title text-center">What we did for our clients</h2>
                <p class="landing-section-description text-center">
                    Learn about our latest success stories of web applications development, and how we helped our clients build and grow their businesses.
                </p>
            </div>
            <div class="grid gap-8 lg:grid-cols-3">
                <div class="cursor-pointer hover:opacity-50">
                    <img
                        class="shadow-md rounded-xl w-full"
                        src="https://i.imgur.com/rk2qMPs.png"
                        alt=""
                    >
                    <!--                            <h6 class="text-center mt-6 tracking-wider text-sm text-gray-900 uppercase">Ordinacije.me</h6>-->
                </div>
                <div class="cursor-pointer hover:opacity-50">
                    <img
                        class="shadow-md rounded-xl w-full"
                        src="https://i.imgur.com/f1O2nmj.png"
                        alt=""
                    >
                    <!--                            <h6 class="text-center mt-6 tracking-wider text-sm text-gray-900 uppercase">Apoteke.me</h6>-->
                </div>
                <div class="cursor-pointer hover:opacity-50">
                    <img
                        class="shadow-md rounded-xl w-full"
                        src="https://colabrio.ams3.cdn.digitaloceanspaces.com/ohio/landing/assets/img/DemoTemplate5_Home.jpg"
                        alt=""
                    >
                    <!--                            <h6 class="text-center mt-6 tracking-wider text-sm text-gray-900 uppercase">Pedigres</h6>-->
                </div>
                <div class="cursor-pointer hover:opacity-50">
                    <img
                        class="shadow-md rounded-xl w-full"
                        src="https://i.imgur.com/QQVCyHP.png"
                        alt=""
                    >
                    <!--                            <h6 class="text-center mt-6 tracking-wider text-sm text-gray-900 uppercase">Neuroprima</h6>-->
                </div>
                <div class="cursor-pointer hover:opacity-50">
                    <img
                        class="shadow-md rounded-xl w-full"
                        src="https://i.imgur.com/w4rCSLo.png"
                        alt=""
                    >
                    <!--                            <h6 class="text-center mt-6 tracking-wider text-sm text-gray-900 uppercase">Aspirano</h6>-->
                </div>
                <div class="cursor-pointer hover:opacity-50">
                    <img
                        class="shadow-md rounded-xl w-full"
                        src="https://colabrio.ams3.cdn.digitaloceanspaces.com/ohio/landing/assets/img/DemoTemplate5_Home.jpg"
                        alt=""
                    >
                    <!--                            <h6 class="text-center mt-6 tracking-wider text-sm text-gray-900 uppercase">Racuni.me</h6>-->
                </div>
            </div>
        </div>
    </section>

    <section class="border-b border-gray-100">
        <div class="relative flex flex-col-reverse py-16 lg:py-0 lg:flex-col">
            <div class="app-container lg:py-20">
                <div class="mb-0 lg:max-w-lg lg:pr-8 xl:pr-6">
                    <p class="landing-section-title-info text-center">Code guidelines</p>
                    <h2 class="landing-section-title text-center">
                        Our official coding guidelines
                    </h2>
                    <p class="landing-section-description text-center mb-10">
                        Our projects are never done by one person. To keep consistency in the development and maintenance of our projects, we introduced coding guidelines to our company.
                    </p>
                    <div class="text-center">
                        <a
                            href="https://guidelines.vertex-it.com"
                            target="_blank"
{{--                            class="bg-red-500 font-semibold text-white rounded py-3 px-8 transition-colors duration-200 hover:bg-red-600"--}}
                            class="button-main"
                        >
                            Go to Guidelines
                        </a>
                    </div>
                </div>
            </div>
            <div class="inset-y-0 top-0 right-0 w-full max-w-xl px-4 mx-auto mb-6 md:px-0 lg:pl-8 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-1/2 lg:max-w-full lg:absolute xl:px-0">
                <img
                    class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full"
                    src="https://images.unsplash.com/photo-1482062364825-616fd23b8fc1?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1500&q=80"
                    alt=""
                />
            </div>
        </div>
    </section>

    <section class="bg-white overflow-hidden my-32">
        <div class="mb-16 app-container">
            <span class="landing-section-title-info text-center">Testimonials</span>
            <h2 class="landing-section-title text-center">
                What clients are saying about us
            </h2>
            <p class="landing-section-description text-center">
                Opis
            </p>
        </div>
        <div class="relative pt-20 pb-12 app-container">
            <svg class="absolute top-full left-0 transform translate-x-80 -translate-y-24 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404" aria-hidden="true">
                <defs>
                    <pattern id="e56e3f81-d9c1-4b83-a3ba-0d0ac8c32f32" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="784" height="404" fill="url(#e56e3f81-d9c1-4b83-a3ba-0d0ac8c32f32)" />
            </svg>

            <svg class="hidden lg:block absolute right-full top-1/2 transform translate-x-1/2 -translate-y-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
                <defs>
                    <pattern id="56409614-3d62-4985-9a10-7ca758a8f4f0" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#56409614-3d62-4985-9a10-7ca758a8f4f0)" />
            </svg>

            <div class="relative lg:flex lg:items-center">
                <div class="hidden lg:block lg:flex-shrink-0">
                    <img class="h-48 w-48 rounded-full xl:h-40 xl:w-40 object-cover" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>

                <div class="relative lg:ml-10">
                    <svg class="absolute top-0 left-0 transform -translate-x-8 -translate-y-24 h-36 w-36 text-red-200 opacity-50" stroke="currentColor" fill="none" viewBox="0 0 144 144" aria-hidden="true">
                        <path stroke-width="2" d="M41.485 15C17.753 31.753 1 59.208 1 89.455c0 24.664 14.891 39.09 32.109 39.09 16.287 0 28.386-13.03 28.386-28.387 0-15.356-10.703-26.524-24.663-26.524-2.792 0-6.515.465-7.446.93 2.327-15.821 17.218-34.435 32.11-43.742L41.485 15zm80.04 0c-23.268 16.753-40.02 44.208-40.02 74.455 0 24.664 14.891 39.09 32.109 39.09 15.822 0 28.386-13.03 28.386-28.387 0-15.356-11.168-26.524-25.129-26.524-2.792 0-6.049.465-6.98.93 2.327-15.821 16.753-34.435 31.644-43.742L121.525 15z" />
                    </svg>
                    <blockquote class="relative">
                        <div class="text-2xl leading-9 text-gray-700">
                            <p>
                                Since having our new website built by <span class="text-red-500 font-medium">Vertex IT</span>, we have seen a 200% increase in the number of online contact forms being filled out and returned to us. Matt and his team worked closely with us to provide a site that met all of the criteria that we were looking for. Thanks to Thrive for all of your hard work and support!
                            </p>
                        </div>
                        <footer class="mt-8">
                            <div class="flex">
                                <div class="flex-shrink-0 lg:hidden">
                                    <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </div>
                                <div class="ml-4 lg:ml-0">
                                    <div class="text-lg font-medium text-gray-800">Ime Prezime</div>
                                    <div class="text-base font-medium text-red-500">CEO, Firma</div>
                                </div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    @include('components.cta')
@endsection
