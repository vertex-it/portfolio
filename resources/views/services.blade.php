@extends('layouts.master')

@section('title', 'Services')

@section('content')
    @include('components.subpage-main-section', [
        'title' => 'Services',
        'description' => 'Our comprehensive services include professional web development, strategic consulting for digital success, and reliable outsourcing solutions, empowering businesses with cutting-edge technologies, tailored strategies, and dedicated development teams.'
    ])

    <div class="py-12 lg:py-16 overflow-hidden lg:py-24">
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
                        From concept to execution, we craft customized web solutions tailored to your unique business requirements, utilizing cutting-edge technologies and industry best practices.
                    </p>

                    <dl class="mt-10 space-y-10">
                        <div class="relative">
                            <dt>
                                <p class="text-lg font-bold">Custom Web Development</p>
                            </dt>
                            <dd class="mt-2 text-sm text-gray-500">
                                Tailor-made websites that align perfectly with your business goals.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <p class="text-lg leading-6 font-semibold text-gray-900">Responsive Design</p>
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Ensuring seamless user experiences across all devices and screen sizes.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <p class="text-lg leading-6 font-semibold text-gray-900">E-commerce Development</p>
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Building secure and scalable online stores for your products or services.
                            </dd>
                        </div>
                    </dl>
                </div>

                <div class="mt-10 -mx-4 relative lg:mt-0" aria-hidden="true">
                    <svg
                        class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden"
                        width="784"
                        height="404"
                        fill="none"
                        viewBox="0 0 784 404"
                    >
                        <defs>
                            <pattern
                                id="ca9667ae-9f92-4be7-abcb-9e3d727f2941"
                                x="0"
                                y="0"
                                width="20"
                                height="20"
                                patternUnits="userSpaceOnUse"
                            >
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
                            Leverage our experience and knowledge to gain valuable insights and strategic guidance for optimizing your digital presence and achieving your business objectives.
                        </p>

                        <dl class="mt-10 space-y-10">
                            <div class="relative">
                                <dt>
                                    <p class="text-lg font-bold">Digital Strategy</p>
                                </dt>
                                <dd class="mt-2 text-sm text-gray-500">
                                    Developing a comprehensive roadmap to maximize your online potential.
                                </dd>
                            </div>

                            <div class="relative">
                                <dt>
                                    <p class="text-lg leading-6 font-semibold text-gray-900">UX/UI Consulting</p>
                                </dt>
                                <dd class="mt-2 text-base text-gray-500">
                                    Enhancing user experiences through intuitive design and usability testing.
                                </dd>
                            </div>

                            <div class="relative">
                                <dt>
                                    <p class="text-lg leading-6 font-semibold text-gray-900">SEO and Digital Marketing</p>
                                </dt>
                                <dd class="mt-2 text-base text-gray-500">
                                    Boosting your online visibility and driving targeted traffic to your website.
                                </dd>
                            </div>
                        </dl>
                    </div>

                    <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
                        <svg
                            class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden"
                            width="784"
                            height="404"
                            fill="none"
                            viewBox="0 0 784 404"
                            aria-hidden="true"
                        >
                            <defs>
                                <pattern
                                    id="e80155a9-dfde-425a-b5ea-1f6fadd20131"
                                    x="0"
                                    y="0"
                                    width="20"
                                    height="20"
                                    patternUnits="userSpaceOnUse"
                                >
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
                        Optimize your resources and streamline operations by entrusting your development and maintenance tasks to our dedicated team of professionals.
                    </p>

                    <dl class="mt-10 space-y-10">
                        <div class="relative">
                            <dt>
                                <p class="text-lg font-bold">Dedicated Development Team</p>
                            </dt>
                            <dd class="mt-2 text-sm text-gray-500">
                                Extending your capabilities with a dedicated team that aligns with your project goals.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <p class="text-lg leading-6 font-semibold text-gray-900">Application Support and Maintenance</p>
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Ensuring the smooth functioning and continuous improvement of your web applications.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <p class="text-lg leading-6 font-semibold text-gray-900">Quality Assurance</p>
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Rigorous testing and quality control to deliver bug-free and reliable software solutions.
                            </dd>
                        </div>
                    </dl>
                </div>

                <div class="mt-10 -mx-4 relative lg:mt-0" aria-hidden="true">
                    <svg
                        class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden"
                        width="784"
                        height="404"
                        fill="none"
                        viewBox="0 0 784 404"
                    >
                        <defs>
                            <pattern
                                id="ca9667ae-9f92-4be7-abcb-9e3d727f2941"
                                x="0"
                                y="0"
                                width="20"
                                height="20"
                                patternUnits="userSpaceOnUse"
                            >
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

    <section class="app-container py-12 lg:py-24">
        <div class="mb-10 lg:mb-24">
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
                        <img src="{{ asset('img/laravel.png') }}" alt="">
                    </div>
                    <div class="technology-name">Laravel</div>
                </a>
            </div>

            <div class="technology-item">
                <a href="laravel.html">
                    <div class="technology-image">
                        <img src="{{ asset('img/react.png') }}" alt="">
                    </div>
                    <div class="technology-name">React</div>
                </a>
            </div>

            <div class="technology-item">
                <div class="technology-image">
                    <img src="{{ asset('img/html.png') }}" alt="">
                </div>
                <div class="technology-name">HTML</div>
            </div>

            <div class="technology-item">
                <div class="technology-image">
                    <img src="{{ asset('img/javascript.png') }}" alt="">
                </div>
                <div class="technology-name">JavaScript</div>
            </div>

            <div class="technology-item">
                <div class="technology-image">
                    <img src="{{ asset('img/docker.png') }}" alt="">
                </div>
                <div class="technology-name">Docker</div>
            </div>

            <div class="technology-item">
                <div class="technology-image">
                    <img src="{{ asset('img/aws.png') }}" alt="">
                </div>
                <div class="technology-name">Amazon Web Services</div>
            </div>

            <div class="technology-item">
                <div class="technology-image">
                    <img src="{{ asset('img/php.png') }}" alt="">
                </div>
                <div class="technology-name">PHP</div>
            </div>

            <div class="technology-item">
                <div class="technology-image">
                    <img src="{{ asset('img/vue.png') }}" alt="">
                </div>
                <div class="technology-name">Vue JS</div>
            </div>

        </div>
    </section>

    @include('components.cta')
@endsection
