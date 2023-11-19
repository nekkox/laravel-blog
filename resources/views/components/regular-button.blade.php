@props(['content'])
<div>
<button {{ $attributes->merge(['type' => 'button', 'class' => 'custom-class']) }}>
    {{$content}}
</button>
</div>
