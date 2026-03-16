<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Currículum</title>
</head>
<body>
    <div id="header" class="max-w-6xl mx-auto">
        <div class="border border-gray-400 bg-blue-300 rounded-lg p-6">
            <img src="{{ asset('imgs/user.png') }}" class="h-30 w-48"></img>
            <p class="text-4xl font-bold">Johan Aamir Valentin Garcia</p>
        </div>
    </div>

    <div id="body" class="grid grid-cols-3 gap-10 max-w-6xl mx-auto py-6">
        <div class="col-span-1 border border-gray-400 bg-blue-100 rounded-lg p-6">
            <div class="pb-4">
                <p class="text-lg font-bold">PERFIL PROFESIONAL</p>
                <p class="text-md">
                    Soy estudiante de la carrera de Desarrollo de Software, con conocimientos básicos en desarrollo web frontend y backend, base de datos relacionales. Busco oportunidades para aplicar mis habilidades en entornos profesionales y crear soluciones creativas.
                </p>
            </div>
            <div class="pb-4">
                <p class="text-lg font-bold">CONTACTOS</p>
                <ul class="text-md">
                    <li>• +51 943 896 447</li>
                    <li>• aamirvalentin718@gmail.com</li>
                    <li>• Elemento 3</li>
                </ul>
            </div>
            <div class="pb-4">
                <p class="text-lg font-bold">IDIOMAS</p>
                <ul class="text-md">
                    <li>• Español: Nativo</li>
                    <li>• Inglés: Básico (A2)</li>
                </ul>
            </div>
            <div class="pb-4">
                <p class="text-lg font-bold">PROGRAMAS</p>
                <ul class="text-md">
                    <li>• Lenguajes de programación y etiquetas (básico): Java, HTML, PHP.</li>
                    <li>• Entornos de Desarrollo Integrado (básico): Eclipse, VS Code, Sublime Text.</li>
                    <li>• Base de datos (básico): MySQL, SQL Server, Oracle SQL.</li>
                </ul>
            </div>
            <div class="pb-4">
                <p class="text-lg font-bold">HABILIDADES</p>
                <ul class="text-md">
                    <li>• Modelado y diseño de base de datos relacionales.</li>
                    <li>• Pensamiento creativo.</li>
                    <li>• Programación Web con patrón MVC</li>
                </ul>
            </div>
        </div>

        <div class="col-span-2 border border-gray-400 bg-white rounded-lg p-6">
            <div class="pb-4">
                <p class="text-lg font-bold">FORMACIÓN ACADÉMICA</p>
                <p>Carrera profesional de desarrollo de Software – SENATI</p>
            </div>
            <div class="pb-4">
                <p class="text-lg font-bold pb-2">PROYECTOS DE DESARROLLO</p>
                <p class="text-md font-bold">Página Web simple para una editorial</p>
                <p class="text-md">• Implementación del FrameWork Bootstrap 4, HTML y CSS para el frontend de la página Web.</p>

                <p class="text-md font-bold">Sistema Web de gestión de empleados</p>
                <p class="text-md">• Creación de un sistema Web para agregar, modificar y eliminar registros de empleados. Con backend Java, frontend HTML y base de datos MySQL con patrón MVC.</p>

                <p class="text-md font-bold">Página Web para la lectura de EPUB</p>
                <p class="text-md">• Desarrollo de una página Web con la implementación de la librería epubjs para la lectura de libros electrónicos en la Web.</p>
            </div>
            <div class="pb-4">
                <p class="text-lg font-bold">CURSOS Y BADGES</p>
                
                <p class="text-md font-bold">CISCO:</p>
                <p class="text-md">Introducción al Internet de las Cosas, introducción a las Tecnologías de la Información, conceptos básicos de Hardware, introducción a la ciencia de datos, introducción a la ciberseguridad, conceptos básicos de redes, Python Essentials, C Essentials.</p>

                <p class="text-md font-bold">MyELT/SPARK.</p>
            </div>
        </div>
    </div>
</body>
</html>