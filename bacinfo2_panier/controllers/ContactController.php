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
        $phoneNumber = $_POST['phoneNumber'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if (($nom !== '') && ($email !== '') && ($subject !== '') && ($message !== ''))
        {
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'From:'.$nom.' '.$prenom.' <'.$email.'>' . "\r\n" .
                'Reply-To:'.$email. "\r\n" .
                'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
                'Content-Disposition: inline'. "\r\n" .
                'Content-Transfer-Encoding: 7bit'." \r\n" .
                'X-Mailer:PHP/'.PHP_VERSION;
        }

        if (mail($destinataire, $subject, $message, $headers))
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