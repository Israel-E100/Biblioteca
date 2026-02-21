<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - BiblioAdmin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-indigo-700 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden">
        <div class="p-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Crear Cuenta</h2>
                <p class="text-gray-500">Únete al equipo de administración</p>
            </div>

            <form action="/register" method="POST" class="space-y-4">
                @csrf <div>
                    <label class="block text-sm font-medium text-gray-700">Nombre Completo</label>
                    <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-500 outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                    <input type="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-500 outline-none">
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Contraseña</label>
                        <input type="password" name="password" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-500 outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Confirmar</label>
                        <input type="password" name="password_confirmation" required class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-500 outline-none">
                    </div>
                </div>

                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 rounded-xl shadow-lg transition">
                    Registrar Usuario
                </button>
            </form>

            <div class="mt-6 text-center">
                <a href="{{ route('login') }}" class="text-sm text-indigo-600 font-semibold hover:underline">¿Ya tienes cuenta? Inicia sesión</a>
            </div>
        </div>
    </div>
</body>
</html>