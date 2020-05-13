<!--Entete de début du site - menu bleu -->
<?php include_once("../includes/entete_debut.php"); ?>

<!-- PROGRAMMER ICI -->
<main id="main">
    <form metod="POST" action="">
        <div class="row row-ajout-master-titre-cours">
            <div class="col s12 col-ajout-titre-cours z-depth-3">
                <div class="row">
                    <div class="col s6">
                        <div class="row">
                            <span>Entrez le titre de votre cours :</span>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">chevron_right</i>
                                <input id="Titre-cours" type="text" class="validate">
                                <label for="Titre-cours">Titre</label>
                            </div>
                        </div>
                    </div>
                    <div class="col s6 master-validate-button">   
                        <button class="btn waves-effect waves-light" type="submit" name="action">Publier
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-master-contenu-cours paragraph-1" id="paragraph-1">
            <div class="col s3 z-depth-3 contenu-cours cours-sous-titre">
                <div class="row">
                    <div class="col s12 div-sous-titre">
                        <div class="row">
                            <span>Entrez le sous titre</span>
                        </div>
                        <div class="row div-input-sous-titre">
                            <div class="input-field col s10 ">
                                <i class="material-icons prefix">chevron_right</i>
                                <input id="input-sous-titre-1" type="text" class="validate input-sous-titre-1">
                                <label for="input-sous-titre-1">Sous-titre</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row new-paragraph">
                    <div class="col s6 add-div-1">
                        <a class="btn-floating btn-large waves-effect waves-light green add" id="add-paragraph-1" onclick="copyPara()"><i class="material-icons">add</i></a>
                    </div>
                    <div class="col s6 delete-div">
                        <a class="btn-floating btn-large waves-effect waves-light red delete" id="delete-paragraph-1" onclick="deletePara(this.id)"><i class="material-icons">delete_sweep</i></a>
                    </div>
                </div>

            </div>
            <div class="col s7 z-depth-3 contenu-cours cours-texte">
                <div class="row cours">
                    <div class="col s12 cours">
                        <div class="row">
                            <span>Contenue du paragraphe :</span>
                        </div>
                        <div class="row cours-text-area">
                            
                            <textarea id="cours-1" class="cours-1" name="story" cols="num" rows="num" placeholder="salut">Entrez votre courss...
                                
                            </textarea>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
</main>

<!-- Fin d'un fichier incluant les sources JS de materialize -->
<?php include_once("../includes/fin_fichier.php"); ?>