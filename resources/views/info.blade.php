<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulaire</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Formulaire</h2>
  @if(session()->has('success'))
							<div class="alert alert-success alert-dismissible border-1 border-left-3 border-left-success"
                                 role="alert">
                                <button type="button"
                                        class="close"
                                        data-dismiss="alert"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="text-black-70">{{ session('success')}}</div>
                            </div>
@endif
@if(session()->has('danger'))
							<div class="alert alert-danger alert-dismissible border-1 border-left-3 border-left-success"
                                 role="alert">
                                <button type="button"
                                        class="close"
                                        data-dismiss="alert"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="text-black-70">{{ session('danger')}}</div>
                            </div>
						@endif
  <table class="table">
     
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nom</th>
        <th scope="col">prenom</th>
        <th scope="col">email</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($formulaires as $formulaire )
        <tr>
            <th scope="row">{{$formulaire->id}}</th>
            <td>{{$formulaire->nom}}</td>
            <td>{{$formulaire->prenom}}</td>
            <td>{{$formulaire->email}}</td>
            <td>
                <a href="{{ route('edit',$formulaire->id) }}" class="btn btn-success">edit</a>
                <a href="{{ route('delete-formation',$formulaire->id) }}" class="btn btn-danger">Supprimer</a>
            </td>
          </tr>
        @endforeach
      
    
     
    </tbody>
  </table>
  <a href="{{ route('formulaire') }}" class="btn btn-primary">retour</a>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
      <li class="page-item ">
        {{$formulaires->links()}}
      </li>
     
      </li>
    </ul>
  </nav>
</body>
</html>