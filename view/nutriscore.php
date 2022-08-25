<main class="bodyPortfolio">
    <header class="headerPortfolio">
        <h3>Rechercher votre produit par code barre:</h3>
        <!--------------   Barre de recherche dans la nav barre   ------------->
        <div class="search">
            <input type="text" name="codeBarre" class="codeBarre inputPortfolio" placeholder="Entrez le code barre" />

            <button class="button buttonCode">Rechercher</button>
        </div>
    </header>



    <!-----------------  Message d'erreur quand l'input recherche est vide  ------------>
    <div class="msg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
            <path d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z" />
        </svg>
        Merci de rentrer un code barre
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
            <path d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z" />
        </svg>
    </div>

    <!-----------------------  Modal d'affichage des infos produits  --------------------->
    <section id="affichage">
        <div class="image">
            <img src="photo du produit" alt="" class="imageProduit" />
        </div>
        <div class="info">
            <h4>Nom:</h4>
            <div id="nom"></div>
            <h4>Marque:</h4>
            <div id="marque"></div>

            <h4>Description:</h4>
            <div id="description"></div>

            <h4>Nutriscore:</h4>
            <div id="nutriscore"></div>
        </div>
    </section>
</main>