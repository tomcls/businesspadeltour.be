@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-0 py-0">
        <div class="text-lg">
            {{ $title }}
        </div>

        <div class="">
            {{ $content }}
        </div>
    </div>

    <div class="px-0 py-0 bg-opacity-50 text-right">
        {{ $footer }}
    </div>
</x-modal>
