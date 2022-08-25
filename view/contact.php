<main>
    <section class="partSection">
        <h2>Contact</h2>
        <p>Si vous voulez me contacter, n'hésitez pas à m'envoyer un message via ce formulaire de contact!</p>
        <article class="formContact">
            <form action="" method="POST">
                <div class='centre'>
                    <div>
                        <label for="nom"></label><strong>Nom *:</strong>
                        <input type="text" name="nom" placeholder="Entrez votre nom" class="case" required />
                    </div>
                    <div>
                        <label for="prenom"></label><strong>Prénom:</strong>
                        <input type="text" name="prenom" placeholder="Entrez votre prénom" class="case" />
                    </div>
                </div>
                <div class='centre'>
                    <div><label for="tel"><strong>Téléphone:</strong></label>
                        <input type="tel" name="tel" placeholder="Entrez votre téléphone" class="case" />
                    </div>
                    <div>
                        <label for="email"><strong>Email *:</strong></label>
                        <input type="email" name="email" placeholder="Entrez votre email" class="case" required />
                    </div>
                </div>
                <div class='centre'>
                    <label for="Message"><strong>Message *:</strong></label>

                    <textarea name="Message" id="" cols="500" placeholder="Entrez votre message" class="case" required></textarea>
                </div>
                <div class="center"><button class="buttonContact">Envoyer</button></div>
            </form>
        </article>
    </section>
</main>