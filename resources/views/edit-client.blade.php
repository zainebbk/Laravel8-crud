<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add client</title>
</head>
<body>

<div class="form">
	<h3 class="titre">Sign up </h3>
    @if(Session::has('client_update'))
    <span>{{Session::get('client_update')}}</span>
    @endif
<form method="post"action="{{route('update.client')}}">
    @csrf
		<p>Identifiant :</p>
		 <input type="text" name="Identifiant" value="{{$clients->Identifiant}}">
		<p>Nom :</p>
		<input type="text" name="Nom" value="{{$clients->Nom}}">
		<p>Prénom :</p>
		<input type="text" name="Prenom" value="{{$clients->Prenom}}">
		<p>Age :</p>
		<input type="number" name="Age" value="{{$clients->Age}}">
		<p>Adresse :</p>
		<input type="text" name="Adresse" value="{{$clients->Adresse}}">
		<p>Ville :</p>
		<input type="text" name="Ville" value="{{$clients->Ville}}">
		<p>Spécialité :</p>
		<input type="text" name="Specialite" value="{{$clients->Specialite}}"><br><br>
		<input type="submit" value="Envoyer">

	</form>

</div>
</body>
<style >
	body{
		margin: 0;
		padding: 0;
        background-image: url(zineb.jpg);
		-webkit-background-size:cover;
		background-size: cover;
		font-family: Tahoma, Geneva, Verdana, sans-serif;

	}
	.form{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		box-sizing: border-box;
		background-color: rgba(0,0,0,0.5);
		padding: 40px;
		border-radius: 15px;
		border:1px solid #fff;
	}
	.titre{
		margin: 0;
		padding: 0 0 20px;
		font-weight: bold;
		color:  white;
		text-align: center;
	}
	.form p{
		margin: 0;
		padding: 0;
		color: white;
		font-weight: bold;
	}
	.form input,select{
		margin-bottom: 20px;
		width: 250px
	}
	.form input[type="text"],.form input[type="number"],.form input[type="email"]{
		border:none;
		border-bottom: 1px solid #fff;
		background-color: transparent;
		outline: none;
		height: 25px;
		display: 16px;
		color: #fff;

	}
	.form input[type="submit"]{
		border:none;
		height: 40px;
		outline: none;
		font-size: 15px;
		background-color: darkgrey;
		cursor: pointer;
		border-radius: 20px;
	}
	.form:hover{
		background-color: rgba(100,0,0,0.5);
	}
</style>
</html>

