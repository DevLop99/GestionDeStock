@extends('layouts.master')

@section('content')
    <div class="container mt-2" >
        <div class="row">
            <div class="col-md-12 ">
                <h1>Modifier un article</h1>
                <form method="POST" action="{{url('articles/'.$article->id)}}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    
                    <div class="form-group >
                        <label for="nomarticle" class="mb-1">Nom :</label>
                        <input type="text" id="nomarticle" name="nomarticle" class="form-control mb-4 " value="{{$article->nomarticle}}">                        
                    </div>

                    <div class="form-group ">
                        <label for="descriptionarticle" class="mb-1" >Description :</label>
                        <textarea  name="descriptionarticle" id="descriptionarticle" class="form-control mb-4">{{$article->descriptionarticle}}</textarea>
                    </div>

                    <div class="form-group ">
                        <label for="prixarticle" class="mb-1">Prix :</label>
                        <input type="number" name="prixarticle" id="prixarticle" class="form-control mb-4" value="{{$article->prixarticle}}">
                    </div>

                    <div class="form-group ">
                        <label for="imagearticle" class="mb-1">Photo d'article:</label>
                        <img id="uploadPreview" src="{{asset("storage/photos/".$article->imagearticle)}}" class="form-control img-thumbnail w-25  h-25" alt="Responsive image">
                        <input type="file" name="imagearticle" onchange="PreviewImage();" id="imagearticle" class="form-control mb-4" aria-valuetext="{{$article->imagearticle}}" >
                        
                        <script type="text/javascript">

                            function PreviewImage() {
                                var oFReader = new FileReader();
                                oFReader.readAsDataURL(document.getElementById("imagearticle").files[0]);

                                oFReader.onload = function (oFREvent) {
                                    document.getElementById("uploadPreview").src = oFREvent.target.result;
                                };
                            };

                        </script>
                    </div>

                    <div class="form-group ">
                        <label for="imagearticle" class="mb-1">Categorie:</label>
                        <select class="form-select mb-3" aria-label="Categorie" name="categories">
                            <option selected value="">Selectionner Categorie</option>
                            @foreach ($categories as $categorie)
                                @if ($categorie->id == $article->categorie_id)
                                <option value="{{$categorie->id}}" selected>{{ $categorie->nomcategorie }}</option>
                                @else
                                    <option value="{{$categorie->id}}">{{ $categorie->nomcategorie }}</option> 
                               @endif
                            @endforeach
                        </select>
                    </div>
                    

                    

                    

                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection