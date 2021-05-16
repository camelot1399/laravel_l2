<div class="border-2 mb-2 p-2">
    <div class="font-bold">
        {{ $feedbackItem->name }}
    </div>

    <div>
        {{ $feedbackItem->description }}
    </div>

    <div class="flex font-small mt-5">
        <div class="">
            {{ $feedbackItem->created_at->format('d.m.Y') }}
        </div>
    </div>
</div>
