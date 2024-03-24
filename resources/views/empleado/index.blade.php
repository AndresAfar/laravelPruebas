@vite('resources/css/app.css')



<div class="content-table relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre Empleado
                </th>
                <th scope="col" class="px-6 py-3">
                    Apellido Empleado
                </th>
                <th scope="col" class="px-6 py-3">
                    Correo
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Delete</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach( $empleados as $empleado )
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $empleado->id }}
                </th>
                <td class="px-6 py-4">
                {{ $empleado->Nombre }}
                </td>
                <td class="px-6 py-4">
                {{ $empleado->Apellido }}
                </td>
                <td class="px-6 py-4">
                {{ $empleado->Correo }}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="border rounded text-white bg-yellow-500 p-1 hover">Editar</a>
                </td>
                <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}

                    <td class="px-6 py-4 text-right"><input type="submit" value="Eliminar" class="border rounded text-white bg-red-500 p-1 hover"></td>
                </form>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>