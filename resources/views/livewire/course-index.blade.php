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

    {{-- <p>category_id: {{ $category_id }}</p>
    <p>level_id: {{ $level_id }}</p> --}}


    <div
        class="grid  grid-cols-2  lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-2 max-w-7xl mx-auto px-4 flex   sm:px-6 lg:px-8   gap-x-6 gap-y-6 mt-6">

        @foreach ($courses as $course)
        {{-- componente del card de los cursos  --}}
            <x-course-card :course="$course" />
        @endforeach

    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        {{ $courses->links() }}
    </div>

</div>
