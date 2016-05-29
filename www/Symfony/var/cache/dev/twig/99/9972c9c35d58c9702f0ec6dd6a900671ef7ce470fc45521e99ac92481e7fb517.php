<?php

/* BDESiteBundle:Bde:ISEPTRAVEL.html.twig */
class __TwigTemplate_ba051030439aa285aba4b9e6be9475b49dc674f6c298b593bc3159156501c109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:ISEPTRAVEL.html.twig", 4);
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
        $__internal_c8937f1bdc9e0ba237c9ea62da13bf4f82e0d9a8119877bc3903faf35c08924e = $this->env->getExtension("native_profiler");
        $__internal_c8937f1bdc9e0ba237c9ea62da13bf4f82e0d9a8119877bc3903faf35c08924e->enter($__internal_c8937f1bdc9e0ba237c9ea62da13bf4f82e0d9a8119877bc3903faf35c08924e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:ISEPTRAVEL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8937f1bdc9e0ba237c9ea62da13bf4f82e0d9a8119877bc3903faf35c08924e->leave($__internal_c8937f1bdc9e0ba237c9ea62da13bf4f82e0d9a8119877bc3903faf35c08924e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bb5b67b308c39fd8f49a1455867521d30ce6ab9441b9971af410389a31a1757 = $this->env->getExtension("native_profiler");
        $__internal_3bb5b67b308c39fd8f49a1455867521d30ce6ab9441b9971af410389a31a1757->enter($__internal_3bb5b67b308c39fd8f49a1455867521d30ce6ab9441b9971af410389a31a1757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ISEP TRAVEL";
        
        $__internal_3bb5b67b308c39fd8f49a1455867521d30ce6ab9441b9971af410389a31a1757->leave($__internal_3bb5b67b308c39fd8f49a1455867521d30ce6ab9441b9971af410389a31a1757_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_5f8e6969f0ce1cd2d4eb1d29c9835b8bd0a58245f8c555105ec0e37a326d3d99 = $this->env->getExtension("native_profiler");
        $__internal_5f8e6969f0ce1cd2d4eb1d29c9835b8bd0a58245f8c555105ec0e37a326d3d99->enter($__internal_5f8e6969f0ce1cd2d4eb1d29c9835b8bd0a58245f8c555105ec0e37a326d3d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_5f8e6969f0ce1cd2d4eb1d29c9835b8bd0a58245f8c555105ec0e37a326d3d99->leave($__internal_5f8e6969f0ce1cd2d4eb1d29c9835b8bd0a58245f8c555105ec0e37a326d3d99_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0333a0b2e401cb7df5b9ea101aa6fd5e30c8ce631de947827b2a73214a1e7a5 = $this->env->getExtension("native_profiler");
        $__internal_f0333a0b2e401cb7df5b9ea101aa6fd5e30c8ce631de947827b2a73214a1e7a5->enter($__internal_f0333a0b2e401cb7df5b9ea101aa6fd5e30c8ce631de947827b2a73214a1e7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f0333a0b2e401cb7df5b9ea101aa6fd5e30c8ce631de947827b2a73214a1e7a5->leave($__internal_f0333a0b2e401cb7df5b9ea101aa6fd5e30c8ce631de947827b2a73214a1e7a5_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:ISEPTRAVEL.html.twig";
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
