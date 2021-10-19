
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <style>
        .navLinks{
            justify-content: center;

        }
        .navLinks p{
            display: none;
        }
        .navLinks div{
            justify-content: center;
        }
    </style>
</head>
<body>
    <x-app-layout>

        @if (session()->has('success'))
        <div class="bg-indigo-900 text-center py-4 lg:px-4">
            <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
              <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Post Added</span>
              <span class="font-semibold mr-2 text-left flex-auto">{{ session()->get('success') }}</span>
            </div>
          </div>
        @endif 
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
                        @foreach ($data as $post)

                            <div class="flex flex-col items-center justify-center bg-white p-4 shadow rounded-lg">
                                <div class="inline-flex shadow-lg border border-gray-200 rounded-full overflow-hidden h-40 w-40">
                                    <img style="width: 100;" src="https://cdn.pixabay.com/photo/2017/06/10/07/18/list-2389219__340.png"
                                        class="h-full w-full">
                                </div>

                                <h2 class="mt-4 font-bold text-xl">{{ $post->title }}</h2>
                                <h6 class="mt-2 text-sm font-medium">{{ $post->user->name }}</h6>

                                <p class="text-xs text-gray-500 text-center mt-3">
                                    {{ Str::limit($post->body, 100) }}
                                </p>
                            </div>
                        @endforeach


                    </div>

                </div>
            </div>
        </div>
        <div style="justify-content: center;" class="navLinks">
            {{ $data->links() }}
    
        </div>
    </x-app-layout>

</body>
</html>

