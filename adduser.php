<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetUser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="user">
        <div class="container fbox">
            <div class="row box">
                <form action="signup.php" method="POST">
                    <div class="frombox">
                        <label>Name</label>
                         <input type="text" name="name">
                    </div>
                    <div class="frombox">
                        <label>mail</label>
                         <input type="text" name="mail">
                    </div>
                     <div class="frombox">
                        <label>mobile number</label>
                         <input type="text" name="mobile">
                    </div> 
                    <div class="frombox">
                        <label>password</label>
                        <input type="password" name="pass">
                    </div>
                    <input type="submit" name="submit" class="mybtn">
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>