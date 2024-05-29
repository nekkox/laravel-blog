<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>HELLO MAIN TEMPLATE</h1>
@yield('banner')

<x-alert name="iiiiii" text="XXXXX" :time="\Carbon\Carbon::yesterday()"> <strong>Whoops!</strong> Something went wrong!</x-alert>
@yield('content');

@php
  $tasks = ["fffff","dadad", "ssssss","eeeeeeee"];
  $title="Dogs world";
 @endphp
<x-xxx>
    <x-slot:title>
        Custom Titlexxxx
    </x-slot:title>
    <x-slot name="content">Hello again</x-slot>
    @foreach ($tasks as $task)
        {{ $task }}
        <br/>
    @endforeach

</x-xxx>
<p>Database Results: </p>

</body>
</html>
