<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <section>
        <h1>Formulaire d'adhésion à une association</h1>
        <h2>Information sur les membres</h2>
    <form action="">
        <div class="nom">
        <label for="">Nom complet</label>
        <p>
        <input type="text" name="nom" id="nom" placeholder="@Votre nom">
        <input type="text" name="prenom" id="prenom" placeholder="@Votre prénom">
        </p>
        </div>
        <div class="adresse">
            <label for="">Quel est ton adresse</label>
            <div class="adresse2">
            <p>
            <input type="text" name="adresse" id="adresse" placeholder="@Adresse">
            </p>
            <p>
            <input type="text" name="adresse2" id="adresse2" placeholder="@Adresse 2">
            </p>
            </div>
            <div class="adresse1">
            <p>
            <input type="text" name="ville" id="ville" placeholder="@Ville">
            <input type="text" name="etat" id="etat" placeholder="@Etat adresse">
            <input type="number" name="cp" id="cp" placeholder="@Code postal">
            <input type="text" name="pays" id="pays" placeholder="@Pays">
            </p>
            </div>
        </div>
        <div>
            <label for="">Numéro de Téléphone</label>
            <div id="numero">
            <p>
            <input type="tel" name="numero" id="numero" placeholder="@Numéro de téléphone">
            </p>
            </div>
        </div>
        <div>
            <label for="">Adresse Email</label>
            <div id="email">
            <p>
            <input type="email" name="email" id="email" placeholder="@Adresse email">
            </p>
            </div>
        </div>
        <h2>Selectionner votre niveau d'adhéssion</h2>
        <div>
            <label for="">Membre à vie</label>
            <p>
            <input type="radio" name="radio" id="radio" placeholder="@Individuel">
            </p>
            <p>
            <input type="radio" name="radio2" id="radio2" placeholder="@Famille">
            </p>
        </div>
        <div>
            <label for="">Membre annuel</label>
            <p>
            <input type="radio" name="annuel" id="annuel" placeholder="@Individuel">
            </p>
            <p>
            <input type="radio" name="annuel1" id="annuel1" placeholder="@Famille">
            </p>
            <p>
            <input type="radio" name="annuel2" id="annuel2" placeholder="@Elève">
            </p>
            <p>
            <input type="radio" name="radio" id="radio" placeholder="@Educateur">
            </p>
        </div>

        <button type="submit">Soumettre</button>

    </form>  
    </section>
</body>
</html>