@extends('layout.paginaInicio')

@section('style')
<style>
    .retroceder{
        color: #6a6e6f;
        cursor: pointer;
        margin-left: 2%;
        width: 230px;
    }

    .retroceder{
        width: 100%;
    }

    .retroceder h6{
        font-size: 18px;
    }

    .propiedadContainer{
        margin-top: 30px;
        display: flex;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        width: 1300px;
        height: 420px;
    }

    .carrousel-img{
        display: block;
        width: 600px;
        height: 400px;
    }

    .propiedadContainer .disponible button{
        cursor: default;
        padding: 3px;
        margin: 30px 0 10px 15px;
    }

    .propiedadContainer .carousel{
        padding: 10px;
    }

    .roomsContainer{
        display: inline-block;
        font-size: 12px;
        margin: 0 0 10px 30px;
    }
    
    .roomsContainer span{
        text-align: center;
    }

    .roomsContainer span img{
        width: 20px;
        height: 20px;
    }

    .disponible h4{
        color: #3370FF;
        font-size: 28px;
    }

    .container h3{
        margin: 40px 0 10px 30px;
    }

    .text{
        color: #6a6e6f;
        opacity: 0.7;
    }

    .wasa img{
        width: 15px;
        height: 15px;
        margin: 5px;
    }

    .btn-container a{
        text-decoration: none;
    }

    .btn-container .wasa a{
        color: #FFFFFF;
    }

    .wasa{
        background-color: lime;
        color: #FFFFFF;
        border-radius: 8px;
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        height: auto;
    }

    .propiedadContainer .wasa{
        font-size: 16px;
        margin: 0;
    }

    .disponible{
        padding: 25px;
    }

    #carouselExample{
        width: 650px;
        height: 400px;
    }

    .propiedad{
        color: rgb(228, 194, 5);
        background-color: #FFFFFF;
        border: 2px solid rgb(228, 194, 5);
        width: 80px;
        position: absolute;
        border-radius: 6px; 
    }

    .cardPropiedad{
        color: rgb(228, 194, 5);
        background-color: #FFFFFF;
        border: 2px solid rgb(228, 194, 5);
        width: 80px;
        position: absolute;
        border-radius: 6px; 
    }

    .propiedad:hover, .disponible button:hover{
        cursor: default;
    }

    .card {
        width: 300px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        height: auto;
    }

    .image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .moreHouses{
        display: flex;
        padding: 25px 0 40px 30px;
        flex-wrap: wrap;
        gap: 10px;
    }

    .eliminar{
        border: none;
        width: 25px;
        height: 25px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        background-color: red; 
        transform: translate(10px, 10px);
    }

    .recamaras img{
        width: 20px;
        height: 20px;
    }

    .recamaras p{
        color: #6a6e6f;
        font-size: 16px;
        margin-left: 5px;
    }

    .recamaras{
        float: left;
        display: flex;
        width: 25px;
        height: 25px;
        margin-right: 20px;
        margin-bottom: 15px;
    }

    .card-content{
        padding: 12px;
    }

    .card-disponible{
        margin-bottom: 10px;
    }

    .card-disponible button{
        margin-right: 5px;
        padding: 2px;
    }

    .card-disponible .cardVerificacion{
        height: 20px;
        width: 20px;
        position: absolute;
    }

    .card-content h4{
        color: #3370FF;
        font-size: 16px;
    }

    .datos{
        margin-top: 50px;
    }

    .datos .wasa{
        padding: 4px;
        font-size: 12px;
    }

    .datos .wasa img{
        width: 22px;
        height: 22px;
    }

    
    .bt-google{
        color: #3370FF;
        background-color: #FFFFFF;
        border: 1px solid #3370FF;
        border-radius: 8px;
    }

    .btn-blue{
        padding: 6px;
        font-size: 12px;
    }

    .datos h4{
        font-size: 36px;
    }

    .datos p{
        color:#6a6e6f; 
        font-size: 12px;
    }

    #comentariosContainer{
        border-radius: 8px;
        margin-top: 30px;
        height: auto;
        padding-bottom: 5px;
    }

    #comentariosContainer h3{
        padding: 20px 0 0 10px;
    }

    .comentario{
        width: 90%;
        margin: 0 0 20px 60px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .comentario img{
        width: 40px;
        height: 40px;
        border-radius: 100%;
        margin: 10px 0 10px 10px;
    }

    .MsgRegistrate {
        width: 90%;
        padding: 5%;
        margin: 20px 0 20px 60px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .user{
        display: flex;
    }

    .user p{
        color: #6a6e6f;
        margin: 15px 0 0 10px;
    }

    .agregarComentario img{
        width: 40px;
        height: 40px;
        border-radius: 100%;
        margin: 10px 0 10px 20px;
    }

    .bt-google img{
        width: 10px;
        height: 15px;
        margin: 5px;
    }

    .agregarComentario {
        margin: 20px 0 20px 0;
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .agregarComentario .btn-blue{
        font-size: 16px;
        padding: 8px;
        margin-left: 10px;
    }

    .carousel-inner{
        position: absolute;
        z-index: -1;
    }

    textarea{
        resize: none;
    }

    .footer{
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }


    .textContainer{
        margin-left: 20px;
        padding-bottom: 20px;
    }

    .comentario .user .date{
        margin-left: 70%;
    }

    #page-footer{
        display: flex;
        gap: 20px;
        padding: 20px;
    }

    .verificacion{
        width: 50px;
        height: 50px;
        position: absolute;
    }

    @media(min-width: 1200px){
    /* Inicio */

    .retroceder h6{
        font-size: 2vw;
    }

    .container{
        margin-left: 1vw;
    }

    .container h2{
        font-size: 4vw;
    }

    .container p{
        font-size: 2vw;
    }

    /* Cartas */

    .propiedadContainer{
        width: 82vw;
        display: flex;
        margin-left: 6vw;
    }

    .propiedad{
        width: 24vw;
        font-size: 2.5vw;
        transform: translate(64vw, -20px);
    }

    #carouselExample{
        width: 80%;
        height: 330px;   
    }

    .carrousel-img{
        margin: 20px 0 0 20px;
        width: 550px;
        height: 350px;
    }
    
    .disponible button{
        font-size: 2vw;
        transform: translate(-15px, 25px);
    }

    .propiedadContainer .carousel{
        padding: 0;
    }

    .disponible{
        padding: 0 0 0 4vw;
        transform: translateX(-10vw);
    }

    .disponible h4{
        margin-top: 20px;
        font-size: 4vw;
    }

    .roomsContainer span{
        margin-left: 0vw;
        font-size: 1.5vw;
    }

    .roomsContainer span img{
        width: 2vw;
        height: 2vw;
        margin-right: 5px;
    }

    .propiedadContainer .wasa{
        font-size: 2vw;
        transform: translate(17vw, -121px);
    }

    .disponible .text{
        font-size: 1.5vw;
    }

    .verificacion{
        width: 6vw;
        height: 6vw;
        transform: translate(36vw, 45px)
    }

    .wasa img{
        width: 3vw;
        height: 3vw;
        margin: 5px;
    }

    .bt-google img{
        width: 2vw;
        height: 2.8vw;
    }

    .propiedadContainer .bt-google{
        font-size: 2vw;
        transform: translate(0, -20px)
    }

    /* Seccion de comentarios */
    
    #comentariosContainer h3{
        font-size: 4vw;
        padding: 0;
    }

    .agregarComentario .btn-blue{
    font-size: 3vw;
    padding: 8px;
    }

    .comentario{
    width: 80vw;
    margin: 0 0 20px 6vw;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .comentario img{
    width: 5vw;
    height: 5vw;
    border-radius: 100%;
    margin: 10px 0 10px 10px;
    }

    .comentario .user .date{
    margin-left: 48vw;
    color: black;
    font-size: 2.5vw;
    }

    .user p{
    font-size: 2.5vw;
    }

    .comentario .textContainer{
        font-size: 3vw;
    }

    .agregarComentario .btn-blue{
        font-size: 2vw;
    }

    /* Explorar mas propiedades seccion */

    .card{
        width: 20vw;
        margin-left: 2vw;
        height: auto;
    }

    .cardPropiedad{
        width: 14vw;
        font-size: 2vw;
        transform: translate(32vw, -15px)
    }
    .card img{
        width: 100%;
        height: 130px;
    }

    .card-content .card-disponible{
        font-size: 2vw;
    }

    .moreHouses{
        width: 98vw;
    }

    .datos h4{
        margin-top: -40px;
        font-size: 3.2vw;
    }

    .datos p{
        font-size: 2vw;
    }

    .datos .wasa{
    padding: 2px;
    font-size: 1.5vw;
    }

    .datos .wasa img{
    width: 3.5vw;
    height: 3.5vw;
    }

    .datos a{
        color: #FFFFFF;
        text-decoration: none;
    }

    .datos .btn-blue{
        font-size: 1.5vw;
    }

    .card-disponible .cardVerificacion{
        height: 4vw;
        width: 4vw;
        transform: translate(14vw, -5px);
    }

    /* footer */

    #page-footer{
        margin-top: 80px;
        width: 100%;
        gap: 0;
        padding: 0 0 10px 0;
        display: block;
      }

      .container-info img{
        width: 18vw;
        height: 18vw;
        transform: translate(-40px, 230px);
      }

      .container-info p{
        font-size: 1.4vw;
        transform: translate(-60px, 360px)
      }

      .container-info b{
        font-size: 1.6vw;
      }

      .container-info h2{
        font-size: 2.8vw;
      }

      #page-footer .container-info .container-social img{
        width: 2.5vw;
        height: 2.5vw;
        transform: translate(0);
      }

      #este{
        margin: 0 0 10px 55vw;
        transform: translate(-16vw, -2vw);
      }

      .container-info2 h2{
       font-size: 2.8vw;
      }

      .container-info{
        margin-top: -200px;
      }

      .container-info2 a{
        font-size: 1.7vw;
      }

      .container-info2{
        display: inline-block;
        margin-left: 30px;
        transform: translate(65vw, -2.5vw);
        margin-top: -800px;
      }
}

    @media(max-width: 1200px){
    /* Inicio */

    .retroceder h6{
        font-size: 2vw;
    }

    .container{
        margin-left: 1vw;
    }

    .container h2{
        font-size: 4vw;
    }

    .container p{
        font-size: 2vw;
    }

    /* Cartas */

    .propiedadContainer{
        width: 82vw;
        display: flex;
        margin-left: 6vw;
    }

    .propiedad{
        width: 24vw;
        font-size: 2.5vw;
        transform: translate(64vw, -20px);
    }

    #carouselExample{
        width: 80%;
        height: 330px;   
    }

    .carrousel-img{
        margin-top: 20px;
        width: 100%;
        height: 350px;
    }
    
    .disponible button{
        font-size: 2vw;
        transform: translate(-15px, 25px);
    }

    .propiedadContainer .carousel{
        padding: 0;
    }

    .disponible{
        padding: 0 0 0 4vw;
        transform: translateX(-4vw);
    }

    .disponible h4{
        margin-top: 20px;
        font-size: 4vw;
    }

    .roomsContainer span{
        margin-left: 0vw;
        font-size: 1.5vw;
    }

    .roomsContainer span img{
        width: 2vw;
        height: 2vw;
        margin-right: 5px;
    }

    .propiedadContainer .wasa{
        font-size: 2vw;
        transform: translate(150px, -50px);
    }

    .disponible .text{
        font-size: 1.5vw;
    }

    .verificacion{
        width: 6vw;
        height: 6vw;
        transform: translate(30vw, 45px)
    }

    .wasa img{
        width: 3vw;
        height: 3vw;
        margin: 5px;
    }

    .bt-google img{
        width: 2vw;
        height: 2.8vw;
    }

    .propiedadContainer .bt-google{
        font-size: 2vw;
        transform: translate(-50px, 42px)
    }

    /* Seccion de comentarios */
    
    #comentariosContainer h3{
        font-size: 4vw;
        padding: 0;
    }

    .agregarComentario .btn-blue{
    font-size: 3vw;
    padding: 8px;
    }

    .comentario{
    width: 80vw;
    margin: 0 0 20px 6vw;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .comentario img{
    width: 5vw;
    height: 5vw;
    border-radius: 100%;
    margin: 10px 0 10px 10px;
    }

    .comentario .user .date{
    margin-left: 48vw;
    color: black;
    font-size: 2.5vw;
    }

    .user p{
    font-size: 2.5vw;
    }

    .agregarComentario .btn-blue{
    font-size: 2.3vw;
    padding: 8px;
    }

    .comentario .textContainer{
        font-size: 3vw;
    }

    /* Explorar mas propiedades seccion */

    .card{
        width: 20vw;
        margin-left: 2vw;
        height: auto;
    }

    .cardPropiedad{
        width: 14vw;
        font-size: 2vw;
        transform: translate(32vw, -15px)
    }
    .card img{
        width: 100%;
        height: 130px;
    }

    .card-content .card-disponible{
        font-size: 2vw;
    }

    .moreHouses{
        width: 98vw;
    }

    .datos h4{
        margin-top: -40px;
        font-size: 3.2vw;
    }

    .datos p{
        font-size: 2vw;
    }

    .datos .wasa{
    padding: 2px;
    font-size: 1.5vw;
    }

    .datos .wasa img{
    width: 2vw;
    height: 2vw;
    }

    .datos a{
        color: #FFFFFF;
        text-decoration: none;
    }

    .datos .btn-blue{
        font-size: 1.5vw;
    }

    .card-disponible .cardVerificacion{
        height: 4vw;
        width: 4vw;
        transform: translate(14vw, -5px);
    }

    /* footer */

    #page-footer{
        margin-top: 80px;
        width: 100%;
        gap: 0;
        padding: 0 0 10px 0;
        display: block;
      }

      .container-info img{
        width: 18vw;
        height: 18vw;
        transform: translate(-40px, 230px);
      }

      .container-info p{
        font-size: 1.4vw;
        transform: translate(-60px, 300px)
      }

      .container-info b{
        font-size: 1.6vw;
      }

      .container-info h2{
        font-size: 2.8vw;
      }

      #page-footer .container-info .container-social img{
        width: 2.5vw;
        height: 2.5vw;
        transform: translate(0);
      }

      #este{
        margin: 0 0 10px 55vw;
        transform: translate(-16vw, -2vw);
      }

      .container-info2 h2{
       font-size: 2.8vw;
      }

      .container-info{
        margin-top: -200px;
      }

      .container-info2 a{
        font-size: 1.7vw;
      }

      .container-info2{
        display: inline-block;
        margin-left: 30px;
        transform: translate(65vw, -2.5vw);
        margin-top: -800px;
      }
}

    @media(max-width: 992px){
    /* Inicio */

    .retroceder h6{
        font-size: 2.5vw;
    }

    .container{
        margin-left: 1vw;
    }

    .container h2{
        font-size: 5vw;
    }

    .container p{
        font-size: 2.5vw;
    }

    /* Cartas */

    .propiedadContainer{
        width: 82vw;
        display: flex;
        margin-left: 6vw;
    }

    .propiedad{
        width: 26vw;
        font-size: 3vw;
        transform: translate(62vw, -20px);
    }

    #carouselExample{
        width: 80%;
        height: 330px;   
    }

    .carrousel-img{
        margin-top: 20px;
        width: 100%;
        height: 350px;
    }
    
    .disponible button{
        font-size: 2vw;
        transform: translate(-15px, 25px);
    }

    .propiedadContainer .carousel{
        padding: 0;
    }

    .disponible{
        padding: 0 0 0 4vw;
    }

    .disponible h4{
        margin-top: 20px;
        font-size: 4.5vw;
    }

    .roomsContainer span{
        margin-left: 0vw;
        font-size: 2vw;
    }

    .roomsContainer span img{
        width: 3vw;
        height: 3vw;
        margin-right: 5px;
    }

    .propiedadContainer .wasa{
        font-size: 2vw;
        transform: translate(11.5vw, -20px);
    }

    .disponible .text{
        font-size: 1.8vw;
    }

    .verificacion{
        width: 6vw;
        height: 6vw;
        transform: translate(30vw, 45px)
    }

    .wasa img{
        width: 2.5vw;
        height: 2.5vw;
        margin: 5px;
    }

    .bt-google img{
        width: 1.8vw;
        height: 2.5vw;
    }

    .propiedadContainer .bt-google{
        font-size: 2vw;
        transform: translate(-5vw, 63px)
    }

    /* Seccion de comentarios */
    
    #comentariosContainer h3{
        font-size: 4vw;
        padding: 0;
    }

    .agregarComentario .btn-blue{
    font-size: 3vw;
    padding: 8px;
    }

    .comentario{
    width: 80vw;
    margin: 0 0 20px 6vw;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .comentario img{
    width: 5vw;
    height: 5vw;
    border-radius: 100%;
    margin: 10px 0 10px 10px;
    }

    .agregarComentario .btn-blue{
    font-size: 2.5vw;
    padding: 8px;
    }

    .comentario .user .date{
    margin-left: 48vw;
    color: black;
    font-size: 2.5vw;
    }

    .user p{
    font-size: 2.5vw;
    }

    .comentario .textContainer{
        font-size: 3vw;
    }

    /* Explorar mas propiedades seccion */

    .card{
        width: 20vw;
        margin-left: 2vw;
        height: auto;
    }

    .cardPropiedad{
        width: 14vw;
        font-size: 2vw;
        transform: translate(32vw, -15px)
    }
    .card img{
        width: 100%;
        height: 130px;
    }

    .card-content .card-disponible{
        font-size: 2vw;
    }

    .moreHouses{
        width: 98vw;
    }

    .datos h4{
        margin-top: -40px;
        font-size: 3.2vw;
    }

    .datos p{
        font-size: 2vw;
    }

    .datos .wasa{
    padding: 2px;
    font-size: 1.5vw;
    }

    .datos .wasa img{
    width: 3.5vw;
    height: 3.5vw;
    }

    .datos a{
        color: #FFFFFF;
        text-decoration: none;
    }

    .datos .btn-blue{
        font-size: 1.5vw;
    }

    .card-disponible .cardVerificacion{
        height: 4vw;
        width: 4vw;
        transform: translate(14vw, -5px);
    }

    /* footer */

    #page-footer{
    margin-top: 80px;
    width: 100%;
    gap: 0;
    padding: 0 0 10px 0;
    display: block;
    }

    .container-info img{
    width: 20vw;
    height: 20vw;
    transform: translate(-40px, 230px);
    }

    .container-info p{
    font-size: 1.6vw;
    transform: translate(-70px, 280px)
    }

    .container-info b{
    font-size: 1.6vw;
    }

    .container-info h2{
    font-size: 2.6vw;
    }

    #page-footer .container-info .container-social img{
    width: 2.5vw;
    height: 2.5vw;
    transform: translate(0);
    }

    #este{
    margin: 0 0 10px 55vw;
    transform: translate(-16vw, -2vw);
    }

    .container-info2 h2{
    font-size: 2.6vw;
    }

    .container-info{
    margin-top: -200px;
    }

    .container-info2 a{
    font-size: 1.8vw;
    }

    .container-info2{
    display: inline-block;
    margin-left: 30px;
    transform: translate(65vw, -2.5vw);
    margin-top: -500px;
    }
}

    @media(max-width: 768px){
    /* Inicio */

    .retroceder h6{
        font-size: 3vw;
    }

    .container{
        margin-left: 1.5vw;
    }

    .container h2{
        font-size: 5.5vw;
    }

    .container p{
        font-size: 2.8vw;
    }

    /* Cartas */

    .propiedadContainer{
        width: 77vw;
        display: block;
        height: auto;
        margin-left: 8vw;
    }

    .propiedad{
        width: 30vw;
        font-size: 4vw;
        transform: translate(55vw, -20px);
    }

    #carouselExample{
        width: 100%;
        height: 330px;   
    }

    .carrousel-img{
        width: 100%;
        height: 400px;
    }
    
    .disponible button{
        font-size: 4vw;
        transform: translate(-15px, 5px);
    }

    .propiedadContainer .carousel{
        padding: 0;
    }

    .disponible{
        padding: 0 0 0 6vw;
    }

    .disponible h4{
        font-size: 5.5vw;
    }

    .disponible .text{
        font-size: 3vw;
    }

    .roomsContainer span{
        margin-left: 5vw;
        font-size: 4vw;
    }

    .roomsContainer span img{
        width: 4vw;
        height: 4vw;
        margin-right: 5px;
    }

    .propiedadContainer .wasa{
        font-size: 3vw;
        transform: translate(15vw, -10px);
    }

    .verificacion{
        width: 9vw;
        height: 9vw;
        transform: translate(68vw, 20px)
    }

    .wasa img{
        width: 5vw;
        height: 5vw;
        margin: 5px;
    }

    .bt-google img{
        width: 4vw;
        height: 5vw;
    }

    .propiedadContainer .bt-google{
        font-size: 3vw;
        transform: translate(15vw, -10px)
    }

    /* Seccion de comentarios */
    
    #comentariosContainer h3{
        font-size: 22px;
        padding: 0;
    }

    .agregarComentario .btn-blue{
    font-size: 3vw;
    padding: 8px;
    }

    .comentario{
    width: 80vw;
    margin: 0 0 20px 6vw;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .comentario img{
    width: 5vw;
    height: 5vw;
    border-radius: 100%;
    margin: 10px 0 10px 10px;
    }

    .agregarComentario .btn-blue{
        font-size: 2.8vw;
    }

    .comentario .user .date{
    margin-left: 45vw;
    color: black;
    font-size: 2.5vw;
    }

    .user p{
    font-size: 3vw;
    }

    .comentario .textContainer{
        font-size: 3.2vw;
    }

    /* Explorar mas propiedades seccion */

    .card{
        width: 40vw;
        margin-left: 2vw;
        height: auto;
    }

    .cardPropiedad{
        width: 18vw;
        font-size: 2.5vw;
        transform: translate(26vw, -15px)
    }
    .card img{
        width: 100%;
        height: 150px;
    }

    .card-content .card-disponible{
        font-size: 2.8vw;
        margin: -10px 0 -40px 0;
    }

    .moreHouses{
        width: 94vw;
    }

    .datos h4{
        font-size: 4.8vw;
    }

    .datos p{
        font-size: 2.2vw;
    }

    .datos .wasa{
    padding: 2px;
    font-size: 2vw;
    }

    .datos .wasa img{
    width: 3.5vw;
    height: 3.5vw;
    }

    .datos a{
        color: #FFFFFF;
        text-decoration: none;
    }

    .datos .btn-blue{
        font-size: 2vw;
    }

    .card-disponible .cardVerificacion{
        height: 7vw;
        width: 7vw;
        transform: translate(30.5vw, -5px);
    }

    /* footer */

    #page-footer{
    margin-top: 80px;
    width: 100%;
    gap: 0;
    padding: 0 0 10px 0;
    display: block;
      }

      .container-info img{
        width: 25vw;
        height: 25vw;
        transform: translate(-40px, 230px);
      }

      .container-info p{
        font-size: 2.4vw;
        transform: translate(-90px, 260px)
      }

      .container-info b{
        font-size: 2.4vw;
      }

      .container-info h2{
        font-size: 5vw;
      }

      .container-social img{
        width: 4.5vw;
        height: 4.5vw;
        transform: translate(0);
      }

      #este{
        margin: 0 0 10px 55vw;
        transform: translateY(-8vw);
      }

      .container-info2 h2{
       font-size: 6vw;
      }

      .container-info2 a{
        font-size: 2.5vw;
      }

      .container-info2{
        display: none;
      }
    }

    @media(max-width: 576px){
        /* Inicio */
        .retroceder h6{
            font-size: 3vw;
        }

        .container h2{
            font-size: 5.4vw;
        }

        .container p{
            font-size: 2.8vw;
        }

        /* Cartas */

        .propiedadContainer{
            width: 77vw;
            display: block;
            height: auto;
            margin-left: 8.5vw;
        }

        .propiedad{
            width: 30vw;
            font-size: 4vw;
            transform: translate(55vw, -20px);
        }

        #carouselExample{
            width: 100%;
            height: 300px;   
        }

        .carrousel-img{
            width: 100%;
            height: 300px;
        }
        
        .disponible button{
            font-size: 4vw;
            transform: translateY(-10px);
        }

        .propiedadContainer .carousel{
            padding: 0;
        }

        .disponible{
            padding: 0 0 0 8vw;
        }

        .disponible h4{
            margin-top: -10px;
            font-size: 6vw;
        }

        .roomsContainer{
            font-size: 4vw;
        }

        .disponible .text{
            margin-left: 5vw;
            font-size: 3.5vw;
        }
        
        .roomsContainer span{
            margin-left: 4vw;
            font-size: 3vw;
        }

        .roomsContainer span img{
            width: 4.5vw;
            height: 4.5vw;
            margin-right: 5px;
        }

        .propiedadContainer .wasa{
            font-size: 3vw;
            transform: translate(5vw, -10px);
        }

        .verificacion{
            width: 10vw;
            height: 10vw;
            transform: translate(68vw, -5px)
        }

        .wasa img{
            width: 5vw;
            height: 5vw;
            margin: 5px;
        }

        .bt-google img{
            width: 4vw;
            height: 5vw;
        }

        .propiedadContainer .bt-google{
            font-size: 3vw;
            transform: translate(2vw, -10px)
        }

        /* Seccion de comentarios */
        
        #comentariosContainer h3{
            font-size: 22px;
            padding: 0;
        }

        .agregarComentario .btn-blue{
        font-size: 3vw;
        padding: 8px;
        }

        .comentario{
        width: 80vw;
        margin: 0 0 20px 6vw;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .comentario img{
        width: 9vw;
        height: 9vw;
        border-radius: 100%;
        margin: 10px 0 10px 10px;
        }

        .comentario .user .date{
        margin-left: 36vw;
        color: black;
        font-size: 2.5vw;
        }

        .agregarComentario .btn-blue{
            font-size: 2.4vw;
        }

        .user p{
        font-size: 3vw;
        }

        .comentario .textContainer{
            font-size: 3.2vw;
        }

        /* Explorar mas propiedades seccion */

        .card{
            width: 40vw;
            margin-left: 2vw;
            height: auto;
        }

        .cardPropiedad{
            transform: translate(30vw, -15px)
        }
        .card img{
            width: 100%;
            height: 150px;
        }

        .card-content .card-disponible{
            font-size: 2.8vw;
            margin: -10px 0 -40px 0;
        }

        .moreHouses{
            width: 95vw;
            padding: 20px 0 0 20px;
        }

        .datos h4{
            font-size: 4.8vw;
        }

        .datos p{
            font-size: 2.2vw;
        }

        .datos .wasa{
        padding: 2px;
        font-size: 2vw;
        }

        .datos .wasa img{
        width: 3.5vw;
        height: 3.5vw;
        }

        .datos a{
            color: #FFFFFF;
            text-decoration: none;
        }

        .datos .btn-blue{
            font-size: 2vw;
        }

        .card-disponible .cardVerificacion{
            height: 7vw;
            width: 7vw;
            transform: translate(30.5vw, -5px);
        }

        /* footer */

        #page-footer{
        margin-top: 80px;
        width: 100%;
        gap: 0;
        padding: 0 0 10px 0;
        display: block;
      }

      .container-info img{
        width: 30vw;
        height: 30vw;
        transform: translate(-80px, 210px);
      }

      .container-info p{
        font-size: 2.8vw;
        transform: translate(-110px, 230px)
      }

      .container-info b{
        font-size: 2.5vw;
      }

      .container-info h2{
        font-size: 6vw;
      }

      .container-social{
        transform: translate(0);
      }

      #page-footer .container-info .container-social img{
        width: 5vw;
        height: 5vw;
      }

      .container-info{
        margin-top: -500px;
      }

      #este{
        margin: 0 0 10px 55vw;
        transform: translateY(-10vw);
      }

      .container-info2 h2{
       font-size: 6vw;
      }

      .container-info2 a{
        font-size: 2.5vw;
      }

      .container-info2{
        display: none;
      }
    }

    @media(max-width: 391px){
        /* Inicio */
        .retroceder h6{
            font-size: 3.5vw;
        }

        .container h2{
            font-size: 6vw;
        }

        .container p{
            font-size: 3.2vw;
        }

        /* Cartas */

        .propiedadContainer{
            width: 80vw;
            display: block;
            height: auto;
            margin-left: 6vw;
        }

        .propiedad{
            width: 30vw;
            transform: translate(56vw, -10px);
        }

        #carouselExample{
            width: 100%;
            height: 200px;   
        }

        .carrousel-img{
            width: 100%;
            height: 220px;
        }
        
        .disponible button{
            font-size: 4.5vw;
            transform: translate(-15px, -15px);
        }

        .propiedadContainer .carousel{
            padding: 0;
        }

        .disponible .text{
            margin-left: 2vw;
            font-size: 3.5vw;
        }

        .disponible{
            margin: 0 0 0 3vw;
        }

        .disponible h4{
            margin-top: -15px;
            font-size: 7.5vw;
        }

        .roomsContainer span{
            margin-left: 1vw;
            font-size: 3.5vw;
        }

        .roomsContainer span img{
            width: 5vw;
            height: 5vw;
            margin-right: 5px;
        }

        .propiedadContainer .wasa{
            font-size: 3vw;
            transform: translate(5vw, -10px);
        }

        .verificacion{
            width: 10vw;
            height: 10vw;
            transform: translate(72vw, 5px)
        }

        .wasa img{
            width: 5vw;
            height: 5vw;
            margin: 5px;
        }

        .bt-google img{
            width: 4vw;
            height: 5vw;
        }

        .propiedadContainer .bt-google{
            font-size: 3vw;
            transform: translate(2vw, -10px)
        }

        /* Seccion de comentarios */
        
        #comentariosContainer h3{
            font-size: 22px;
            padding: 0;
        }

        .agregarComentario .btn-blue{
        font-size: 3vw;
        padding: 8px;
        }

        .comentario{
        width: 80vw;
        margin: 0 0 20px 6vw;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .comentario img{
        width: 9vw;
        height: 9vw;
        border-radius: 100%;
        margin: 10px 0 10px 10px;
        }

        .agregarComentario .btn-blue{
            font-size: 2.5vw;
        }

        .comentario .user .date{
        margin-left: 32vw;
        color: black;
        font-size: 2.5vw;
        }

        .user p{
        font-size: 3.4vw;
        }

        .comentario .textContainer{
            font-size: 3.2vw;
        }

        /* Explorar mas propiedades seccion */

        .card{
            width: 40vw;
            margin-left: 2vw;
            height: auto;
        }

        .cardPropiedad{
            width: 22vw;
            font-size: 3vw;
            transform: translate(23vw, -8px)
        }

        .card img{
            width: 100%;
            height: 100px;
        }

        .card-content .card-disponible{
            font-size: 2.8vw;
            margin: -10px 0 -40px 0;
        }

        .moreHouses{
            padding: 10px 0 0 10px;
        }

        .datos h4{
            font-size: 5.2vw;
        }

        .datos p{
            font-size: 2.5vw;
        }

        .datos .wasa{
        padding: 2px;
        font-size: 2vw;
        }

        .datos .wasa img{
        width: 3vw;
        height: 3vw;
        }

        .datos a{
            color: #FFFFFF;
            text-decoration: none;
        }

        .datos .btn-blue{
            font-size: 2vw;
        }

        .card-disponible .cardVerificacion{
            height: 8vw;
            width: 8vw;
            transform: translate(110px, -5px);
        }

        /* footer */

        #page-footer{
            margin-top: 40px;
            width: 100%;
            gap: 0;
            padding: 0 0 10px 0;
            display: block;
        }

        .container-info img{
            width: 30vw;
            height: 30vw;
            transform: translate(-80px, 210px);
        }

        .container-info p{
            font-size: 2.8vw;
            transform: translate(-110px, 200px)
        }

        .container-info b{
            font-size: 3vw;
        }

        .container-info h2{
            font-size: 6vw;
        }

        .container-social{
            transform: translate(0);
        }

        #page-footer .container-info .container-social a img{
            width: 5vw;
            height: 5vw;
        }

        .container-info{
            margin-top: -500px;
        }

        #este{
            margin: 0 0 10px 55vw;
            transform: translateY(-13vw);
        }

        .container-info2 h2{
        font-size: 6.5vw;
        }

        .container-info2 a{
            font-size: 2.5vw;
        }

        .container-info2{
            display: none;
        }
    }
    </style>
