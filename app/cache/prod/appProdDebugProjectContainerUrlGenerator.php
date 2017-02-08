<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'list_form_utilisateur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modifier_user_admin' => array (  0 =>   array (    0 => 'user',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModifierUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'user',    ),    1 =>     array (      0 => 'text',      1 => '/admin/Updateuser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Modifier_Users' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/ModUsers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_utilisateur_admin' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/suppUsers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_form_Annee' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::addAnneeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addAnnee',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Modifier_Annee' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModAnneeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/ModAnnee',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_annee_admin' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppAnneeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/suppAnnee',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_form_Type' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::addTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addtype',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Modifier_TypeUtilisateur' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/ModType',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_statut_admin' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/suppType',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_form_filiere' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::addFiliereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addFiliere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Modifier_filiere' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModFiliereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/ModFiliere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_filiere_admin' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppFiliereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/suppFiliere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_form_typeens' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::addTypeEnsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/TypeEns',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Modifier_TypeEnseignant' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModTypeEnsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/ModTypeEns',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_type_enseig_admin' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppTypeEnsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/suppTypeEns',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'alertes_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::alertAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/Alertes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Modifier_alerte' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::modifAlertAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/modifier_alertes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_alerte' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::supprimerAlertAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/supprimer_alertes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annee_suivante' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AnneeSuivanteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/anneeSuivante',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'generate_Annee_users' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AnneeSuivanteController::generateUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/generateUsers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_generate_Annee' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AnneeSuivanteController::SupprimerGenerateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/SupprimerGenerate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_nbr_inscription' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\DefaultController::nombreInscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/home/nombreInscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Reservations' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\DefaultController::reservationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reservation/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_ListeUsers' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\DefaultController::ListeUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home/ListeUsers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_ListeFilieres' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\DefaultController::ListeFilieresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home/ListeFilieres',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ChoixFiliereEns_enseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::ChoixFiliereEnsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/enseignant/ChoixFiliereEns',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Etat_reservation_responsable' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::EtatMatiereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/enseignant/ChoixMatiereEns',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_form_inscription' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::InscriptionEnsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/enseignant/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Modifier_inscription' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::ModInscriptionEnsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/enseignant/ModInscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'form_profile_user_ens' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::EditPofileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/enseignant/EditPofile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'form_profile_user_ens_motDePasse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::EditPofileMPAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/enseignant/EditPofileMP',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supp_incription_responsable' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::SuppInscripEnsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/enseignant/SuppInscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_form_Matiere' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::matiereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/responsable/Matiere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Modifier_Matiere' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::ModmatiereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/responsable/ModMatiere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_matieres_responsable' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::SuppUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/responsable/SuppMatiere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Etat_matieres_responsable' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::EtatMatiereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/responsable/EtatMatiere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modifier_inscription_matieres_etat' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::inscriptionMatiereMODAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/responsable/inscriptionMatiereModifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_form_inscription_matieres_etat' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::inscriptionMatiereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/responsable/inscriptionMatiere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_matiere_inscription' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::SuppInscriptionMatiereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/responsable/SuppInscriptionMatiere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Deconnexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/inscription/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/changer/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
