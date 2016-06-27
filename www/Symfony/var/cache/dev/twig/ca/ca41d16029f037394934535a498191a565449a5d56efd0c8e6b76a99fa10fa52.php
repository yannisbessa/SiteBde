<?php

/* @BDESite/Bde/AccueilSite.html.twig */
class __TwigTemplate_f9ef231331a5fa75c4dbadb5de2d6b6753c692eebf2488c9468fe6f4e1a71a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BDESiteBundle::Layout.html.twig", "@BDESite/Bde/AccueilSite.html.twig", 3);
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
        $__internal_db72dc92b6c4c91c1a5a716302539174fd171bccaf2e0d1b81dbf5d5612f2fdb = $this->env->getExtension("native_profiler");
        $__internal_db72dc92b6c4c91c1a5a716302539174fd171bccaf2e0d1b81dbf5d5612f2fdb->enter($__internal_db72dc92b6c4c91c1a5a716302539174fd171bccaf2e0d1b81dbf5d5612f2fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/AccueilSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db72dc92b6c4c91c1a5a716302539174fd171bccaf2e0d1b81dbf5d5612f2fdb->leave($__internal_db72dc92b6c4c91c1a5a716302539174fd171bccaf2e0d1b81dbf5d5612f2fdb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_340e8c9ed83c91bca967c6872a63e7c2f41ebb1a4ae27958a13d55e0029df951 = $this->env->getExtension("native_profiler");
        $__internal_340e8c9ed83c91bca967c6872a63e7c2f41ebb1a4ae27958a13d55e0029df951->enter($__internal_340e8c9ed83c91bca967c6872a63e7c2f41ebb1a4ae27958a13d55e0029df951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Accueil ";
        
        $__internal_340e8c9ed83c91bca967c6872a63e7c2f41ebb1a4ae27958a13d55e0029df951->leave($__internal_340e8c9ed83c91bca967c6872a63e7c2f41ebb1a4ae27958a13d55e0029df951_prof);

    }

    // line 6
    public function block_img($context, array $blocks = array())
    {
        $__internal_9ad7c89abc7e9a5c62c969292cc07f1da31b2e0ef6880b33e40a31bc97aa44cd = $this->env->getExtension("native_profiler");
        $__internal_9ad7c89abc7e9a5c62c969292cc07f1da31b2e0ef6880b33e40a31bc97aa44cd->enter($__internal_9ad7c89abc7e9a5c62c969292cc07f1da31b2e0ef6880b33e40a31bc97aa44cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_9ad7c89abc7e9a5c62c969292cc07f1da31b2e0ef6880b33e40a31bc97aa44cd->leave($__internal_9ad7c89abc7e9a5c62c969292cc07f1da31b2e0ef6880b33e40a31bc97aa44cd_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_822d1f603c4b2c395df43885569ee145f5639421973904015920abcd637093c5 = $this->env->getExtension("native_profiler");
        $__internal_822d1f603c4b2c395df43885569ee145f5639421973904015920abcd637093c5->enter($__internal_822d1f603c4b2c395df43885569ee145f5639421973904015920abcd637093c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
<p>Un bureau des étudiants (BDE) ou bureau des élèves, est une association d'étudiants d'une même université ou école, élue par leurs adhérents, et qui s'occupe d'organiser les activités extra-scolaires telles que des soirées étudiantes, l'accueil des nouveaux élèves, et diverses activités allant des rencontres sportives aux événements culturels, en passant par la gestion des éventuelles cafétérias ou coopératives étudiantes.</p>


<p>Ce site a pour but de vous donner une vision de l'organisation associative à l'ISEP. De plus grâce à celui vous pourrez vous tenir au courant des differents évènements. 

Pour les isepiens ce site est une plateforme de communication intra-isep. 

Pour toutes demandes d'information vous pouvons nous contacter par mail à l'adresse suivante : bde.isep@isep.fr ou sur notre page facebook.</p>


";
        
        $__internal_822d1f603c4b2c395df43885569ee145f5639421973904015920abcd637093c5->leave($__internal_822d1f603c4b2c395df43885569ee145f5639421973904015920abcd637093c5_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/AccueilSite.html.twig";
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
