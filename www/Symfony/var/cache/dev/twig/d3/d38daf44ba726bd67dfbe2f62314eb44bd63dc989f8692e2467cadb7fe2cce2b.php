<?php

/* BDEBackSiteBundle:Bbde:Baccueil.html.twig */
class __TwigTemplate_c91408f9a50daba74413d2049144035ff38834f4bc4d43f03f0fb1728a262451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BDESiteBundle::Layout.html.twig", "BDEBackSiteBundle:Bbde:Baccueil.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'img' => array($this, 'block_img'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BDESiteBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ade5f29d3c35ba00158b1860fa9feca84ae5a4329c7f916de0222c9ec900fd4 = $this->env->getExtension("native_profiler");
        $__internal_1ade5f29d3c35ba00158b1860fa9feca84ae5a4329c7f916de0222c9ec900fd4->enter($__internal_1ade5f29d3c35ba00158b1860fa9feca84ae5a4329c7f916de0222c9ec900fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDEBackSiteBundle:Bbde:Baccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ade5f29d3c35ba00158b1860fa9feca84ae5a4329c7f916de0222c9ec900fd4->leave($__internal_1ade5f29d3c35ba00158b1860fa9feca84ae5a4329c7f916de0222c9ec900fd4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_86fbefd7f9a495851703e455a4065d5f55e157cad79227e6111429ccfd48ee6e = $this->env->getExtension("native_profiler");
        $__internal_86fbefd7f9a495851703e455a4065d5f55e157cad79227e6111429ccfd48ee6e->enter($__internal_86fbefd7f9a495851703e455a4065d5f55e157cad79227e6111429ccfd48ee6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Accueil ";
        
        $__internal_86fbefd7f9a495851703e455a4065d5f55e157cad79227e6111429ccfd48ee6e->leave($__internal_86fbefd7f9a495851703e455a4065d5f55e157cad79227e6111429ccfd48ee6e_prof);

    }

    // line 6
    public function block_img($context, array $blocks = array())
    {
        $__internal_396c6dc5fc8e7a0b35f9855d86fa349ce12f52286c8c271516a456f61ceb36ff = $this->env->getExtension("native_profiler");
        $__internal_396c6dc5fc8e7a0b35f9855d86fa349ce12f52286c8c271516a456f61ceb36ff->enter($__internal_396c6dc5fc8e7a0b35f9855d86fa349ce12f52286c8c271516a456f61ceb36ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 7
        echo "    <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/40555.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 > Bureau des étudiants 7'tease </h1>

";
        
        $__internal_396c6dc5fc8e7a0b35f9855d86fa349ce12f52286c8c271516a456f61ceb36ff->leave($__internal_396c6dc5fc8e7a0b35f9855d86fa349ce12f52286c8c271516a456f61ceb36ff_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed10470e98e7788186e0e3af0ac612583a80dcde12ca2093a99b5d71a03027f3 = $this->env->getExtension("native_profiler");
        $__internal_ed10470e98e7788186e0e3af0ac612583a80dcde12ca2093a99b5d71a03027f3->enter($__internal_ed10470e98e7788186e0e3af0ac612583a80dcde12ca2093a99b5d71a03027f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
<p>Un bureau des étudiants (BDE) ou bureau des élèves, est une association d'étudiants d'une même université ou école, élue par leurs adhérents, et qui s'occupe d'organiser les activités extra-scolaires telles que des soirées étudiantes, l'accueil des nouveaux élèves, et diverses activités allant des rencontres sportives aux événements culturels, en passant par la gestion des éventuelles cafétérias ou coopératives étudiantes.</p>


<p>Ce site a pour but de vous donner une vision de l'organisation associative à l'ISEP. De plus grâce à celui vous pourrez vous tenir au courant des differents évènements. 

Pour les isepiens ce site est une plateforme de communication intra-isep. 

Pour toutes demandes d'information vous pouvons nous contacter par mail à l'adresse suivante : bde.isep@isep.fr ou sur notre page facebook.</p>


";
        
        $__internal_ed10470e98e7788186e0e3af0ac612583a80dcde12ca2093a99b5d71a03027f3->leave($__internal_ed10470e98e7788186e0e3af0ac612583a80dcde12ca2093a99b5d71a03027f3_prof);

    }

    public function getTemplateName()
    {
        return "BDEBackSiteBundle:Bbde:Baccueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  71 => 15,  55 => 7,  49 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/Bde/index.html.twig #}*/
/* */
/* {% extends "BDESiteBundle::Layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} Accueil {% endblock %}*/
/* {% block img %}*/
/*     <header class="intro-header" style="background-image: url({{asset ('img/40555.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 > Bureau des étudiants 7'tease </h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* <p>Un bureau des étudiants (BDE) ou bureau des élèves, est une association d'étudiants d'une même université ou école, élue par leurs adhérents, et qui s'occupe d'organiser les activités extra-scolaires telles que des soirées étudiantes, l'accueil des nouveaux élèves, et diverses activités allant des rencontres sportives aux événements culturels, en passant par la gestion des éventuelles cafétérias ou coopératives étudiantes.</p>*/
/* */
/* */
/* <p>Ce site a pour but de vous donner une vision de l'organisation associative à l'ISEP. De plus grâce à celui vous pourrez vous tenir au courant des differents évènements. */
/* */
/* Pour les isepiens ce site est une plateforme de communication intra-isep. */
/* */
/* Pour toutes demandes d'information vous pouvons nous contacter par mail à l'adresse suivante : bde.isep@isep.fr ou sur notre page facebook.</p>*/
/* */
/* */
/* {% endblock %}*/
