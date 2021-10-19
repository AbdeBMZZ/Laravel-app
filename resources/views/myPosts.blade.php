<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
            @foreach (auth()->user()->posts as $post)

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
    </x-app-layout>
</body>
</html>