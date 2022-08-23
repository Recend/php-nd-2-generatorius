<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Table generator</title>
</head>

<body>
    <div class="container mt-3">

        <h1 class="text-center">Multiplication Table Worksheets</h1>
        <form action="lentele.php" method="POST">
            <div class="d-flex justify-content-center">
                <div class="card col-2">
                    <div class="card-body">
                        <p class="text-success text-center">Number set</p>
                        <input class="form-check-input" type="radio" name="dydis" id="dydis1" value="5" required>
                        <label for="dydis1">1 to 5</label><br>
                        <input class="form-check-input" type="radio" name="dydis" id="dydis2" value="10" required>
                        <label for="dydis2">1 to 10</label><br>
                        <input class="form-check-input" type="radio" name="dydis" id="dydis3" value="12" required>
                        <label for="dydis3">1 to 12</label><br>
                        <input class="form-check-input" type="radio" name="dydis" id="dydis4" value="14" required>
                        <label for="dydis4">1 to 14</label>
                    </div>
                </div>
                <div class="card col-2">
                    <div class="card-body">
                        <p class="text-success text-center">Difficulty</p>
                        <input class="form-check-input" type="radio" name="diff" id="diff1" value="90" required>
                        <label for="diff1">Easy (10%)</label><br>
                        <input class="form-check-input" type="radio" name="diff" id="diff2" value="70" required>
                        <label for="diff2">Medium (20%)</label><br>
                        <input class="form-check-input" type="radio" name="diff" id="diff3" value="50" required>
                        <label for="diff3">Hard (50%)</label><br>
                        <input class="form-check-input" type="radio" name="diff" id="diff4" value="10" required>
                        <label for="diff4">WOW (90%)</label>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary mt-3">Generate</button>
            </div>
        </form>
    </div>
    </div>
</body>

</html>