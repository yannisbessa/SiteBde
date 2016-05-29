<?php

/* @BDESite/Bde/ISEPTRAVEL.html.twig */
class __TwigTemplate_456885871c7a38bcc76dbf2ed9ca329b643bd7e38a2e6d4cbe6ea9d2447549fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/ISEPTRAVEL.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'img' => array($this, 'block_img'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BDESiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18a086c290c52e8a88eb64709e45a79c699a2c78c509d974a13b66886bc52dfa = $this->env->getExtension("native_profiler");
        $__internal_18a086c290c52e8a88eb64709e45a79c699a2c78c509d974a13b66886bc52dfa->enter($__internal_18a086c290c52e8a88eb64709e45a79c699a2c78c509d974a13b66886bc52dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/ISEPTRAVEL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18a086c290c52e8a88eb64709e45a79c699a2c78c509d974a13b66886bc52dfa->leave($__internal_18a086c290c52e8a88eb64709e45a79c699a2c78c509d974a13b66886bc52dfa_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_680f45bfe29b83d27ff7316f0b339a607f26e1676d6c231d961b6800fdfbb5e2 = $this->env->getExtension("native_profiler");
        $__internal_680f45bfe29b83d27ff7316f0b339a607f26e1676d6c231d961b6800fdfbb5e2->enter($__internal_680f45bfe29b83d27ff7316f0b339a607f26e1676d6c231d961b6800fdfbb5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ISEP TRAVEL";
        
        $__internal_680f45bfe29b83d27ff7316f0b339a607f26e1676d6c231d961b6800fdfbb5e2->leave($__internal_680f45bfe29b83d27ff7316f0b339a607f26e1676d6c231d961b6800fdfbb5e2_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_7554fa062b04dc22de4ec1203739c6ba9365a6f3953dedade30b5db82e99c783 = $this->env->getExtension("native_profiler");
        $__internal_7554fa062b04dc22de4ec1203739c6ba9365a6f3953dedade30b5db82e99c783->enter($__internal_7554fa062b04dc22de4ec1203739c6ba9365a6f3953dedade30b5db82e99c783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "    <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ISEPTRAVEL.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 style =\"color:transparent;\";>ISEPTRAVEL</h1>

";
        
        $__internal_7554fa062b04dc22de4ec1203739c6ba9365a6f3953dedade30b5db82e99c783->leave($__internal_7554fa062b04dc22de4ec1203739c6ba9365a6f3953dedade30b5db82e99c783_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8e294c73ec344ef7ec1a8c74866bbbd0e00d7ae768d25bd1649b127b25042aa = $this->env->getExtension("native_profiler");
        $__internal_b8e294c73ec344ef7ec1a8c74866bbbd0e00d7ae768d25bd1649b127b25042aa->enter($__internal_b8e294c73ec344ef7ec1a8c74866bbbd0e00d7ae768d25bd1649b127b25042aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<p>ISEP TRAVEL </p>


<p>ISEP Travel est l'association de l'ISEP qui s'occupe de tes voyages pendant les vacances scolaires.

L’équipe se charge d’organiser tout au long de l’année plusieurs voyages dans différentes villes européennes le tout à des prix modérés.

Tu n’as qu’à te laisser transporter, ton association s’occupe de tout : transport, hébergement dans le quartier le plus sympa de la ville, bon plans…


Une fois sur place, tu es libre de faire ce qu’il te plait : Visiter des endroits exceptionnels que tu n’es pas prêt d’oublier, rencontrer des gens autour d'un verre, participer aux quelques activités qui seront proposées par l’équipe… Bref, tu l’auras compris, ce ne sera pas un sale voyage de classe, mais de vraies vacances avec tes potes ! Le tout dans une ambiance conviviale.


Donc si tu en as assez de rouiller sur facebook sous le ciel gris de Paris, et que tu veux vraiment profiter des tes précieuses et tant attendues vacances, n'hésite plus et viens t’inscrire au premier voyage que nous organisons cette année à BUDAPEST pour les vacances de la Toussaint !</p>
<p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>

<p>Date de création : Mardi 1er Novembre 2011</p>
<p>Email : isep.travel@gmail.com</p>
";
        
        $__internal_b8e294c73ec344ef7ec1a8c74866bbbd0e00d7ae768d25bd1649b127b25042aa->leave($__internal_b8e294c73ec344ef7ec1a8c74866bbbd0e00d7ae768d25bd1649b127b25042aa_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/ISEPTRAVEL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  71 => 16,  55 => 8,  49 => 7,  36 => 6,  11 => 4,);
    }
}
/* {# src/OCDE/SiteBundle/Resources/views/Bde/AssoSite.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} ISEP TRAVEL{% endblock %}*/
/* {% block img %}*/
/*     <header class="intro-header" style="background-image: url({{asset ('img/ISEPTRAVEL.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 style ="color:transparent;";>ISEPTRAVEL</h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <p>ISEP TRAVEL </p>*/
/* */
/* */
/* <p>ISEP Travel est l'association de l'ISEP qui s'occupe de tes voyages pendant les vacances scolaires.*/
/* */
/* L’équipe se charge d’organiser tout au long de l’année plusieurs voyages dans différentes villes européennes le tout à des prix modérés.*/
/* */
/* Tu n’as qu’à te laisser transporter, ton association s’occupe de tout : transport, hébergement dans le quartier le plus sympa de la ville, bon plans…*/
/* */
/* */
/* Une fois sur place, tu es libre de faire ce qu’il te plait : Visiter des endroits exceptionnels que tu n’es pas prêt d’oublier, rencontrer des gens autour d'un verre, participer aux quelques activités qui seront proposées par l’équipe… Bref, tu l’auras compris, ce ne sera pas un sale voyage de classe, mais de vraies vacances avec tes potes ! Le tout dans une ambiance conviviale.*/
/* */
/* */
/* Donc si tu en as assez de rouiller sur facebook sous le ciel gris de Paris, et que tu veux vraiment profiter des tes précieuses et tant attendues vacances, n'hésite plus et viens t’inscrire au premier voyage que nous organisons cette année à BUDAPEST pour les vacances de la Toussaint !</p>*/
/* <p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>*/
/* */
/* <p>Date de création : Mardi 1er Novembre 2011</p>*/
/* <p>Email : isep.travel@gmail.com</p>*/
/* {% endblock %}*/
/* */
