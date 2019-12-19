@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body -mx-5">
                    <div class="flex flex-wrap py-2 -m-6">
                        @foreach ($products as $product)

  {{-- <div class="w-1/3 text-gray-700 text-center bg-gray-200 m-2 px-4 py-2">{{ $product->name }}</div> --}}

  {{-- <div class="flex"> --}}
      <div class="w-1/2 m-2 px-4">
        <div class="max-w-sm w-full lg:max-w-full lg:flex -mx-2">
            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('{{ $product->image }}')" title="Woman holding a mug"></div>
            <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                    <p class="text-sm text-gray-600 flex items-center">
                        <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                                        </svg>
                                        Members only
                                    </p>
                                    <div class="text-gray-900 font-bold text-xl mb-2">{{ $product->name }}</div>
                                    <p class="text-gray-700 text-base">{{ $product->description }}</p>
                                </div>
                                <div class="flex items-center">
                                    <img class="w-10 h-10 rounded-full mr-4" src="https://images.unsplash.com/photo-1574681332110-c45ff35a5e09?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2775&q=80" alt="Avatar of Jonathan Reinink">
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
</div>
@endsection
