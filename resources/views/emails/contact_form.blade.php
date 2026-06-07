<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Nouveau message de contact</title>
</head>
<body>
    <h2>Nouveau message de contact</h2>

    <p><strong>Nom :</strong> {{ $contact->nom }}</p>
    <p><strong>Email :</strong> {{ $contact->email }}</p>
    <p><strong>Téléphone :</strong> {{ $contact->telephone }}</p>

    @if(!empty($contact->produit))
        <p><strong>Produit sélectionné :</strong> {{ $contact->produit }}</p>
    @endif

    <p><strong>Message :</strong></p>
    <p>{!! nl2br(e($contact->message)) !!}</p>

    <p>Statut: {{ $contact->statut }}</p>

</body>
</html>
