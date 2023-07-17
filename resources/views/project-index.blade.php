@extends('layouts.master')

@section('title', 'Our work')

@section('content')
    @include('components.subpage-main-section', [
        'title' => 'Our Work',
        'description' => 'Explore our diverse range of client collaborations, innovative designs, and impactful results, making us a trusted choice for businesses seeking exceptional digital experiences.'
    ])

    <div class="app-container py-10 lg:py-16">

        <div class="project-div">
            <div class="lg:absolute lg:inset-0">
                <div class="lg:absolute lg:inset-y-0 lg:left-0 lg:w-1/2">
                    <img class="h-56 w-full object-cover lg:absolute lg:h-full" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80" alt="">
                </div>
            </div>
            <div class="relative py-8 lg:py-10 lg:pb-14 px-4 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2 lg:h-96">
                <div class="lg:col-start-2 lg:pl-8">
                    <div class="text-base max-w-prose mx-auto lg:max-w-lg lg:ml-auto lg:mr-0 flex flex-col justify-between h-full">
                        <div>
                            <h5 class="project-title">
                                Aspirano group of websites
                            </h5>
                            <p class="project-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore nihil ea rerum ipsa. Nostrum consectetur sequi culpa doloribus omnis, molestiae esse placeat, exercitationem magnam quod molestias quia aspernatur deserunt
                            </p>
                        </div>
                        <div class="mt-10">
                            <a href="{{ route('project', 'name') }}" class="project-button">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-div mt-10 lg:mt-16">
            <div class="lg:absolute lg:inset-0">
                <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                    <img class="h-56 w-full object-cover lg:absolute lg:h-full" src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" alt="">
                </div>
            </div>
            <div class="relative py-8 lg:py-10 lg:pb-14 px-4 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-2 lg:h-96">
                <div class="lg:pr-8">
                    <div class="text-base max-w-prose mx-auto lg:max-w-lg lg:mr-auto lg:mr-0 flex flex-col justify-between h-full">
                        <div>
                            <h5 class="project-title">
                                Invoices app
                            </h5>
                            <p class="project-description">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore nihil ea rerum ipsa. Nostrum consectetur sequi culpa doloribus omnis, molestiae esse placeat, exercitationem magnam quod molestias quia aspernatur deserunt
                            </p>
                        </div>
                        <div class="mt-10">
                            <a href="{{ route('project', 'name') }}" class="project-button">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.cta')
@endsection
