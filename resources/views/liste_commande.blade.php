@extends('layouts.auth-master')

@section('content')

    <div style="background-color: rgb(212,207,207);width : 100%;   display: flex; flex-direction: column;">
    
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <img src="../img/logo.jpg" style="width:150px; height:150px;" alt="">
                <h1 style="margin-left:10%;">Bienvenue au centre de gestion des tables des commandes</h1>
                <a href="{{ route('logout.perform') }}"class="btn btn-danger" style="background-color:rgb(87, 78, 78); margin-left:85%; border-color:rgb(87, 78, 78);">Deconnexion</a>
            </a>
            <div style="margin-left:-20px;  "> 
            <ul class="nav nav-pills nav-justified">
                <li class=""><a href="{{ route('accueil') }}" ><h5>Accueil</h5>  </a></li>
                <li class=""style="margin-left:5px;"><a href="{{ route('personnelle') }}" ><h5>Listes des personelles</h5>  </a></li>
                <li class="" style="margin-left:5px;"><a href="{{ route('articles.show') }}"><h5>Listes des articles</h5>  </a></li>
                <li class="" style="margin-left:5px;"><a href="{{ route('commande.show') }}" style="color:rgb(18, 74, 201);"><h5>Listes des commandes</h5>  </a></li>
                <li class=""style="margin-left:5px;"><a href="{{ route('stock.show') }}"><h5>Stock disponibles</h5>  </a></li>
            </ul>
        </div>
    </header>
    <div style="width:50%; margin-left:25%;">
        <table class="table table-bordered" style="background-color:white;">
            <tr>
                <td>Date</td>
                <td>Table</td>
                <td>Article</td>
                <td>Quantité</td>
                <td>Montant</td>
                <td>Argent reçu</td>
                <td>Argent rendu</td>
            </tr>  
            
                 
            @if($commande->count() > 0)
                    @foreach($commande as $commandes)
                        <tr>
                            <td> {{ $commandes->created_at->format('d/m/Y') }} </td> 
                            <td> {{ $commandes->num_table }} </td>
                            <td> {{ $commandes->art_commander }}</td>
                            <td> {{ $commandes->qte_commander}} </td>
                            <td> {{ $commandes->montant_total}} </td>
                            <td> {{ $commandes->argent_reçu}} 
                            <td> {{ $commandes->argent_rendu}} </td></td>
                        </tr>
                    @endforeach    
            @else
                <td>Vous n'avez pas de commande</td>
            @endif  
               
            
        
        </table>
        
        </div>
    </div>


@endsection