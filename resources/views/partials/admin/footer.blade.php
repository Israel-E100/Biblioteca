<footer class="p-4 bg-white border-t border-gray-200 mt-auto">
                <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
                    <p>&copy; 2024 Biblioteca Nacional. Todos los derechos reservados.</p>
                    <div class="flex space-x-4 mt-2 md:mt-0">
                        <a href="#" class="hover:text-indigo-600">Soporte</a>
                        <a href="#" class="hover:text-indigo-600">Privacidad</a>
                    </div>
                </div>
            </footer>
        </main>
    </div>
    <script>
        const btn = document.getElementById('hamburger-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            // Cambiar icono de hamburguesa a X
            const icon = btn.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });

        // Cerrar menú al redimensionar si es necesario
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                menu.classList.add('hidden');
                btn.querySelector('i').classList.add('fa-bars');
                btn.querySelector('i').classList.remove('fa-times');
            }
        });
    </script>
</body>
</html>