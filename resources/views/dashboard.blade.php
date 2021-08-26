@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg text-center">
        <h1 class="p-4 text-5xl">Covid Cases</h1>
        <table class="table-auto shadow-lg bg-white center w-full">
            <thead>
                <tr>
                    <th class="bg-blue-100 border px-8 py-4">Province</th>
                    <th class="bg-blue-100 border px-8 py-4">Confirmed</th>
                    <th class="bg-blue-100 border px-8 py-4">In Care</th>
                    <th class="bg-blue-100 border px-8 py-4">Recovered</th>
                    <th class="bg-blue-100 border px-8 py-4">Dead</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cases as $case)
                <tr>
                    <td class="border px-8 py-4">{{ $case->province }}</td>
                    <td class="border px-8 py-4">{{ $case->confirmed }}</td>
                    <td class="border px-8 py-4">{{ $case->in_care }}</td>
                    <td class="border px-8 py-4">{{ $case->recovered }}</td>
                    <td class="border px-8 py-4">{{ $case->dead }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-4">
            {{ $cases->links() }}
        </div>
    </div>
</div>
@endsection
