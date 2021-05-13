<div>
    <div class="py-4 filtros mt-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <div class="dropdown mr-4">
                <div class="dropdown-select">
                    <a wire:click="resetFilters" class="select mr-4"> <i class="fas fa-list-alt"></i> Todos los
                        cursos</a>
                </div>
            </div>
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

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
        <p class="mr-2 text-sm">Categoria: <span class="span-primario">
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

                case '':
                echo 'Todas las categorias';

                default:
                'Todos';
                } ?>
            </span></p>

        <p class="mr-2 text-sm">Nivel: <span class="span-primario">
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

                case '':
                echo 'Todos los niveles';

                default:
                'Todos';
                } ?>
            </span></p>

    </div>




    <div
        class="grid  grid-cols-2  lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-2 max-w-7xl mx-auto px-4 flex   sm:px-6 lg:px-8   gap-x-6 gap-y-6 mt-6">

        @foreach ($courses as $course)
            {{-- componente del card de los cursos --}}
            <x-course-card :course="$course" />
        @endforeach

    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        {{ $courses->links() }}
    </div>

</div>
