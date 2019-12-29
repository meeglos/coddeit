@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header bg-info">Scripts</div>
            </div>
            <div class="relative">
                <div class="flex content-center flex-wrap absolute right-0 left-0 -mx-2">
                    @foreach ($products as $product)
                    <div class="sm:w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
                        <div class="rounded overflow-hidden shadow-lg">
                            <img class="h-48 w-full object-cover object-top" src="{{ $product->image }}" alt="Sunset in the mountains">
                            <div class="h-64 border-l border-r border-b border-gray-400 bg-white rounded-b pt-3 pb-2 px-4 flex flex-col justify-between leading-normal">
                                <div class="mb-2">
                                    <div class="text-gray-900 font-bold text-xl mb-2">{{ $product->name }}</div>
                                    <p class="text-blue-800 text-sm">{{ $product->description }}</p>
                                </div>
                                <div class="flex content-end flex-wrap">
                                    @foreach ($product->tag_list as $ptags)
                                        <div class="inset-x-0 bottom-0">
                                            <button class="rounded-lg bg-yellow-400 text-xs text-gray-800 px-3 py-1 mr-2 mb-2">
                                                {{ $ptags }}
                                            </button>
                                        </div>
                                    @endforeach
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
