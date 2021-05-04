<div>

    <style>
        :root {
            /* colores  */
            --color-blanco-fondo: #f7f8fc;
            --color-primario: #1da1f2;
            --color-negro: #22292f;
            --color-negro-primario: #151515;
            /* color botones secundarios  */
            --color-blanco-primario: #f4f4f4;
            --color-blanco-secundario: #e8e8e8;
            --color-gris-fondo: #f6f6f6;
            --color-gris: #9da9b2;
            --color-blanco: #fff;
        }

        .dropdown {
            width: auto;
            position: relative;
        }

        .dropdown:hover .dropdown-list {
            opacity: 1;
            visibility: visible;
        }


        .dropdown-select {
            padding: 15px;
            border-radius: 4px;
            background-color: var(--color-primario);
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 14px;
            cursor: pointer;
            color: var(--color-blanco);
        }

        .dropdown-list {
            border-radius: 4px;
            background-color: var(--color-blanco);
            position: absolute;
            top: 110%;
            left: 0;
            right: 0;
            opacity: 0;
            visibility: hidden;
            z-index: 3;
            transition: opacity 0.2s linear, visibility 0.2s linear;
            color: var(--color-primario);
            cursor: pointer;
        }

        .dropdown-list-item {
            padding: 1rem;
            font-size: 14px;
        }

        .dropdown-list-item:hover {
            background-color: var(--color-primario);
            color: var(--color-blanco);
        }

    </style>

    <div class="py-4">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">

            <div class="dropdown">
                <div class="dropdown-select">
                    <span class="select mr-4">Categorias</span>
                    <i class="fa fa-caret-down icon"></i>
                </div>

                <div class="dropdown-list">
                    <div class="dropdown-list-item">Prueba</div>
                    <div class="dropdown-list-item">Prueba</div>
                    <div class="dropdown-list-item">Prueba</div>
                    <div class="dropdown-list-item">Prueba</div>
                </div>

            </div>

        </div>
    </div>


</div>
