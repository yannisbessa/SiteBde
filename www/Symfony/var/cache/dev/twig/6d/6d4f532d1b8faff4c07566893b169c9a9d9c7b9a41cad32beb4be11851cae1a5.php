<?php

/* BDESiteBundle:Bde:ISEPBANDS.html.twig */
class __TwigTemplate_accd3ff165e16017170621d13f752bd8e8a0b585ef0318bf35cbe35eaff9f329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:ISEPBANDS.html.twig", 5);
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
        $__internal_920c19034da8c130e2bdb32500e0ae023f72b1722b21b8e747853e27885d2c4e = $this->env->getExtension("native_profiler");
        $__internal_920c19034da8c130e2bdb32500e0ae023f72b1722b21b8e747853e27885d2c4e->enter($__internal_920c19034da8c130e2bdb32500e0ae023f72b1722b21b8e747853e27885d2c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:ISEPBANDS.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_920c19034da8c130e2bdb32500e0ae023f72b1722b21b8e747853e27885d2c4e->leave($__internal_920c19034da8c130e2bdb32500e0ae023f72b1722b21b8e747853e27885d2c4e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4b26ada7b5f380d39830b2c83aae843e06b21882209f2ef8da09eb1ec5780a3 = $this->env->getExtension("native_profiler");
        $__internal_c4b26ada7b5f380d39830b2c83aae843e06b21882209f2ef8da09eb1ec5780a3->enter($__internal_c4b26ada7b5f380d39830b2c83aae843e06b21882209f2ef8da09eb1ec5780a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ISEPBANDS";
        
        $__internal_c4b26ada7b5f380d39830b2c83aae843e06b21882209f2ef8da09eb1ec5780a3->leave($__internal_c4b26ada7b5f380d39830b2c83aae843e06b21882209f2ef8da09eb1ec5780a3_prof);

    }

    // line 8
    public function block_img($context, array $blocks = array())
    {
        $__internal_1a79a02294ce80287dc9f2f5b4fcc748f8808b9352736204fa9ac78c8a99a9d8 = $this->env->getExtension("native_profiler");
        $__internal_1a79a02294ce80287dc9f2f5b4fcc748f8808b9352736204fa9ac78c8a99a9d8->enter($__internal_1a79a02294ce80287dc9f2f5b4fcc748f8808b9352736204fa9ac78c8a99a9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

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
        
        $__internal_1a79a02294ce80287dc9f2f5b4fcc748f8808b9352736204fa9ac78c8a99a9d8->leave($__internal_1a79a02294ce80287dc9f2f5b4fcc748f8808b9352736204fa9ac78c8a99a9d8_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e51b3ec367ed7d4ed89b1a6b33a6f208d963ab848b91e7a5384e865989e4eab = $this->env->getExtension("native_profiler");
        $__internal_0e51b3ec367ed7d4ed89b1a6b33a6f208d963ab848b91e7a5384e865989e4eab->enter($__internal_0e51b3ec367ed7d4ed89b1a6b33a6f208d963ab848b91e7a5384e865989e4eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "<p>ISEP BANDS</p>


<p>ISEP Bands est une association dont le but est de réunir les musiciens de l’ISEP pour jouer ensemble dans une salle de répétition mise à notre disposition. Nous souhaitons réaliser au minimum deux concerts au cours de l'année : un à Noël et un pendant la semaine de campagne BDE (Avril). Tous les styles sont au programme, donc que vous jouiez de la guitare ou d'un instrument improbable, il y aura toujours un morceau pour vous. 
N'hésitez pas à allez sur notre page Facebook :</p>
<p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>

<p>Date de création : Mercredi 1er Septembre 2010</p>
<p>Email : isepbands@isep.fr</p>
";
        
        $__internal_0e51b3ec367ed7d4ed89b1a6b33a6f208d963ab848b91e7a5384e865989e4eab->leave($__internal_0e51b3ec367ed7d4ed89b1a6b33a6f208d963ab848b91e7a5384e865989e4eab_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:ISEPBANDS.html.twig";
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
