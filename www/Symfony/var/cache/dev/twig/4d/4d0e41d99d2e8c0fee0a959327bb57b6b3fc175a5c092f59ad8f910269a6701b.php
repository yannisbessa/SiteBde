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
        $__internal_2da30e000be156317c410b27b7f0e89ac587d886319df2b25cbce70d8a518f93 = $this->env->getExtension("native_profiler");
        $__internal_2da30e000be156317c410b27b7f0e89ac587d886319df2b25cbce70d8a518f93->enter($__internal_2da30e000be156317c410b27b7f0e89ac587d886319df2b25cbce70d8a518f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:AssoSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2da30e000be156317c410b27b7f0e89ac587d886319df2b25cbce70d8a518f93->leave($__internal_2da30e000be156317c410b27b7f0e89ac587d886319df2b25cbce70d8a518f93_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef8f654c51082243aeb6b9a583b85aa0854c146578ed43f52eb9e96ea577202b = $this->env->getExtension("native_profiler");
        $__internal_ef8f654c51082243aeb6b9a583b85aa0854c146578ed43f52eb9e96ea577202b->enter($__internal_ef8f654c51082243aeb6b9a583b85aa0854c146578ed43f52eb9e96ea577202b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Move your AS ";
        
        $__internal_ef8f654c51082243aeb6b9a583b85aa0854c146578ed43f52eb9e96ea577202b->leave($__internal_ef8f654c51082243aeb6b9a583b85aa0854c146578ed43f52eb9e96ea577202b_prof);

    }

    // line 8
    public function block_img($context, array $blocks = array())
    {
        $__internal_a6f7af2e5a5ea9e98459db6cd9574ff37349db3cd56afa3933dcb57fe417fb1c = $this->env->getExtension("native_profiler");
        $__internal_a6f7af2e5a5ea9e98459db6cd9574ff37349db3cd56afa3933dcb57fe417fb1c->enter($__internal_a6f7af2e5a5ea9e98459db6cd9574ff37349db3cd56afa3933dcb57fe417fb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_a6f7af2e5a5ea9e98459db6cd9574ff37349db3cd56afa3933dcb57fe417fb1c->leave($__internal_a6f7af2e5a5ea9e98459db6cd9574ff37349db3cd56afa3933dcb57fe417fb1c_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0bd4301d24e2fd33b0bc75c3541ed337e7fcacb31584fb0d36428efec840adb = $this->env->getExtension("native_profiler");
        $__internal_e0bd4301d24e2fd33b0bc75c3541ed337e7fcacb31584fb0d36428efec840adb->enter($__internal_e0bd4301d24e2fd33b0bc75c3541ed337e7fcacb31584fb0d36428efec840adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e0bd4301d24e2fd33b0bc75c3541ed337e7fcacb31584fb0d36428efec840adb->leave($__internal_e0bd4301d24e2fd33b0bc75c3541ed337e7fcacb31584fb0d36428efec840adb_prof);

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
