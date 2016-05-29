<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0dedc2b4a791cbf17423313398311d76b9792f86fd16999f410cbac0afbf0aad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'img' => array($this, 'block_img'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f0e453be7494eaf5971df10899f6ad538e0bacd772e9f7625b6e984bde935a4 = $this->env->getExtension("native_profiler");
        $__internal_6f0e453be7494eaf5971df10899f6ad538e0bacd772e9f7625b6e984bde935a4->enter($__internal_6f0e453be7494eaf5971df10899f6ad538e0bacd772e9f7625b6e984bde935a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f0e453be7494eaf5971df10899f6ad538e0bacd772e9f7625b6e984bde935a4->leave($__internal_6f0e453be7494eaf5971df10899f6ad538e0bacd772e9f7625b6e984bde935a4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c097af4226dc001a1fce7e0adfaa240721459f8f1dd3b7a97e548c77fdf2e630 = $this->env->getExtension("native_profiler");
        $__internal_c097af4226dc001a1fce7e0adfaa240721459f8f1dd3b7a97e548c77fdf2e630->enter($__internal_c097af4226dc001a1fce7e0adfaa240721459f8f1dd3b7a97e548c77fdf2e630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Connexion ";
        
        $__internal_c097af4226dc001a1fce7e0adfaa240721459f8f1dd3b7a97e548c77fdf2e630->leave($__internal_c097af4226dc001a1fce7e0adfaa240721459f8f1dd3b7a97e548c77fdf2e630_prof);

    }

    // line 8
    public function block_img($context, array $blocks = array())
    {
        $__internal_2808e7a67e05b3610990451b85cbc767304d923d6316e1d446d077e844781278 = $this->env->getExtension("native_profiler");
        $__internal_2808e7a67e05b3610990451b85cbc767304d923d6316e1d446d077e844781278->enter($__internal_2808e7a67e05b3610990451b85cbc767304d923d6316e1d446d077e844781278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 9
        echo "    <header class=\"intro-header\" style=\"size: 10px !important;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                  <div class=\"site-heading\">
                        <h1 style =\"color:black\";>Connexion</h1>

";
        
        $__internal_2808e7a67e05b3610990451b85cbc767304d923d6316e1d446d077e844781278->leave($__internal_2808e7a67e05b3610990451b85cbc767304d923d6316e1d446d077e844781278_prof);

    }

    // line 20
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f8d7f7b88ec8a3221e85bb5d6757fb35579bd5dfed83e0c38b6a5e0d9e36e59 = $this->env->getExtension("native_profiler");
        $__internal_8f8d7f7b88ec8a3221e85bb5d6757fb35579bd5dfed83e0c38b6a5e0d9e36e59->enter($__internal_8f8d7f7b88ec8a3221e85bb5d6757fb35579bd5dfed83e0c38b6a5e0d9e36e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 21
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 22
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 24
        echo "
<div class=\"row\"> <p>CConnexion</p></div>
<form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
        
        $__internal_8f8d7f7b88ec8a3221e85bb5d6757fb35579bd5dfed83e0c38b6a5e0d9e36e59->leave($__internal_8f8d7f7b88ec8a3221e85bb5d6757fb35579bd5dfed83e0c38b6a5e0d9e36e59_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 38,  112 => 36,  105 => 32,  100 => 30,  96 => 29,  91 => 27,  87 => 26,  83 => 24,  77 => 22,  75 => 21,  69 => 20,  55 => 9,  49 => 8,  36 => 7,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* */
/* {% block title %}{{ parent() }} Connexion {% endblock %}*/
/* {% block img %}*/
/*     <header class="intro-header" style="size: 10px !important;">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                   <div class="site-heading">*/
/*                         <h1 style ="color:black";>Connexion</h1>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <div class="row"> <p>CConnexion</p></div>*/
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
/* */
