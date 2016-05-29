<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_690e4010ed9e138fa73374110f675c388a57aa46def2737dd69af164668561d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31d91491f121f5266c191ea9a73015f6c3140f2e3d5b436e527db65b510930cc = $this->env->getExtension("native_profiler");
        $__internal_31d91491f121f5266c191ea9a73015f6c3140f2e3d5b436e527db65b510930cc->enter($__internal_31d91491f121f5266c191ea9a73015f6c3140f2e3d5b436e527db65b510930cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31d91491f121f5266c191ea9a73015f6c3140f2e3d5b436e527db65b510930cc->leave($__internal_31d91491f121f5266c191ea9a73015f6c3140f2e3d5b436e527db65b510930cc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e9df1f51f863bdee107b35e97f437986f512913fc76916d2e06faa731a81c24 = $this->env->getExtension("native_profiler");
        $__internal_8e9df1f51f863bdee107b35e97f437986f512913fc76916d2e06faa731a81c24->enter($__internal_8e9df1f51f863bdee107b35e97f437986f512913fc76916d2e06faa731a81c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_8e9df1f51f863bdee107b35e97f437986f512913fc76916d2e06faa731a81c24->leave($__internal_8e9df1f51f863bdee107b35e97f437986f512913fc76916d2e06faa731a81c24_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
