<!--// PRODUCT MANAGEMENT VIEW

//This view must contain two links:
//One to the controller that will trigger the delivery of the add category view.
//One to the controller that will trigger the delivery of the add product view.-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen">
        <title>Acme| Products</title>
    </head>
    <body>
        <header>
            <?php
            include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php';
            ?>
        </header>
        <nav class="nav">
            <?php echo $navList; ?>
        </nav>
        <main>
            <div class="login">
                <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>
                end php
                <form action="../accounts/index.php?action=login" method="post">
                    <h1>Acme Login</h1>
                    <div class="field">
                        <label for="name">Email:</label>
                        <input type="text" id="name" name="username" required>
                    </div>
                    <div class="field">
                        <label for="pwd">Password:</label>
                        <input type="password" name="password" id="pwd" required>
                    </div>
                    <div>
                        <button class="field-button">Login</button>
                    </div>
                    <div>
                        <br>
                        <p>If you have not yet registered, please click the link below to create an account</p>
                        pass a name - value pair that tells the controller to deliver the registration view.
                        <a class="field-button" href='/accounts/index.php?action=register'>Create Account</a>
                    </div>
                </form>
            </div>
        </main>

        <footer>
            <?php
            include $_SERVER['DOCUMENT_ROOT'] . '/common/footer.php';
            ?>
        </footer>
    </body>
</html>