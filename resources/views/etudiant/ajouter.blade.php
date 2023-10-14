<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AJOUT-ETUDIANTS</title>
    <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/css/bootstrap.css') }}">
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col s12">
                <h2 class="mb-4">Ajouter un etudiant</h2>

                        @if (session('status'))
                        <div class="alert alert-success">
                         {{  session('status') }}
                        </div>
                        @endif


                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="alert alert-danger"> {{ $error }}</li>
                            @endforeach
                        </ul>
             <form method="post" action="/ajouter/traitement" >
                @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" >
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="" name="prenom" >
                    </div>
                    <div class="mb-3">
                        <label for="classe" class="form-label">Classe</label>
                        <input type="text" class="form-control" id="" name="classe" >
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter un etudiant</button>
                </form> <br>
                        <a href="/etudiant" class="btn btn-success">liste des etudiants</a>

            </div>
        </div>
    </div>

    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>

</body>

</html>
