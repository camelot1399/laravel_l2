<x-app-layout>

    <x-slot name="header">
        <h1>Отзывы</h1>

        <x-button.create>
            <a class="" href="{{ route('feedback.create') }}">{{ __('Оставить отзыв') }}</a>
        </x-button.create>

    </x-slot>

    <div class="flex justify-between flex-wrap">
        @forelse($feedbacks as $feedbackItem)
            <div class="w-full md:w-1/3 lg:w-1/4 px-3 ">
                <x-feedback.list :feedbackItem="$feedbackItem"></x-feedback.list>
            </div>
        @empty
            <p>no feedback to day</p>
        @endforelse
    </div>



</x-app-layout>
<?php
