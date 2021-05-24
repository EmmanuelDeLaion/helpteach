<div>
    {{-- filtros --}}
    <div class="py-4 filtros mt-6">
        <div class="container flex">
            {{-- todos los cursos --}}
            <div class="dropdown mr-4">
                <div class="dropdown-select">
                    <a wire:click="resetFilters" class="select mr-4"> <i class="fas fa-list-alt"></i> Todos los
                        cursos</a>
                </div>
            </div>
            {{-- por categorias --}}
            <div class="dropdown mr-4">
                <div class="dropdown-select">
                    <span class="select mr-4"> <i class="fas fa-list-ul"></i> Categorias</span>
                    <i class="fa fa-caret-down icon"></i>
                </div>
                <div class="dropdown-list shadow-lg">
                    @foreach ($categories as $category)
                        <div wire:click="$set('category_id', {{ $category->id }})" class="dropdown-list-item"> <a>
                                {{ $category->name }} </a> </div>
                    @endforeach
                </div>
            </div>
            {{-- por niveles --}}
            <div class="dropdown mr-4">
                <div class="dropdown-select">
                    <span class="select mr-4"> <i class="fas fa-sort-numeric-up-alt"></i> Niveles</span>
                    <i class="fa fa-caret-down icon"></i>
                </div>
                <div class="dropdown-list">
                    @foreach ($levels as $level)
                        <div wire:click="$set('level_id', {{ $level->id }})" class="dropdown-list-item"> <a>
                                {{ $level->name }} </a> </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- indicadores de filtrados en cursos --}}
    <div class="container flex">
        <p class="mr-2 text-sm"> <i class="fas fa-list-ul"></i> Categoria: <span class="span-primario">
                <?php switch ($category_id) {
                case 1:
                echo 'Desarrollo web';
                break;

                case 2:
                echo 'Diseño web';
                break;

                case 3:
                echo 'Programación';
                break;

                default:
                echo 'Todas las categorias';
                } ?>
            </span></p>

        <p class="mr-2 text-sm"> <i class="fas fa-sort-numeric-up-alt"></i> Nivel: <span class="span-primario">
                <?php switch ($level_id) {
                case 1:
                echo 'Nivel básico';
                break;

                case 2:
                echo 'Nivel intermedio';
                break;

                case 3:
                echo 'Nivel avanzado';
                break;

                default:
                echo 'Todos los niveles';
                } ?>
            </span></p>
    </div>


    {{-- lista de cursos --}}
    <div
        class="grid  grid-cols-2  lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-2 container flex gap-x-4 mt-6">
        @foreach ($courses as $course)
            {{-- componente del card de los cursos --}}
            <x-course-card :course="$course" />
        @endforeach
    </div>

    {{-- paginacion de los cursos --}}
    <div class="container mb-12">
        {{ $courses->links() }}
    </div>

</div>
