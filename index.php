<!DOCTYPE html>
<html lang="de">
<?php include('head.php'); ?>


<body>
    <div class="container">
       <?php include('header.php'); ?>

        <div class="row startpage">
            <div class="col-md-12">

              <form>
                <h1 style="text-align:center;">Kontaktieren Sie uns!</h1>
                 <div class="form-group">
                   <label for="name">Name:</label>
                   <input type="text" class="form-control" id="name" placeholder="Name">
                 </div>
                 <div class="form-group">
                   <label for="email">E-Mail:</label>
                   <input type="email" class="form-control" id="email" placeholder="E-Mail">
                 </div>
                 <div class="form-group">
                   <label for="telefon">Telefonnummer:</label>
                   <input type="tel" class="form-control" id="telefon" placeholder="Telefonnummer">
                 </div>
                 <div class="form-group">
                   <label for="message">Nachricht:</label>
                   <textarea id="message" class="form-control" rows="5" placeholder="Ihre Nachricht"></textarea>
                 </div>
                 <div class="form-group">
                   <button type="submit" class="btn btn-success btn-block">Absenden</button>
                 </div>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>
</body>
</html>
