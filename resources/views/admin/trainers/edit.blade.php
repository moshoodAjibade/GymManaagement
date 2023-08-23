@extends('layouts.app')

@section('content')


  <!--==============================content================================-->
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex m-2 p-2">
            <a href="{{ route('admin.categories.index') }}"
                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Trainer Index</a>
        </div>
        <div class="m-2 p-2 bg-slate-100 rounded">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('admin.trainers.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                        <div class="mt-1">
                            <input type="text" id="name" name="name"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                        </div>
                        @error('name')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                        <div class="mt-1">
                            <input type="text" id="email" name="email"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                        </div>
                        @error('email')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="sm:col-span-6">
                        <label for="image" class="block text-sm font-medium text-gray-700"> Image </label>
                        <div>
                        <img class="w-32 h-32" src="{{ Storage::url($trainer->image) }}">
                        </div>
                        <div class="mt-1">
                            <input type="file" id="image" name="image"
                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                        </div>
                        @error('image')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-6 p-4">
                        <button type="submit"
                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Update</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
  
  
  
  
    @endsection
  