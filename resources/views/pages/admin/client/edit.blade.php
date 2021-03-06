@extends('pages.admin.dashboard.index')
@section('maindashboard')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6  ">
                <h2 class="h2 pb-4">Modifier un Client</h2>

                <form method="POST" action="{{ url('admin/clients/' . $client->id) }}" enctype="multipart/form-data"
                    class="form">
                    @csrf
                    {{ method_field('PUT') }}

                    <div class="form-group ">
                        <label for="nomclient">Nom :</label>
                        <input type="text" id="nomclient" name="nomclient" class="form-control "
                            value="{{ $client->nomclient }}">
                        @if ($errors->get('nomclient'))
                            @foreach ($errors->get('nomclient') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        @endif
                    </div>

                    <div class="form-group ">
                        <label for="prenomclient">Prenom :</label>
                        <input type="text" name="prenomclient" id="prenomclient" class="form-control"
                            value={{ $client->prenomclient }}>
                        @if ($errors->get('prenomclient'))
                            @foreach ($errors->get('prenomclient') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        @endif
                    </div>

                    <div class="form-group ">
                        <label for="villes">Ville :</label><br>
                        <select class="form-control mb-3" aria-label="villes" name="villes">
                            <option selected value="">Selectionner ville</option>
                            @foreach ($villes as $ville)
                                <option value="{{ $ville->id }}" @if ($client->ville_id == $ville->id) selected @endif>
                                    {{ $ville->nomville }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="telephoneclient">Telephone :</label>
                        <input type="text" name="telephoneclient" id="telephoneclient" class="form-control "
                            value="{{ $client->telephoneclient }}">
                        @if ($errors->get('telephoneclient'))
                            @foreach ($errors->get('telephoneclient') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        @endif
                    </div>

                    <div class="form-group ">
                        <label for="adresseclient">Adresse :</label>
                        <input type="text" name="adresseclient" id="adresseclient" class="form-control "
                            value="{{ $client->adresseclient }}">
                        @if ($errors->get('adresseclient'))
                            @foreach ($errors->get('adresseclient') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="emailclient">Email :</label>
                        <input type="text" name="emailclient" id="emailclient" class="form-control "
                            value="{{ $client->emailclient }}" disabled>
                        @if ($errors->get('emailclient'))
                            @foreach ($errors->get('emailclient') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input type="password" name="password" id="password" class="form-control "
                            value="{{ old('password') }}">
                        @if ($errors->get('password'))
                            @foreach ($errors->get('password') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="Confirmation">Confirmation :</label>
                        <input type="password" name="Confirmation" id="Confirmation" class="form-control "
                            value="{{ old('Confirmation') }}">
                        @if ($errors->get('Confirmation'))
                            @foreach ($errors->get('Confirmation') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        @endif
                    </div>

                    <div class="form-group justify-content-center">
                        <input type="submit" class="btn btn-warning form-control" value="Modifier">
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
