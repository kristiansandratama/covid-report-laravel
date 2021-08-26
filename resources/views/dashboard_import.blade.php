@extends('layouts.app')

@section('content')
<div class="flex justify-center my-4">
    @if (session('status'))
    <div class="w-8/12 bg-green-100 p-6 rounded-lg text-center" role="alert">
        <p class="font-bold text-green-800">{{ session('status') }}</p>
      </div>
    @endif

    @if ($errors->any())
    <div class="w-8/12 bg-red-100 p-6 rounded-lg text-center" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="font-bold text-red-800">{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
</div>

<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg text-center">
        <h1 class="p-4 text-xl">Import Spreadsheet</h1>
        <form action="{{ route('dashboard.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" />
            <button type="submit" class="text-white bg-yellow-500 rounded-md px-4 py-2 my-2">Import</button>
        </form>
    </div>
</div>
@endsection
