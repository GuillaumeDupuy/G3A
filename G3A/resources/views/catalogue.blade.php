@extends('layout')

@section('contenu')

    <div class="container bootstrap snipets">
    <h1 class="text-center text-muted">Catalogue Jeux</h1>
    <div class="row flow-offset-1">
    <?php
    $base_de_donnee = DB::select("SELECT *  FROM produits ORDER BY date_sortie");
    foreach ($base_de_donnee as $produits) { ?>
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/87CEFA/000000<?php // echo $produits->photo ?>" alt=""></a>
         <div class="caption">
           <h6><a href="#"><?php echo $produits->nom ?></a></h6><span class="price">
            </span><span class="price"><?php echo $produits->prix ?></span>
         </div>
       </div>
     </div>
     <?php } ?>
     <!-- <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/87CEFA/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">
             <del>$24.99</del></span><span class="price sale">$12.49</span>
         </div>
       </div>
     </div>
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/FF7F50/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">$12.49</span>
         </div>
       </div>
     </div>
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/20B2AA/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">
             <del>$24.99</del></span><span class="price sale">$12.49</span>
         </div>
       </div>
     </div>
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/8A2BE2/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">
             <del>$24.99</del></span><span class="price sale">$12.49</span>
         </div>
       </div>
     </div>
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/6495ED/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">
             <del>$24.99</del></span><span class="price sale">$12.49</span>
         </div>
       </div>
     </div>
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/00008B/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">$12.49</span>
         </div>
       </div>
     </div>
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/9932CC/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">
             <del>$24.99</del></span><span class="price sale">$12.49</span>
         </div>
       </div>
     </div>
     <div class="col-xs-6 col-md-4">
       <div class="product tumbnail thumbnail-3"><a href="#"><img src="https://via.placeholder.com/350x280/FF69B4/000000" alt=""></a>
         <div class="caption">
           <h6><a href="#">Short Sleeve T-Shirt</a></h6><span class="price">
             <del>$24.99</del></span><span class="price sale">$12.49</span>
         </div>
       </div>
     </div>
   </div>
 </div> -->
 @endsection