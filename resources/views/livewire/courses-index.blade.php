<div>
    {{-- filtros --}}
    <div class="py-4 filtros mt-6">
        <div class="container flex">
            {{-- todos los cursos --}}
            <div wire:click="resetFilters" class="dropdown mr-4">
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
 
    {{-- lista de cursos --}}
    <div class="grid container grid-cols-1 md:grid-cols-4 gap-4 gap-y-6">
        @foreach ($courses as $course)
            {{-- componente del card de los cursos --}}
            <x-course-card :course="$course" />
        @endforeach
    </div>


    {{-- paginacion de los cursos --}}
    <div class="container">
        <div class="mt-12">
            {{ $courses->links() }}
        </div>

    </div>

</div>
