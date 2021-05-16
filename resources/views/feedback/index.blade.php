<x-app-layout>

    <x-slot name="header">
        <h1>Отзывы</h1>

        <a class="border-2 border-green-600 text-green-600 text-lg p-1 hover:bg-green-700 hover:text-white" href="{{ route('feedback.create') }}">Оставить отзыв</a>
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
