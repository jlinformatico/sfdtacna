/*
 * Tutorial Easy slider
 * Autor: Osiris Magro
 * Fecha: 15/02/2010
 * CompÃ¡rtelo como quieras
 */

$(document).ready(function(){

    /*
     * Variables
     */

    var slides, timer;

    //Crea un objeto con informaciÃ³n de los slides
    slides = $('#slider .slidesContainer > .slide');


    /*
     * Funciones
     */
    
    //Desplaza el contenedor hacia la direcciÃ³n definida
    //@direction = [left,right]
    function sliderScroll(direction){

       //Calcula la posiciÃ³n actual del contenedor
       position = $('#slider').scrollLeft();

       //Calcula la anchura total menos el Ãºltimo slide.
       //Se usa para calcular cuando el scroll llega al final.
       totalWidth = (slides.length * slides[0].offsetWidth) - slides[0].offsetWidth

       //Se comprueba la variable direction para hacer el scroll hacia izquierda o derecha
       switch (direction) {
            case 'right': //Derecha
                if (position+slides[0].offsetWidth > totalWidth){ //Si la siguiente posiciÃ³n se sale del contenedor, vuelve al principio.
                    $('#slider:not(:animated)').animate({scrollLeft:0},1000);
                } else { //Si no es el final, suma a la posiciÃ³n actual la anchura del slide.
                    $('#slider:not(:animated)').animate({scrollLeft:position+slides[0].offsetWidth},1000);
                }
                break;

            case 'left': //Izquierda
                if (position-slides[0].offsetWidth < 0){ //Si la siguiente posiciÃ³n se sale del contenedor, vuelve al final.
                    $('#slider:not(:animated)').animate({scrollLeft:totalWidth},1000);
                } else { //Si no es el final, resta a la posiciÃ³n actual la anchura del slide.
                    $('#slider:not(:animated)').animate({scrollLeft:position-slides[0].offsetWidth},1000);
                }
                break;
        }

   }

   //FunciÃ³n que crea el temporizador
   function initTimer(){
        timer = setInterval(function(){sliderScroll('right');}, 5000);
   }


   /*
    * CÃ³digo
    */

    //Asigna el ancho total de los slides al contenedor
    //La anchura total se obtiene multiplicando la medida de un slide por el nÃºmero de slides)
    $('#slider .slidesContainer').css('width',slides[0].offsetWidth * slides.length);


    //Click en el botÃ³n "next"
    $('.next').click(function(){
        clearInterval(timer); //Desactiva el temporizador
        sliderScroll('right'); //Mueve el scroll a la derecha
        initTimer(); //Vuelve a activar el temporizador
        return false;
    });

    //Click en el botÃ³n "prev"
    $('.prev').click(function(){
        clearInterval(timer); //Desactiva el temporizador
        sliderScroll('left'); //Mueve el scroll a la izquierda
        initTimer(); //Vuelve a activar el temporizador
        return false;
    });


    //Inicia el temporizador
    initTimer();

});