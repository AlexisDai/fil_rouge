<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Client;
use App\Entity\Commande;
use App\Entity\Commercial;
use App\Entity\DetailCommande;
use App\Entity\Fournisseur;
use App\Entity\Livraison;
use App\Entity\LivraisonProduit;
use App\Entity\Produit;
use App\Entity\Rubrique;
use Symfony\Component\Validator\Constraints\DateTime;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        include 'Client_vg.php';
        $clientRepo = $manager->getRepository(Client::class);

        foreach ($clients as $cli){
            $client = new Client();
            $client
            ->setId($cli['id'])
            ->setCategorieClient($cli['categorie_client'])
            ->setAdresseLivraisonClient($cli['adresse_livraison_client'])       
            ->setCpLivraisonClient($cli['cp_livraison_client'])
            ->setVilleLivraisonClient($cli['ville_livraison_client'])
            ->setAdresseFactureClient($cli['adresse_facture_client'])
            ->setCpFactureClient($cli['cp_facture_client'])
            ->setVilleFactureClient($cli['ville_facture_client'])
            ->setModePaiementClient($cli['mode_paiement_client'])
            ->setReductionClient($cli['reduction_client'])
            ->setCoefficientClient($cli['coefficient_client'])
            ->setNumeroSiretClient($cli['numero_siret_client'])
            ->setNomClient($cli['nom_client'])
            ->setPrenomClient($cli['prenom_client'])
            ->setNomEntrepriseClient($cli['nom_entreprise_client']);

            $manager->persist($client);

            $metadata = $manager->getClassMetaData(Client::class);
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        }

        $manager->flush();
  


        include 'Commande_vg.php';

        $commandeRepo = $manager->getRepository(Commande::class);

        foreach ($commandes as $com){

            $commande = new Commande();
            $commande
            ->setId($com['id']);
            $client = $clientRepo->find($com['id']);
            $commande
            ->setClient($client)
            ->setDateCommande(new \DateTime($com['date_commande']))
            ->setAdresseLivraisonCommande($com['adresse_livraison_commande'])
            ->setCpLivraisonCommande($com['cp_livraison_commande'])
            ->setVilleLivraisonCommande($com['ville_livraison_commande'])
            ->setAdresseFactureCommande($com['adresse_facture_commande'])
            ->setCpFactureCommande($com['cp_facture_commande'])
            ->setVilleFactureCommande($com['ville_facture_commande'])
            ->setDateFacture(new \DateTime($com['date_facture']))
            ->setTotalCommande($com['total_commande']);

            $manager->persist($commande);

            $metadata = $manager->getClassMetaData(Commande::class);
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        }

        $manager->flush();



        include 'Commercial_vg.php';

        $commercialRepo = $manager->getRepository(Commercial::class);

        foreach ($commercials as $commer){

            $commercial = new Commercial();
            $commercial
            ->setId($commer['id'])
            ->setNomCommercial($commer['nom_commercial'])
            ->setPrenomCommercial($commer['prenom_commercial'])
            ->setAdresseCommercial($commer['adresse_commercial'])
            ->setCpCommercial($commer['cp_commercial'])
            ->setVilleCommercial($commer['ville_commercial'])
            ->setEmailCommercial($commer['email_commercial'])
            ->setTelephoneCommercial($commer['telephone_commercial']);

            $manager->persist($commercial);

            $metadata = $manager->getClassMetaData(Commercial::class);
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetaData::GENERATOR_TYPE_NONE);
        }

        $manager->flush();



        // include 'DetailCommande_vg.php';

        // $detailCommandeRepo = $manager->getRepository(DetailCommande::class);

        // foreach ($detail_commandes as $detail){

        //     $details = new DetailCommande();
        //     $details
        //     ->setId($detail['id'])
        //     ->setQuantiteArticle($detail['quantite_article'])
        //     ->setPrixVente($detail['prix_vente'])
        //     ->setPrixHorsTaxeTotal($detail['prix_hors_taxe_total'])
        //     ->setTvaProduit($detail['tva_produit']);
        //     $commande = $commandeRepo->find($detail['id']);
        //     $details 
        //     ->setCommande($commande);
        //     $produit = $produitRepo->find($detail['id']);
        //     $details
        //     ->setProduit($produit);

        //     $manager->persist($details);

        //     $metadata = $manager->getClassMetaData(DetailCommande::class);
        //     $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetaData::GENERATOR_TYPE_NONE);
        // }

        // $manager->flush();



        include 'Rubrique_vg.php';
        
        //$rubriqueRepo = $manager->getRepository(Rubrique::class);

        foreach ($rubriques as $rub){

            $rubrique = new Rubrique();
            $rubrique
            ->setNomRubrique($rub['nom_rubrique'])
            ->setPhotoRubrique($rub['photo_rubrique']);


            $manager->persist($rubrique);

            
            foreach ($rub['sousrubriques'] as $rub2) {
                $rubrique2 = new Rubrique();
                $rubrique2
                ->setNomRubrique($rub2['nom_rubrique'])
                ->setPhotoRubrique($rub2['photo_rubrique'])
                ->setRubrique($rubrique);

                $manager->persist($rubrique2);

            }

            $manager->flush();
        }

            // $rub1 = new Rubrique();
            // $rub1->setNomRubrique("Guitare")
            // ->setPhotoRubrique("");

            // $rub2 = new Rubrique();
            // $rub2->setNomRubrique("Guitares Electriques")
            // ->setRubrique($rub1)
            // ->setPhotoRubrique("");


            // $manager->persist($rub1);
            // $manager->persist($rub2);

            $manager->flush();




        
        
        
        include 'Produit_vg.php';




























        
        include 'ClientCommercial_vg.php';
        include 'Fournisseur_vg.php';
        include 'LivraisonProduit_vg.php';
        include 'Livraison_vg.php';
        
        






        $manager->flush();
  }
}
