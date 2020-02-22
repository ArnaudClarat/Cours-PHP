<?php


class ContactController extends BaseController
{
    /**
     * @var string => Nom de la page
     */
    protected $name = 'contact';

    /**
     * Tente d'envoyer un mail
     *
     * @return int
     * 0 = Premier lancement du template
     * 1 = Mail envoyé
     * 2 = Erreur
     */
    protected function sendMail()
    {
        if (!isset($_POST['submit']))
        {
            return 0;
        }

        $destinataire = '1407.clarat.student@ifosupwavre.be';
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $email_message = "Form details below.\n\n";
        $email_message .= 'First Name: '.$nom."\n";
        $email_message .= 'Last Name: '.$prenom."\n";
        $email_message .= 'Email: '.$email."\n";
        $email_message .= 'Telephone: '.$_POST['phoneNumber']."\n";
        $email_message .= 'Message: '.$_POST['message']."\n";

        if (mail($destinataire, $_POST['subject'], $email_message))
        {
            return 1;
        }

        return 2;
    }

    /**
     * Renvoie un tableau au template
     * chaque entrée est une variable dans le template
     *
     * @return array
     */
    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'worked' => $this->sendMail(),
        );
    }
}