<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * Core translations are managed using Transifex. To create a new translation
 * or to help to maintain an existing one, please register at transifex.com.
 * 
 * @link http://help.transifex.com/intro/translating.html
 * @link https://www.transifex.com/projects/p/contao/language/fr/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_LANG']['ERR']['general'] = 'Une erreur est survenue !';
$GLOBALS['TL_LANG']['ERR']['unique'] = 'Doublon dans le champ "%s" !';
$GLOBALS['TL_LANG']['ERR']['mandatory'] = 'Le champ "%s" ne doit pas être vide !';
$GLOBALS['TL_LANG']['ERR']['mdtryNoLabel'] = 'Ce champ ne doit pas être vide !';
$GLOBALS['TL_LANG']['ERR']['minlength'] = 'Le champ "%s" doit posséder au moins %d caractères !';
$GLOBALS['TL_LANG']['ERR']['maxlength'] = 'Le champ "%s" ne doit pas contenir plus de %d caractères !';
$GLOBALS['TL_LANG']['ERR']['digit'] = 'Veuillez seulement saisir des chiffres !';
$GLOBALS['TL_LANG']['ERR']['prcnt'] = 'Veuillez saisir une valeur entre 0 et 100 !';
$GLOBALS['TL_LANG']['ERR']['alpha'] = 'Veuillez seulement saisir des caractères alphabétiques !';
$GLOBALS['TL_LANG']['ERR']['alnum'] = 'Veuillez seulement saisir des caractères alphanumériques !';
$GLOBALS['TL_LANG']['ERR']['phone'] = 'Veuillez saisir un numéro de téléphone valide !';
$GLOBALS['TL_LANG']['ERR']['extnd'] = 'Pour des raisons de sécurité n\'utilisez pas ces caractères =<>&/()#';
$GLOBALS['TL_LANG']['ERR']['email'] = 'Veuillez saisir une adresse e-mail valide !';
$GLOBALS['TL_LANG']['ERR']['emails'] = 'Il y a au moins une adresse e-mail non valide !';
$GLOBALS['TL_LANG']['ERR']['url'] = 'Veuillez saisir une URL valide et encodez les caractères spéciaux !';
$GLOBALS['TL_LANG']['ERR']['alias'] = 'Saisir uniquement des caractères alphanumériques et les caractères spéciaux suivants : .-_';
$GLOBALS['TL_LANG']['ERR']['folderalias'] = 'Saisir uniquement des caractères alphanumériques et les caractères spéciaux suivants : .-/_';
$GLOBALS['TL_LANG']['ERR']['date'] = 'Veuillez saisir la date "%s" !';
$GLOBALS['TL_LANG']['ERR']['time'] = 'Veuillez saisir l\'heure "%s" !';
$GLOBALS['TL_LANG']['ERR']['dateTime'] = 'Veuillez saisir la date et l\'heure "%s" !';
$GLOBALS['TL_LANG']['ERR']['invalidDate'] = 'Date non valide "%s" !';
$GLOBALS['TL_LANG']['ERR']['noSpace'] = 'Le champ "%s" ne doit pas contenir d\'espace !';
$GLOBALS['TL_LANG']['ERR']['filesize'] = 'La taille maximale pour l\'envoi de fichier est %s (Paramètres de Contao ou du fichier php.ini)!';
$GLOBALS['TL_LANG']['ERR']['filetype'] = 'Le fichier de type "%s" n\'est pas autorisé pour l\'envoi !';
$GLOBALS['TL_LANG']['ERR']['filepartial'] = 'Le fichier %s a été envoyé partiellement !';
$GLOBALS['TL_LANG']['ERR']['filewidth'] = 'L\'image %s dépasse la largeur maximale qui est de %d pixels !';
$GLOBALS['TL_LANG']['ERR']['fileheight'] = 'L\'image %s dépasse la hauteur maximale qui est de %d pixels !';
$GLOBALS['TL_LANG']['ERR']['filetarget'] = 'Impossible de déplacer %s vers %s parce que la cible existe !';
$GLOBALS['TL_LANG']['ERR']['invalidReferer'] = 'Accès interdit ! L\'adresse de l\'hôte courant (%s) est différente de l\'adresse de l\'hôte référent (%s) !';
$GLOBALS['TL_LANG']['ERR']['invalidPass'] = 'Mot de passe incorrect !';
$GLOBALS['TL_LANG']['ERR']['passwordLength'] = 'Un mot de passe doit posséder au moins %d caractères !';
$GLOBALS['TL_LANG']['ERR']['passwordName'] = 'Votre identifiant et votre mot de passe ne correspondent pas !';
$GLOBALS['TL_LANG']['ERR']['passwordMatch'] = 'Les mots de passe sont différents !';
$GLOBALS['TL_LANG']['ERR']['accountLocked'] = 'Ce compte est bloqué ! Essayez de vous connecter dans %d minutes.';
$GLOBALS['TL_LANG']['ERR']['invalidLogin'] = 'La connexion a échoué !';
$GLOBALS['TL_LANG']['ERR']['invalidColor'] = 'Le format de couleur est invalide !';
$GLOBALS['TL_LANG']['ERR']['all_fields'] = 'Veuillez choisir au moins un champ !';
$GLOBALS['TL_LANG']['ERR']['aliasExists'] = 'L\'alias "%s" existe déjà !';
$GLOBALS['TL_LANG']['ERR']['importFolder'] = 'Le répertoire "%s" ne peut être importé !';
$GLOBALS['TL_LANG']['ERR']['notWriteable'] = 'Le fichier "%s" n\'est pas accessible en écriture et ne peut donc pas être mis à jour !';
$GLOBALS['TL_LANG']['ERR']['invalidName'] = 'Ce nom de fichier ou de répertoire est invalide !';
$GLOBALS['TL_LANG']['ERR']['invalidFile'] = 'Le fichier ou le répertoire est invalide !';
$GLOBALS['TL_LANG']['ERR']['fileExists'] = 'Le fichier "%s" existe déjà !';
$GLOBALS['TL_LANG']['ERR']['circularReference'] = 'Cible de redirection non valide (redondance cyclique) !';
$GLOBALS['TL_LANG']['ERR']['ie6warning'] = '<strong>ATTENTION !</strong> Votre navigateur %sn\'est pas à jour%s, <strong>certaines fonctionnalités ne seront pas disponibles</strong>.';
$GLOBALS['TL_LANG']['ERR']['noFallbackEmpty'] = 'Aucune des pages racines sans nom de domaine n\'a l\'option de langue de secours configurée, ce qui signifie que ces sites ne sont disponibles que dans la langue que vous avez défini dans les réglages de la page ! Les visiteurs (et moteurs de recherche) qui ne parlent pas cette langue ne seront pas en mesure de naviguer sur votre site.';
$GLOBALS['TL_LANG']['ERR']['noFallbackDns'] = 'Aucune des pages racines de <strong>%s</strong> n\'a l\'option de langue de secours configurée, ce qui signifie que ces sites ne sont disponibles que dans la langue que vous avez défini dans les réglages de la page ! Les visiteurs (et moteurs de recherche) qui ne parlent pas cette langue ne seront pas en mesure de naviguer sur votre site.';
$GLOBALS['TL_LANG']['ERR']['multipleFallback'] = 'Vous pouvez seulement définir une page racine par domaine comme langue de secours.';
$GLOBALS['TL_LANG']['ERR']['topLevelRoot'] = 'Les pages de premier niveau doivent être des pages racines !';
$GLOBALS['TL_LANG']['ERR']['topLevelRegular'] = 'Il y a des pages de premier niveau qui ne sont pas des pages racines. La création de site sans une page racine n\'est plus supportée, faites en sorte que toutes les pages soient regroupées sous une page racine.';
$GLOBALS['TL_LANG']['ERR']['invalidTokenUrl'] = 'Le lien que vous tentez d\'ouvrir n\'a pas pu être vérifié. Si vous avez cliqué sur le lien ou l\'avez reçu par une personne de confiance, vous pouvez confirmer le processus ci-dessous.';
$GLOBALS['TL_LANG']['ERR']['version2format'] = 'Cet élément utilise toujours l\'ancien format SCR de Contao 2. Avez-vous mis à jour la base de données ?';
$GLOBALS['TL_LANG']['ERR']['form'] = 'Le formulaire n\'a pas pu être envoyé';
$GLOBALS['TL_LANG']['ERR']['captcha'] = 'Veuillez répondre à la question de sécurité !';
$GLOBALS['TL_LANG']['ERR']['download'] = 'Le fichier "%s" n\'est pas disponible en téléchargement !';
$GLOBALS['TL_LANG']['ERR']['invalid'] = 'Entrée non valide : %s';
$GLOBALS['TL_LANG']['ERR']['fileNotFoundSync'] = 'Aucun enregistrement de la base de données trouvé pour %s. Veuillez synchroniser le système de fichiers.';
$GLOBALS['TL_LANG']['SEC']['question1'] = 'Veuillez additionner %d et %d.';
$GLOBALS['TL_LANG']['SEC']['question2'] = 'Quelle est la somme de %d et %d?';
$GLOBALS['TL_LANG']['SEC']['question3'] = 'Veuillez calculer %d plus %d.';
$GLOBALS['TL_LANG']['CTE']['texts'] = 'Éléments texte';
$GLOBALS['TL_LANG']['CTE']['headline'][0] = 'Titre';
$GLOBALS['TL_LANG']['CTE']['headline'][1] = 'Génère un titre (h1 - h6).';
$GLOBALS['TL_LANG']['CTE']['text'][0] = 'Texte';
$GLOBALS['TL_LANG']['CTE']['text'][1] = 'Génère un élément contenant du texte riche.';
$GLOBALS['TL_LANG']['CTE']['html'][0] = 'HTML';
$GLOBALS['TL_LANG']['CTE']['html'][1] = 'Permet d\'ajouter du code HTML personnalisé.';
$GLOBALS['TL_LANG']['CTE']['list'][0] = 'Liste';
$GLOBALS['TL_LANG']['CTE']['list'][1] = 'Génère une liste numérotée ou une liste simple.';
$GLOBALS['TL_LANG']['CTE']['table'][0] = 'Tableau';
$GLOBALS['TL_LANG']['CTE']['table'][1] = 'Génère un tableau qui peut-être trié.';
$GLOBALS['TL_LANG']['CTE']['accordion'][0] = 'Accordéon';
$GLOBALS['TL_LANG']['CTE']['accordion'][1] = 'Génère un élément accordéon "MooTools".';
$GLOBALS['TL_LANG']['CTE']['code'][0] = 'Code';
$GLOBALS['TL_LANG']['CTE']['code'][1] = 'Ajoute la coloration syntaxique sur des extraits de code.';
$GLOBALS['TL_LANG']['CTE']['links'] = 'Éléments lien';
$GLOBALS['TL_LANG']['CTE']['hyperlink'][0] = 'Lien hypertexte';
$GLOBALS['TL_LANG']['CTE']['hyperlink'][1] = 'Génère un lien hypertexte vers un autre site Internet.';
$GLOBALS['TL_LANG']['CTE']['toplink'][0] = 'Lien vers le haut de page';
$GLOBALS['TL_LANG']['CTE']['toplink'][1] = 'Génère un lien pour retourner en haut de page.';
$GLOBALS['TL_LANG']['CTE']['media'] = 'Éléments multimédias';
$GLOBALS['TL_LANG']['CTE']['image'][0] = 'Image';
$GLOBALS['TL_LANG']['CTE']['image'][1] = 'Génère une image.';
$GLOBALS['TL_LANG']['CTE']['gallery'][0] = 'Galerie d\'images';
$GLOBALS['TL_LANG']['CTE']['gallery'][1] = 'Génère une galerie d\'image avec effet "lightbox".';
$GLOBALS['TL_LANG']['CTE']['player'][0] = 'Video/audio';
$GLOBALS['TL_LANG']['CTE']['player'][1] = 'Génère un lecteur vidéo ou audio.';
$GLOBALS['TL_LANG']['CTE']['youtube'][0] = 'Youtube';
$GLOBALS['TL_LANG']['CTE']['youtube'][1] = 'Ajoute une vidéo Youtube.';
$GLOBALS['TL_LANG']['CTE']['files'] = 'Éléments fichier';
$GLOBALS['TL_LANG']['CTE']['download'][0] = 'Téléchargement';
$GLOBALS['TL_LANG']['CTE']['download'][1] = 'Génère un lien hypertexte vers un fichier à télécharger.';
$GLOBALS['TL_LANG']['CTE']['downloads'][0] = 'Téléchargements';
$GLOBALS['TL_LANG']['CTE']['downloads'][1] = 'Génère des liens multiples vers des fichiers à télécharger.';
$GLOBALS['TL_LANG']['CTE']['includes'] = 'Éléments inclus';
$GLOBALS['TL_LANG']['CTE']['article'][0] = 'Contenu d\'un article';
$GLOBALS['TL_LANG']['CTE']['article'][1] = 'Insère un autre article.';
$GLOBALS['TL_LANG']['CTE']['alias'][0] = 'Élément de contenu';
$GLOBALS['TL_LANG']['CTE']['alias'][1] = 'Insère un autre élément de contenu.';
$GLOBALS['TL_LANG']['CTE']['form'][0] = 'Formulaire';
$GLOBALS['TL_LANG']['CTE']['form'][1] = 'Insère un formulaire.';
$GLOBALS['TL_LANG']['CTE']['module'][0] = 'Module';
$GLOBALS['TL_LANG']['CTE']['module'][1] = 'Insère un module front office.';
$GLOBALS['TL_LANG']['CTE']['teaser'][0] = 'Accroche d\'un article';
$GLOBALS['TL_LANG']['CTE']['teaser'][1] = 'Affiche l\'accroche d\'un article.';
$GLOBALS['TL_LANG']['PTY']['regular'][0] = 'Page simple';
$GLOBALS['TL_LANG']['PTY']['regular'][1] = 'Une page simple contient des articles et des éléments de contenu. C\'est le type de page par défaut.';
$GLOBALS['TL_LANG']['PTY']['redirect'][0] = 'Rediriger vers une URL externe';
$GLOBALS['TL_LANG']['PTY']['redirect'][1] = 'Cette page réoriente automatiquement vers une URL externe. Cela fonctionne comme un hyperlien.';
$GLOBALS['TL_LANG']['PTY']['forward'][0] = 'Rediriger vers une autre page du site';
$GLOBALS['TL_LANG']['PTY']['forward'][1] = 'Ce type de page réoriente automatiquement le visiteur vers une autre page de la structure de site.';
$GLOBALS['TL_LANG']['PTY']['root'][0] = 'Racine d\'un nouveau site';
$GLOBALS['TL_LANG']['PTY']['root'][1] = 'Ce type de page est le point de départ pour créer un site internet dans la structure de site.';
$GLOBALS['TL_LANG']['PTY']['error_403'][0] = 'Erreur 403 (accès interdit)';
$GLOBALS['TL_LANG']['PTY']['error_403'][1] = 'Si un utilisateur sans permission essaye d\'accéder à une page protégée, une page d\'erreur 403 sera retournée.';
$GLOBALS['TL_LANG']['PTY']['error_404'][0] = 'Erreur 404 (page non trouvée)';
$GLOBALS['TL_LANG']['PTY']['error_404'][1] = 'Si un utilisateur essaye d\'accéder à une page qui n\'existe pas, une page d\'erreur 404 sera retournée.';
$GLOBALS['TL_LANG']['FOP']['fop'][0] = 'Permissions sur les fichiers';
$GLOBALS['TL_LANG']['FOP']['fop'][1] = 'Sélectionner les opérations sur les fichiers que vous autorisez.';
$GLOBALS['TL_LANG']['FOP']['f1'] = 'Envoyer les fichiers sur le serveur';
$GLOBALS['TL_LANG']['FOP']['f2'] = 'Éditer, copier ou déplacer des fichiers ou des répertoires';
$GLOBALS['TL_LANG']['FOP']['f3'] = 'Supprimer les fichiers seuls ou les répertoires vides';
$GLOBALS['TL_LANG']['FOP']['f4'] = 'Supprimer les répertoires contenant des fichiers ou des sous-répertoires (!)';
$GLOBALS['TL_LANG']['FOP']['f5'] = 'Éditer les fichiers dans un éditeur de texte';
$GLOBALS['TL_LANG']['CHMOD']['editpage'] = 'Éditer la page';
$GLOBALS['TL_LANG']['CHMOD']['editnavigation'] = 'Éditer la hiérarchie de la page';
$GLOBALS['TL_LANG']['CHMOD']['deletepage'] = 'Supprimer la page';
$GLOBALS['TL_LANG']['CHMOD']['editarticles'] = 'Éditer les articles';
$GLOBALS['TL_LANG']['CHMOD']['movearticles'] = 'Éditer la hiérarchie de l\'article';
$GLOBALS['TL_LANG']['CHMOD']['deletearticles'] = 'Supprimer les articles';
$GLOBALS['TL_LANG']['CHMOD']['cuser'] = 'Propriétaire';
$GLOBALS['TL_LANG']['CHMOD']['cgroup'] = 'Groupe';
$GLOBALS['TL_LANG']['CHMOD']['cworld'] = 'Tout le monde';
$GLOBALS['TL_LANG']['DAYS'][0] = 'Dimanche';
$GLOBALS['TL_LANG']['DAYS'][1] = 'Lundi';
$GLOBALS['TL_LANG']['DAYS'][2] = 'Mardi';
$GLOBALS['TL_LANG']['DAYS'][3] = 'Mercredi';
$GLOBALS['TL_LANG']['DAYS'][4] = 'Jeudi';
$GLOBALS['TL_LANG']['DAYS'][5] = 'Vendredi';
$GLOBALS['TL_LANG']['DAYS'][6] = 'Samedi';
$GLOBALS['TL_LANG']['DAYS_SHORT'][0] = 'Dim';
$GLOBALS['TL_LANG']['DAYS_SHORT'][1] = 'Lun';
$GLOBALS['TL_LANG']['DAYS_SHORT'][2] = 'Mar';
$GLOBALS['TL_LANG']['DAYS_SHORT'][3] = 'Mer';
$GLOBALS['TL_LANG']['DAYS_SHORT'][4] = 'Jeu';
$GLOBALS['TL_LANG']['DAYS_SHORT'][5] = 'Ven';
$GLOBALS['TL_LANG']['DAYS_SHORT'][6] = 'Sam';
$GLOBALS['TL_LANG']['MONTHS'][0] = 'Janvier';
$GLOBALS['TL_LANG']['MONTHS'][1] = 'Février';
$GLOBALS['TL_LANG']['MONTHS'][2] = 'Mars';
$GLOBALS['TL_LANG']['MONTHS'][3] = 'Avril';
$GLOBALS['TL_LANG']['MONTHS'][4] = 'Mai';
$GLOBALS['TL_LANG']['MONTHS'][5] = 'Juin';
$GLOBALS['TL_LANG']['MONTHS'][6] = 'Juillet';
$GLOBALS['TL_LANG']['MONTHS'][7] = 'Août';
$GLOBALS['TL_LANG']['MONTHS'][8] = 'Septembre';
$GLOBALS['TL_LANG']['MONTHS'][9] = 'Octobre';
$GLOBALS['TL_LANG']['MONTHS'][10] = 'Novembre';
$GLOBALS['TL_LANG']['MONTHS'][11] = 'Décembre';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][0] = 'Jan';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][1] = 'Fév';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][2] = 'Mar';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][3] = 'Avr';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][4] = 'Mai';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][5] = 'Juin';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][6] = 'Juil';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][7] = 'Aoû';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][8] = 'Sep';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][9] = 'Oct';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][10] = 'Nov';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][11] = 'Déc';
$GLOBALS['TL_LANG']['MSC']['dayShortLength'] = '3';
$GLOBALS['TL_LANG']['MSC']['monthShortLength'] = '3';
$GLOBALS['TL_LANG']['MSC']['weekOffset'] = '0';
$GLOBALS['TL_LANG']['MSC']['titleFormat'] = '%B %d%o, %Y';
$GLOBALS['TL_LANG']['MSC']['url'][0] = 'URL Cible';
$GLOBALS['TL_LANG']['MSC']['url'][1] = 'Saisir l\'URL d\'un site (http://...), une adresse e-mail (mailto:..) ou utiliser des balises d\'insertion.';
$GLOBALS['TL_LANG']['MSC']['target'][0] = 'Ouvrir dans une nouvelle fenêtre';
$GLOBALS['TL_LANG']['MSC']['target'][1] = 'Ouvre un lien dans une nouvelle fenêtre.';
$GLOBALS['TL_LANG']['MSC']['decimalSeparator'] = '.';
$GLOBALS['TL_LANG']['MSC']['thousandsSeparator'] = ',';
$GLOBALS['TL_LANG']['MSC']['separator'][0] = 'Séparateur';
$GLOBALS['TL_LANG']['MSC']['separator'][1] = 'Sélectionner le caractère séparant les valeurs.';
$GLOBALS['TL_LANG']['MSC']['source'][0] = 'Fichiers source';
$GLOBALS['TL_LANG']['MSC']['source'][1] = 'Choisir le fichier CSV à importer.';
$GLOBALS['TL_LANG']['MSC']['comma'] = 'Virgule';
$GLOBALS['TL_LANG']['MSC']['semicolon'] = 'Point virgule';
$GLOBALS['TL_LANG']['MSC']['tabulator'] = 'Tabulation';
$GLOBALS['TL_LANG']['MSC']['linebreak'] = 'Saut de ligne';
$GLOBALS['TL_LANG']['MSC']['lw_import'][0] = 'Import CSV';
$GLOBALS['TL_LANG']['MSC']['lw_import'][1] = 'Import des éléments de liste à partir d\'un fichier CSV';
$GLOBALS['TL_LANG']['MSC']['lw_copy'] = 'Copier l\'élément';
$GLOBALS['TL_LANG']['MSC']['lw_up'] = 'Déplacer l\'élément d\'une position vers le haut';
$GLOBALS['TL_LANG']['MSC']['lw_down'] = 'Déplacer l\'élément d\'une position vers le bas';
$GLOBALS['TL_LANG']['MSC']['lw_delete'] = 'Supprimer l\'élément';
$GLOBALS['TL_LANG']['MSC']['tw_import'][0] = 'Import CSV';
$GLOBALS['TL_LANG']['MSC']['tw_import'][1] = 'Import des éléments de tableau à partir d\'un fichier CSV';
$GLOBALS['TL_LANG']['MSC']['tw_expand'] = 'Augmenter la taille du champ de saisie';
$GLOBALS['TL_LANG']['MSC']['tw_shrink'] = 'Diminuer la taille du champ de saisie';
$GLOBALS['TL_LANG']['MSC']['tw_rcopy'] = 'Dupliquer la ligne';
$GLOBALS['TL_LANG']['MSC']['tw_rup'] = 'Déplacer la ligne d\'une position vers le haut';
$GLOBALS['TL_LANG']['MSC']['tw_rdown'] = 'Déplacer la ligne d\'une position vers le bas';
$GLOBALS['TL_LANG']['MSC']['tw_rdelete'] = 'Supprimer la ligne';
$GLOBALS['TL_LANG']['MSC']['tw_ccopy'] = 'Dupliquer la colonne';
$GLOBALS['TL_LANG']['MSC']['tw_cmovel'] = 'Déplacer la colonne d\'une position vers la gauche';
$GLOBALS['TL_LANG']['MSC']['tw_cmover'] = 'Déplacer la colonne d\'une position vers la droite';
$GLOBALS['TL_LANG']['MSC']['tw_cdelete'] = 'Supprimer la colonne';
$GLOBALS['TL_LANG']['MSC']['ow_copy'] = 'Dupliquer la ligne';
$GLOBALS['TL_LANG']['MSC']['ow_up'] = 'Déplacer la ligne d\'une position vers le haut';
$GLOBALS['TL_LANG']['MSC']['ow_down'] = 'Déplacer la ligne d\'une position vers le bas';
$GLOBALS['TL_LANG']['MSC']['ow_delete'] = 'Supprimer la ligne';
$GLOBALS['TL_LANG']['MSC']['ow_value'] = 'Valeur';
$GLOBALS['TL_LANG']['MSC']['ow_label'] = 'Libellé';
$GLOBALS['TL_LANG']['MSC']['ow_key'] = 'Clé';
$GLOBALS['TL_LANG']['MSC']['ow_default'] = 'Défaut';
$GLOBALS['TL_LANG']['MSC']['ow_group'] = 'Groupe';
$GLOBALS['TL_LANG']['MSC']['mw_copy'] = 'Dupliquer la ligne';
$GLOBALS['TL_LANG']['MSC']['mw_up'] = 'Déplacer la ligne d\'une position vers le haut';
$GLOBALS['TL_LANG']['MSC']['mw_down'] = 'Déplacer la ligne d\'une position vers le bas';
$GLOBALS['TL_LANG']['MSC']['mw_delete'] = 'Supprimer la ligne';
$GLOBALS['TL_LANG']['MSC']['mw_module'] = 'Module';
$GLOBALS['TL_LANG']['MSC']['mw_column'] = 'Colonne';
$GLOBALS['TL_LANG']['MSC']['aw_title'] = 'Titre';
$GLOBALS['TL_LANG']['MSC']['aw_link'] = 'Lien';
$GLOBALS['TL_LANG']['MSC']['aw_caption'] = 'Légende';
$GLOBALS['TL_LANG']['MSC']['aw_delete'] = 'Supprimer une langue';
$GLOBALS['TL_LANG']['MSC']['aw_new'] = 'Ajouter une langue';
$GLOBALS['TL_LANG']['MSC']['relative'] = 'Dimensions relatives';
$GLOBALS['TL_LANG']['MSC']['proportional'][0] = 'Proportionnel';
$GLOBALS['TL_LANG']['MSC']['proportional'][1] = 'Le côté le plus long de l\'image est ajusté aux dimensions données, et l\'image est redimensionnée proportionnellement.';
$GLOBALS['TL_LANG']['MSC']['box'][0] = 'Étirer';
$GLOBALS['TL_LANG']['MSC']['box'][1] = 'Le côté le plus court de l\'image est ajusté aux dimensions données et l\'image est redimensionnée proportionnellement.';
$GLOBALS['TL_LANG']['MSC']['crop'] = 'Dimensions exactes';
$GLOBALS['TL_LANG']['MSC']['left_top'][0] = 'Haut | gauche';
$GLOBALS['TL_LANG']['MSC']['left_top'][1] = 'Préserve la partie gauche d\'une image au format paysage et la partie supérieure d\'une image au format portrait.';
$GLOBALS['TL_LANG']['MSC']['center_top'][0] = 'Haut | centre';
$GLOBALS['TL_LANG']['MSC']['center_top'][1] = 'Préserve la partie centrale d\'une image au format paysage et la partie supérieure d\'une image au format portrait.';
$GLOBALS['TL_LANG']['MSC']['right_top'][0] = 'Haut | droit';
$GLOBALS['TL_LANG']['MSC']['right_top'][1] = 'Préserve la partie droite d\'une image au format paysage et la partie supérieure d\'une image au format portrait.';
$GLOBALS['TL_LANG']['MSC']['left_center'][0] = 'Centre | gauche';
$GLOBALS['TL_LANG']['MSC']['left_center'][1] = 'Préserve la partie gauche d\'une image au format paysage et la partie centrale d\'une image au format portrait.';
$GLOBALS['TL_LANG']['MSC']['center_center'][0] = 'Centre | centre';
$GLOBALS['TL_LANG']['MSC']['center_center'][1] = 'Préserve la partie centrale d\'une image au format paysage et la partie centrale d\'une image au format portrait.';
$GLOBALS['TL_LANG']['MSC']['right_center'][0] = 'Centre | droit';
$GLOBALS['TL_LANG']['MSC']['right_center'][1] = 'Préserve la partie droite d\'une image au format paysage et la partie centrale d\'une image au format portrait.';
$GLOBALS['TL_LANG']['MSC']['left_bottom'][0] = 'Bas | gauche';
$GLOBALS['TL_LANG']['MSC']['left_bottom'][1] = 'Préserve la partie gauche d\'une image au format paysage et la partie inférieure d\'une image au format portrait.';
$GLOBALS['TL_LANG']['MSC']['center_bottom'][0] = 'Bas | centre';
$GLOBALS['TL_LANG']['MSC']['center_bottom'][1] = 'Préserve la partie centrale d\'une image au format paysage et la partie inférieure d\'une image au format portrait.';
$GLOBALS['TL_LANG']['MSC']['right_bottom'][0] = 'Bas | droit';
$GLOBALS['TL_LANG']['MSC']['right_bottom'][1] = 'Préserve la partie droite d\'une image au format paysage et la partie inférieure d\'une image au format portrait.';
$GLOBALS['TL_LANG']['MSC']['id'][0] = 'ID';
$GLOBALS['TL_LANG']['MSC']['id'][1] = 'Changer les ID détruira l\'uniformité des données !';
$GLOBALS['TL_LANG']['MSC']['pid'][0] = 'ID parent';
$GLOBALS['TL_LANG']['MSC']['pid'][1] = 'Changer les ID détruira l\'uniformité des données !';
$GLOBALS['TL_LANG']['MSC']['sorting'][0] = 'Ordre';
$GLOBALS['TL_LANG']['MSC']['sorting'][1] = 'L\'ordre est habituellement choisi automatiquement.';
$GLOBALS['TL_LANG']['MSC']['all'][0] = 'Édition multiple';
$GLOBALS['TL_LANG']['MSC']['all'][1] = 'Éditer plusieurs enregistrements à la fois.';
$GLOBALS['TL_LANG']['MSC']['all_override'][0] = 'Remplacement multiple';
$GLOBALS['TL_LANG']['MSC']['all_override'][1] = 'Remplacer plusieurs enregistrements à la fois';
$GLOBALS['TL_LANG']['MSC']['all_fields'][0] = 'Champs disponibles';
$GLOBALS['TL_LANG']['MSC']['all_fields'][1] = 'Sélectionner les champs à éditer.';
$GLOBALS['TL_LANG']['MSC']['password'][0] = 'Mot de passe';
$GLOBALS['TL_LANG']['MSC']['password'][1] = 'Saisir un mot de passe.';
$GLOBALS['TL_LANG']['MSC']['confirm'][0] = 'Confirmation du mot de passe';
$GLOBALS['TL_LANG']['MSC']['confirm'][1] = 'Confirmer le mot de passe.';
$GLOBALS['TL_LANG']['MSC']['dateAdded'][0] = 'Date d\'ajout';
$GLOBALS['TL_LANG']['MSC']['dateAdded'][1] = 'Ajouté le : %s';
$GLOBALS['TL_LANG']['MSC']['lastLogin'][0] = 'Dernière connexion';
$GLOBALS['TL_LANG']['MSC']['lastLogin'][1] = 'Dernière connexion : %s';
$GLOBALS['TL_LANG']['MSC']['move_up'][0] = 'Déplacer vers le haut';
$GLOBALS['TL_LANG']['MSC']['move_up'][1] = 'Déplacer l\'élément d\'une position vers le haut';
$GLOBALS['TL_LANG']['MSC']['move_down'][0] = 'Déplacer vers le bas';
$GLOBALS['TL_LANG']['MSC']['move_down'][1] = 'Déplacer l\'élément d\'une position vers le bas';
$GLOBALS['TL_LANG']['MSC']['staticFiles'][0] = 'URL des fichiers';
$GLOBALS['TL_LANG']['MSC']['staticFiles'][1] = 'L\'URL des fichiers s\'applique au répertoire <em>files</em>  (optimisation de la vitesse de chargement des pages).';
$GLOBALS['TL_LANG']['MSC']['staticPlugins'][0] = 'URL des ressources';
$GLOBALS['TL_LANG']['MSC']['staticPlugins'][1] = 'L\'URL des ressources  s\'applique à toutes les ressources se trouvant dans le répertoire <em>assets</em> (optimisation de la vitesse de chargement des pages).';
$GLOBALS['TL_LANG']['MSC']['shortcuts'][0] = 'Raccourcis clavier du back office';
$GLOBALS['TL_LANG']['MSC']['shortcuts'][1] = 'Accélérer votre flux de travail en utilisant des <a href="https://contao.org/en/manual/3.0/administration-area.html#keyboard-shortcuts" title="Keyboard shortcuts overview on contao.org" target="_blank">raccourcis clavier</a>.';
$GLOBALS['TL_LANG']['MSC']['toggleAll'][0] = 'Tout basculer';
$GLOBALS['TL_LANG']['MSC']['toggleAll'][1] = 'Développer ou réduire tous les nœuds';
$GLOBALS['TL_LANG']['MSC']['lockedAccount'][0] = 'Un compte Contao a été bloqué';
$GLOBALS['TL_LANG']['MSC']['lockedAccount'][1] = "Le compte Contao suivant a été verrouillé pour des raisons de sécurité.\n\nIdentifiant : %s\nNom réel : %s\nSite web : %s\n\nLe compte a été verrouillé pour %d minutes car l'utilisateur a saisis un mot de passe incorrect trois fois de suite. Après ce laps de temps, le compte sera automatiquement déverrouillé.\n\nCet e-mail a été généré par Contao. Merci de ne pas y répondre directement.\n";
$GLOBALS['TL_LANG']['MSC']['toggleMobile'][0] = 'Version mobile';
$GLOBALS['TL_LANG']['MSC']['toggleMobile'][1] = 'Aller à la version mobile';
$GLOBALS['TL_LANG']['MSC']['toggleDesktop'][0] = 'Version classique';
$GLOBALS['TL_LANG']['MSC']['toggleDesktop'][1] = 'Aller à la version classique';
$GLOBALS['TL_LANG']['MSC']['feLink'] = 'Aller sur le front office';
$GLOBALS['TL_LANG']['MSC']['fePreview'] = 'Aperçu';
$GLOBALS['TL_LANG']['MSC']['fePreviewTitle'] = 'Aperçu du site dans une nouvelle fenêtre';
$GLOBALS['TL_LANG']['MSC']['feUser'] = 'Membre';
$GLOBALS['TL_LANG']['MSC']['backToTop'] = 'Haut de page';
$GLOBALS['TL_LANG']['MSC']['backToTopTitle'] = 'Aller en haut de page';
$GLOBALS['TL_LANG']['MSC']['home'] = 'Accueil';
$GLOBALS['TL_LANG']['MSC']['homeTitle'] = 'Retour à la page d\'accueil du back office';
$GLOBALS['TL_LANG']['MSC']['user'] = 'Utilisateur';
$GLOBALS['TL_LANG']['MSC']['loginTo'] = 'Connexion sur %s';
$GLOBALS['TL_LANG']['MSC']['loginBT'] = 'Connexion';
$GLOBALS['TL_LANG']['MSC']['logoutBT'] = 'Se déconnecter';
$GLOBALS['TL_LANG']['MSC']['logoutBTTitle'] = 'Fermer la session courante';
$GLOBALS['TL_LANG']['MSC']['backBT'] = 'Revenir';
$GLOBALS['TL_LANG']['MSC']['backBTTitle'] = 'Retour à la page précédente';
$GLOBALS['TL_LANG']['MSC']['cancelBT'] = 'Annuler';
$GLOBALS['TL_LANG']['MSC']['deleteConfirm'] = 'Voulez-vous vraiment supprimer l\'entrée ID %s ?';
$GLOBALS['TL_LANG']['MSC']['delAllConfirm'] = 'Voulez-vous vraiment supprimer les enregistrements sélectionnés ?';
$GLOBALS['TL_LANG']['MSC']['filterRecords'] = 'Enregistrements';
$GLOBALS['TL_LANG']['MSC']['filterAll'] = 'Tous';
$GLOBALS['TL_LANG']['MSC']['showRecord'] = 'Afficher les détails de l\'enregistrement %s';
$GLOBALS['TL_LANG']['MSC']['editRecord'] = 'Éditer l\'enregistrement %s';
$GLOBALS['TL_LANG']['MSC']['all_info'] = 'Éditer les enregistrements sélectionnés de la table %s';
$GLOBALS['TL_LANG']['MSC']['showOnly'] = 'Afficher';
$GLOBALS['TL_LANG']['MSC']['sortBy'] = 'Tri';
$GLOBALS['TL_LANG']['MSC']['filter'] = 'Filtrer';
$GLOBALS['TL_LANG']['MSC']['search'] = 'Chercher';
$GLOBALS['TL_LANG']['MSC']['noResult'] = 'Aucun enregistrement trouvé.';
$GLOBALS['TL_LANG']['MSC']['save'] = 'Sauvegarder';
$GLOBALS['TL_LANG']['MSC']['saveNclose'] = 'Sauvegarder et fermer';
$GLOBALS['TL_LANG']['MSC']['saveNedit'] = 'Sauvegarder et éditer';
$GLOBALS['TL_LANG']['MSC']['saveNback'] = 'Sauvegarder et retour';
$GLOBALS['TL_LANG']['MSC']['saveNcreate'] = 'Sauvegarder et nouveau';
$GLOBALS['TL_LANG']['MSC']['continue'] = 'Continuer';
$GLOBALS['TL_LANG']['MSC']['close'] = 'Fermer';
$GLOBALS['TL_LANG']['MSC']['skipNavigation'] = 'Aller au contenu';
$GLOBALS['TL_LANG']['MSC']['selectAll'] = 'Tout sélectionner';
$GLOBALS['TL_LANG']['MSC']['pw_new'] = 'Changer le mot de passe';
$GLOBALS['TL_LANG']['MSC']['pw_change'] = 'Saisir un nouveau mot de passe';
$GLOBALS['TL_LANG']['MSC']['pw_changed'] = 'Le mot de passe a été mis à jour.';
$GLOBALS['TL_LANG']['MSC']['fallback'] = 'défaut';
$GLOBALS['TL_LANG']['MSC']['view'] = 'Afficher dans une nouvelle fenêtre';
$GLOBALS['TL_LANG']['MSC']['fullsize'] = 'Ouvrir l\'image pleine taille dans une nouvelle fenêtre';
$GLOBALS['TL_LANG']['MSC']['datepicker'] = 'Sélecteur de date';
$GLOBALS['TL_LANG']['MSC']['colorpicker'] = 'Sélecteur de couleur';
$GLOBALS['TL_LANG']['MSC']['pagepicker'] = 'Sélecteur de page';
$GLOBALS['TL_LANG']['MSC']['filepicker'] = 'Sélecteur de fichier';
$GLOBALS['TL_LANG']['MSC']['ppHeadline'] = 'Pages';
$GLOBALS['TL_LANG']['MSC']['fpHeadline'] = 'Fichiers';
$GLOBALS['TL_LANG']['MSC']['yes'] = 'oui';
$GLOBALS['TL_LANG']['MSC']['no'] = 'non';
$GLOBALS['TL_LANG']['MSC']['goBack'] = 'Revenir';
$GLOBALS['TL_LANG']['MSC']['reload'] = 'Recharger';
$GLOBALS['TL_LANG']['MSC']['above'] = 'au-dessus';
$GLOBALS['TL_LANG']['MSC']['below'] = 'au-dessous';
$GLOBALS['TL_LANG']['MSC']['date'] = 'Date';
$GLOBALS['TL_LANG']['MSC']['tstamp'] = 'Date';
$GLOBALS['TL_LANG']['MSC']['entry'] = '%s entrée';
$GLOBALS['TL_LANG']['MSC']['entries'] = '%s entrées';
$GLOBALS['TL_LANG']['MSC']['files'] = '%s fichier(s)';
$GLOBALS['TL_LANG']['MSC']['left'] = 'à gauche';
$GLOBALS['TL_LANG']['MSC']['center'] = 'centrer';
$GLOBALS['TL_LANG']['MSC']['right'] = 'à droite';
$GLOBALS['TL_LANG']['MSC']['justify'] = 'justifié';
$GLOBALS['TL_LANG']['MSC']['filetree'] = 'Répertoire système';
$GLOBALS['TL_LANG']['MSC']['male'] = 'Homme';
$GLOBALS['TL_LANG']['MSC']['female'] = 'Femme';
$GLOBALS['TL_LANG']['MSC']['fileSize'] = 'Taille du fichier';
$GLOBALS['TL_LANG']['MSC']['fileCreated'] = 'Créé';
$GLOBALS['TL_LANG']['MSC']['fileModified'] = 'Modifié';
$GLOBALS['TL_LANG']['MSC']['fileAccessed'] = 'Accédé';
$GLOBALS['TL_LANG']['MSC']['fileDownload'] = 'Télécharger';
$GLOBALS['TL_LANG']['MSC']['fileDownloadTitle'] = 'Télécharger ce fichier';
$GLOBALS['TL_LANG']['MSC']['fileImageSize'] = 'Largeur/hauteur en pixels';
$GLOBALS['TL_LANG']['MSC']['filePath'] = 'Chemin relatif';
$GLOBALS['TL_LANG']['MSC']['version'] = 'Version';
$GLOBALS['TL_LANG']['MSC']['restore'] = 'Restaurer';
$GLOBALS['TL_LANG']['MSC']['backendModules'] = 'Modules du back office';
$GLOBALS['TL_LANG']['MSC']['welcomeTo'] = '%s administration';
$GLOBALS['TL_LANG']['MSC']['updateVersion'] = 'La version %s de Contao est disponible';
$GLOBALS['TL_LANG']['MSC']['wordWrap'] = 'Retour à la ligne automatique';
$GLOBALS['TL_LANG']['MSC']['saveAlert'] = 'ATTENTION ! Vous allez perdre toutes vos modifications non sauvegardées. Voulez-vous continuer ?';
$GLOBALS['TL_LANG']['MSC']['toggleNodes'] = 'Masquer/Déployer tout';
$GLOBALS['TL_LANG']['MSC']['expandNode'] = 'Déployer';
$GLOBALS['TL_LANG']['MSC']['collapseNode'] = 'Masquer';
$GLOBALS['TL_LANG']['MSC']['loadingData'] = 'Chargement des données';
$GLOBALS['TL_LANG']['MSC']['deleteSelected'] = 'Supprimer';
$GLOBALS['TL_LANG']['MSC']['editSelected'] = 'Éditer';
$GLOBALS['TL_LANG']['MSC']['overrideSelected'] = 'Remplacer';
$GLOBALS['TL_LANG']['MSC']['moveSelected'] = 'Déplacer';
$GLOBALS['TL_LANG']['MSC']['copySelected'] = 'Copier';
$GLOBALS['TL_LANG']['MSC']['aliasSelected'] = 'Générer les alias';
$GLOBALS['TL_LANG']['MSC']['changeSelected'] = 'Changer la sélection';
$GLOBALS['TL_LANG']['MSC']['resetSelected'] = 'Réinitialiser la sélection';
$GLOBALS['TL_LANG']['MSC']['fileManager'] = 'Ouvrir l\'explorateur de fichiers dans une fenêtre popup';
$GLOBALS['TL_LANG']['MSC']['systemMessages'] = 'Messages du système';
$GLOBALS['TL_LANG']['MSC']['clearClipboard'] = 'Vider le presse-papiers';
$GLOBALS['TL_LANG']['MSC']['hiddenElements'] = 'Éléments non publiés';
$GLOBALS['TL_LANG']['MSC']['hiddenHide'] = 'masquer';
$GLOBALS['TL_LANG']['MSC']['hiddenShow'] = 'afficher';
$GLOBALS['TL_LANG']['MSC']['apply'] = 'Appliquer';
$GLOBALS['TL_LANG']['MSC']['applyTitle'] = 'Appliquer les changements';
$GLOBALS['TL_LANG']['MSC']['mandatory'] = 'Champ obligatoire';
$GLOBALS['TL_LANG']['MSC']['create'] = 'Créer';
$GLOBALS['TL_LANG']['MSC']['delete'] = 'Supprimer';
$GLOBALS['TL_LANG']['MSC']['protected'] = 'protégé';
$GLOBALS['TL_LANG']['MSC']['guests'] = 'seulement les invités';
$GLOBALS['TL_LANG']['MSC']['updateMode'] = 'Mode de mise à jour';
$GLOBALS['TL_LANG']['MSC']['updateAdd'] = 'Ajouter les groupes sélectionnés';
$GLOBALS['TL_LANG']['MSC']['updateRemove'] = 'Supprimer les groupes sélectionnés';
$GLOBALS['TL_LANG']['MSC']['updateReplace'] = 'Remplacer les données existantes';
$GLOBALS['TL_LANG']['MSC']['ascending'] = 'croissant';
$GLOBALS['TL_LANG']['MSC']['descending'] = 'décroissant';
$GLOBALS['TL_LANG']['MSC']['default'] = 'Défaut';
$GLOBALS['TL_LANG']['MSC']['helpWizard'] = 'Ouvrir l\'aide';
$GLOBALS['TL_LANG']['MSC']['helpWizardTitle'] = 'Aide';
$GLOBALS['TL_LANG']['MSC']['noCookies'] = 'Vous devez autoriser les cookies pour utiliser Contao.';
$GLOBALS['TL_LANG']['MSC']['copyOf'] = '%s (copie)';
$GLOBALS['TL_LANG']['MSC']['coreOnlyMode'] = 'Contao fonctionne actuellement en <strong>mode sans échec</strong>, dans lequel seuls les modules de base sont chargés. Ce mode de fonctionnement est par ex. activé après une mise à jour avec Live Update pour éviter les incompatibilités possibles avec des extensions tierces. Vous pouvez le désactiver dans les paramètres du back office après avoir vérifié les extensions tierces installées.';
$GLOBALS['TL_LANG']['MSC']['name'] = 'Nom';
$GLOBALS['TL_LANG']['MSC']['emailAddress'] = 'Adresse e-mail';
$GLOBALS['TL_LANG']['MSC']['register'] = 'S\'enregistrer';
$GLOBALS['TL_LANG']['MSC']['accountActivated'] = 'Votre compte a été activé';
$GLOBALS['TL_LANG']['MSC']['accountError'] = 'Impossible de procéder à cette requête.';
$GLOBALS['TL_LANG']['MSC']['emailSubject'] = 'Votre enregistrement sur %s';
$GLOBALS['TL_LANG']['MSC']['adminSubject'] = 'Nouvel enregistrement sur %s';
$GLOBALS['TL_LANG']['MSC']['adminText'] = 'Un nouvel utilisateur (ID %s) s\'est enregistré sur votre site. %sSi vous ne choisissez pas l\'activation par e-mail, vous devez autoriser ce compte manuellement via le back office.';
$GLOBALS['TL_LANG']['MSC']['requestPassword'] = 'Demande de mot de passe';
$GLOBALS['TL_LANG']['MSC']['setNewPassword'] = 'Définir un nouveau mot de passe';
$GLOBALS['TL_LANG']['MSC']['newPasswordSet'] = 'Votre mot de passe a été mis à jour.';
$GLOBALS['TL_LANG']['MSC']['passwordSubject'] = 'Votre demande de mot de passe pour %s';
$GLOBALS['TL_LANG']['MSC']['accountNotFound'] = 'Aucun compte correspondant n\'a été trouvé';
$GLOBALS['TL_LANG']['MSC']['securityQuestion'] = 'Question de sécurité';
$GLOBALS['TL_LANG']['MSC']['closeAccount'] = 'Fermer le compte';
$GLOBALS['TL_LANG']['MSC']['changeSelection'] = 'Changer la sélection';
$GLOBALS['TL_LANG']['MSC']['currentlySelected'] = 'Sélectionné';
$GLOBALS['TL_LANG']['MSC']['selectNode'] = 'Afficher seulement ce nœud';
$GLOBALS['TL_LANG']['MSC']['selectAllNodes'] = 'Afficher tous les nœuds';
$GLOBALS['TL_LANG']['MSC']['showDifferences'] = 'Afficher les différences';
$GLOBALS['TL_LANG']['MSC']['editElement'] = 'Éditer l\'élément';
$GLOBALS['TL_LANG']['MSC']['table'] = 'Table';
$GLOBALS['TL_LANG']['MSC']['description'] = 'Description';
$GLOBALS['TL_LANG']['MSC']['noVersions'] = 'Aucun changement trouvé.';
$GLOBALS['TL_LANG']['MSC']['latestChanges'] = 'Derniers changements';
$GLOBALS['TL_LANG']['MSC']['identicalVersions'] = 'Les deux versions sélectionnées sont identiques.';
$GLOBALS['TL_LANG']['MSC']['selectNewPosition'] = 'Choisir la (nouvelle) position de l\'élément';
$GLOBALS['TL_LANG']['MSC']['go'] = 'Go';
$GLOBALS['TL_LANG']['MSC']['quicknav'] = 'Navigation rapide';
$GLOBALS['TL_LANG']['MSC']['quicklink'] = 'Lien rapide';
$GLOBALS['TL_LANG']['MSC']['username'] = 'Identifiant';
$GLOBALS['TL_LANG']['MSC']['login'] = 'Se connecter';
$GLOBALS['TL_LANG']['MSC']['logout'] = 'Se déconnecter';
$GLOBALS['TL_LANG']['MSC']['loggedInAs'] = 'Vous êtes connecté en tant que %s.';
$GLOBALS['TL_LANG']['MSC']['emptyField'] = 'Veuillez saisir votre identifiant et votre mot de passe !';
$GLOBALS['TL_LANG']['MSC']['confirmation'] = 'Confirmation';
$GLOBALS['TL_LANG']['MSC']['sMatches'] = '%s occurrences pour %s';
$GLOBALS['TL_LANG']['MSC']['sEmpty'] = 'Aucune correspondance pour <strong>%s</strong>';
$GLOBALS['TL_LANG']['MSC']['sResults'] = 'Résultats %s - %s de %s pour <strong>%s</strong>';
$GLOBALS['TL_LANG']['MSC']['sNoResult'] = 'Votre recherche <strong>%s</strong> n\'a retourné aucun résultat.';
$GLOBALS['TL_LANG']['MSC']['seconds'] = 'secondes';
$GLOBALS['TL_LANG']['MSC']['up'] = 'En haut';
$GLOBALS['TL_LANG']['MSC']['first'] = '&#171; Première';
$GLOBALS['TL_LANG']['MSC']['previous'] = 'Précédente';
$GLOBALS['TL_LANG']['MSC']['next'] = 'Suivante';
$GLOBALS['TL_LANG']['MSC']['last'] = 'Dernière &#187;';
$GLOBALS['TL_LANG']['MSC']['goToPage'] = 'Aller à la page %s';
$GLOBALS['TL_LANG']['MSC']['totalPages'] = 'Page %s de %s';
$GLOBALS['TL_LANG']['MSC']['fileUploaded'] = 'Le fichier %s a été transféré avec succès';
$GLOBALS['TL_LANG']['MSC']['fileExceeds'] = 'L\'image %s a été envoyée avec succès, mais elle est trop grande pour être redimensionnée automatiquement.';
$GLOBALS['TL_LANG']['MSC']['fileResized'] = 'Le fichier %s a été transféré et réduit aux dimensions maximales';
$GLOBALS['TL_LANG']['MSC']['searchLabel'] = 'Rechercher';
$GLOBALS['TL_LANG']['MSC']['keywords'] = 'Mots clés';
$GLOBALS['TL_LANG']['MSC']['options'] = 'Options';
$GLOBALS['TL_LANG']['MSC']['matchAll'] = 'tous les mots';
$GLOBALS['TL_LANG']['MSC']['matchAny'] = 'chaque mot';
$GLOBALS['TL_LANG']['MSC']['saveData'] = 'Sauvegarder les données';
$GLOBALS['TL_LANG']['MSC']['printPage'] = 'Imprimer cette page';
$GLOBALS['TL_LANG']['MSC']['printAsPdf'] = 'Imprimer l\'article en PDF';
$GLOBALS['TL_LANG']['MSC']['facebookShare'] = 'Partager sur Facebook';
$GLOBALS['TL_LANG']['MSC']['twitterShare'] = 'Partager sur Twitter';
$GLOBALS['TL_LANG']['MSC']['gplusShare'] = 'Partager sur Google+';
$GLOBALS['TL_LANG']['MSC']['pleaseWait'] = 'Veuillez patienter';
$GLOBALS['TL_LANG']['MSC']['loading'] = 'Chargement...';
$GLOBALS['TL_LANG']['MSC']['more'] = 'En savoir plus...';
$GLOBALS['TL_LANG']['MSC']['readMore'] = 'Lire l\'article: %s';
$GLOBALS['TL_LANG']['MSC']['targetPage'] = 'Page cible';
$GLOBALS['TL_LANG']['MSC']['invalidPage'] = 'Désolé, la page "%s" n\'existe pas.';
$GLOBALS['TL_LANG']['MSC']['list_orderBy'] = 'Trier par %s';
$GLOBALS['TL_LANG']['MSC']['list_perPage'] = 'Résultats par page';
$GLOBALS['TL_LANG']['MSC']['published'] = 'Publié';
$GLOBALS['TL_LANG']['MSC']['unpublished'] = 'Non publié';
$GLOBALS['TL_LANG']['MSC']['addComment'] = 'Ajouter un commentaire';
$GLOBALS['TL_LANG']['MSC']['autologin'] = 'Rester connecté';
$GLOBALS['TL_LANG']['MSC']['relevance'] = '%s pertinent';
$GLOBALS['TL_LANG']['MSC']['invalidTokenUrl'] = 'Jeton non valide';
$GLOBALS['TL_LANG']['MSC']['changelog'] = 'Journal des modifications';
$GLOBALS['TL_LANG']['MSC']['coreOnlyOff'] = 'Désactivé';
$GLOBALS['TL_LANG']['MSC']['dragItemsHint'] = 'Faites glisser les éléments pour les ré-ordonner';
$GLOBALS['TL_LANG']['MSC']['templatesTheme'] = 'Thème %s';
$GLOBALS['TL_LANG']['UNITS'][0] = 'Byte';
$GLOBALS['TL_LANG']['UNITS'][1] = 'Ko';
$GLOBALS['TL_LANG']['UNITS'][2] = 'Mo';
$GLOBALS['TL_LANG']['UNITS'][3] = 'Go';
$GLOBALS['TL_LANG']['UNITS'][4] = 'To';
$GLOBALS['TL_LANG']['UNITS'][5] = 'Po';
$GLOBALS['TL_LANG']['UNITS'][6] = 'Eo';
$GLOBALS['TL_LANG']['UNITS'][7] = 'Zo';
$GLOBALS['TL_LANG']['UNITS'][8] = 'Yo';
$GLOBALS['TL_LANG']['CONFIRM']['do'] = 'Module';
$GLOBALS['TL_LANG']['CONFIRM']['table'] = 'Table affectée';
$GLOBALS['TL_LANG']['CONFIRM']['act'] = 'Action';
$GLOBALS['TL_LANG']['CONFIRM']['id'] = 'Enregistrement affecté';
$GLOBALS['TL_LANG']['DP']['select_a_time'] = 'Sélectionner une heure';
$GLOBALS['TL_LANG']['DP']['use_mouse_wheel'] = 'Utiliser la molette de la souris pour changer rapidement de valeur';
$GLOBALS['TL_LANG']['DP']['time_confirm_button'] = 'OK';
$GLOBALS['TL_LANG']['DP']['apply_range'] = 'Appliquer';
$GLOBALS['TL_LANG']['DP']['cancel'] = 'Annuler';
$GLOBALS['TL_LANG']['DP']['week'] = 'Wk';
