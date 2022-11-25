<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel="stylesheet" href="style.css">
    <title>Bad Words</title>
</head>
<body>
    <div class="container">
        <form action="stampa.php">
            <div class="mb-3">
                <label class="form-label">Inserisci qui un paragrafo!</label>
                <textarea class="form-control" placeholder="Scrivi..." rows="5" name="paragrafo"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Inserisci qui la parola da censurare!</label>
                <input type="text" class="form-control" placeholder="Scrivi..." name="parola">
            </div>
            <button type="submit" class="btn btn-primary px-4 py-2 fw-bold">Invia</button>
        </form>
    </div>
</body>
</html>