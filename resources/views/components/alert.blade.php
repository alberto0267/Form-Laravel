@props(['type'])

@php
switch($type){
    case 'info':
    $class = "p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400";
    break;


    case 'danger':
    $class = "p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400";
    break;

    case 'success':
    $class = "p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400";
    break;

    default :
    $class = "p-4 mb-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-400";
}

@endphp

<div class="{{$class}}" role="alert">
    <span class="font-medium">{{$title}}</span> {{$slot}}
  </div>