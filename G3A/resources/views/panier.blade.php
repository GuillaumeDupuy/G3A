@extends('layout')

@section('contenu')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Mon Panier</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Produit</th>
                            <th scope="col" class="text-center">Quantité</th>
                            <th scope="col" class="text-right">Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>nom </td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">60€</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">60€</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Shipping</td>
                            <td class="text-right">0€</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>60€</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button ahref="{{url('/catalogue')}}" class="btn btn-block btn-light">Continuer mes achats</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Paiement</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection