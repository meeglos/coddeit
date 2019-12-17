@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                    @foreach ($products as $product)
                    <div class="px-2">
                        <div class="flex flex-col overflow-hidden mx-2">
                            <div class="w-1/2 lg:max-w-full lg:flex mb-4">
                                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('{{ $product->image }}')" title="Woman holding a mug">
                                </div>
                                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                    <div class="mb-8">
                                        <div class="text-gray-900 font-bold text-xl mb-2">{{ $product->name }}</div>
                                        <p class="text-gray-700 text-base">{{ $product->description }}</p>
                                    </div>
                                    <div class="flex items-center">
                                        <img class="w-10 h-10 rounded-full mr-4" src="{{ $product->image }}" alt="Avatar of Jonathan Reinink">
                                        <div class="text-sm">
                                            <p class="text-gray-900 leading-none">Jonathan Reinink</p>
                                            <p class="text-gray-600">Aug 18</p>
                                        </div>
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
