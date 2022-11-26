/*******************************************************************Formaliser des requêtes à l'aide du langage SQL***********************************************************************************/

-- Chiffre d'affaires mois par mois pour une année sélectionnée

SELECT MONTH(date) AS 'Mois', SUM(prix_vente*quantite_article) AS 'CA' 
FROM detail_commande
JOIN commande ON detail_commande.commande_id = commande.id
WHERE year(date) = 2022
GROUP BY MONTH(date);

-- Chiffre d'affaires généré pour un fournisseur

SELECT fournisseur.nom AS 'Fournisseur', SUM(prix_vente*quantite_article) AS 'CA' 
FROM detail_commande
JOIN produit ON detail_commande.produit_id = produit.id
JOIN fournisseur ON produit.fournisseur_id = fournisseur.id
GROUP BY fournisseur.nom;

-- TOP 10 des produits les plus commandés pour une année sélectionnée (référence et nom du produit, quantité commandée, fournisseur)

SELECT libelle_court AS 'Référence', libelle_long AS 'Nom du produit', qte_art AS 'Quantité Commandée', nom_fou AS 'Nom du Fournisseur'
FROM detail_commande
JOIN produit ON detail_commande.produit_id = produit.id
JOIN fournisseur ON produit.fournisseur_id = fournisseur.id
GROUP BY detail_commande.produit_id
ORDER BY quantite_article desc
LIMIT 10;

-- TOP 10 des produits les plus rémunérateurs pour une année sélectionnée (référence et nom du produit, marge, fournisseur)

SELECT libelle_court AS 'Référence', libelle_long AS 'Nom du Produit', SUM(pri_ht_pro-pri_ach_pro) AS 'Marge', nom_fou AS 'Fournisseur'
FROM detail_commande
JOIN commande ON detail_commande.commande_id = commande.id
JOIN produit ON detail_commande.produit_id = produit.id
JOIN fournisseur ON produit.fournisseur_id = fournisseur.id
WHERE YEAR(commande.date) = 2022
GROUP BY detail_commande.id
ORDER BY SUM(prix_achat-prix_hors_taxe) DESC
LIMIT 10;

-- Top 10 des clients en nombre de commandes ou chiffre d'affaires

SELECT client.nom AS 'Nom du Client',  SUM(prix_vente*quantite_article) AS 'CA'
FROM detail_commande
JOIN commande ON detail_commande.commande_id = commande.id
JOIN client ON commande.client_id = client.id
GROUP BY client.id
ORDER BY CA DESC
LIMIT 10;

-- Répartition du chiffre d'affaires par type de client

SELECT categorie AS 'Catégorie du Client',  SUM(prix_vente*quantite_article) AS 'CA'
FROM detail_commande
JOIN commande ON detail_commande.commande_id = commande.id
JOIN client ON commande.client_id = client.id
GROUP BY client.categorie;

-- Nombre de commandes en cours de livraison.

SELECT count(commande.id) AS 'Nombre de commande en cours de livraison'
FROM livraison
WHERE livraison.date > NOW();

/*****************************************************************************************************Programmer des procédures stockées sur le SGBD*********************************************************************/

DELIMITER |

CREATE PROCEDURE CommandeLivraison()
BEGIN 
	SELECT count(commande.id) AS 'Nombre de commande en cours de livraison'
	FROM livraison
	WHERE livraison.date > NOW();
END |

DELIMITER ;

CALL CommandeLivraison();

/*.........................................*/

DELIMITER |

CREATE PROCEDURE DélaiMoyLiv()
BEGIN 
	SELECT ROUND(AVG(DATEDIFF(livraison.date, date_facture))) AS 'Délai moyen dat_fac et dat_liv'
	FROM commande
	JOIN livraison ON commande.id = livraison.commande_id
END |

DELIMITER ;

CALL DélaiMoyLiv();

/***************************************************************************************************Gérer les vues*****************************************************************************/

-- Créez une vue correspondant à la jointure Produits - Fournisseurs

CREATE VIEW v_Pro_Fou
AS
SELECT produit.id,libelle_court,libelle_long,fournisseur.nom,produit.photo,prix_achat,prix_hors_taxe,categorie,rubrique_id,livraison_id,fournisseur_id,fournisseur.adresse,fournisseur.email,fournisseur.telephone
FROM produit
JOIN fournisseur ON produit.fournisseur_id = fournisseur.id;

-- Créez une vue correspondant à la jointure Produits - Catégorie/Sous catégorie

CREATE VIEW v_Pro_Rub
AS
SELECT produit.id,libelle_court,libelle_long,produit.photo,prix_achat,prix_hors_taxe,categorie,produit.rubrique_id,livraison_id,fournisseur_id,rubrique.nom,rubrique.rubrique_id
FROM produit
JOIN rubrique ON produit.rubrique_id = rubrique.id;