<x-app-layout>
    <link rel="stylesheet" href="{{ asset('assets/css/crud.css') }}">
    <div class="container">


        @if (session('mensaje'))
            <script>
                // Configurar opciones personalizadas para Toastr
                toastr.options = {
                    closeButton: true, // Mostrar botón de cierre
                    progressBar: true, // Mostrar barra de progreso
                    positionClass: 'toast-bottom-center', // Posición en el centro inferior
                    showDuration: 300, // Duración de la animación de mostrar
                    hideDuration: 1000, // Duración de la animación de ocultar
                    timeOut: 10000, // Duración visible de la notificación
                    extendedTimeOut: 1000, // Duración adicional para mantener visible
                    showEasing: 'swing', // Efecto de animación al mostrar
                    hideEasing: 'linear', // Efecto de animación al ocultar
                    showMethod: 'fadeIn', // Método de animación al mostrar
                    hideMethod: 'fadeOut', // Método de animación al ocultar
                    progressBarColor: '#7F27FF' // Color personalizado de la barra de progreso
                };

                // Mostrar notificación Toastr al cargar la página
                toastr.success("{{ session('mensaje') }}", 'Notificación');
            </script>
        @endif

        <div class="row">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item item_bread"><a href="{{ route('dashboardAdmin') }}" class="nav-link">Menú
                            principal</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
                </ol>
            </nav>
            <section class="actions d-flex justify-between align-center mt-3">
                <span class="title-section fw-bold fs-4">Gestión de usuarios</span>
                <span>
                    {{-- <button class="btn btn-primary" id="btn_nueva_recomendacion">Nueva recomendación</button> --}}
                    {{-- <a href="" class="btn btn-secondary">Exportar recomendación</a> --}}
                </span>
            </section>
            <section class="data mt-3">
                <table class="table" id="table-usuarios">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">#</th>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                       
                            <tr>
                                <td>##</td>
                                <td>##</td>
                                <td data-id="##">##</td>
                                <td class="text-center">
                                    <div class="d-flex justify-center gap-3 align-center">
                                        <a href="#" class="nav nav-link btn_editar"
                                            data="##" id="btn_editar">Editar</a>

                                        <a href="#" class="nav nav-link text-warning btn_eliminar_recomendacion"
                                            id="btn_eliminar_recomendacion">Eliminar</a>

                                        <a href="##" class="d-none"
                                            id="eliminar_registro"></a>
                                    </div>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="titulo_modal">Actualizar usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="d-flex flex-column gap-4" id="formulario_agregar_actualizar_recomendacion"
                        method="POST" action="/recomendaciones/agregar_actualizar" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="operacion_formulario" id="operacion_formulario">
                        <input type="hidden" name="inputId" id="inputId">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Ingresa la recomendacion" name="inputRecomendacion" id="inputRecomendacion"
                                style="height: 100px"></textarea>
                            <label for="inputRecomendacion">Recomendación</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-control" name="inputCategoria" id="inputCategoria"
                                aria-label="Selecciona la categoria">
                                <option selected value="">Selecciona categoria</option>
                                
                            </select>
                            <label for="inputCategoria">Fases para la migración iPV6</label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary d-none"
                                id="btn_editar_recomendacion_formulario">Guardar cambios</button>
                            <button type="submit" class="btn btn-primary d-none"
                                id="btn_matricular_recomendacion_formulario">Matricular recomendación</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    @push('scripts')
        <script>
            new DataTable('#table-usuarios', {
                pageLength: 5,
                lengthChange: false,
                language: {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "No se encontraron registros",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 a 0 de 0 registros",
                    "infoFiltered": "(filtrado de _MAX_ registros totales)",
                    "search": "Buscar:",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });



        </script>
    @endpush
</x-app-layout>
