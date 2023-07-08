@extends('layouts.auth-master')

@section('content')
    @auth
        <div style="background-color: rgb(212,207,207);width : 100%; height : 100vh;  display: flex; flex-direction: column;">
        
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <img src="../img/logo.jpg" style="width:150px; height:150px;" alt="">
                    <h1 style="margin-left:10%;">Bienvenue au centre de gestion des tables des commandes</h1>
                    <a href="{{ route('logout.perform') }}"class="btn btn-danger" style="background-color:rgb(87, 78, 78); border-color:rgb(87, 78, 78); margin-left:85%;">Deconnexion</a>
                </a>
                <div style="margin-left:-20px;  "> 
                <ul class="nav nav-pills nav-justified">
                    <li class=""><a href="{{ route('accueil') }}" style="color:rgb(18, 74, 201);"><h5>Accueil</h5>  </a></li>
                    <li class=""style="margin-left:5px;"><a href="{{ route('personnelle') }}" ><h5>Listes des personelles</h5>  </a></li>
                    <li class="" style="margin-left:5px;"><a href="{{ route('articles.show') }}"><h5>Listes des articles</h5>  </a></li>
                    <li class="" style="margin-left:5px;"><a href="{{ route('commande.show') }}"><h5>Listes des commandes</h5>  </a></li>
                    <li class=""style="margin-left:5px;"><a href=""><h5>Stock disponibles</h5>  </a></li>
                </ul>
            </div>
        </header>
            
            <div style="margin-left: 25%;" >
                <?php for($i=1;$i<5;$i++){ ?> 
                    <a href="{{ route('table',['id' => $i]) }}"><button style=" width:150px; height:150px;" onclick="table()">Table <?= $i ?></button></a>
                    
                    
                <?php $table[$i]= $i;
            } ?>
            </div>
            <div style="margin-left: 25%; margin-top: 20px;">
                <?php for($i=5;$i<9;$i++){ ?> 
                    <a href="{{ route('table',['id' => $i]) }}"><button style=" width:150px; height:150px;" onclick="table2">Table <?= $i ?></button></a>
                        
                <?php $table[$i]= $i;
            } ?>
            </div>
        </div>
    @endauth
   
    
    
@endsection