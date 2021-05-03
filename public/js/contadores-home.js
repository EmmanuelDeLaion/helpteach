addEventListener('DOMContentLoaded', () => {
    const contadores = document.querySelectorAll('.contador_cantidad');
    const velocidad = 100;

    var tiempo = 100;

    const animarContadores = () => {
        for (const contador of contadores) {
            const actualizar_contador = () => {
                let cantidad_maxima = + contador.dataset.cantidadTotal;
                let valor_actual = + contador.innerText;
                let incremento = cantidad_maxima / velocidad;

                if (valor_actual < cantidad_maxima) {
                    contador.innerText = Math.ceil(valor_actual + incremento);
                    setTimeout(actualizar_contador, tiempo);
                } else {
                    contador.innerText = cantidad_maxima
                }
            }
            actualizar_contador();
        }
    }

    animarContadores();


    // const mostrarContadores = elementos => {
    //     elementos.array.forEach(elemento => {
    //         if (elemento.isIntersecting) {
    //             elemento.target.classList.add('animar');
    //             elemento.target.classList.remove('ocultar');
    //             setTimeout(animarContadores, 300);
    //         }
    //     });
    // }


    // const observer = new IntersectionObserver(mostrarContadores, {
    //     threshold: 0.75
    // });


    // const elementosHTML = document.querySelectorAll('.contador')
    // elementosHTML.forEach(elementoHTML => {
    //     observer.observe(elementoHTML)
    // });


});