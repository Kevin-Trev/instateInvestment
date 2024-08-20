@extends('layout.paginaInicio')

@section('style')
<style>
    /* Estilos para el contenedor principal */
    .container {
      padding: 12%;
    }
    
    .container h1 {
      font-size: 2vw;
      height: 25px;
    }
    
    .container p {
      font-size: 1vw;
      color: #889396;
    }
    
    /* Estilos para las tarjetas */
    
    .card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
      padding: 30px;
      width: 1000px;
    }
    
    #primerPaso{
        height: 565px;
    }
    
    /* Estilos para los formularios */
    
    .form-group {
      margin-bottom: 20px;
    }
    
    /* Estilos para los botones */
    
    .btn-blue{
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      width: 20%;
    }

    .btn-white{
        padding: 10px 18px;
        width: 20%;
    }
    
    .next {
      display: inline-block;
      margin-left: 100px;
    }
    
    /* Estilos para el logotipo */
    
    .logo img {
      height: 40px;
      margin-top: 20px;
      margin-left: 1%;
      margin-bottom: 5px;
    }
    
    /* Estilos para los círculos */
    
    .circle-container {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 15px;
      transform: translateY(10px);
      height: 0;
    }
    
    .circle {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      border: 1px solid blue;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 16px;
      margin: 0 10px;
    }

    #Frente-group{
        margin-left: 90px;
    }
    
    .circle-circle-container .circle.blue{
        text-align: center;
        margin-left: 38%;
    }
    
    .circle-circle-container .text{
        color: #585c5d;
    }
    
    .circle.blue {
      background-color: blue;
      color: white;
      margin-right: 50px;
    }
    
    .line {
      height: 2px;
      transform: translateY(-10px);
      background-color: lightgray;
      width: 50px;
      flex: 1;
    }
    
    .transparent {
      color: transparent;
    }
    
    /* Estilos para los títulos de sección */
    
    .section-title {
      display: flex;
    }
    
    .section-title h3 {
      padding-top: 6px;
    }
    
    .section-title .circle.blue {
      padding: 20px;
      margin-bottom: 20px;
      margin-right: 15px;
    }
    
    /* Estilos para los contenedores */
    
    .contenedorDatos .form-group {
      display: inline-block;
      margin-right: 50px;
    }
    
    .contenedorDatos .form-control {
      width: 410px;
    }
    
    .contenedorCaracteristicas .form-group{
        display: inline-block;
        margin-right: 100px;
    }

    #ee{
        display: flex;
        flex-wrap: wrap;
        gap: 45px;
        padding: 8px;
        height: auto;
    }

    .btn-remove{
        width: 20px;
        position: absolute;
        transform: translate(-10px, -5px);
        color: #007bff;
        border: 1px solid #007bff;
        background-color: #FFFFFF;
        border-radius: 8px;
    }

    .form-group #tipoPropiedad{
        text-align: center;
    }

    .contenedorCaracteristicas .form-group input[type="number"]{
        border-radius: 40%;
        width: 50px;
        height: 50px;
        -moz-appearance: textfield;
        text-align: center;
        margin: 10px;
    }

    .contenido{  
        margin: 0 0 30px 160px
    }
    
    .contenedorCaracteristicas .form-group 
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button{
        -webkit-appearance: none;
    }
    
    .btn-mas,
    .btn-menos {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      border: 1px solid blue;
      display: flex;
      color: #007bff;
      background-color: white;
      justify-content: center;
      align-items: center;
      font-size: 16px;
      transform: translateY(15px);
    }
    
    .numeros{
        display: flex;
    }
    
    .serviciosContainer{
        text-align: center
    }
    
    .form-group select{
        width: 150px;
    }

    .buttonContainer{
        display: flex;
        justify-content: flex-end;
    }

    #Frente, #Fondo, #Area{
        width: 120px;
        border-radius: 6px;
    }

    .error{
        display: none;
        color: red;
        font-size: 12px;
    }

    .AddPhotoContainer{
        margin: 20px 0 20px 7%;
        width: 800px;
        border: 2px dashed rgba(128, 128, 128, 0.473);
        height: 300px;
        border-radius: 8px;
    }

    .photoContainer img{
        width: 120px;
        height: 120px;
        border-radius: 8px;
        margin: 0 0 10px 12px;
    }


    .postal{
        margin-left: 8px;
    }

    .postal input{
        width: 220px;
    }

    #Image {
  display: none;
   }

    .contenedorDatos{
    margin-left: 10px;
    }

    #Precio{
    width: 300px;
    -moz-appearance: none;
     }

    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }


    .radio-group{
    display: inline-block;
    border: 1px solid #007bff;
    border-radius: 8px;
    padding: 15px;
    margin-left: 90px;
    text-align: center;
    }

    .radio-group .btn{
    margin-left: 20px;
    }

    /* Estilo para el label personalizado */
    .custom-file-label {
    background-color: #007bff;
    padding: 5px 10px;
    border-radius: 4px;
    border: none;
    cursor: pointer;
    color: #FFFFFF;
    }

    #Area-group{
        transform: translateY(12px);
    }

    #primerPaso{
        transform: translateY(-230px);
    }

    #segundoPaso{
        transform: translateY(-230px);
    }

    #tercerPaso{
        transform: translateY(-80px);
    }

    #cuartoPaso{
        transform: translateY(-190px);
    }

    #segundoPaso, #cuartoPaso, #tercerPaso{
        display: none;
        height: 0;
    }

    @media(min-width: 992px){
        /* Header */

        .circle-circle-container .circle.blue{
            margin-left: 40%;
        }

        .container, .container-sm{
            max-width: none;
        }

        .circle.blue{
            margin-right: 50px;
        }

        .container h1{
            font-size: 30px;
            margin-bottom: 15px;
        }

        .container p{
            font-size: 20px;
        }

        /* CARTAS */

        .section-title h3{
            font-size: 30px;
        }

        /* Primer paso */

        #primerPaso{
           transform: translateY(-13vw);
        }

        .card{
            transform: translateX(-4.5vw);
            width: 85vw;
        }

        .circle-circle-container .circle.blue {
            width: 35px;
            height: 35px;
            font-size: 15px;
        }

        .circle{
            width: 35px;
            height: 35px;
            font-size: 15px;
        }   
        
        .circle-circle-container .text{
            font-size: 14px;
            color: #889396;
            text-align: center;
        }

        .section-title .circle.blue{
            display: none;
        }

        .section-title{
            margin-top: -20px;
        }

        .contenedorDatos{
            margin: 0;
            display: flex;
        }

        .contenedorDatos .form-group{
            font-size: 18px;
        }

        .contenedorDatos .form-control{
            width: 35vw;
            font-size: 16px;
        }

        .postal {
            font-size: 18px;
            margin: 0;
        }

        .postal input{
            width: 30vw;
            font-size: 16px;
        }

        /* Segundo paso */

        #segundoPaso{
            transform: translateY(-13vw);
            margin-bottom: 150px;
        }

        .form-group .col-form-label{
            font-size: 20px;
        }

        .form-group #tipoPropiedad{
            font-size: 17px;
            width: 13vw;
        }

        .contenedorCaracteristicas{
            margin: 0;
            font-size: 18px;
        }

        #Area-group{
            transform: translate(0);
        }

        .contenido{
            margin-left: 144px;
        }

        .contenedorCaracteristicas #Recamaras-group{
            margin: 0 30px 0 15vw;
        }

        .contenedorCaracteristicas #Recamaras-group input, #Baños-group input{
            width: 60px;
            font-size: 16px;
            height: 60px;
        }

        .contenedorCaracteristicas .form-group{
            margin: 2vw;
        }

        .contenedorCaracteristicas #Frente-group input, #Fondo-group input, #Area-group input{
            font-size: 16px;
            width: 15vw;
            height: 40px;
        }

        #Frente-group{
            margin: 0;
        }

        .btn-menos, .btn-mas{
            transform: translateY(20px);
            width: 40px;
            height: 40px;
            font-size: 20px;
        }

        .btn-blue {
            font-size: 16px;
            width: 150px;
            margin-left: 10px;
        }

        .btn-white{
            width: 150px;
            font-size: 16px;
            margin-left: 30px;
        }

        .buttonContainer{
            padding-top: 20px;
        }

        /* Tercer Paso */

        #tercerPaso{
            transform: translateY(-11vw);
        }

        .btn-group label{
            margin: 20px 0 5px 0;
            font-size: 20px;
        }

        /* Cuarto Paso */

        #cuartoPaso{
            margin-top: 2vw;
        }

        #cuartoPaso .form-group{
            font-size: 20px;
        }

        #cuartoPaso #Precio{
            font-size: 16px;
            width: 22vw;
        }

        .radio-group{
            margin: 0 8px 5px 4.2vw;
            width: 30vw;
        }

        .radio-group .btn{
            font-size: 18px;
            margin: 0;
        }

        .radio-group label{
            font-size: 20px;
        }

        .custom-file-label{
            padding: 4px;
        }

        #ee{
            width: 100%;
            transform: translateX(-5vw);
        }

        .photoContainer img{
            width: 180px;
            height: 180px;
            margin: 0 0 6px 8px;
        }

        .imagen-group{
            font-size: 20px;
            text-align: center;
        }
    }

    @media(max-width: 992px){
        /* Header */

        .circle-circle-container .circle.blue{
            margin-left: 40%;
        }

        .container, .container-sm{
            max-width: none;
        }

        .circle.blue{
            margin-right: 50px;
        }

        .container h1{
            font-size: 3vw;
        }

        .container p{
            font-size: 1.8vw;
        }

        /* CARTAS */

        .section-title h3{
            font-size: 3vw;
        }

        /* Primer paso */

        #primerPaso{
           transform: translateY(-110px);
        }

        .card{
            transform: translateX(-4.5vw);
            width: 85vw;
        }

        .circle-circle-container .circle.blue {
            width: 4vw;
            height: 4vw;
            font-size: 2vw;
        }

        .circle{
            width: 4vw;
            height: 4vw;
            font-size: 2vw;
        }   
        
        .circle-circle-container .text{
            font-size: 1.6vw;
            color: #889396;
            text-align: center;
        }

        .section-title .circle.blue{
            display: none;
        }

        .section-title{
            margin-top: -20px;
        }

        .contenedorDatos{
            margin: 0;
            display: flex;
        }

        .contenedorDatos .form-group{
            font-size: 1.9vw;
        }

        .contenedorDatos .form-control{
            width: 35vw;
            font-size: 1.8vw;
        }

        .postal {
            font-size: 1.9vw;
            margin: 0;
        }

        .postal input{
            width: 30vw;
            font-size: 1.8vw;
        }

        /* Segundo paso */

        #segundoPaso{
            transform: translateY(-125px);
        }

        .form-group .col-form-label{
            font-size: 2vw;
        }

        .form-group #tipoPropiedad{
            font-size: 1.8vw;
            width: 16vw;
        }

        .contenedorCaracteristicas{
            margin: 0;
            font-size: 2vw;
        }

        #Area-group{
            transform: translate(0);
        }

        .contenido{
            margin-left: 6vw;
        }

        .contenedorCaracteristicas #Recamaras-group{
            margin: 0 30px 0 15vw;
        }

        .contenedorCaracteristicas #Recamaras-group input, #Baños-group input{
            width: 45px;
            font-size: 1.8vw;
            height: 45px;
        }

        .contenedorCaracteristicas .form-group{
            margin: 2vw;
        }

        .contenedorCaracteristicas #Frente-group input, #Fondo-group input, #Area-group input{
            font-size: 1.8vw;
            width: 16vw;
            height: 40px;
        }

        #Frente-group{
            margin: 0;
        }

        .btn-menos, .btn-mas{
            width: 3.5vw;
            height: 3.5vw;
            font-size: 2.5vw;
        }

        .btn-blue {
            font-size: 1.8vw;
            width: 20vw;
            margin-left: 10px;
        }

        .btn-white{
            width: 20vw;
            font-size: 1.8vw;
            margin-left: 30px;
        }

        .buttonContainer{
            padding-top: 20px;
        }

        /* Tercer Paso */

        #tercerPaso{
            transform: translateY(-85px);
        }

        .btn-group label{
            margin: 20px 0 5px 0;
            font-size: 2vw;
        }

        /* Cuarto Paso */

        #cuartoPaso{
            margin-top: 70px;
        }

        #cuartoPaso .form-group{
            font-size: 2vw;
        }

        #cuartoPaso #Precio{
            font-size: 1.8vw;
            width: 34vw;
        }

        .radio-group{
            margin: 0 8px 5px 4.2vw;
            width: 30vw;
        }

        .radio-group .btn{
            font-size: 1.8vw;
            margin: 0;
        }

        .radio-group label{
            font-size: 2vw;
        }

        .custom-file-label{
            padding: 4px;
        }

        #ee{
            width: 100%;
            transform: translateX(-5vw);
        }

        .photoContainer img{
            width: 14vw;
            height: 14vw;
            margin: 0 0 6px 8px;
        }

        .imagen-group{
            font-size: 2.2vw;
            text-align: center;
        }
    }

    @media(max-width: 768px){
        /* Header */

        .circle-circle-container .circle.blue{
            margin-left: 40%;
        }

        .container, .container-sm{
            max-width: none;
        }

        .circle.blue{
            margin-right: 50px;
        }

        .container h1{
            font-size: 4vw;
        }

        .container p{
            font-size: 2vw;
        }

        /* CARTAS */

        .section-title h3{
            font-size: 3.7vw;
        }

        /* Primer paso */

        #primerPaso{
           transform: translateY(-110px);
        }

        .card{
            transform: translateX(-4.5vw);
            width: 85vw;
        }

        .circle-circle-container .circle.blue {
            width: 5vw;
            height: 5vw;
            font-size: 2.5vw;
        }

        .circle{
            width: 5vw;
            height: 5vw;
            font-size: 2.5vw;
        }   
        
        .circle-circle-container .text{
            font-size: 2vw;
            color: #889396;
            text-align: center;
        }

        .section-title .circle.blue{
            display: none;
        }

        .section-title{
            margin-top: -30px;
        }

        .contenedorDatos{
            margin: 0;
            display: flex;
        }

        .contenedorDatos .form-group{
            font-size: 2.2vw;
        }

        .contenedorDatos .form-control{
            width: 30vw;
            font-size: 2vw;
        }

        .postal {
            font-size: 2.2vw;
            margin: 0;
        }

        .postal input{
            width: 30vw;
            font-size: 2vw;
        }

        /* Segundo paso */

        #segundoPaso{
            transform: translateY(-125px);
        }

        .form-group .col-form-label{
            font-size: 2.5vw;
        }

        .form-group #tipoPropiedad{
            font-size: 2.2vw;
            width: 20vw;
        }

        .contenedorCaracteristicas{
            margin: 0;
            font-size: 2.2vw;
        }

        #Area-group{
            transform: translate(0);
        }

        .contenido{
            margin-left: 5vw;
        }

        .contenedorCaracteristicas #Recamaras-group{
            margin: 0 30px 0 12vw;
        }

        .contenedorCaracteristicas #Recamaras-group input, #Baños-group input{
            width: 45px;
            font-size: 2vw;
            height: 45px;
        }

        .contenedorCaracteristicas .form-group{
            margin: 2vw;
        }

        .contenedorCaracteristicas #Frente-group input, #Fondo-group input, #Area-group input{
            font-size: 2.2vw;
            width: 16vw;
            height: 40px;
        }

        #Frente-group{
            margin: 0;
        }

        .btn-menos, .btn-mas{
            width: 4vw;
            height: 4vw;
            font-size: 2.5vw;
        }

        .btn-blue {
            font-size: 1.8vw;
            width: 20vw;
            margin-left: 10px;
        }

        .btn-white{
            width: 20vw;
            font-size: 1.8vw;
            margin-left: 30px;
        }

        .buttonContainer{
            padding-top: 20px;
        }

        /* Tercer Paso */

        #tercerPaso{
            transform: translateY(-85px);
        }

        .btn-group label{
            margin: 20px 0 5px 0;
            font-size: 2vw;
        }

        /* Cuarto Paso */

        #cuartoPaso{
            margin-top: 70px;
        }

        .h2, h2 {
            font-size: 5vw;
        }

        #cuartoPaso .form-group{
            font-size: 2.2vw;
        }

        #cuartoPaso #Precio{
            font-size: 2vw;
            width: 40vw;
        }

        .radio-group{
            margin: 0 8px 5px 4.2vw;
            width: 30vw;
        }

        .radio-group .btn{
            font-size: 2vw;
            margin: 0;
        }

        .radio-group label{
            font-size: 2.2vw;
        }

        .custom-file-label{
            padding: 4px;
        }

        #ee{
            width: 100%;
            transform: translateX(-5vw);
        }

        .photoContainer img{
            width: 13.5vw;
            height: 13.5vw;
            margin: 0 0 5px 6px;
        }

        .imagen-group{
            font-size: 2.5vw;
            text-align: center;
        }
    }

    @media(max-width: 576px){
        /* Header */

        .circle-circle-container .circle.blue{
            margin-left: 20%;
        }

        .circle.blue{
            margin-right: 24px;
        }

        .container h1{
            font-size: 4vw;
        }

        .container p{
            font-size: 2vw;
        }

        /* CARTAS */

        .section-title h3{
            font-size: 4.5vw;
        }

        /* Primer paso */

        #primerPaso{
           transform: translateY(-100px);
        }

        .card{
            transform: translateX(-4.5vw);
            width: 85vw;
        }

        .circle-circle-container .circle.blue {
            width: 5vw;
            height: 5vw;
            font-size: 2.5vw;
        }

        .circle{
            width: 5vw;
            height: 5vw;
            font-size: 2.5vw;
        }
        
        
        .circle-circle-container .text{
            font-size: 0;
            color: transparent;
        }

        .section-title .circle.blue{
            display: none;
        }

        .section-title{
            margin-top: -30px;
        }

        .contenedorDatos{
            margin: 0;
            display: flex;
        }

        .contenedorDatos .form-group{
            font-size: 2.2vw;
        }

        .contenedorDatos .form-control{
            width: 30vw;
            font-size: 2vw;
        }

        .postal {
            font-size: 2.2vw;
            margin: 0;
        }

        .postal input{
            width: 30vw;
            font-size: 2vw;
        }

        /* Segundo paso */

        #segundoPaso{
            transform: translateY(-110px);
        }
        

        .form-group .col-form-label{
            font-size: 2.5vw;
        }

        .form-group #tipoPropiedad{
            font-size: 2.2vw;
            width: 20vw;
        }

        .contenedorCaracteristicas{
            margin: 0;
            font-size: 2.2vw;
        }

        #Area-group{
            transform: translate(0);
        }

        .contenido{
            margin-left: 5vw;
        }

        .contenedorCaracteristicas #Recamaras-group{
            margin: 0 30px 0 8vw;
        }

        .contenedorCaracteristicas #Recamaras-group input, #Baños-group input{
            width: 38px;
            font-size: 2vw;
            height: 35px;
        }

        .contenedorCaracteristicas .form-group{
            margin: 1vw;
        }

        .contenedorCaracteristicas #Frente-group input, #Fondo-group input, #Area-group input{
            font-size: 2vw;
            width: 16vw;
            height: 30px;
        }

        #Frente-group{
            margin: 0;
        }

        .btn-menos, .btn-mas{
            width: 5vw;
            height: 5vw;
            font-size: 2.5vw;
        }

        .btn-blue {
            font-size: 1.8vw;
            width: 20vw;
            margin-left: 10px;
        }

        .btn-white{
            width: 20vw;
            font-size: 1.8vw;
            margin-left: 30px;
        }

        .buttonContainer{
            padding-top: 20px;
            transform: translateX(-4vw);
        }

        /* Tercer Paso */

        #tercerPaso{
            transform: translateY(-110px);
        }

        .btn-group label{
            margin: 20px 0 5px 0;
            font-size: 1.8vw;
        }

        /* Cuarto Paso */

        #cuartoPaso{
            margin-top: 80px;
        }

        .h2, h2 {
            font-size: 5vw;
        }

        #cuartoPaso .form-group{
            font-size: 2.2vw;
        }

        #cuartoPaso #Precio{
            font-size: 2vw;
            width: 40vw;
        }

        .radio-group{
            margin: 0 8px 5px 4.2vw;
            width: 30vw;
        }

        .radio-group .btn{
            font-size: 2vw;
            margin: 0;
        }

        .radio-group label{
            font-size: 2.2vw;
        }

        .custom-file-label{
            padding: 4px;
        }

        #ee{
            width: 100%;
            transform: translateX(-5vw);
        }

        .imagen-group{
            font-size: 2.5vw;
            text-align: center;
        }
    }

    @media(max-width: 391px){
        /* Header */

        .circle-circle-container .circle.blue{
            margin-left: 28%;
        }

        .circle.blue{
            margin-right: 24px;
        }

        .container h1{
            font-size: 5vw;
        }

        .container p{
            font-size: 3vw;
        }

        /* CARTAS */

        .section-title h3{
            font-size: 5vw;
        }

        /* Primer paso */

        #primerPaso{
           transform: translateY(-60px);
        }

        .card{
            transform: translateX(-4.5vw);
            width: 85vw;
        }

        .circle-circle-container .circle.blue {
            width: 6vw;
            height: 6vw;
            font-size: 3vw;
        }

        .circle{
            width: 6vw;
            height: 6vw;
            font-size: 3vw;
        }
        
        
        .circle-circle-container .text{
            font-size: 0;
            color: transparent;
        }

        .section-title .circle.blue{
            display: none;
        }

        .section-title{
            margin-top: -30px;
        }

        .contenedorDatos{
            margin: 0;
            display: flex;
        }

        .contenedorDatos .form-group{
            font-size: 2.5vw;
        }

        .contenedorDatos .form-control{
            width: 25vw;
            font-size: 2vw;
        }

        .postal {
            font-size: 3vw;
            margin: 0;
        }

        .postal input{
            width: 30vw;
            font-size: 2vw;
        }

        .btn-blue {
            font-size: 2vw;
            width: 25vw;
            height: 30px; 
        }

        /* Segundo paso */

        #segundoPaso{
            transform: translateY(-50px);
        }
        

        .form-group .col-form-label{
            font-size: 3vw;
        }

        .form-group #tipoPropiedad{
            font-size: 2.2vw;
            width: 24vw;
        }

        .contenedorCaracteristicas{
            margin: 0;
            font-size: 2vw;
        }

        #Area-group{
            transform: translate(0);
        }

        .contenido{
            margin: 0;
        }

        .contenedorCaracteristicas #Recamaras-group input, #Baños-group input{
            width: 38px;
            font-size: 2.5vw;
            height: 30px;
        }

        .contenedorCaracteristicas .form-group{
            margin: 1vw;
        }

        .contenedorCaracteristicas #Frente-group input, #Fondo-group input, #Area-group input{
            font-size: 2vw;
            width: 16vw;
            height: 30px;
        }

        #Frente-group{
            margin: 0;
        }

        .btn-menos, .btn-mas{
            width: 6vw;
            height: 6vw;
            font-size: 3vw;
        }

        .btn-white{
            height: 30px;
            width: 25vw;
            font-size: 2vw;
            margin: 0;
        }

        .buttonContainer{
            padding-top: 20px;

        }

        /* Tercer Paso */

        #tercerPaso{
            transform: translateY(-40px);
        }

        .btn-group label{
            font-size: 2.5vw;
        }

        /* Cuarto Paso */

        #cuartoPaso{
            margin-top: 100px;
        }

        .h2, h2 {
            font-size: 5vw;
        }

        #cuartoPaso .form-group{
            font-size: 3vw;
        }

        #cuartoPaso #Precio{
            font-size: 3vw;
            width: 60vw;
        }

        .radio-group{
            margin: 0 8px 5px 0;
            width: 30vw;
        }

        .radio-group .btn{
            font-size: 2vw;
            margin: 0;
        }

        .radio-group label{
            font-size: 2.5vw;
        }

        .custom-file-label{
            padding: 2px;
        }

        #ee{
            width: 100%;
            transform: translateX(-5vw);
        }

        .photoContainer img{
            width: 11vw;
            height: 11vw;
            margin: 0 0 5px 6px;
        }

        .imagen-group{
            font-size: 3vw;
            text-align: center;
        }
    }
        </style>
