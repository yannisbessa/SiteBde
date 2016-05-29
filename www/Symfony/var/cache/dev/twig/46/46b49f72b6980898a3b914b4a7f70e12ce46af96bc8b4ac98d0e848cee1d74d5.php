<?php

/* @BDESite/Bde/ISEPBANDS.html.twig */
class __TwigTemplate_dfeecbfe777d6b0b800d9f5a7add233c00cb97b9a7c4a60ec9c689effd3085d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/ISEPBANDS.html.twig", 5);
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
        $__internal_32dc0dbb2f77a90becc5a061b45201dee512cb5f830593f395c4b075dcf5c8ba = $this->env->getExtension("native_profiler");
        $__internal_32dc0dbb2f77a90becc5a061b45201dee512cb5f830593f395c4b075dcf5c8ba->enter($__internal_32dc0dbb2f77a90becc5a061b45201dee512cb5f830593f395c4b075dcf5c8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/ISEPBANDS.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32dc0dbb2f77a90becc5a061b45201dee512cb5f830593f395c4b075dcf5c8ba->leave($__internal_32dc0dbb2f77a90becc5a061b45201dee512cb5f830593f395c4b075dcf5c8ba_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a04fc1a43dc921f1442c2637534d1b2e5f77494e15ef7b6bd44345d20e430b84 = $this->env->getExtension("native_profiler");
        $__internal_a04fc1a43dc921f1442c2637534d1b2e5f77494e15ef7b6bd44345d20e430b84->enter($__internal_a04fc1a43dc921f1442c2637534d1b2e5f77494e15ef7b6bd44345d20e430b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ISEPBANDS";
        
        $__internal_a04fc1a43dc921f1442c2637534d1b2e5f77494e15ef7b6bd44345d20e430b84->leave($__internal_a04fc1a43dc921f1442c2637534d1b2e5f77494e15ef7b6bd44345d20e430b84_prof);

    }

    // line 8
    public function block_img($context, array $blocks = array())
    {
        $__internal_bfc5595ef1b2c43f12dd512c2b6c0a0e6c213b0c34539a102db3e150b074fe1f = $this->env->getExtension("native_profiler");
        $__internal_bfc5595ef1b2c43f12dd512c2b6c0a0e6c213b0c34539a102db3e150b074fe1f->enter($__internal_bfc5595ef1b2c43f12dd512c2b6c0a0e6c213b0c34539a102db3e150b074fe1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 9
        echo "    <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ISEPBANDS.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 style =\"color:white\";>ISEP BANDS</h1>

";
        
        $__internal_bfc5595ef1b2c43f12dd512c2b6c0a0e6c213b0c34539a102db3e150b074fe1f->leave($__internal_bfc5595ef1b2c43f12dd512c2b6c0a0e6c213b0c34539a102db3e150b074fe1f_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d7f985194330f4dbb3e3120c3cfe63c8af11c05749cdaf12c6b842a37d20226 = $this->env->getExtension("native_profiler");
        $__internal_4d7f985194330f4dbb3e3120c3cfe63c8af11c05749cdaf12c6b842a37d20226->enter($__internal_4d7f985194330f4dbb3e3120c3cfe63c8af11c05749cdaf12c6b842a37d20226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "<p>ISEP BANDS</p>


<p>ISEP Bands est une association dont le but est de réunir les musiciens de l’ISEP pour jouer ensemble dans une salle de répétition mise à notre disposition. Nous souhaitons réaliser au minimum deux concerts au cours de l'année : un à Noël et un pendant la semaine de campagne BDE (Avril). Tous les styles sont au programme, donc que vous jouiez de la guitare ou d'un instrument improbable, il y aura toujours un morceau pour vous. 
N'hésitez pas à allez sur notre page Facebook :</p>
<p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>

<p>Date de création : Mercredi 1er Septembre 2010</p>
<p>Email : isepbands@isep.fr</p>
";
        
        $__internal_4d7f985194330f4dbb3e3120c3cfe63c8af11c05749cdaf12c6b842a37d20226->leave($__internal_4d7f985194330f4dbb3e3120c3cfe63c8af11c05749cdaf12c6b842a37d20226_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/ISEPBANDS.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  71 => 17,  55 => 9,  49 => 8,  36 => 7,  11 => 5,);
    }
}
/* */
/* {# src/OCDE/SiteBundle/Resources/views/Bde/AssoSite.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} ISEPBANDS{% endblock %}*/
/* {% block img %}*/
/*     <header class="intro-header" style="background-image: url({{asset ('img/ISEPBANDS.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 style ="color:white";>ISEP BANDS</h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <p>ISEP BANDS</p>*/
/* */
/* */
/* <p>ISEP Bands est une association dont le but est de réunir les musiciens de l’ISEP pour jouer ensemble dans une salle de répétition mise à notre disposition. Nous souhaitons réaliser au minimum deux concerts au cours de l'année : un à Noël et un pendant la semaine de campagne BDE (Avril). Tous les styles sont au programme, donc que vous jouiez de la guitare ou d'un instrument improbable, il y aura toujours un morceau pour vous. */
/* N'hésitez pas à allez sur notre page Facebook :</p>*/
/* <p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>*/
/* */
/* <p>Date de création : Mercredi 1er Septembre 2010</p>*/
/* <p>Email : isepbands@isep.fr</p>*/
/* {% endblock %}*/
