@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="grid grid-cols-2 gap-4 p-6 w-8/12">
        <div class="p-4 text-center bg-white rounded-lg">
            <p class="text-5xl p-2 text-yellow-400">{{ $confirmed_sum }}</p>
            <p class="p-2">Confirmed</p>
        </div>
        <div class="p-4 text-center bg-white rounded-lg">
            <p class="text-5xl p-2 text-yellow-800">{{ $in_care_sum }}</p>
            <p class="p-2">In Care</p>
        </div>
        <div class="p-4 text-center bg-white rounded-lg">
            <p class="text-5xl p-2 text-green-500">{{ $recovered_sum }}</p>
            <p class="p-2">Recovered</p>
        </div>
        <div class="p-4 text-center bg-white rounded-lg">
            <p class="text-5xl p-2 text-red-500">{{ $dead_sum }}</p>
            <p class="p-2">Dead</p>
        </div>
    </div>
</div>
@endsection
