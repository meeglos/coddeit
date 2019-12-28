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
                    <div class="sm:w-1/2 md:w-1/4 px-2 mb-4">
                        <div class="rounded-lg overflow-hidden shadow-lg">
                            <div class="border border-gray-700 bg-white rounded py-3 px-2">
                                <div class="text-blue-500 text-center text-lg">{{ $tag->description }}</div>
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
