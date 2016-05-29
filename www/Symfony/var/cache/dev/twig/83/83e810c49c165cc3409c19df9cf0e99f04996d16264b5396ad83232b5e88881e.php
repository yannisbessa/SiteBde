<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_1230d51f6207416e9a74cdbf542fed3497e36c45692c0d01d5c315621762d14c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_75fc4afae3414f54eac89ed815546d8df6ab02969d8a2994d9527851f4f56cc6 = $this->env->getExtension("native_profiler");
        $__internal_75fc4afae3414f54eac89ed815546d8df6ab02969d8a2994d9527851f4f56cc6->enter($__internal_75fc4afae3414f54eac89ed815546d8df6ab02969d8a2994d9527851f4f56cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75fc4afae3414f54eac89ed815546d8df6ab02969d8a2994d9527851f4f56cc6->leave($__internal_75fc4afae3414f54eac89ed815546d8df6ab02969d8a2994d9527851f4f56cc6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d558d8d7df1d457fcf59e67033d93b13f088cf187def6530a1ecba468d1b1fc = $this->env->getExtension("native_profiler");
        $__internal_9d558d8d7df1d457fcf59e67033d93b13f088cf187def6530a1ecba468d1b1fc->enter($__internal_9d558d8d7df1d457fcf59e67033d93b13f088cf187def6530a1ecba468d1b1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_9d558d8d7df1d457fcf59e67033d93b13f088cf187def6530a1ecba468d1b1fc->leave($__internal_9d558d8d7df1d457fcf59e67033d93b13f088cf187def6530a1ecba468d1b1fc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
