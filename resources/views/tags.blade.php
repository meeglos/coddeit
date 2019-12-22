@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">Tags</div>
            </div>
            <div class="relative">
                <div class="flex content-center flex-wrap absolute right-0 left-0 -mx-2">
                    @foreach ($tags as $tag)
                    <div class="sm:w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
                        <div class="rounded overflow-hidden shadow-lg">
                            <img class="h-48 w-full object-cover object-top" src="{{ $tag->image }}" alt="Sunset in the mountains">
                            <div class="border-l border-r border-b border-gray-400 bg-white rounded-b p-4 flex flex-col justify-between leading-normal">
                                <div class="mb-4">
                                    <div class="text-gray-900 font-bold text-xl mb-2">{{ $tag->name }}</div>
                                    <p class="text-gray-700 text-base">{{ $tag->description }}</p>
                                </div>
                                <div class="flex items-center">
                                    <img class="w-10 h-10 rounded-full mr-4" src="{{ $tag->image }}" alt="Avatar of Jonathan Reinink">
                                    <div class="text-sm">
                                        <p class="text-gray-900 leading-none">Jonathan Reinink</p>
                                        <p class="text-gray-600">Aug 18</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
