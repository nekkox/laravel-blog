@props(['alertData', 'name'])

<div>
    <p>{{ $alertData['text'] }}</p>
    <small>{{ $alertData['time'] }}</small>
    <p>{{ $name}} p</p>
    {{ $slot }}

</div>
