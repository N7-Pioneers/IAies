<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données du Joueur</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap');

        *,
        *:after,
        *:before {
            box-sizing: border-box;
        }

        body {
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.5;
            background-color: #f1f3fb;
            padding: 0 2rem;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .card {
            margin: 2rem auto;
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 425px;
            background-color: #FFF;
            border-radius: 10px;
            box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.25);
            padding: 0.75rem;
        }

        .card-image {
            border-radius: 8px;
            overflow: hidden;
            padding-bottom: 65%;
            background-image: url('logo11.png');
            background-repeat: no-repeat;
            background-size: cover;
            justify-content: center; /* Alignement horizontal au centre */
            align-items: center; /* Alignement vertical au centre */
            position: relative;
        }

        small {
            font-weight: 350;
            color: black;
            line-height: 2;
        }

        .card-form {
            padding: 2rem 1rem 0;
        }

        .input {
            display: flex;
            align-items: center; /* Ajout pour aligner les éléments verticalement */
            margin-bottom: 1rem; /* Ajout pour espacer les paires */
        }

        .input-label {
            color:black;
            margin-left: 0.5rem; /* Ajout pour espacer le label du bouton radio */
        }

        .input-field {
            border: 0;
            z-index: 1;
            background-color: transparent;
            border-bottom: 2px solid #eee;
            font: inherit;
            font-size: 1.125rem;
            padding: .25rem 0;
        }

        .input-field:focus,
        .input-field:valid {
            outline: 0;
            border-bottom-color: #6658d3;
        }

        .input-field:focus+.input-label,
        .input-field:valid+.input-label {
            color: #6658d3;
            transform: translateY(-1.5rem);
        }

        .action {
            margin-top: 2rem;
        }

        .action-button {
            font: inherit;
            font-size: 1.25rem;
            padding: 1em;
            width: 100%;
            font-weight: 500;
            background-color:darkgreen;
            border-radius: 6px;
            color: #FFF;
            border: 0;
        }

        .action-button:focus {
            outline: 0;
        }

        .card-info {
            padding: 1rem 1rem;
            text-align: center;
            font-size: .875rem;
            color: #8597a3;
        }

        .card-info a {
            display: block;
            color: #6658d3;
            text-decoration: none;
        }
        button {
            cursor: pointer;
        }
        /* Ajoutez ceci dans votre fichier de style CSS */
.alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 4px;
}

    </style>
</head>
<body>       

            @if(session('success'))
                <div id="alert-success" class="alert-success">
                    {{ session('success') }}
                </div>
            @endif
    <div class="container">
        <!-- code here -->
        <div class="card">
            <div class="card-image">	
                
            </div>
            <div>
                <h2 class="card-heading">
                    <small><center>Which alert would you report?</center></small>
                </h2>
            </div>

            <form action="/submit" method="post" class="card-form">
                @csrf
                
                <input type="hidden" name="num-place" value="{{ $playerInfo['num-place'] }}">
                <input type="hidden" name="num-zone" value="{{ $playerInfo['num-zone'] }}">
             
                <div class="input">
                    <input type="radio" name="alert_type" value="health" id="health" />
                    <label class="input-label" for="health">Healthy alert</label>
                </div>
                <div class="input">
                    <input type="radio" name="alert_type" value="violence" id="violence"/>
                    <label class="input-label" for="violence">Violence alert</label>
                </div>
                <div class="action">
                    <button type="submit" class="action-button">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
    <script>
    // Fonction pour masquer la boîte de dialogue après quelques secondes
    function hideAlert() {
        var alertElement = document.getElementById('alert-success');
        if (alertElement) {
            setTimeout(function() {
                alertElement.style.display = 'none';
            },2000); 
        }
    }

    // Appeler la fonction pour masquer la boîte de dialogue
    hideAlert();
</script>
</body>
</html>
