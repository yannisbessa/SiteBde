<?php

/* BDESiteBundle:Bde:AssoSite.html.twig */
class __TwigTemplate_47e9f28e32523cf7afc4735278df093e759ae12e16b4eb49b5a77ee066a475f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:AssoSite.html.twig", 4);
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
        $__internal_5f5f67944b813c32aa09bb32284cf5e502b8bcc46e4fb7cb65d0e5c647924e84 = $this->env->getExtension("native_profiler");
        $__internal_5f5f67944b813c32aa09bb32284cf5e502b8bcc46e4fb7cb65d0e5c647924e84->enter($__internal_5f5f67944b813c32aa09bb32284cf5e502b8bcc46e4fb7cb65d0e5c647924e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:AssoSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f5f67944b813c32aa09bb32284cf5e502b8bcc46e4fb7cb65d0e5c647924e84->leave($__internal_5f5f67944b813c32aa09bb32284cf5e502b8bcc46e4fb7cb65d0e5c647924e84_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac63d4932b602b821a3b7317dd4bb2449b1a3027173b4541ac9b6e93f9147700 = $this->env->getExtension("native_profiler");
        $__internal_ac63d4932b602b821a3b7317dd4bb2449b1a3027173b4541ac9b6e93f9147700->enter($__internal_ac63d4932b602b821a3b7317dd4bb2449b1a3027173b4541ac9b6e93f9147700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Move your AS ";
        
        $__internal_ac63d4932b602b821a3b7317dd4bb2449b1a3027173b4541ac9b6e93f9147700->leave($__internal_ac63d4932b602b821a3b7317dd4bb2449b1a3027173b4541ac9b6e93f9147700_prof);

    }

    // line 8
    public function block_img($context, array $blocks = array())
    {
        $__internal_d03c1f03ad4aa81b95792555ce92c4f914e4ff5b40f65ffa6a46b361a98550b3 = $this->env->getExtension("native_profiler");
        $__internal_d03c1f03ad4aa81b95792555ce92c4f914e4ff5b40f65ffa6a46b361a98550b3->enter($__internal_d03c1f03ad4aa81b95792555ce92c4f914e4ff5b40f65ffa6a46b361a98550b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 9
        echo "    <header class=\"intro-header\"  style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/AS.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\" >
                        <h1 style=\"color:white\">Move your AS</h1>

";
        
        $__internal_d03c1f03ad4aa81b95792555ce92c4f914e4ff5b40f65ffa6a46b361a98550b3->leave($__internal_d03c1f03ad4aa81b95792555ce92c4f914e4ff5b40f65ffa6a46b361a98550b3_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_8405382a4aadbc6d314d381f15167202788e2e21245bdd21bb2a727c1573b486 = $this->env->getExtension("native_profiler");
        $__internal_8405382a4aadbc6d314d381f15167202788e2e21245bdd21bb2a727c1573b486->enter($__internal_8405382a4aadbc6d314d381f15167202788e2e21245bdd21bb2a727c1573b486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "<p> Move your AS</p>
L'AS de l'ISEP propose toutes sortes d'activités.

<p>* Football : Les rois du ballon</p>
<p>* Tennis : Le simple plaisir de taper dans la petite balle jaune</p>
<p>* Rugby : Sportifs avides de contacts...humains et physiques</p>
<p>* Basket : Les dunkers fous </p>
<p>* Volley : Une ambiance conviviale et sportive</p>
<p>* Badminton : Sport de vitesse, de déplacement et de précision</p>

<p>Elle est destinée pour n'importe quel isépien et n'importe quelle
isépienne voulant faire du sport. Le niveau n'a pas d'importance.
Débutant(e)s n'hésitez pas à découvrir un sport que vous n'aviez pas
envisagé pratiquer jusqu'alors. Vous serez conseillés et encadrés.
Sportif(ve)s confirmé(e)s apportez votre expérience au sein des clubs et
portez haut les couleurs de l'école.</p>

<p>Date de création : Mardi 1er Septembre 1959</p>
<p>Email : as@isep.fr</p>

";
        
        $__internal_8405382a4aadbc6d314d381f15167202788e2e21245bdd21bb2a727c1573b486->leave($__internal_8405382a4aadbc6d314d381f15167202788e2e21245bdd21bb2a727c1573b486_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:AssoSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  71 => 17,  55 => 9,  49 => 8,  36 => 6,  11 => 4,);
    }
}
/* {# src/OCDE/SiteBundle/Resources/views/Bde/AssoSite.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }}Move your AS {% endblock %}*/
/* */
/* {% block img %}*/
/*     <header class="intro-header"  style="background-image: url({{asset ('img/AS.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading" >*/
/*                         <h1 style="color:white">Move your AS</h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <p> Move your AS</p>*/
/* L'AS de l'ISEP propose toutes sortes d'activités.*/
/* */
/* <p>* Football : Les rois du ballon</p>*/
/* <p>* Tennis : Le simple plaisir de taper dans la petite balle jaune</p>*/
/* <p>* Rugby : Sportifs avides de contacts...humains et physiques</p>*/
/* <p>* Basket : Les dunkers fous </p>*/
/* <p>* Volley : Une ambiance conviviale et sportive</p>*/
/* <p>* Badminton : Sport de vitesse, de déplacement et de précision</p>*/
/* */
/* <p>Elle est destinée pour n'importe quel isépien et n'importe quelle*/
/* isépienne voulant faire du sport. Le niveau n'a pas d'importance.*/
/* Débutant(e)s n'hésitez pas à découvrir un sport que vous n'aviez pas*/
/* envisagé pratiquer jusqu'alors. Vous serez conseillés et encadrés.*/
/* Sportif(ve)s confirmé(e)s apportez votre expérience au sein des clubs et*/
/* portez haut les couleurs de l'école.</p>*/
/* */
/* <p>Date de création : Mardi 1er Septembre 1959</p>*/
/* <p>Email : as@isep.fr</p>*/
/* */
/* {% endblock %}*/
/* */
