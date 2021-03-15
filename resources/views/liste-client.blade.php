<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste clients</title>
    <style>
     table{
         border-collapse:collapse;
         width:100%
     }
     td,th{
         padding:5px;
         border:1px solid;
     }
	body{
		margin: 0;
		padding: 0;
		font-family: Tahoma, Geneva, Verdana, sans-serif;
	}
	table{
		margin: 0px;
		padding: 0px;
		border:1px solid;
		position: absolute;
        top: 50%;

		left: 50%;
		transform: translate(-50%,-50%);
	}
	th,td{
		margin: 50px;
		padding:50px;
		border:1px solid;

	}

</style>
</head>
<body>

    <a style ="float:right"href="{{route('client.add')}}">Add a client</a>
    @if(Session::has('delete_client'))
    <span>{{Session::get('delete_client')}}</span>
    @endif

    <table>
      <tr>
          <th>Identifiant</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Age</th>
          <th>Adresse</th>
          <th>Ville</th>
          <th>Spécialité</th>
          <th>Action</th>
     </tr>
     @foreach($clients as $client)
     <tr>
         <td>{{$client->Identifiant}}</td>
         <td>{{$client->Nom}}</td>
         <td>{{$client->Prenom}}</td>
         <td>{{$client->Age}}</td>
         <td>{{$client->Adresse}}</td>
         <td>{{$client->Ville}}</td>
         <td>{{$client->Specialite}}</td>
         <td>
             <a href="/edit-client/{{$client->Identifiant}}">Edit</a>|
             <a href="/delete-client/{{$client->Identifiant}}">Delete</a>
         </td>

     </tr>

     @endforeach
    </table>
</body>
</html>
