<?php

/* @BDESite/Bde/AssoSite.html.twig */
class __TwigTemplate_b4b85cbdf25c25c80c0f096f340a389ae75d9865bee942dcfb94483ddbd162bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/AssoSite.html.twig", 4);
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
        $__internal_4f85a52cc9c9b69fbc72dee7148c1f584dc1810e96737a8fb7accb8c39dc7362 = $this->env->getExtension("native_profiler");
        $__internal_4f85a52cc9c9b69fbc72dee7148c1f584dc1810e96737a8fb7accb8c39dc7362->enter($__internal_4f85a52cc9c9b69fbc72dee7148c1f584dc1810e96737a8fb7accb8c39dc7362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/AssoSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f85a52cc9c9b69fbc72dee7148c1f584dc1810e96737a8fb7accb8c39dc7362->leave($__internal_4f85a52cc9c9b69fbc72dee7148c1f584dc1810e96737a8fb7accb8c39dc7362_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b153e214207ccd505401652c09fec68242654c70fc68cd83a9543f6016668c5 = $this->env->getExtension("native_profiler");
        $__internal_6b153e214207ccd505401652c09fec68242654c70fc68cd83a9543f6016668c5->enter($__internal_6b153e214207ccd505401652c09fec68242654c70fc68cd83a9543f6016668c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Move your AS ";
        
        $__internal_6b153e214207ccd505401652c09fec68242654c70fc68cd83a9543f6016668c5->leave($__internal_6b153e214207ccd505401652c09fec68242654c70fc68cd83a9543f6016668c5_prof);

    }

    // line 8
    public function block_img($context, array $blocks = array())
    {
        $__internal_7718e8f8d08b6d8c99b8a862b75a0e24ca13fb5d4ad55816819e6250b2fa0392 = $this->env->getExtension("native_profiler");
        $__internal_7718e8f8d08b6d8c99b8a862b75a0e24ca13fb5d4ad55816819e6250b2fa0392->enter($__internal_7718e8f8d08b6d8c99b8a862b75a0e24ca13fb5d4ad55816819e6250b2fa0392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_7718e8f8d08b6d8c99b8a862b75a0e24ca13fb5d4ad55816819e6250b2fa0392->leave($__internal_7718e8f8d08b6d8c99b8a862b75a0e24ca13fb5d4ad55816819e6250b2fa0392_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_e953ddad6786f6c60290c332eaf66155c6b31d65ba1349306e833d139e0e7bcd = $this->env->getExtension("native_profiler");
        $__internal_e953ddad6786f6c60290c332eaf66155c6b31d65ba1349306e833d139e0e7bcd->enter($__internal_e953ddad6786f6c60290c332eaf66155c6b31d65ba1349306e833d139e0e7bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e953ddad6786f6c60290c332eaf66155c6b31d65ba1349306e833d139e0e7bcd->leave($__internal_e953ddad6786f6c60290c332eaf66155c6b31d65ba1349306e833d139e0e7bcd_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/AssoSite.html.twig";
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
