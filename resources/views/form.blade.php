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
  <form ction="{{ route('formulaire') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
												<div class="alert alert-danger alert-dismissible border-1 border-left-3 border-left-danger"role="alert"">
                                                <button type="button"
                                                        class="close"
                                                        data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <ul>
														@foreach($errors->all() as $error)
														<li>{{$error}}</li>
														@endforeach
													</ul>
												</div>
											@endif
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
    <div class="form-group">
        <label for="nom">Nom:</label>
        <input type="text" class="form-control" id="nom" placeholder="Entre votre nom" name="nom">
      </div>
      <div class="form-group">
        <label for="prenom">Prenom:</label>
        <input type="text" class="form-control" id="prenom" placeholder="Entre votre prenom" name="prenom">
      </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Entre votre email" name="email">
    </div>
    <div class="form-group">
      <label for="password">Mot de passe:</label>
      <input type="password" class="form-control" id="password" placeholder="Entre votre mot de passe" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
  </form>
</div>

</body>
</html>