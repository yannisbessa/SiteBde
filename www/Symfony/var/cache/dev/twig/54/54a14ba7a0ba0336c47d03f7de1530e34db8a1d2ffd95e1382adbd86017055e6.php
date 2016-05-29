<?php

/* BDESiteBundle:Bde:ISEPTRANSAHARIENNE.html.twig */
class __TwigTemplate_a9c37da33694d02d8c72c3f7f399c04368f329025b2be37494dc70be877d01a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:ISEPTRANSAHARIENNE.html.twig", 4);
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
        $__internal_5e92aaae74eceeaa163cd1b09c0b087547603313d068b5d8582a38c6e980b92c = $this->env->getExtension("native_profiler");
        $__internal_5e92aaae74eceeaa163cd1b09c0b087547603313d068b5d8582a38c6e980b92c->enter($__internal_5e92aaae74eceeaa163cd1b09c0b087547603313d068b5d8582a38c6e980b92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:ISEPTRANSAHARIENNE.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e92aaae74eceeaa163cd1b09c0b087547603313d068b5d8582a38c6e980b92c->leave($__internal_5e92aaae74eceeaa163cd1b09c0b087547603313d068b5d8582a38c6e980b92c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7346712422bd4e306c00483951ae3a3d42bc994e0bf2f6bafc3e759a51e26a57 = $this->env->getExtension("native_profiler");
        $__internal_7346712422bd4e306c00483951ae3a3d42bc994e0bf2f6bafc3e759a51e26a57->enter($__internal_7346712422bd4e306c00483951ae3a3d42bc994e0bf2f6bafc3e759a51e26a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Transaharienne";
        
        $__internal_7346712422bd4e306c00483951ae3a3d42bc994e0bf2f6bafc3e759a51e26a57->leave($__internal_7346712422bd4e306c00483951ae3a3d42bc994e0bf2f6bafc3e759a51e26a57_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_c31cd6c5659458339dc1012419f861a51a9e7bd33ebdae0424db02b4d606d94c = $this->env->getExtension("native_profiler");
        $__internal_c31cd6c5659458339dc1012419f861a51a9e7bd33ebdae0424db02b4d606d94c->enter($__internal_c31cd6c5659458339dc1012419f861a51a9e7bd33ebdae0424db02b4d606d94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "    <header class=\"intro-header\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ISEPTRANSHARIENNE.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 style =\"color:orange\";>Transaharienne</h1>

";
        
        $__internal_c31cd6c5659458339dc1012419f861a51a9e7bd33ebdae0424db02b4d606d94c->leave($__internal_c31cd6c5659458339dc1012419f861a51a9e7bd33ebdae0424db02b4d606d94c_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb86103b35d4ef718cf9e5342092a8ba3bfe63676d6019d5ef695ce4a7078200 = $this->env->getExtension("native_profiler");
        $__internal_bb86103b35d4ef718cf9e5342092a8ba3bfe63676d6019d5ef695ce4a7078200->enter($__internal_bb86103b35d4ef718cf9e5342092a8ba3bfe63676d6019d5ef695ce4a7078200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<p>Transahariennes</p>


<p>La mission de la Transaharienne est d’organiser tous les ans un voyage culturel au Maroc à caractère humanitaire. 
Ce voyage auquel prennent part les élèves de l’ISEP est une occasion de partir à la découverte du Maroc, de sa population et de sa culture tout en apportant un soutien humanitaire dans des écoles du sud marocain. 
La visite des écoles, des villages isolés permet d’apporter un soutien aux enfants ainsi qu’à leurs familles en leur distribuant des cahiers, livres, stylos et autre matériel scolaire.
Sur place, de nombreuses activités sont proposées aux isèpiens et isèpiennes: jetski, excursion en dromadaire, nuit dans les dunes de sable et dans une famille berbère, visite de monuments, un véritable hammam,.. et plein d'autres surprises..
Un séjour dépaysant duquel vous reviendrez fascinés !</p>
<p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>

<p>Date de création : Lundi 1er Mars 1999</p>
<p>Email : transaharienne@isep.fr</p>
";
        
        $__internal_bb86103b35d4ef718cf9e5342092a8ba3bfe63676d6019d5ef695ce4a7078200->leave($__internal_bb86103b35d4ef718cf9e5342092a8ba3bfe63676d6019d5ef695ce4a7078200_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:ISEPTRANSAHARIENNE.html.twig";
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
/* {% block title %}{{ parent() }} Transaharienne{% endblock %}*/
/* {% block img %}*/
/*     <header class="intro-header" style="background-image: url({{asset ('img/ISEPTRANSHARIENNE.jpg')}});">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 style ="color:orange";>Transaharienne</h1>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <p>Transahariennes</p>*/
/* */
/* */
/* <p>La mission de la Transaharienne est d’organiser tous les ans un voyage culturel au Maroc à caractère humanitaire. */
/* Ce voyage auquel prennent part les élèves de l’ISEP est une occasion de partir à la découverte du Maroc, de sa population et de sa culture tout en apportant un soutien humanitaire dans des écoles du sud marocain. */
/* La visite des écoles, des villages isolés permet d’apporter un soutien aux enfants ainsi qu’à leurs familles en leur distribuant des cahiers, livres, stylos et autre matériel scolaire.*/
/* Sur place, de nombreuses activités sont proposées aux isèpiens et isèpiennes: jetski, excursion en dromadaire, nuit dans les dunes de sable et dans une famille berbère, visite de monuments, un véritable hammam,.. et plein d'autres surprises..*/
/* Un séjour dépaysant duquel vous reviendrez fascinés !</p>*/
/* <p>https://www.facebook.com/pages/ISEP-Bands/397215573683079</p>*/
/* */
/* <p>Date de création : Lundi 1er Mars 1999</p>*/
/* <p>Email : transaharienne@isep.fr</p>*/
/* {% endblock %}*/
/* */
/* */
