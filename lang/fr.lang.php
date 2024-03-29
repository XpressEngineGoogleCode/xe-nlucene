<?php
    /**
     * @file   modules/lucene/lang/fr.lang.php
     * @author nhn (developers@xpressengine.com)  Traduit par Pierre Duvent <PierreDuvent@gmail.com>
     * @brief  Paquet du langage en francais pour le module de Recherche Unie
     **/

    $lang->integration_search = "Recherche Unie";

    $lang->sample_code = "Code d\'echantillon";
    $lang->about_target_module = "Les modules choisis seulement seront les objectifs. Faites attention quand vous mettez la permission, S.V.P.";
    $lang->about_sample_code = "Vous pouvez utiliser la Reherche Uni si vous ajoutez le code au-dessus dans le Mise en Page etc.";
    $lang->msg_no_keyword = "Entrez le mot de cle a rechercher, S.V.P.";

    $lang->is_result_text = "Il y a <strong>%d</strong> resultat(s) pour <strong>'%s'</strong>";
    $lang->multimedia = "Images/ Movies";
    
    $lang->include_search_target = 'Seulement dans certaines cibles ';
    $lang->exclude_search_target = 'Recherche de la destination selectionnee a partir de';

    $lang->is_search_option = array(
        'document' => array(
            'title_content' => 'Titre+Contenu',
            'title' => 'Titre',
            'content' => 'Contenu',
            'tag' => 'Balise',
        ),
        'trackback' => array(
            'url' => 'URL objectif',
            'blog_name' => 'Nom du Site objectif',
            'title' => 'Titre',
            'excerpt' => 'Contenu',
        ),
    );

    $lang->is_sort_option = array(
        'regdate' => 'Enregistre',
        'comment_count' => 'Commentaires',
        'readed_count' => 'Vues',
        'voted_count' => 'Recommandes',
    );
?>
