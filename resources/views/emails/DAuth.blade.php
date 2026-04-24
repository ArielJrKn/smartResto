<!DOCTYPE html>
<html>
<body>
	<h2>Code de vérification</h2>
    <p>Bonjour {{ $user->name }},</p>
    <p>Votre code de connexion est :</p>
    <h1 style="letter-spacing: 8px;">{{ $user->DAuth }}</h1>
    <p>Ce code expire dans <strong>10 minutes</strong>.</p>
    <p>Si ce n'est pas vous, ignorez cet email.</p>
</body>
</html>