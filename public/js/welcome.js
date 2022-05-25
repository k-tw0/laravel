//DOMContentLoeaded es un evento que solamente se llama cuando cargue toda la pagina inicia
document.addEventListener("DOMContentLoaded", () => {
    const inicioSection = document.getElementById("inicioSection");
    inicioSection.classList.remove("inicio-class");

    function muestraReloj() {
        var d = new Date(); // aqui se llama al constructor de la fecha
        var horas = d.getHours(); // aqui se llama al constructor de la hora
        var minutos = d.getMinutes(); // aqui se llama al constructor de los minutos
        var segundos = d.getSeconds(); // aqui se llama al constructor de los segundos

        // SI, el numero que tienen estas variables es menor a 10 entonces se les añadira un 0
        if (horas < 10) {
            horas = "0" + horas;
        }
        if (minutos < 10) {
            minutos = "0" + minutos;
        }
        if (segundos < 10) {
            segundos = "0" + segundos;
        }
        // Recorrido de los dias en total son 7 contando el 0
        var dia = new Array(7);
        dia[0] = "Domingo";
        dia[1] = "Lunes";
        dia[2] = "Martes";
        dia[3] = "Miercoles";
        dia[4] = "Jueves";
        dia[5] = "Viernes";
        dia[6] = "Sabado";

        var coco = document.getElementById("reloj"); // Llamamos a la id del div la caja
        // INTENTE LLAMARLO POR CLASES PERO NO PUDE, ASI QUE LO REALICE CON ID
        // var coco = document.getElementsByClassName("reloj");

        var hora = horas + ":" + minutos + ":" + segundos; // AQUI SE CONCATENA SOLAMENTE Y SE ALMACENA EN LA VARIABLE HORA

        //AQUI SE PINTAN LOS DATOS EN LA VARIBALE COCO QUE ES LA ID DE LA CAJA(DIV)
        coco.innerHTML =
            "<b>" +
            dia[d.getDay()] +
            " / " +
            d.toISOString().split("T")[0] +
            " / " +
            hora +
            "</b>";
    }

    //setTimeout(function () {}, 2000);

    setInterval(muestraReloj, 1000);

    //Modal
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    setTimeout(function () {
        modal.style.display = "block";
    }, 2000);

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };

    //controlador para mostrar contenido dinamico

    const deporteSection = document.getElementById("deporteSection");
    const negocioSection = document.getElementById("negocioSection");
    document.getElementById("inicioID").addEventListener(
        "click",
        function (event) {
            let hola = 0;
            if (hola == 0) {
                inicioSection.classList.remove("inicio-class");

                deporteSection.classList.add("deportes-class");
                negocioSection.classList.add("negocios-class");
                hola += 1;
                console.log(hola);
            } else if (hola == 1) {
                inicioSection.classList.add("inicio-class");
                hola -= 1;
                console.log(hola);
            }
        },
        false
    );
    document.getElementById("deportesID").addEventListener(
        "click",
        function (event) {
            let hola = 0;
            if (hola == 0) {
                deporteSection.classList.remove("deportes-class");

                inicioSection.classList.add("inicio-class");
                negocioSection.classList.add("negocios-class");
                hola += 1;
                console.log(hola);
            } else if (hola == 1) {
                deporteSection.classList.add("deportes-class");
                hola -= 1;
                console.log(hola);
            }
        },
        false
    );
    document.getElementById("negociosID").addEventListener(
        "click",
        function (event) {
            let hola = 0;
            if (hola == 0) {
                negocioSection.classList.remove("negocios-class");

                deporteSection.classList.add("deportes-class");
                inicioSection.classList.add("inicio-class");
                hola += 1;
                console.log(hola);
            } else if (hola == 1) {
                negocioSection.classList.add("negocios-class");
                hola -= 1;
                console.log(hola);
            }
        },
        false
    );

    // Obtener todos los elementos "navbar-burger"
    const $navbarBurgers = Array.prototype.slice.call(
        document.querySelectorAll(".navbar-burger"),
        0
    );
    //Controlador para el menu desplegable "mas"
    const dropdown = document.getElementById("dropdown");
    dropdown.addEventListener("click", (e) => {
        e.stopPropagation();
        dropdown.classList.toggle("is-active");
    });
    document.addEventListener("click", () => {
        dropdown.classList.remove("is-active");
    });

    // Comprueba si hay hamburguesas en la barra de navegación
    if ($navbarBurgers.length > 0) {
        // Agrega un evento de clic en cada uno de ellos
        $navbarBurgers.forEach((el) => {
            el.addEventListener("click", () => {
                // Obtener el objetivo del atributo "objetivo de datos"
                const target = el.dataset.target;
                const $target = document.getElementById(target);

                // Cambia la clase "is-active" tanto en "navbar-burger" como en "navbar-menu"
                el.classList.toggle("is-active");
                $target.classList.toggle("is-active");
            });
        });
    }

    // establecemos las constantes
    // IDs de paginaciones por numeros deporte
    const paginationLinkDeporte1 = document.getElementById(
        "paginationLinkDeporte1"
    );
    const paginationLinkDeporte2 = document.getElementById(
        "paginationLinkDeporte2"
    );
    const paginationLinkDeporte3 = document.getElementById(
        "paginationLinkDeporte3"
    );

    // establecemos las constantes
    // IDs de contenidos de paginaciones por numeros
    const contentDeporteLink1 = document.getElementById("contentDeporteLink1");
    const contentDeporteLink2 = document.getElementById("contentDeporteLink2");
    const contentDeporteLink3 = document.getElementById("contentDeporteLink3");

    paginationLinkDeporte1.addEventListener("click", (e) => {
        e.stopPropagation(); // esto es para evitar bugs de progragacion de clicks

        // ORDEN DE PAGINACION CON EL CLICK RESPECTIVO, ESTE ES EL CLICK 1
        paginationLinkDeporte1.classList.add("is-current"); // añadimos la clase paginacion principal 1

        paginationLinkDeporte2.classList.remove("is-current"); // remueve la clase para la pagina 1
        paginationLinkDeporte3.classList.remove("is-current"); // remueve la clase para la pagina 3

        // CONTENIDO DEL HERO CON LA ESTRUCTURA DE LA PAGINACION
        contentDeporteLink1.classList.remove("hero-body__deporte1"); // añadimos la clase paginacion principal 1 DEPORTE

        contentDeporteLink2.classList.add("hero-body__deporte2"); // remueve la clase para mostrar el contenido del hero 2 DEPORTE
        contentDeporteLink3.classList.add("hero-body__deporte3"); // remueve la clase para mostrar el contenido del hero 3 DEPORTE
    });
    paginationLinkDeporte2.addEventListener("click", (e) => {
        e.stopPropagation();
        // ORDEN DE PAGINACION CON EL CLICK RESPECTIVO, ESTE ES EL CLICK 2
        paginationLinkDeporte2.classList.add("is-current"); // añadimos la clase paginacion principal 2

        paginationLinkDeporte1.classList.remove("is-current"); // remueve la clase para la pagina 1
        paginationLinkDeporte3.classList.remove("is-current"); // remueve la clase para la pagina 3

        // CONTENIDO DEL HERO CON LA ESTRUCTURA DE LA PAGINACION
        contentDeporteLink2.classList.remove("hero-body__deporte2"); // añadimos la clase paginacion principal 1

        contentDeporteLink1.classList.add("hero-body__deporte1"); // remueve la clase para mostrar el contenido del hero 1
        contentDeporteLink3.classList.add("hero-body__deporte3"); // remueve la clase para mostrar el contenido del hero 3
    });
    paginationLinkDeporte3.addEventListener("click", (e) => {
        e.stopPropagation();
        // ORDEN DE PAGINACION CON EL CLICK RESPECTIVO, ESTE ES EL CLICK 2
        paginationLinkDeporte3.classList.add("is-current"); // añadimos la clase paginacion principal 2

        paginationLinkDeporte1.classList.remove("is-current"); // remueve la clase para la pagina 1
        paginationLinkDeporte2.classList.remove("is-current"); // remueve la clase para la pagina 3

        // CONTENIDO DEL HERO CON LA ESTRUCTURA DE LA PAGINACION
        contentDeporteLink3.classList.remove("hero-body__deporte3"); // añadimos la clase paginacion principal 1

        contentDeporteLink1.classList.add("hero-body__deporte1"); // remueve la clase para mostrar el contenido del hero 1
        contentDeporteLink2.classList.add("hero-body__deporte2"); // remueve la clase para mostrar el contenido del hero 3
    });
    // FIN

    // establecemos las constantes
    // IDs de paginaciones por numeros negocios
    const paginationLink1 = document.getElementById("pagintationLink1");
    const paginationLink2 = document.getElementById("pagintationLink2");
    const paginationLink3 = document.getElementById("pagintationLink3");

    // establecemos las constantes
    // IDs de contenidos de paginaciones por numeros
    const contentLink1 = document.getElementById("contentLink1");
    const contentLink2 = document.getElementById("contentLink2");
    const contentLink3 = document.getElementById("contentLink3");
    paginationLink1.addEventListener("click", (e) => {
        e.stopPropagation(); // esto es para evitar bugs de progragacion de clicks

        // ORDEN DE PAGINACION CON EL CLICK RESPECTIVO, ESTE ES EL CLICK 1
        paginationLink1.classList.add("is-current"); // añadimos la clase paginacion principal 1

        paginationLink2.classList.remove("is-current"); // remueve la clase para la pagina 1
        paginationLink3.classList.remove("is-current"); // remueve la clase para la pagina 3

        // CONTENIDO DEL HERO CON LA ESTRUCTURA DE LA PAGINACION
        contentLink1.classList.remove("hero-body__nomostrar1"); // añadimos la clase paginacion principal 1

        contentLink2.classList.add("hero-body__nomostrar2"); // remueve la clase para mostrar el contenido del hero 2
        contentLink3.classList.add("hero-body__nomostrar3"); // remueve la clase para mostrar el contenido del hero 3
    });
    paginationLink2.addEventListener("click", (e) => {
        e.stopPropagation();
        // ORDEN DE PAGINACION CON EL CLICK RESPECTIVO, ESTE ES EL CLICK 2
        paginationLink2.classList.add("is-current"); // añadimos la clase paginacion principal 2

        paginationLink1.classList.remove("is-current"); // remueve la clase para la pagina 1
        paginationLink3.classList.remove("is-current"); // remueve la clase para la pagina 3

        // CONTENIDO DEL HERO CON LA ESTRUCTURA DE LA PAGINACION
        contentLink2.classList.remove("hero-body__nomostrar2"); // añadimos la clase paginacion principal 1

        contentLink1.classList.add("hero-body__nomostrar1"); // remueve la clase para mostrar el contenido del hero 1
        contentLink3.classList.add("hero-body__nomostrar3"); // remueve la clase para mostrar el contenido del hero 3
    });
    paginationLink3.addEventListener("click", (e) => {
        e.stopPropagation();

        // ORDEN DE PAGINACION CON EL CLICK RESPECTIVO, ESTE ES EL CLICK 3
        paginationLink3.classList.add("is-current"); // añadimos la clase paginacion principal 3

        paginationLink1.classList.remove("is-current"); // remueve la clase para la pagina 1
        paginationLink2.classList.remove("is-current"); // remueve la clase para la pagina 3

        // CONTENIDO DEL HERO CON LA ESTRUCTURA DE LA PAGINACION
        contentLink3.classList.remove("hero-body__nomostrar3"); // añadimos la clase paginacion principal 3

        contentLink2.classList.add("hero-body__nomostrar2"); // remueve la clase para mostrar el contenido del hero 2
        contentLink1.classList.add("hero-body__nomostrar1"); // remueve la clase para mostrar el contenido del hero 1
    });
});
