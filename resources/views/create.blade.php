<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
        <div class="row my-4">
            <div class="col-md-8 mx-auto">

                <div class="max-w-lg mx-auto">
                    @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        @foreach ($errors->all() as $error)
                            <strong class="font-bold">{{ $error }}</strong>
                            <br>
                        @endforeach
                    </div>
                    @endif
                    <form style="margin: 100px; text-align: center;" action="{{ route('post.store') }}" method="post">
                        @csrf
                        <div class="mb-6">
                            <label class="text-sm font-medium text-gray-900 block mb-2">Titre</label>
                            <input type="text"  name="title" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Titre" >
                        </div>
                        <div class="mb-6">
                            <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Description</label>
                            <textarea  rows="3" name="body" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Description"></textarea>
                        </div>

                        <button style="background: cadetblue;padding: 8px;" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ajouter</button>
                    </form>

                </div>

                <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>