{{--
    block w-full rounded-md border-0 py-1.5 pr-10 text-red-900 ring-1 ring-inset ring-red-300 placeholder:text-red-300 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:text-sm sm:leading-6
--}}

@props([
    'leadingAddOn' => false,
    'leadingIcon' => false,
    'trailingAddOn' => false,
    'bg' => 'bg-gray-200',
    'roundedmd' => 'rounded-md',
    'roundedlg' => 'rounded-lg',
    'roundedl' => 'rounded-l-md',
    'roundedrmd' => 'rounded-r-md',
    'ring' =>'ring-1',
    "borderl" => '',
    "borderr" => ''
])

<div {{ $attributes->merge([
    'class' => '' . ($leadingAddOn ? 'mt-2 flex ' : '') . ($leadingIcon ? 'relative mt-2 ' : '').' '.$roundedmd.' shadow-sm'])->filter(fn ($value, $key) => !in_array($key, ['type'])) }}
    >
    @if ($leadingAddOn)
    <span class=" inline-flex items-center {{$roundedl}} border border-r-0 border-gray-300 px-3 text-gray-500 sm:text-sm">
        {{ $leadingAddOn }}
    </span>
    @endif
    @if ($leadingIcon)
    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-2  ">
        {{ $leadingIcon }}
    </div>
    @endif
    <input {{ $attributes->merge(['class' => $roundedlg.' '. (!$leadingIcon ? ' pl-2' : '').'
    block 
    w-full 
    min-w-0 
    flex-1 
    border-0 
    py-1.5 
    text-gray-900 
    '.$ring.' 
    '.$borderl.' 
    '.$borderr.' 
    ring-inset 
    ring-gray-200 
    placeholder:text-gray-400 
    focus:ring-2 
    focus:ring-inset 
    focus:ring-sky-600 
    focus:bg-white 
    sm:text-sm 
    sm:leading-6
    '.$bg.' ' . ($leadingAddOn ? ' rounded-none '.$roundedrmd.' ' : '') . ($leadingIcon ? '   pl-10 '.$roundedmd.'' : ''). ' ']) }} {{ $attributes->merge(['type' => 'text']) }}/>
    @if ($trailingAddOn)
        {{$trailingAddOn}}
    @endif
</div>