@endsection

@section('body')
    <div class="container">
        <div class="retroceder" onclick="location.href='{{route('catalogo')}}'">
            <h6>↩ Regresar a la navegación</h6>
        </div>
        <h2>{{$propiedad->Calle}} #{{$propiedad->num_exterior}}</h2> {{-- Domicilio de la Propiedad --}}
        <p>Ubicacion : {{$propiedad->Ciudad}} , {{$propiedad->Estado}}</p> {{-- Ciudad , Estado --}}
        <div class="propiedadContainer">
            <button class="propiedad">{{$propiedad->tipo_propiedad->Tipo}}</button>
                <div id="carouselExample" class="carousel carousel-fade">
                    <div class="carousel-inner">
                        @if ($propiedad->imagenes_propiedad->isEmpty()) {{-- Si la Propiedad No tiene Imagen Coloca una de stock--}}
                            <div class="carousel-item active">
                                <img src="{{asset('Imagenes/Fondo-seccion1.png')}}" class="carrousel-img" alt="...">
                            </div>    
                        @endif
                        @foreach ($propiedad->imagenes_propiedad as $item => $image) {{-- Carga todas las imagenes de la propiedad --}}
                            <div class="carousel-item {{$item === 0 ? 'active' : ''}}">
                                <img src="{{asset('ImagesPublished/'.$image->src_image)}}" class="carrousel-img" alt="...">
                            </div>    
                        @endforeach
                    </div>
                    @if ($propiedad->imagenes_propiedad->count() > 1)  {{-- SI HAY MAS DE UNA IMAGEN APARECEN LOS BOTONES --}}
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    @endif
                </div>
            <div class="disponible">
                @if($propiedad->Verificacion)
                <img class="verificacion" src="{{asset('Imagenes/verificacion.png')}}">
                @endif
                @if ($propiedad->Vendible)  {{-- SI ES VENDIBLE APARECE ETIQUETA --}}
                    <button class="btn-blue">Venta</button>
                @else
                    <button class="btn-white">Venta</button>
                @endif
                @if ($propiedad->Rentable)  {{-- SI ES RENTABLE APARECE ETIQUETA --}}
                    <button class="btn-blue">Renta</button> 
                @else
                    <button class="btn-white">Renta</button> 
                @endif
                <h4>$ {{number_format($propiedad->Precio, 0, '.', ',')}} MXN</h4>
                <div class="roomsContainer">
                    <span><img src="{{asset('Imagenes/Room.png')}}"> {{$propiedad->Recamaras}}</span>
                </div>
                <div class="roomsContainer">
                    <span><img src="{{asset('Imagenes/Baño.png')}}"> {{$propiedad->Baños}}</span>
                </div>
                <div class="roomsContainer">
                    <span><img src="{{asset('Imagenes/Area.png')}}"> {{$propiedad->Area}} m²</span>
                </div>
                <p class="text">C. {{$propiedad->Calle}} #Ext. {{$propiedad->num_exterior ?: 'S/N'}} #Int. {{$propiedad->num_interior ?: 'S/N'}} Col. {{$propiedad->Colonia}} CP. {{$propiedad->Codigo_Postal}}</p>
                <footer>
                    @if (Auth::check())
                    <div class = "btn-container">
                        <button class="bt-google"><a href="{{ route('propiedades.mapa', ['id' => $propiedad->ID_P]) }}"><img src="{{asset('Imagenes/Maps.png')}}">Ver En Maps</a></button>
                        <button class="wasa"><a href="https://wa.me/{{$propiedad->users->Telefono}}"><img src="{{asset('Imagenes/whatsappLogo.png')}}">Enviar mensaje</a></button>
                    </div>
                    @endif
                </footer>
            </div>
        </div>

        <div id="comentariosContainer">
            <h3>Comentarios</h3>
            @if (Session::has('comentado'))  {{--Mensaje de comentario enviado--}}
                <div class="alert alert-success text-center" role="alert">{{ Session::get('comentado') }}</div>
            @endif
            @if (Session::has('comentario_eliminado'))   {{--Mensaje de comentario eliminado--}}
                <div class="alert alert-danger text-center" role="alert">{{ Session::get('comentario_eliminado') }}</div>
            @endif
            @auth
                <div class="agregarComentario">
                    <img src="https://picsum.photos/300/200">
                    <form action="/post/comentario" method="POST">
                        @csrf
                        <input type="number" name="user_id" value="{{Auth::user()->id}}" readonly hidden>
                        <input type="number" name="propiedad_id" value="{{$propiedad->ID_P}}" readonly hidden>
                        <div class="input-group">
                            <textarea name="Comentario" id="comentario" cols="100" rows="1" class="form-control"></textarea>
                            <button class="btn-blue" type="submit">Añadir comentario</button>
                        </div>
                    </form>
                </div>
                @foreach ($comentarios as $comentario)
                    <div class="comentario">
                        <div class="user">
                            @if ($comentario->users->Foto)
                            <img src="{{asset('ImagesPublished/'.$comentario->users->Foto)}}">  
                            @else
                            <img src="https://picsum.photos/300/200">  
                            @endif
                            <p>{{$comentario->users->name}}</p>
                            <p class="date">{{$comentario->Fecha}}</p>
                            @if (Auth::check() && Auth::user()->id === $comentario->users_id)
                            <button class="eliminar"><a style="color: white; text-decoration:none;" href="/delete/comentario/{{$comentario->ID_COM}}">X</a></button>
                            @endif
                        </div>
                        <p class="textContainer">{{$comentario->Comentario}}</p>
                    </div>
                @endforeach
            @endauth
            @guest
                <div class="MsgRegistrate">
                    <h5>Para ver y publicar comentarios</h5><br>
                    <button class="btn btn-primary mx-auto"><a class="nav-link" href="{{route('login')}}">Iniciar Sesión</a></button>
                </div>
            @endguest
            {{-- <div class="comentario">
                <div class="user">
                    <img src="https://picsum.photos/300/200">
                    <p>Nombre del usuario</p>
                    <p class="date">20/01/2024</p>
                </div>
                <p class="textContainer">Este es un comentario de prueba para verificar que funcione correctamente</p>
            </div> --}}
        </div>

        <h3>Explora más propiedades cercanas</h3>

        <div class="moreHouses">
            @foreach ($moreProperties as $sugerencia)
                <button class="cardPropiedad">{{$sugerencia->tipo_propiedad->Tipo}}</button>
                <div class="card">
                    @if($sugerencia->main_image)
                    <img src="{{asset('ImagesPublished/'.$sugerencia->main_image->src_image)}}" class="image">
                    @else
                    <img src="{{asset('Imagenes/Fondo-seccion1.png')}}" class="image" alt="...">
                    @endif
                    <div class="card-content">
                        <div class="card-disponible">
                            @if($sugerencia->Verificacion)
                            <img class="cardVerificacion" src="{{asset('Imagenes/verificacion.png')}}">
                            @endif
                            @if ($sugerencia->Vendible)  {{-- SI ES VENDIBLE APARECE ETIQUETA --}}
                                <button class="btn-white">Venta</button>
                            @endif
                            @if ($sugerencia->Rentable)  {{-- SI ES RENTABLE APARECE ETIQUETA --}}
                                <button class="btn-white">Renta</button> 
                            @endif
                        </div>
                        <div class="datos">
                            <h4>$ {{number_format($sugerencia->Precio, 0, '.', ',')}} MXN</h4>
                            <p>{{$sugerencia->Calle}} #{{$sugerencia->num_exterior}}, {{$sugerencia->Colonia}}</p>
                            <div class="footer">
                                <button class="btn-blue"><a href="/get/property/{{$sugerencia->ID_P}}">Ver más detalles</a></button>
                                <button class="wasa"><a href="https://wa.me/{{$sugerencia->users->Telefono}}"><img src="{{asset('Imagenes/whatsappLogo.png')}}">Enviar mensaje</a></button>
                            </div>
                        </div> 
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <footer id="page-footer">
        <div class="container-info">
            <img src="{{ asset('/Imagenes/LOGO.png') }}">
            <p>Instate es una marca registrada por <br>Instate Investments S.A de C.V. en <br>alianza con Design Construcciones.</p>
        </div>
      
        <br>
      
        <div class="container-info" id="este">
            <h2>Contacto</h2>
            <hr>
            <b>MINA 330 INT. 5 COL.CENTRO <br>MONTERREY, NUEVO LEÓN. MÉXICO <br>812-433-1672</b>
                
            <br>
      
              <div class="container-social">
                  <a href="https://www.facebook.com/instatemx" target="_blank">
                      <img src="{{ asset('Imagenes/iconoFacebook.png')}}">
                  </a>
              </div>
              <div class="container-social">
                  <a href="">
                      <img src="{{ asset('Imagenes/iconoTwitter.png')}}">
                  </a>
              </div>
              <div class="container-social">
                  <a href="https://www.instagram.com/instatemx/" target="_blank">
                      <img src="{{ asset('Imagenes/iconoInstagram.png')}}">
                  </a>
              </div>
        </div>
            <div class="container-info2">
                <h2>Legal</h2>
                <hr>
                <a href="/legal">Aviso legal</a><br><br><a href="{{route('avisoPrivacidad')}}">Politica de privacidad </a><br><br><a href="/privacidad">Politica de cookies</a>
            </div>
            <div class="container-info2">
                <h2>Sobre</h2>
                <hr>
                <a href="/nosotros">Nosotros</a><br><br><a href="/mision">Misión</a><br><br><a href="/vision">Visión</a>
            </div>
      </footer>
@endsection

@section('js')

@endsection
