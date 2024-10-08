@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div {{ $attributes->merge(['class'=>'sm:px-6 py-4']) }}>
        <div class="">
            {{ $title }}
        </div>

        <div class="mt-4">
            {{ $content }}
        </div>
    </div>

    <div class="px-6 py-2 bg-gray-100 text-right">
        {{ $footer }}
    </div>
</x-modal>
