<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    
    <div class="bg-blue-500 flex justify-center px-6 py-6">
        <p class="text-4xl font-bold">--Usuarios--</p>
    </div>

    <div class="grid grid-cols-3 gap-10 mx-10 my-10">
        <div class="col-span-1 border border-gray-500 rounded-lg p-6 shadow-md">
            <div class="pb-6">
                <a class="py-2 px-2 rounded bg-amber-500 hover:bg-amber-700 transition-all" href="{{ route('cv') }}" >
                    Ver currículum
                </a>
            </div>
            @if ($errors->any())
            <div class="bg-red-200 p-3 mb-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <p class="font-bold text-2xl">Añadir Usuario</p>
                <div class="pb-4">
                    <p class="font-bold text-md">Nombre:</p>
                    <input type="text" name="name" class="border border-gray-500 rounded-lg" placeholder="Ingrese nombre">
                </div>
                <div class="pb-4">
                    <p class="font-bold text-md">Email:</p>
                    <input type="text" name="email" class="border border-gray-500 rounded-lg" placeholder="Ingrese nombre">
                </div>
                <div class="pb-4">
                    <p class="font-bold text-md">Contraseña:</p>
                    <input type="password" name="password" class="border border-gray-500 rounded-lg" placeholder="Ingrese nombre">
                </div>
                <button class="py-2 px-4 rounded bg-blue-400 hover:bg-blue-500 transition-all" type="submit">
                    Guardar
                </button>
                <button class="py-2 px-4 rounded bg-gray-300 hover:bg-gray-400 transition-all" type="reset">
                    Vaciar
                </button>
            </form>
        </div>

        <div class="col-span-2 border border-gray-500 rounded-lg shadow-md">
                <table class="text-center min-w-full">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="py-2 px-2">ID</th>
                            <th class="py-2 px-2">NOMBRE</th>
                            <th class="py-2 px-2">EMAIL</th>
                            <th class="py-2 px-2">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="py-2 px-2">{{ $user->id }}</td>
                            <td class="py-2 px-2">{{ $user->name }}</td>
                            <td class="py-2 px-2">{{ $user->email }}</td>
                            <td class="py-2 px-2">
                                <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-3 py-1 text-sm" type="submit" onclick="return confirm('¿Desea eliminar este usuario?')">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                        {{ $users->links() }}
                </div>
        </div>
    </div>
</body>
</html>