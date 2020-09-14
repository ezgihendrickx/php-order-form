<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <title>Order food & drinks</title>
</head>

<body>

    <div class="container">
        <h1>BeLekker</h1>
        <nav>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="?food=1">Order food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?food=0">Order drinks</a>
                </li>
            </ul>
        </nav>

        <form method="post">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">E-mail:</label>
                    <input type="text" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>">
                    <?php if ($emailErr) : ?>

                        <div class="alert alert-danger" role="alert">
                            <?php echo $emailErr ?>
                        </div>
                    <?php endif; ?>
                </div>





            </div>
            <div></div>
    </div>

    <fieldset>
        <legend>Address</legend>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="street">Street:</label>
                <input type="text" name="street" id="street" class="form-control" value="<?php echo htmlspecialchars($street); ?>">
                <?php if ($streetErr) : ?>

                    <div class="alert alert-danger" role="alert">
                        <?php echo $streetErr ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group col-md-6">
                <label for="streetnumber">Street number:</label>
                <input type="text" id="streetnumber" name="streetnumber" class="form-control" value="<?php echo htmlspecialchars($streetnumber); ?>">
                <?php if ($streetnumberErr) : ?>

                    <div class="alert alert-danger" role="alert">
                        <?php echo $streetnumberErr ?>
                    </div>
                <?php endif; ?>

            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" class="form-control" value="<?php echo htmlspecialchars($city); ?>">
                <?php if ($cityErr) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $cityErr ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group col-md-6">
                <label for="zipcode">Zipcode</label>
                <input type="text" id="zipcode" name="zipcode" class="form-control" value="<?php echo htmlspecialchars($zipcode); ?>">
                <?php if ($zipcodeErr) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $zipcodeErr ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </fieldset>

    <fieldset>
        <legend>Products</legend>
        <?php foreach ($products as $i => $product) : ?>
            <label>
                <input type="checkbox" value="1" name="products[<?php echo $i ?>]" /> <?php echo $product['name'] ?> -
                &euro; <?php echo number_format($product['price'], 2) ?></label><br />
        <?php endforeach; ?>
    </fieldset>

    <button type="submit" class="btn btn-primary">Order!</button>
    </form>

    <footer>You already ordered <strong>&euro; <?php echo $totalValue ?></strong> in food and drinks.</footer>
    </div>

    <style>
        footer {
            text-align: center;
        }
    </style>
</body>

</html>