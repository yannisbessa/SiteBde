<?php

/* BDESiteBundle:Bde:Back.html.twig */
class __TwigTemplate_5ba69a6b79331ed7574bb1a52c1d5ca93e4cd2f013da93a8fb596f817357cbc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:Back.html.twig", 4);
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
        $__internal_5d0d04c17b7cd6a942ff4931b5f3758c432ab32e0258bba88431f2ba411ec598 = $this->env->getExtension("native_profiler");
        $__internal_5d0d04c17b7cd6a942ff4931b5f3758c432ab32e0258bba88431f2ba411ec598->enter($__internal_5d0d04c17b7cd6a942ff4931b5f3758c432ab32e0258bba88431f2ba411ec598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:Back.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d0d04c17b7cd6a942ff4931b5f3758c432ab32e0258bba88431f2ba411ec598->leave($__internal_5d0d04c17b7cd6a942ff4931b5f3758c432ab32e0258bba88431f2ba411ec598_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec10f82afd9f8d29379653f94d494a8623672196bb81cc87ebfc70bc2d4f0567 = $this->env->getExtension("native_profiler");
        $__internal_ec10f82afd9f8d29379653f94d494a8623672196bb81cc87ebfc70bc2d4f0567->enter($__internal_ec10f82afd9f8d29379653f94d494a8623672196bb81cc87ebfc70bc2d4f0567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo " Back office
";
        
        $__internal_ec10f82afd9f8d29379653f94d494a8623672196bb81cc87ebfc70bc2d4f0567->leave($__internal_ec10f82afd9f8d29379653f94d494a8623672196bb81cc87ebfc70bc2d4f0567_prof);

    }

    // line 10
    public function block_img($context, array $blocks = array())
    {
        $__internal_0f1b12b85584f20a53804139f09a4723bd8de6ce695446269bdc3154afc66a0d = $this->env->getExtension("native_profiler");
        $__internal_0f1b12b85584f20a53804139f09a4723bd8de6ce695446269bdc3154afc66a0d->enter($__internal_0f1b12b85584f20a53804139f09a4723bd8de6ce695446269bdc3154afc66a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 11
        echo "    <header class=\"intro-header\" style=\"size: 10px !important;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 style =\"color:blue\";>Back-office</h1>
\"<style type=\"text/css\"> 
.navbar-custom .nav li a {
    color: #428bca !important;
    padding: 20px;
}

";
        
        $__internal_0f1b12b85584f20a53804139f09a4723bd8de6ce695446269bdc3154afc66a0d->leave($__internal_0f1b12b85584f20a53804139f09a4723bd8de6ce695446269bdc3154afc66a0d_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_1212fc4301e4985a1fc27214e74d2208448ddcffc69ec7c091948bc3f9496b5c = $this->env->getExtension("native_profiler");
        $__internal_1212fc4301e4985a1fc27214e74d2208448ddcffc69ec7c091948bc3f9496b5c->enter($__internal_1212fc4301e4985a1fc27214e74d2208448ddcffc69ec7c091948bc3f9496b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "
  <h2>Bienvenue sur le back office </h2>
  <p> Lorsque vous desirer modifier une page du site, il vous suffit de cliquer sur l'onglet correspondant à vos envies</p>



";
        
        $__internal_1212fc4301e4985a1fc27214e74d2208448ddcffc69ec7c091948bc3f9496b5c->leave($__internal_1212fc4301e4985a1fc27214e74d2208448ddcffc69ec7c091948bc3f9496b5c_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:Back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  75 => 24,  56 => 11,  50 => 10,  42 => 6,  36 => 5,  11 => 4,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/layout.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* {% block title %}*/
/*  Back office*/
/* {% endblock %}*/
/* */
/* */
/* {% block img %}*/
/*     <header class="intro-header" style="size: 10px !important;">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 style ="color:blue";>Back-office</h1>*/
/* "<style type="text/css"> */
/* .navbar-custom .nav li a {*/
/*     color: #428bca !important;*/
/*     padding: 20px;*/
/* }*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* */
/*   <h2>Bienvenue sur le back office </h2>*/
/*   <p> Lorsque vous desirer modifier une page du site, il vous suffit de cliquer sur l'onglet correspondant à vos envies</p>*/
/* */
/* */
/* */
/* {% endblock %}*/
