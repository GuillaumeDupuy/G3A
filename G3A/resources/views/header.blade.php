<style>
    header.page-header>h1 {
        margin-left: 37%;
    }
</style>

<header class="page-header">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2">
                            <div class="input-group">
                                <div class="input-group-btn search-panel">
                                    <select class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <option>All</option>
                                        <option>Action</option>
                                        <option>Sport</option>
                                        <option>Multijoueur</option>
                                    </select>
                                </div>

                                <input type="hidden" name="search_param" value="all" id="search_param">
                                <form action="/catalogue/rechercher" method="GET">
                                    <input type="text" class="form-control" name="recherche" placeholder="Jeu...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search">Rechercher</span></button>
                                    </span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form class="form-inline">
            @if(!auth()->check())
            <ul>
                <button class="btn btn-outline-success" type="button"><a href="{{url('/')}}">Accueil</a></button>

                <button class="btn btn-outline-success" type="button"><a href="{{url('/catalogue')}}">Tout les articles</a></button>

                <button class="btn btn-outline-success" type="button"><a href="{{url('/inscription')}}">Inscription</a></button>

                <button class="btn btn-outline-success" type="button"><a href="{{url('/connexion')}}">Connexion</a></button>

                <button class="btn btn-outline-success" type="button"><a href="{{url('/contact')}}">Contact</a></button>

            </ul>
            @else
            <ul>
                <button class="btn btn-outline-success" type="button"><a href="{{url('/profil')}}">Profil</a></button>

                <button class="btn btn-outline-success" type="button"><a href="{{url('/catalogue')}}">Tout les articles</a></button>

                <button class="btn btn-outline-success" type="button"><a href="{{url('/contact')}}">Contact</a></button>

                <button class="btn btn-outline-success" type="button"><a href="{{url('/panier')}}">Panier <span class=" badge badge-pill badge-dark"> {{ Cart::count() }}</span></a></button>

                <button class="btn btn-outline-success" type="button"><a href="{{url('/deconnexion')}}">Deconnexion</a></button>

            </ul>
            @endif
        </form>
    </nav>

</header>