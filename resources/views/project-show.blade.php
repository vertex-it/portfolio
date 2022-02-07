@extends('layouts.master')

@section('title', 'Single project')

@section('content')
    @include('components.subpage-main-section', [
        'title' => 'Aspirano group of websites',
        'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.',
        'breadcrumbs' => [
            'parent' => 'Projects',
            'url' => route('projects'),
        ],
        'createdAt' => '07 dec 2021',
        'minutesToRead' => '5 min read',
    ])

    <div class="py-16">
        <div class="text-xl max-w-prose mx-auto leading-8">
            <h3 class="font-bold text-3xl">The Client</h3>
            <p class="mt-4 text-gray-600">
                Rethink is a digital platform for connecting insurance companies and insurance brokers.
                Rethink platform is a part of the Hyperion-X Group, which the Howen group recently acquired.
            </p>
            <h3 class="font-bold text-3xl mt-10">The Goals</h3>
            <p class="mt-4 text-gray-600">
                The client already had an existing platform that needed to be modified to satisfy the industry’s different requirements.
                Our goal was to remove many legacy features from the system and add new complex functionalities, making the platform much easier to maintain. Additionally, to improve the platform, we needed to implement new features and functionalities.
            </p>
            <div class="my-10">
                <figure>
                    <img class="rounded shadow-md border border-gray-100" src="https://i.imgur.com/aEn0YgB.jpg" alt="">
                    <figcaption class="text-center text-sm mt-4 text-gray-500">Landing page</figcaption>
                </figure>
            </div>
            <div class="my-10">
                <figure>
                    <img class="rounded shadow-md border border-gray-100" src="https://i.imgur.com/WYvGldE.png" alt="">
                    <figcaption class="text-center text-sm mt-4 text-gray-500">Profile page</figcaption>
                </figure>
            </div>
        </div>
    </div>
@endsection
