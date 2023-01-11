    <?php include('./config/header.php');

    ?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Integration</title>


    </head>

    <body>
        <div class="container">
            <?php 
            if(isset($_GET['message'])){
                    echo 'Votre message a été envoyé avec succès';
                }
            ?>

            <div class="row mt-4 ms-5">
                <div class="col-6">
                    <form action="send.php" method="post">
                        <div class="row align-items-center">
                            
                            <!-- Name -->
                            <div class="col-lg-6">
                                <input required type="text" name="name" id="name" placeholder="Votre nom*" class="form-control">
                            </div>

                            <!-- Client ? -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <input type="checkbox" value="1" name="client" id="client" class=" form-check-input">
                                <label for="allreadyClient" class="ms-2">Déjà client</label>
                            </div>

                            <!-- Phone number -->
                            <div class="col-lg-6">
                                <input required type="tel" name="phone" id="phone" placeholder="Téléphone*" class="form-control">
                            </div>
                            <!-- Email  -->
                            <div class="col-lg-6">
                                <input required type="email" name="email" id="email" placeholder="Email*" class="form-control">
                            </div>

                            <!-- Subject -->
                            <div class="col-12">
                                <select required name="subject" id="subject" placeholder="Sujet" class="form-select">
                                    <option class="text-secondary" value="">Sujet*</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>

                            <!-- Message -->
                            <div class="col-12 form-floating">
                                <textarea name="message" id="message" placeholder="Message" class="form-control" required></textarea>
                                <label class="ms-2 text-secondary" for="message">Message*</label>
                            </div>
                        <p id="mentions" class="fst-italic fs-light">*mentions obligatoires</p>

                        </div>

                        <div class="col-7">
                            <input type="hidden" name="panne">
                            <button type="submit" class="btn btn-danger  mt-3">ENVOI MESSAGE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>