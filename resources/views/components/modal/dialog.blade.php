@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div {{ $attributes->merge(['class'=>'sm:px-6 py-4']) }}>
        <div class="">
            {{ $title }}
        </div>

        <div class="">
            {{ $content }}
        </div>
    </div>

    <div class="px-6 py-2  text-right">
        {{ $footer }}
    </div>
</x-modal>
