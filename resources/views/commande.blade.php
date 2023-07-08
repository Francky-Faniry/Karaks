@extends('layouts.auth-master')

@section('content')
@auth
    <div style="background-color: rgb(212,207,207);width : 100%; height : 100vh;  display: flex; flex-direction: column;">
    
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <img src="../img/logo.jpg" style="width:150px; height:150px;" alt="">
                <h1 style="margin-left:10%;">Bienvenue au centre de gestion des tables des commandes</h1>
                <a href="{{ route('logout.perform') }}"class="btn btn-danger" style="background-color:rgb(87, 78, 78); margin-left:85%; border-color:rgb(87, 78, 78);">Deconnexion</a>
            </a>
            <div style="margin-left:-20px;  "> 
            <ul class="nav nav-pills nav-justified">
                <li class=""><a href="{{ route('accueil') }}" style="color:rgb(18, 74, 201);"><h5>Accueil</h5>  </a></li>
                <li class=""style="margin-left:5px;"><a href="{{ route('personnelle') }}" ><h5>Listes des personelles</h5>  </a></li>
                <li class="" style="margin-left:5px;"><a href="{{ route('articles.show') }}"><h5>Listes des articles</h5>  </a></li>
                <li class="" style="margin-left:5px;"><a href="{{ route('commande.show') }}"><h5>Listes des commandes</h5>  </a></li>
                <li class=""style="margin-left:5px;"><a href="{{ route('stock.show') }}"><h5>Stock disponibles</h5>  </a></li>
            </ul>
        </div>
    </header>
    <div style="margin-left:15%;">
        
        <form action="{{ route('calcule') }}" method="POST">
            @csrf
            <h2> Table numero: {{ $table }} </h2>
            <div>
                <label for="cat-select">Boisson</label>
                @if($boisson->count() > 0)
                    <select name="commande" id="cat-select">
                        @foreach($boisson as $article)
                            <option value="{{ $article->id }}">{{ $article->nom }}: {{ $article->prix_article}}Ar</option>
                        @endforeach 
                    </select>   
                @endif
                <label for="">Quantité</label>
                <input type="text" name="quantité">
                <label for="" id="arg_reçu1">Argent reçu</label>
                <input type="text" name="Arg_reçu" id="arg_reçu2">
            </div>
            <div id="C2">

            </div>
            <button>Enregistrer</button>
        </form>
            <div class="checkbox mb-2"></div>
            <button onclick="ajoute()">Autre article</button>
            
            <script>
                function ajoute2(){
                    function insertAfter(newNode, existingNode){
                        existingNode.parentNode.insertBefore(newNode, existingNode.nextSibling);
                    }
                    let c1 = document.getElementById('arg_reçu');
                    let div = document.createElement('div');
                    div.setAttribute('type');
                    insertAfter(div, c1.lastElementChild);
                }
                function ajoute(){
                    
                    let c2 = document.getElementById('C2');
                    let arg1 = document.getElementById('arg_reçu1');
                    let arg2 = document.getElementById('arg_reçu2')
                    let label1 = document.createElement('label');
                    label1.textContent = "Boisson";
                    c2.appendChild(label1);

                    let select = document.createElement('select');
                    select.setAttribute('name','commande2');
                    c2.appendChild(select);

                    let newOption;
                    let nom_art = ["Thb GM",
                                   "Thb PM",
                                "Gold Blonde",
                                "Vodka citron 65cl",
                                "Fresh",
                                "D'jino",
                                "Chill",
                                "Ambilobe",
                                "Valistoff",
                                "Namaki",
                                "Dzama maintso",
                                "Cuvé Blanche 35cl",
                                "Cuvé Blanche 70cl",
                                "Markovitch",
                                "Fanta pomme 1L",
                                "Fanta orange 1L",
                                "Rhum arangé 1L"];
                    
                    for(var i=0; i < nom_art.length; i++){
                        newOption = new Option (nom_art[i], i+1);
                        select.options.add(newOption);
                    }
                    


                    let label2 = document.createElement('label');
                    label2.textContent = "Quantité";
                    c2.appendChild(label2);

                    let input1 = document.createElement('input');
                    input1.setAttribute('name','quantité2');
                    c2.appendChild(input1);

                    let label3 = document.createElement('label');
                    label3.textContent = "Argent reçu";
                    c2.appendChild(label3);

                    let input2 = document.createElement('input');
                   input2.setAttribute('name','Arg_reçu2');
                   c2.appendChild(input2);

                   arg1.parentNode.removeChild(arg1);
                   arg2.parentNode.removeChild(arg2);
                    
                   c2.innerHTML += "<br>"
                   
                }

            </script>
            
        
        
    </div>
    
    </div>
@endauth

@endsection
