@extends('layout.paginaInicio')

@section('style')
<style>

  .btn-wasa{
    color: rgb(130, 203, 20);
    background-color: #FFFFFF;
    border: 1px solid rgb(130, 203, 20);
    border-radius: 6px;
    cursor: default;
  }

  body{
    overflow-x: hidden;
  }

  .input-groups{
      display: flex;
      align-items: center;
      margin-left: 50px;
  }
  
  .input-groups input[type="text"]{
      padding: 8px 10px;
      border: 1px solid #B7BEC0;
      border-radius: 5px 0 0 5px;
      color: #1D2021;
      outline: none;
      width: 250px;
  }

  .disponible img{
    width: 50px;
    height: 50px;
    position: absolute;
  }
  
  #buscar{
      background-color: #3370FF;
      color: #FFFFFF;
      border: none;
      border-radius: 5px;
      padding: 9px 16px;
      width: 120px;
      cursor: pointer;
  }
  
  .input-groups input::placeholder{
      color: #B7BEC0;
  }

  .form-group{
    width: 100px;
    height: 42px;
    margin-left: 50px;
  }

  #filtroBusqueda{
    display: flex;
    flex-direction: row-reverse;
    min-width: 0;
  }

  .form-group input[type="number"]{
    width: 200px;
    height: 42px;
  }

  .card{
    width: 25%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    float: left;
    margin: 20px 0 60px 6.5%;
  }

  .image-card{
    width: 100%;
    height: 150px;
  }

  .image-card img{
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 6px 6px 0 0;
  }

  .disponible{
    margin-top: 35px;
    display: flex;
    padding: 10px;
  }

  h3, .text{
    margin-left: 10px;
  }

  h3{
    color: #3370FF;
  }

  .disponible button{
    margin-right: 10px;
    padding: 2px;
  }

  .disponible .btn-white{
    width: 40px;
  }

  .disponible .btn-blue{
    width: 40px;
  }

  .footer{
    display: flex;
    justify-content: flex-end;
    padding-bottom: 15px;
  }

  .footer button{
    margin-right: 15px;
    padding: 6px;
  }

  .text{
    color: #898e90;
    font-size: 14px;
  }

  .caracteristicas{
    display: flex;
    margin-left: 10px;
  }

  .roomsContainer{
    display: flex;
    align-items: center;
    margin-right: 20px;
  }

  .roomsContainer img{
    width: 25px;
  }

  .number{
    margin-left: 10px;
    color: #9ea4a5;
    align-items: center;
  }

  #cards-container{
    display: flex;
    flex-wrap: wrap;
    width: 95vw;
  }

  #page-footer{
    display: flex;
    gap: 20px;
    padding: 20px 0 20px 0;
  }

  .propiedad{
    color: rgb(228, 194, 5);
    background-color: #FFFFFF;
    border: 2px solid rgb(228, 194, 5);
    width: 80px;
    z-index: 1;
    position: absolute;
    border-radius: 6px; 
  }

  .propiedad:hover, .disponible button:hover{
    cursor: default;
  }

  @media(min-width: 1200px){
    /* Filtros */
    #filtroBusqueda{
      transform: translate(-2vw, 10px);
    }

    #filtroBusqueda input[type="number"]{
      font-size: 1.4vw;
      width: 14vw;
      height: 4vw;
      transform: translate(-61vw, -4px);
    }

    #filtroBusqueda #transaccion{
      width: 9vw;
      height: 4vw;
      font-size: 1.4vw;
      transform: translate(-85vw, -4px);
    }

    #filtroBusqueda #ciudad{
      font-size: 1.4vw;
      height: 4vw;
      width: 24vw;
      transform: translateY(-4px);
    }

    #filtroBusqueda #buscar{
      font-size: 1.4vw;
      height: 4vw;
      width: 12vw;
      transform: translate(35vw, -4px);
    }

    #filtroBusqueda #tipoPropiedad{
      width: 14vw;
      text-align: center;
      height: 4vw;
      font-size: 1.4vw;
      transform: translate(-30vw, -4px);
    }

    /* Header de las cartas */

    .container h2{
      font-size: 2.4vw;
    }

    .container{
      margin: 30px 0 0 0;
    }

    #resultado{
      margin-left: 10px;
    }

    .container .text{
      margin-left: 12px;
      font-size: 1.3vw;
    }


    /* Cartas */

    .card{
      width: 350px;
      margin: 0 0 40px 6vw;
    }

    .propiedad{
      width: 12vw;
      font-size: 1.5vw;
      transform: translate(13vw, -15px);
    }

    .disponible img{
      width: 3vw;
      height: 3vw;
      transform: translate(19.5vw, 125px);
    }

    .card .image-card{
      height: 20px;
    }

    .card .text{
      font-size: 1.2vw;
    }

    .card .image-card img{
      width: 100%;
      height: 14vw;
    }

    .disponible button{
      margin-top: 160px;
      font-size: 1.2vw;
    }

    .disponible .btn-blue, .disponible .btn-white{
      width: 5vw;
    }

    .card .footer button{
      font-size: 1.2vw;
      margin-left: 0;
    }

    .footer button{
      margin-right: 8px;
    }

    .card h3{
      margin-top: 5px;
      font-size: 2vw;
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
    /* Filtros */
    #filtroBusqueda{
      transform: translate(-2vw, 10px);
    }

    #filtroBusqueda input[type="number"]{
      font-size: 1.6vw;
      width: 16vw;
      height: 40px;
      transform: translate(-61vw, -4px);
    }

    #filtroBusqueda #transaccion{
      width: 9vw;
      height: 40px;
      font-size: 1.6vw;
      transform: translate(-85vw, -4px);
    }

    #filtroBusqueda #ciudad{
      font-size: 1.8vw;
      height: 40px;
      width: 24vw;
      transform: translate(100px, -4px);
    }

    #filtroBusqueda #buscar{
      font-size: 1.6vw;
      height: 40px;
      width: 12vw;
      transform: translate(540px, -4px);
    }

    #filtroBusqueda #tipoPropiedad{
      width: 16vw;
      text-align: center;
      height: 40px;
      font-size: 1.8vw;
      transform: translate(-30vw, -4px);
    }

    /* Header de las cartas */

    .container h2{
      font-size: 2.8vw;
    }

    .container{
      margin: 30px 0 0 0;
    }

    #resultado{
      margin-left: 10px;
    }

    .container .text{
      margin-left: 12px;
      font-size: 1.4vw;
    }


    /* Cartas */

    .card{
      width: 25vw;
      margin: 30px 0 0 5vw;
    }

    .disponible img{
      width: 4vw;
      height: 4vw;
      transform: translate(20vw, 110px);
    }

    .propiedad{
      width: 16vw;
      font-size: 2vw;
      transform: translate(13vw, -15px);
    }

    .card .image-card{
      height: 20px;
    }

    .card .text{
      font-size: 1.4vw;
    }

    .card .image-card img{
      width: 100%;
      height: 17vw;
    }

    .disponible button{
      margin-top: 150px;
      font-size: 1.5vw;
    }

    .disponible .btn-blue, .disponible .btn-white{
      width: 5vw;
    }

    .card .footer button{
      font-size: 1.4vw;
      margin-left: 0;
    }

    .footer button{
      margin-right: 8px;
    }

    .card h3{
      margin-top: 5px;
      font-size: 2.2vw;
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
    /* Filtros */
    #filtroBusqueda{
      transform: translate(-1vw, -20px);
    }

    #filtroBusqueda input[type="number"]{
      font-size: 2vw;
      width: 16vw;
      height: 40px;
      transform: translate(-45vw, -4px);
    }

    #filtroBusqueda #transaccion{
      width: 11vw;
      height: 40px;
      font-size: 2vw;
      transform: translate(-75vw, -4px);
    }

    #filtroBusqueda #ciudad{
      font-size: 2vw;
      height: 40px;
      width: 28vw;
      transform: translate(60px, 40px);
    }

    #filtroBusqueda #buscar{
      font-size: 1.8vw;
      height: 40px;
      width: 12vw;
      transform: translate(540px, 20px);
    }

    #filtroBusqueda #tipoPropiedad{
      width: 20vw;
      text-align: center;
      height: 40px;
      font-size: 2vw;
      transform: translate(-32vw, 40px);
    }

    /* Header de las cartas */

    .container h2{
      font-size: 3vw;
    }

    .container{
      margin: 30px 0 0 0;
    }

    #resultado{
      margin-left: 10px;
    }

    .container .text{
      margin-left: 12px;
      font-size: 1.8vw;
    }


    /* Cartas */

    .card{
      width: 25vw;
      margin: 0 0 30px 5vw;
    }

    .propiedad{
      width: 16vw;
      font-size: 2vw;
      transform: translate(13vw, -15px);
    }

    .disponible img{
      width: 4vw;
      height: 4vw;
      transform: translate(20vw, 80px);
    }

    .card .image-card{
      height: 20px;
    }

    .card .text{
      font-size: 1.4vw;
    }

    .card .image-card img{
      width: 100%;
      height: 170px;
    }

    .disponible button{
      margin-top: 110px;
      font-size: 1.5vw;
    }

    .disponible .btn-blue, .disponible .btn-white{
      width: 5vw;
    }

    .card .footer button{
      font-size: 1.4vw;
      margin-left: 0;
    }

    .footer button{
      margin-right: 8px;
    }

    .card h3{
      margin-top: 5px;
      font-size: 2.2vw;
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
    /* Filtros */

    #filtroBusqueda{
      transform: translate(-1vw, -20px);
    }

    #filtroBusqueda input[type="number"]{
      font-size: 2.5vw;
      width: 23vw;
      height: 40px;
      transform: translate(-30vw, -4px);
    }

    #filtroBusqueda #transaccion{
      width: 14.5vw;
      height: 40px;
      font-size: 2.5vw;
      transform: translate(-72vw, -4px);
    }

    #filtroBusqueda #ciudad{
      font-size: 2.5vw;
      height: 40px;
      width: 28vw;
      transform: translate(130px, 40px);
    }

    #filtroBusqueda #buscar{
      font-size: 2.5vw;
      height: 40px;
      width: 16vw;
      transform: translate(540px, 20px);
    }

    #filtroBusqueda #tipoPropiedad{
      width: 20vw;
      text-align: center;
      height: 40px;
      font-size: 2.5vw;
      transform: translate(-25vw, 40px);
    }

    /* Header de las cartas */

    .container h2{
      font-size: 4vw;
    }

    .container{
      margin: 30px 0 0 0;
    }

    #resultado{
      margin-left: 10px;
    }

    .container .text{
      margin-left: 12px;
      font-size: 2.2vw;
    }

    /* Cartas */

    .card{
      width: 40vw;
      margin: 0 0 30px 5vw;
    }

    .propiedad{
      width: 20vw;
      font-size: 3vw;
      transform: translate(22vw, -1.5vw);
    }

    .card .image-card{
      height: 70px;
    }

    .card .text{
      font-size: 2vw;
    }

    .card .image-card img{
      width: 100%;
      height: 200px;
    }

    .disponible button{
      margin-top: 90px;
      font-size: 2vw;
    }

    .roomsContainer img{
      width: 3.2vw;
    }

    .disponible img{
      width: 5vw;
      height: 5vw;
      transform: translate(34vw, 60px);
    }

    .number{
      font-size: 2.5vw;
    }

    .disponible .btn-blue, .disponible .btn-white{
      width: 8vw;
    }

    .card .footer button{
      font-size: 2vw;
      margin-left: 0;
    }

    .footer button{
      margin-right: 8px;
    }

    .card h3{
      margin-top: 5px;
      font-size: 3.5vw;
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
    /* Filtros */
    #filtroBusqueda{
      transform: translate(-1vw, -20px);
    }

    #filtroBusqueda input[type="number"]{
      font-size: 3vw;
      width: 23vw;
      height: 40px;
      transform: translate(-25vw, -4px);
    }

    #filtroBusqueda #transaccion{
      width: 20vw;
      height: 40px;
      font-size: 3vw;
      transform: translate(-75vw, -4px);
    }

    #filtroBusqueda #ciudad{
      font-size: 3vw;
      height: 40px;
      width: 35vw;
      transform: translate(250px, 40px);
    }

    #filtroBusqueda #buscar{
      font-size: 2.5vw;
      height: 40px;
      width: 16vw;
      transform: translate(560px, -4px);
    }

    #filtroBusqueda #tipoPropiedad{
      width: 26vw;
      height: 40px;
      font-size: 3vw;
      transform: translate(-10vw, 40px);
    }

    /* Header de las cartas */

    .container h2{
      font-size: 5.5vw;
    }

    .container{
      margin-top: 30px;
    }

    #resultado{
      margin-left: 10px;
    }

    .container .text{
      margin-left: 12px;
      font-size: 3vw;
    }

    /* Cartas */

    .card{
      width: 40vw;
      margin: 0 0 20px 4.8vw;
    }

    .propiedad{
      width: 22vw;
      font-size: 3vw;
      transform: translate(22vw, -1.5vw);
    }

    .card .image-card{
      height: 70px;
    }


    .card .text{
      font-size: 2vw;
    }

    .disponible img{
      width: 5vw;
      height: 5vw;
      transform: translate(33.5vw, 2vw);
    }

    .card .image-card img{
      width: 100%;
      height: 140px;
    }

    .disponible button{
      margin-top: 35px;
      font-size: 2vw;
    }

    .roomsContainer img{
      width: 3.2vw;
    }

    .number{
      font-size: 2.5vw;
    }

    .card .footer button{
      font-size: 2vw;
      margin-left: 0;
    }

    .disponible .btn-blue, .disponible .btn-white{
      width: 8vw;
    }

    .footer button{
      margin-right: 8px;
    }

    .card h3{
      margin-top: 5px;
      font-size: 3.5vw;
    }

    /* footer */

    .page-link{
      font-size: 3vw;
    }

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
    /* Filtros */
    #filtroBusqueda{
      transform: translate(-1vw, -20px);
    }

    #filtroBusqueda input[type="number"]{
      font-size: 3vw;
      width: 23vw;
      height: 30px;
      transform: translate(-5vw, -4px);
    }

    #filtroBusqueda #transaccion{
      width: 22vw;
      height: 30px;
      font-size: 3vw;
      transform: translate(-70vw, -4px);
    }

    #filtroBusqueda #ciudad{
      font-size: 3vw;
      height: 30px;
      width: 35vw;
      transform: translate(310px, 30px);
    }

    #filtroBusqueda #buscar{
      font-size: 2.5vw;
      height: 30px;
      width: 16vw;
      position: fixed;
      transform: translate(130vw, -4px);
    }

    #filtroBusqueda #tipoPropiedad{
      width: 26vw;
      height: 30px;
      font-size: 3vw;
      transform: translate(10vw, 30px);
    }
    
    /* Header de las cartas */

    .container h2{
      font-size: 5.5vw;
    }

    .container{
      margin-top: -10px;
    }

    #resultado{
      margin-left: 10px;
    }

    .container .text{
      margin-left: 12px;
      font-size: 3vw;
    }

    /* Cartas */

    .card{
      width: 38vw;
      margin: 0 0 10px 6vw;
    }

    .disponible img{
      width: 5vw;
      height: 5vw;
      transform: translate(30.5vw, -8px);
    }

    .card .image-card{
      height: 70px;
    }

    .propiedad{
      width: 18vw;
      font-size: 2.5vw;
      transform: translate(22vw, -1.5vw);
    }

    .card .image-card img{
      width: 100%;
      height: 120px;
    }

    .disponible button{
      margin-top: 8px;
      font-size: 2vw;
    }

    .card .footer button{
      font-size: 1.8vw;
      margin-left: 0;
    }

    .footer button{
      margin-right: 5px;
    }

    .disponible .btn-blue, .disponible .btn-white{
      width: 8vw;
    }
    
    .card h3{
      font-size: 3.2vw;
    }

    .card .text{
      font-size: 2vw;
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

{{-- Fila de filtros --}}

<div id="filtroBusqueda">
  <div class="form-group">
    <select class="form-select" id="transaccion">
      <option selected value="Vendible">Venta</option>
      <option value="Rentable">Renta</option>
    </select>
  </div>
  <div class="form-group">
    <input type="number" class="form-control" placeholder="Precio MXN">
  </div>
  <div class="form-group">
    <select id="tipoPropiedad" class="form-control">

    </select>
  </div>
  <div class="form-group">
    <input class="form-control" id="ciudad" type="text" placeholder="Buscar por ciudad...">
  </div>
  <div class="form-group">
    <button class="btn-blue" type="submit" id="buscar">Buscar</button>
  </div>
</div>

<br>

{{-- Vista de catalogo --}}

<div class="container">
  <h2 id="resultado"> Todos Los Inmuebles Publicados</h2> {{--Agregar al principio de esta etiqueta el número de registros que se encontraron cerca y tambien la ciudad al lado derecho--}}
  <p class="text"> Estas son las propiedades que encontramos para ti</p>
  <div id="cards-container">
    {{-- <div class="card">
      <button class="propiedad">juan</button>
      <div class="image-card">
        <img src="https://picsum.photos/300/200">
      </div>
      <div class="disponible">
        <img src="{{asset('Imagenes/verificacion.png')}}">
        <button class="btn-white">Venta</button>
        <button class="btn-white">Renta</button>
      </div>
      <h3> Precio de la propiedad </h3>
      <p class="text">Direccion de la propiedad</p>
      <div class="footer">
        <button class="btn-wasa">Contacto</button>
        <button class="btn-blue">Ver más detalles</button>
      </div>
    </div>
    <div class="card">
      <button class="propiedad">Tipo</button>
      <div class="image-card">
        <img src="https://picsum.photos/300/200">
      </div>
      <div class="disponible">
        <img src="{{asset('Imagenes/verificacion.png')}}">
        <button class="btn-white">Venta</button>
        <button class="btn-white">Renta</button>
      </div>
      <h3> Precio de la propiedad </h3>
      <p class="text">Direccion de la propiedad</p>
      <div class="footer">
        <button class="btn-wasa">Contacto</button>
        <button class="btn-blue">Ver más detalles</button>
      </div>
    </div>
    <div class="card">
      <button class="propiedad">Tipo</button>
      <div class="image-card">
        <img src="https://picsum.photos/300/200">
      </div>
      <div class="disponible">
        <img src="{{asset('Imagenes/verificacion.png')}}">
        <button class="btn-white">Venta</button>
        <button class="btn-white">Renta</button>
      </div>
      <h3> Precio de la propiedad </h3>
      <p class="text">Direccion de la propiedad</p>
      <div class="footer">
        <button class="btn-wasa">Contacto</button>
        <button class="btn-blue">Ver más detalles</button>
      </div>
    </div>
    <div class="card">
      <button class="propiedad">Tipo</button>
      <div class="image-card">
        <img src="https://picsum.photos/300/200">
      </div>
      <div class="disponible">
        <img src="{{asset('Imagenes/verificacion.png')}}">
        <button class="btn-white">Venta</button>
        <button class="btn-white">Renta</button>
      </div>
      <h3> Precio de la propiedad </h3>
      <p class="text">Direccion de la propiedad</p>
      <div class="footer">
        <button class="btn-wasa">Contacto</button>
        <button class="btn-blue">Ver más detalles</button>
      </div>
    </div> --}}
  </div>
</div>
<br>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center" id="paginacion">
    
  </ul>
</nav>

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
    <!-- EJEMPLO DE FUNCION PARA AGREGAR LAS TARJETAS DE PROPIEDADES() -->
<script>
  
  var isAuthenticated = {{ Auth::check() ? 'true' : 'false' }};

  var datos = $('.card');
  var elementosPorPagina = 2;
  var grupos = [];
  
//  obtener los registros de propiedades desde BD  //
$(document).ready(function(){
    var transaccion = localStorage.getItem('opcion')
    var ciudad = localStorage.getItem('ciudad')
    console.log(datos)

    if(transaccion && ciudad) {
      $('#transaccion').val(transaccion);
      $('#ciudad').val(ciudad);

      resultadoBusqueda(transaccion, ciudad);
      console.log("Buscando Propiedades " + transaccion + "s en " + ciudad);

      localStorage.removeItem('opcion');
      localStorage.removeItem('ciudad');
    }
    else{
      cargarPropiedades(); // agregalo como comentario en caso de diseño front 
    }

    $('#buscar').on('click', function() {
      var opcion = $('#transaccion').val();
      var ciudad = $('#ciudad').val();
      console.log("Buscando Propiedades " + opcion + "s en " + ciudad);
      $('#resultado').text("Buscando Propiedades " + opcion + "s en " + ciudad);
      resultadoBusqueda(opcion, ciudad);
    });

    fetchTipoPropiedad();

    for(let i = 0; i < datos.length; i += elementosPorPagina){
      grupos.push(datos.slice(i, i + elementosPorPagina));
    } 

    mostrarPagina(1);

    $('#paginacion').on('click', 'a', function(e){
      e.preventDefault();
      var pagina = $(this).data('pagina');
      mostrarPagina(pagina);
      window.scrollTo({ top: 0, behavior: 'smooth'});
    });
   
});

function mostrarPagina(pagina){
  var grupoActual = grupos[pagina - 1];
  var contenedor = $('#cards-container');
  var inicio = (pagina - 1) * elementosPorPagina;
  var fin = inicio + elementosPorPagina;
  var paginaDatos = datos.slice(inicio, fin);

  contenedor.empty();
  grupoActual.each(function (){
    contenedor.append($(this));
  });

  $('#paginacion').empty();
  for (var i = 1; i <= Math.ceil(datos.length / elementosPorPagina); i++){
    $('#paginacion').append('<li class="page-item"><a class="page-link" href="' + i + '" data-pagina="' + i + '">' + i + '</a></li>');
  }
  
}

function fetchTipoPropiedad(){
  $.get('/get/typeProperties', function (tipos){
      var selectTipo = $('#tipoPropiedad');
      selectTipo.empty();
      tipos.forEach(tipo => {
          selectTipo.append(`
          <option value="${tipo.ID_T}">${tipo.Tipo}</option>
          `);
      });
  });
}

function resultadoBusqueda(transaccion, ciudad){
  $.ajax({
    url: `/get/results/propeties/${transaccion}/${ciudad}`,
    method: `GET`,
    success: function (data) {
      console.log(data);

      const listaPropiedades = $('#cards-container'); 
        listaPropiedades.empty();
        var cantidad = 0;

        data.forEach(property => {
        var stockImg = 'stock.png'; /* En caso de no tener ninguna imagen carga la de stock */
        var precioFormateado = property.Precio.toLocaleString('es-MX') /* Dar Formato al Precio */;

        const propiedad =
            `<div class="card">
                <button class="propiedad">${property.tipo_propiedad.Tipo}</button>
                <div class="image-card">
                  <img src="{{asset('ImagesPublished/${property.main_image ? property.main_image.src_image : stockImg}')}}" alt="propiedad ${property.ID_P}">
                </div>
                <div class="disponible">
                  ${property.Verificacion === 1 ? '<img src="{{asset("Imagenes/verificacion.png")}}">' : ''}
                  ${property.Vendible === 1 ? '<button class="btn-blue">Venta</button>' : '<button class="btn-white">Venta</button>'}
                  ${property.Rentable === 1 ? '<button class="btn-blue">Renta</button>' : '<button class="btn-white">Renta</button>'}
                </div>
                <h3>$ ${precioFormateado} MXN</h3>
                <p class="text">${property.Calle} #${property.num_exterior}, ${property.Colonia}</p>
                <div class="footer">
                  <button class="btn-wasa">Contacto</button>
                  <button class="btn-blue"><a class="nav-link" href="/get/property/${property.ID_P}">Ver más detalles</a></button>
                </div>
              </div>`
          listaPropiedades.append(propiedad);
          cantidad = cantidad + 1;
          $('#resultado').text(cantidad + " Propiedades " + transaccion + "s en " + ciudad);
        });
      }
  })
}

function cargarPropiedades() {
  $.ajax({
    url: `/get/properties`,
    method: `GET`,
    success: function(data) {
        console.log(data);

        const listaPropiedades = $('#cards-container'); 
        listaPropiedades.empty();

        data.forEach(property => {
        var stockImg = 'stock.png'; /* En caso de no tener ninguna imagen carga la de stock */
        var precioFormateado = property.Precio.toLocaleString('es-MX') /* Dar Formato al Precio */;

        const propiedad =
            `<div class="card">
                <button class="propiedad">${property.tipo_propiedad.Tipo}</button>
                <div class="image-card">
                  <img src="{{asset('ImagesPublished/${property.main_image ? property.main_image.src_image : stockImg}')}}" alt="propiedad ${property.ID_P}">
                </div>
                <div class="disponible">
                  ${property.Verificacion === 1 ? '<img src="{{asset("Imagenes/verificacion.png")}}">' : ''}
                  ${property.Vendible === 1 ? '<button class="btn-blue">Venta</button>' : '<button class="btn-white">Venta</button>'}
                  ${property.Rentable === 1 ? '<button class="btn-blue">Renta</button>' : '<button class="btn-white">Renta</button>'}
                </div>
                <h3 class="precio">$ ${precioFormateado} MXN</h3>
                <p class="text">${property.Calle} #${property.num_exterior}, ${property.Colonia}</p>
                <div class="footer">
                ${isAuthenticated ? `<button class="btn-wasa"><a class="nav-link" href="https://wa.me/${property.users.Telefono}">Contacto</a></button>` : ''}
                <button class="btn-blue"><a class="nav-link" href="/get/property/${property.ID_P}">Ver más detalles</a></button>
                </div>
              </div>`
          listaPropiedades.append(propiedad);
        });
    }
  });
}

</script>
@endsection