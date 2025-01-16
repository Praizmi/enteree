<?php include 'inc/funcs.php' ?>
<?php include 'inc/pal.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Palindrome</title>
</head>

<body style=" display: block; justify-content: center; align-items: center;">
    <div class="row mt-5">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h4>Palindrome Check</h4>
            <?php include 'inc/alerts.php'; ?>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="palindrome" class="form-label">Enter a string:</label>
                    <input type="text" class="form-control" id="palindrome" placeholder="Enter the string"
                        name="palindrome">
                    <?php if (isset($palindromeError)): ?>
                    <span class="d-inline-block bg-danger text-white px-2 rounded mt-1"><?= $palindromeError ?></span>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary mt-2" name="checkPalindrome">Check</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
</body>

</html>