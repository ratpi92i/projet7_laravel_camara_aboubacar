<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LISTE-ETUDIANTS</title>
    <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/css/bootstrap.css') }}">
</head>

<body>


    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1> CRUD AVEC LARAVEL 10</h1>
                <a href="/ajouter" class="btn btn-primary">ajouter un etudiant</a>
                @if (session('status'))
                        <div class="alert alert-success">
                        {{  session('status') }}
                        </div>
                @endif


                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NOM</th>
                            <th scope="col">PRENOM</th>
                            <th scope="col">CLASSE</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $ide=1;
                        @endphp

                        @foreach($etudiants as $etudiant )

                            <tr>
                                <td> {{ $ide }} </td>
                                <td> {{ $etudiant->nom}} </td>
                                <td> {{ $etudiant->prenom }} </td>
                                <td> {{ $etudiant->classe}} </td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="/modifier-etudiant/{{ $etudiant->id }}" >Modifier </a>
                                   <a  class="btn btn-sm btn-danger" href="/supprimer-etudiant/{{ $etudiant->id }}">Supprimer</a>

                                </td>
                            </tr>

                            @php
                            $ide += 1;
                        @endphp

                         @endforeach
                    </tbody>

                </table>
                {{ $etudiants->links()}}

            </div>
        </div>
    </div>

    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>

</body>

</html>