@endsection

@section('body')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container" id="primerPaso">
        <input type="hidden" id="propiedadId" name="ID_P">
        <h1>Publica una nueva propiedad</h1>
        <p>Sigue los siguientes pasos para publicar tu propiedad</p>
            <div class="card">
                <div class="circle-container">
                    <div class="circle-circle-container">
                        <div class="circle blue">1</div>
                        <div class="text">Datos de la propiedad</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle">2</div>
                        <div class="transparent">0</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle">3</div>
                        <div class="transparent">0</div>
                    </div>
                    
                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle">4</div>
                        <div class="transparent">0</div>
                    </div>

                    
                </div>

                <br><br>

                <div class="section-title">
                    <div class="circle blue">1</div><h3>Ubicación</h2>
                </div>

                <div class="contenedorDatos">
                    <div class="form-group">
                        <label for="Ciudad">Ciudad:</label>
                        <input type="text" class="form-control" name="Ciudad" id="Ciudad" placeholder="Ciudad donde se encuentre la propiedad">
                    </div>
                    <div class="form-group">
                        <label for="Estado">Estado:</label>
                        <select class="form-control" name="Estado" id="Estado">
                            <option value="DIF">Distrito Federal</option>
                            <option value="AGS">Aguascalientes</option>
                            <option value="BCN">Baja California</option>
                            <option value="BCS">Baja California Sur</option>
                            <option value="CAM">Campeche</option>
                            <option value="CHP">Chiapas</option>
                            <option value="CHI">Chihuahua</option>
                            <option value="COA">Coahuila</option>
                            <option value="COL">Colima</option>
                            <option value="DUR">Durango</option>
                            <option value="GTO">Guanajuato</option>
                            <option value="GRO">Guerrero</option>
                            <option value="HGO">Hidalgo</option>
                            <option value="JAL">Jalisco</option>
                            <option value="MEX">Ciudad de México</option>
                            <option value="MIC">Michoacán</option>
                            <option value="MOR">Morelos</option>
                            <option value="NAY">Nayarit</option>
                            <option value="NLE">Nuevo León</option>
                            <option value="OAX">Oaxaca</option>
                            <option value="PUE">Puebla</option>
                            <option value="QRO">Queretaro</option>
                            <option value="ROO">Quintana Roo</option>
                            <option value="SLP">San Luis Potos&iacute;</option>
                            <option value="SIN">Sinaloa</option>
                            <option value="SON">Sonora</option>
                            <option value="TAB">Tabasco</option>
                            <option value="TAM">Tamaulipas</option>
                            <option value="TLX">Tlaxcala</option>
                            <option value="VER">Veracruz</option>
                            <option value="YUC">Yucatán</option>
                            <option value="ZAC">Zacatecas</option>
                        </select>
                    </div>
                </div>
                <div class="contenedorDatos">
                    <div class="form-group">
                        <label for="calle">Calle:</label>
                        <input type="text" class="form-control" name="calle" id="Calle" placeholder="Calle de la propiedad">
                    </div>
                    <div class="form-group">
                        <label for="Colonia">Colonia:</label>
                        <input type="text" class="form-control" name="Colonia" id="Colonia" placeholder="Colonia donde se encuentra">
                    </div>
                </div>
                <div class="contenedorDatos">
                    <div class="form-group">
                        <label for="num_interior">Núm. interior (opcional):</label>
                        <input type="text" class="form-control" name="num_interior" id="Num_interior" placeholder="Número interior de la propiedad">
                    </div>
                    <div class="form-group">
                        <label for="num_exterior">Núm. exterior (opcional):</label>
                        <input type="text" class="form-control" name="num_exterior" id="Num_exterior" placeholder="Número exterior de la propiedad">
                    </div>
                </div>
                <div class="form-group">
                    <div class="postal">
                        <label for="Codigo_Postal">Codigo postal:</label>
                        <input type="number" class="form-control" id="Codigo_Postal" name="Codigo_Postal" placeholder="Código postal de la propiedad" min="0" max="5">
                    </div>
                </div>
                <h6 class="error">Completa los campos necesarios para continuar</h6>
                <div class="buttonContainer">
                    <button type="button" id="button1" class="btn-blue">Continuar</button>
                </div>
            </div>
    </div>

    <div class="container" id="segundoPaso">
        <h1>Publica una nueva propiedad</h1>
        <p>Sigue los siguientes pasos para publicar tu propiedad</p>
            <div class="card">
                <div class="circle-container">
                    <div>
                        <div class="circle blue">1</div>
                        <div class="transparent">0</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle blue">2</div>
                        <div class="text">Especificaciones</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle">3</div>
                        <div class="transparent">0</div>
                    </div>
                    
                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle">4</div>
                        <div class="transparent">0</div>
                    </div>
                    
                </div>

                <br><br>
                  
                <div class="section-title">
                    <div class="circle blue">2</div><h3>Caracteristicas</h3>
                </div>

                <div class="form-group">
                    <label for="tipoPropiedad" class="col-form-label">Tipo de propiedad:</label>
                    <select id="tipoPropiedad" name="Tipo_Propiedad_id" class="form-control">

                    </select>
                </div>

                <div class="contenido">
                    <div class="contenedorCaracteristicas">
                        <div class="form-group" id="Recamaras-group">
                            <label for="Recamaras">Recamaras:</label>
                            <div class="numeros">
                                <button class="btn-menos" id="minusRecamaras">-</button>
                                <input type="number" class="form-control" value="0" id="Recamaras" name="Recamaras" readonly>
                                <button class="btn-mas" id="plusRecamaras">+</button>
                            </div>
                        </div>
                        <div class="form-group" id="Baños-group">
                            <label for="Baños">Baños:</label>
                            <div class="numeros">
                                <button class="btn-menos" id="minusBaños">-</button>
                                <input type="number" class="form-control" id="Baños" name="Baños" value="0" readonly>
                                <button class="btn-mas" id="plusBaños">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="contenedorCaracteristicas">
                        
                        <div class="form-group" id="Area-group">
                            <label for="Area">Area:</label>
                            <div class="numeros">
                                <input type="number" class="form-control" id="Area" name="Area" placeholder="Medida m²">
                            </div>
                        </div>
                        <div class="form-group" id="Fondo-group">
                            <label for="Fondo">Fondo:</label>
                            <div class="numeros">
                                <input type="number" class="form-control" id="Fondo" name="Fondo" placeholder="Medida m²">
                            </div>
                        </div>
                        <div class="form-group" id="Frente-group">
                            <label for="frente">Frente:</label>
                            <div class="numeros">
                                <input type="number" class="form-control" id="Frente" name="Frente" placeholder="Medida m²">
                            </div>
                        </div>
                    </div>
                </div>
                <h6 class="error">Completa los campos necesarios para continuar</h6>
                    <div class="buttonContainer">
                        <button type="button" id="button2" class="btn-white">Regresar</button>
                        <button type="button" id="button3" class="btn-blue">Continuar</button>
                    </div>
            </div>
        </div>      
    </div>

    <div class="container" id="tercerPaso">
        <h1>Publica una nueva propiedad</h1>
        <p>Sigue los siguientes pasos para publicar tu propiedad</p>
            <div class="card">
                <div class="circle-container">
                    <div>
                        <div class="circle blue">1</div>
                        <div class="transparent">0</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle blue">2</div>
                        <div class="transparent">0</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle blue">3</div>
                        <div class="text">Servicios de la propiedad</div>
                    </div>
                    
                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle">4</div>
                        <div class="transparent">0</div>
                    </div>

                </div>

                <br><br>

                <div class="section-title">
                    <div class="circle blue">3</div><h3>Servicios</h3>
                </div>
                    <div class="serviciosContainer">
                        <div id="servicio" class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
    
                        </div>
                    </div>
                    
                    <br>
                    
                    <div class="buttonContainer">
                        <button type="button" id="button4" class="btn-white">Regresar</button>
                        <button type="button" id="button5" class="btn-blue">Continuar</button>
                    </div>
            </div>
    </div>

    <div class="container" id="cuartoPaso">
        <h1>Publica una nueva propiedad</h1>
        <p>Sigue los siguientes pasos para publicar tu propiedad</p>
            <div class="card">
                <div class="circle-container">
                    <div>
                        <div class="circle blue">1</div>
                        <div class="transparent">0</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle blue">2</div>
                        <div class="transparent">0</div>
                    </div>

                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle blue">3</div>
                        <div class="transparent">0</div>
                    </div>
                    
                    <div class="line"></div>

                    <div class="circle-circle-container">
                        <div class="circle blue">4</div>
                        <div class="text">Detalles de la publicación</div>
                    </div>

                </div>

                <br><br>

                <div class="section-title">
                    <div class="circle blue">4</div><h2>Descripción</h2>
                </div>

                <div class="form-group">
                    <label for="Precio">Precio:</label>
                    <input type="number" class="form-control" id="Precio" name="Precio" placeholder="Ingresa el precio MXN de tu inmueble">
                </div>
                <div class="form-group">
                    <div class="radio-group">
                        <label>¿Propiedad en venta?</label>
                        <br>
                        <input type="radio" name="Vendible" value="1" id="P1" class="btn-check">
                        <label class="btn" for="P1">Si</label>
                        <input type="radio" name="Vendible" value="0" id="P2" class="btn-check">
                        <label class="btn" for="P2">No</label>
                    </div>
                    <div class="radio-group">
                        <label>¿Propiedad en renta?</label>
                        <br>
                        <input type="radio" name="Rentable" value="1" id="P3" class="btn-check">
                        <label class="btn" for="P3">Si</label>
                        <input type="radio" name="Rentable" value="0" id="P4" class="btn-check">
                        <label class="btn" for="P4">No</label>
                    </div>
                </div>
                <div class="imagen-group">
                    <label>Muestra tu propiedad:</label>
                    <br>
                    <input type="file" class="custom-file-label" id="Image" accept="image/*" multiple>
                    <label for="Image" class="custom-file-label">¡Agrega Imagenes!</label>
                </div>
                <div class="form-group">
                    <div class="AddPhotoContainer" id="ee">
                        <div class="photoContainer" id="imagenEs">
                            {{-- <img src="{{asset('Imagenes/CarlosTrejo.jpg')}}">
                            <button type="button" class="btn-remove">X</button>
                        </div>
                        <div class="photoContainer">
                            <img src="{{asset('Imagenes/CarlosTrejo.jpg')}}">
                            <button type="button" class="btn-remove">X</button>
                        </div>
                        <div class="photoContainer">
                            <img src="{{asset('Imagenes/CarlosTrejo.jpg')}}">
                            <button type="button" class="btn-remove">X</button> --}}
                        </div>
                    </div>
                </div>
                
                <h6 class="error">Completa los campos necesarios para continuar</h6>

                <div class="buttonContainer">
                    <button type="button" id="button6" class="btn-white">Regresar</button>
                    <button type="button" id="buttonEnviar" class="btn-blue">Finalizar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <script>
        let arregloServicios = [];
        let selectedFiles = [];
        var formData = new FormData();
        let input = document.querySelector('input[type="file"]');

        async function fetchTipoPropiedad(){
            await $.get('/get/typeProperties', function (tipos){
                var selectTipo = $('#tipoPropiedad');
                selectTipo.empty();
                tipos.forEach(tipo => {
                    selectTipo.append(`
                    <option value="${tipo.ID_T}">${tipo.Tipo}</option>
                    `);
                });
            });
        }
        

        async function fetchServicios(){
            await $.get('/get/servicios', function(servicios){
                var serviciosCheck = $('#servicio');
                serviciosCheck.empty();
                servicios.forEach(servicio => {
                    serviciosCheck.append(`
                        <input type="checkbox" class="btn-check" name="servicio_id[]" id="${servicio.ID_SERV}" value="${servicio.ID_SERV}" autocomplete="off">
                        <label class="btn btn-outline-primary" for="${servicio.ID_SERV}">${servicio.Servicio}</label>
                    `);
                });
            });
        }

        async function enviarForm(){
            $.ajax({
                url: '/post/propiedad',
                method: 'POST',
                headers :{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(response){
                    console.log();
                    window.location.href = "/views/hubs/perfil/" + response.user;
                },
                error: function(error){
                    console.log('nonononono', error);
                }
            });
        }

        $(document).ready(async function(){
            
            await fetchTipoPropiedad();
            await fetchServicios();
            var uno = $('#primerPaso');
            var dos = $('#segundoPaso');
            var tres = $('#tercerPaso');
            var cuatro = $('#cuartoPaso');
            var error = $('.error');
            var valorRecamaras = parseInt($('#Recamaras').val());
            var valorBaños = parseInt($('#Baños').val());
            var valorArea = parseInt($('#Area').val());
            var valorFrente = parseInt($('#Frente').val());
            var valorFondo = parseInt($('#Fondo').val());
            var Area = $('#Area');

            // Formulario 

            $('input[name="servicio_id[]"]').on('change', function(){
                if($(this).is(':checked')){
                    arregloServicios.push($(this).val());    
                }
                else{
                    const valor = $(this).val();
                    const indice = arregloServicios.indexOf(valor);
                    if (indice !== -1){
                        arregloServicios.splice(indice, 1);
                    } 
                }
                console.log(arregloServicios);
            });
            
            // Limitadores de input tipo number 

            $('#Codigo_Postal').on('input', function(){
            const input = event.target;
            const value = input.value;
            const maxLength = 5;

                if (value.length > maxLength) {
                    input.value = value.slice(0, maxLength);
                }
            });

            $('#Num_interior').on('input', function(){
            const input = event.target;
            const value = input.value;
            const maxLength = 5;

                if (value.length > maxLength) {
                    input.value = value.slice(0, maxLength);
                }
            });

            $('#Num_exterior').on('input', function(){
            const input = event.target;
            const value = input.value;
            const maxLength = 5;

                if (value.length > maxLength) {
                    input.value = value.slice(0, maxLength);
                }
            });

            $('#buttonEnviar').on('click', function(){
                const imageFiles = $('#Image')[0].files;

                if($('#Precio').val() && imageFiles.length > 0){
                    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
                    formData.append('Precio', $('#Precio').val());
                    formData.append('Recamaras', $('#Recamaras').val());
                    formData.append('Baños', $('#Baños').val());
                    formData.append('Codigo_Postal', $('#Codigo_Postal').val());
                    formData.append('num_exterior', $('#Num_exterior').val());
                    formData.append('num_interior', $('#Num_interior').val());
                    formData.append('Colonia', $('#Colonia').val());
                    formData.append('Calle', $('#Calle').val());
                    formData.append('Ciudad', $('#Ciudad').val());
                    formData.append('Estado', $('#Estado').val());
                    formData.append('Area', $('#Area').val());
                    formData.append('Frente', $('#Frente').val());
                    formData.append('Fondo', $('#Fondo').val());
                    formData.append('Rentable', $('[name="Rentable"]').val());
                    formData.append('Vendible', $('[name="Vendible"]').val());

                    selectedFiles.forEach(file => {
                        formData.append('Imagenes[]', file);
                        console.log(file);
                    });
                    
                    formData.append('servicios', JSON.stringify(arregloServicios));
                    formData.append('Tipo_Propiedad_id', $('#tipoPropiedad').val());
                    
                    enviarForm();

                }
                else{
                    error.css("display", "block");
                }
            });
            

            // Funciones para aumentar o disminuir el valor con los botones "+", "-"

            $('#minusRecamaras').on('click', function(){
                if (valorRecamaras > 0){
                    $('#Recamaras').val(valorRecamaras - 1);
                    valorRecamaras--;
                }
            });

            $('#plusRecamaras').on('click', function(){
                $('#Recamaras').val(valorRecamaras + 1);
                valorRecamaras++;
            });

            $('#minusBaños').on('click', function(){
                if (valorBaños > 0){
                    $('#Baños').val(valorBaños - 1);
                    valorBaños--;
                }
            });

            $('#plusBaños').on('click', function(){
                $('#Baños').val(valorBaños + 1);
                valorBaños++;
            });
            
            // Funcion para agregar imagenes 

        // Manejar la selección de imágenes
        document.getElementById('Image').addEventListener('change', function() {
        const newFiles = Array.from(this.files);
        const container = document.getElementById('imagenEs');

        // Obtener los src actuales de las imágenes en el contenedor
        const existingUrls = new Set(Array.from(container.querySelectorAll('img')).map(img => img.src));

        // Filtrar y acumular los archivos que no están ya en el contenedor
        newFiles.forEach(file => {
            const fileUrl = URL.createObjectURL(file);

            if (!existingUrls.has(fileUrl)) {
                // Añadir el archivo a la lista de archivos seleccionados
                selectedFiles.push(file);

                // Crear el elemento img para la vista previa
                const imgElement = document.createElement('img');
                imgElement.src = fileUrl;

                // Crear el botón de eliminación
                const remove = document.createElement('button');
                remove.textContent = 'X';
                remove.type = 'button';
                remove.className = 'btn-remove';

                    // Manejar la eliminación del archivo
                    remove.addEventListener('click', function() {
                        // Eliminar el archivo de la lista de archivos seleccionados
                        selectedFiles = selectedFiles.filter(f => f !== imgElement.file);
                        selectedFiles.splice(selectedFiles, 1);
                        
                        // Eliminar la imagen del contenedor
                        imgElement.remove();
                        remove.remove();

                        // Liberar la memoria de la URL creada
                        URL.revokeObjectURL(imgElement.src);

                        console.log(selectedFiles);

                    });

                    // Añadir el botón de eliminación y la imagen al contenedor
                    container.appendChild(imgElement);
                    container.appendChild(remove);
                }
            });

            console.log(selectedFiles);
        });


            $('#button1').on('click', function(){
                const ciudad = $('#Ciudad').val();
                const estado = $('#Estado').val();
                const calle = $('#Calle').val();
                const colonia = $('#Colonia').val();

                if(ciudad && estado && calle && colonia){
                    if($('#Codigo_Postal').val().length === 5){
                        uno.css("display", "none");
                        dos.css("display", "block");
                        error.css("display", "none");
                    }
                    else{
                        error.textContent = 'El código postal debe tener 5 digitos'
                    }
                }
                else{
                    error.css("display", "block");
                }
            });

            $('#button2').on('click', function(){
                dos.css("display", "none");
                uno.css("display", "block");
                error.css("display", "none");
            });

            $('#button3').on('click', function(){
                if($('#Area').val() !== ''){
                    dos.css("display", "none");
                    tres.css("display", "block");
                    error.css("display", "none");
                }
                else{
                    error.css("display", "block");
                }
            });

            $('#button4').on('click', function(){
                tres.css("display", "none");
                dos.css("display", "block");
                error.css("display", "none");
            });

            $('#button5').on('click', function(){
                tres.css("display", "none");
                cuatro.css("display", "block");
            });

            $('#button6').on('click', function(){
                cuatro.css("display", "none");
                tres.css("display", "block");
            });



            //Aparecer o desaparecer inputs dependiendo de la propiedad seleccionada

            $('#tipoPropiedad').on('change', function(){
                var Tipo = $(this).find('option:selected').text();
                $('#Recamaras').val(0);
                $('#Baños').val(0);
                $('#Frente').val('');
                $('#Fondo').val('');
                $('#Area').val('');

                if(Tipo === "Departamento"){
                    $('#Frente-group').css("display", "none");
                    $('#Fondo-group').css("display", "none");
                    $('#Baños-group').css("display", "inline-block");
                    $('#Recamaras-group').css("display", "inline-block");
                    $('#Areas-group').css("display", "inline-block");
                }
                else if(Tipo === "Quinta"){
                    $('#Frente-group').css("display", "inline-block");
                    $('#Fondo-group').css("display", "inline-block");
                    $('#Baños-group').css("display", "inline-block");
                    $('#Recamaras-group').css("display", "none");
                    $('#Areas-group').css("display", "inline-block");
                }
                else if(Tipo === "Terreno"){
                    $('#Frente-group').css("display", "none");
                    $('#Fondo-group').css("display", "none");
                    $('#Baños-group').css("display", "none");
                    $('#Recamaras-group').css("display", "none");
                    $('#Areas-group').css("display", "inline-block");
                }
                else if(Tipo === "Bodega"){
                    $('#Frente-group').css("display", "none");
                    $('#Fondo-group').css("display", "none");
                    $('#Baños-group').css("display", "none");
                    $('#Recamaras-group').css("display", "none");
                    $('#Areas-group').css("display", "inline-block");
                    console.log(formData);
                }
                else{
                    $('#Frente-group').css("display", "inline-block");
                    $('#Fondo-group').css("display", "inline-block");
                    $('#Baños-group').css("display", "inline-block");
                    $('#Recamaras-group').css("display", "inline-block");
                    $('#Areas-group').css("display", "inline-block");
                }
            });

        });

            // Envia el formulario de propiedad y consiguiente el formulario de propiedadServicio
    </script>
@endsection