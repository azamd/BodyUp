<?php

namespace App\Utils;

use App\Entity\User;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class MailSender
{
    private $mailer;
    private $router;
    private $twig;
    private $translation;

    /**
     * MailSender constructor.
     * @param \Swift_Mailer $mailer
     * @param UrlGeneratorInterface $router
     * @param \Twig_Environment $twig
     * @param TranslatorInterface $translation
     */
    public function __construct(\Swift_Mailer $mailer, UrlGeneratorInterface $router, \Twig_Environment $twig, TranslatorInterface $translation)
    {
        $this->mailer = $mailer;
        $this->router = $router;
        $this->twig = $twig;
        $this->translation = $translation;
    }

    public function sendConfirmationEmail(User $user)
    {
        $url = $this->router->generate('account_activation', array('slug' => $user->getConfirmationToken()), UrlGeneratorInterface::ABSOLUTE_URL);

        $context = ['url' => $url];
        $mail = (new \Swift_Message($this->translation->trans('subject.email_confirmation')))
            ->setFrom(getenv('EMAIL_FROM_NOREPLY'))
            ->setTo($user->getEmail())
            ->setBody(
                $this->twig->render('email-templates/confirmation.html.twig', $context),
                'text/html'
            )
            ->addPart(
                $this->twig->render('email-templates/confirmation.txt.twig', $context),
                'text/plain'
            );
        $this->mailer->send($mail);
    }

    public function sendPasswordRestorationEmail(User $user, string $hash)
    {
        $url = $this->router->generate('password_change', array('slug' => $hash), UrlGeneratorInterface::ABSOLUTE_URL);

        $context = ['url' => $url];
        $mail = (new \Swift_Message($this->translation->trans('subject.email_pwd_restore')))
            ->setFrom(getenv('EMAIL_FROM_NOREPLY'))
            ->setTo($user->getEmail())
            ->setBody(
                $this->twig->render('email-templates/password-restoration.html.twig', $context),
                'text/html'
            )
            ->addPart(
                $this->twig->render('email-templates/password-restoration.txt.twig', $context),
                'text/plain'
            );
        $this->mailer->send($mail);

    }

}