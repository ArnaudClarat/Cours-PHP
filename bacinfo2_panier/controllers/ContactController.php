<?php


class ContactController extends BaseController
{
    protected $name = 'contact';
    protected $destinataire = '1407.clarat.student@ifosupwavre.be';

    protected function sendMail()
    {
        if (!isset($_POST['submit']))
        {
            return 0; // Premier lancement du contact.tpl
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
            return 2;
        }

        return 1;
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'worked' => $this->sendMail(),
        );
    }
}