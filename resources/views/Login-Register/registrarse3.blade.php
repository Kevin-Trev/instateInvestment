@extends('layout.layout')

@section('title', 'Crear cuenta')

@section('style')
<style> 
        body{
            overflow-y: hidden;
        }
       .container {
            max-width: 500px;
            margin: 25px auto;
            padding: 30px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
        }
        
       .form-group {
            margin-bottom: 15px;
            margin-left: 50px;
        }
        
       .form-group label {
            display: block;
            margin-bottom: 10px;
        }
        
       .form-group input[type="text"],.form-group input[type="tel"],.form-group select {
            width: 86%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        
       .terms {
            font-size: 12px;
            color: #666;
            text-align: center;
        }
        h2{
            font-size: 30px;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group button[type="submit"]{
            margin-bottom: 15px;
            border-radius: 8px;
            background-color: #004CFF;
            border: none;
            padding: 10px;
            color: #FFFFFF;
            width: 86%;
        }
</style> 
@endsection

@section('body')
    
<div class="container">
    <form action="{{route('finalizar')}}" method="GET">
        @csrf
        
    </form>
</div>

@endsection