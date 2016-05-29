<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_17d775eb8e3bd25a1dffa6b24eda166f6e34a4d989bc84f22d057310071b49a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_2d13c82f84fe78d52d1a6e1ffa37724d494db8d553eb1abbf64c057e5fd6a9f1 = $this->env->getExtension("native_profiler");
        $__internal_2d13c82f84fe78d52d1a6e1ffa37724d494db8d553eb1abbf64c057e5fd6a9f1->enter($__internal_2d13c82f84fe78d52d1a6e1ffa37724d494db8d553eb1abbf64c057e5fd6a9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d13c82f84fe78d52d1a6e1ffa37724d494db8d553eb1abbf64c057e5fd6a9f1->leave($__internal_2d13c82f84fe78d52d1a6e1ffa37724d494db8d553eb1abbf64c057e5fd6a9f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd50574faffef7fe98ea18e40ba0df19d1effe4ecb3061e3fb40afd55829d731 = $this->env->getExtension("native_profiler");
        $__internal_bd50574faffef7fe98ea18e40ba0df19d1effe4ecb3061e3fb40afd55829d731->enter($__internal_bd50574faffef7fe98ea18e40ba0df19d1effe4ecb3061e3fb40afd55829d731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_bd50574faffef7fe98ea18e40ba0df19d1effe4ecb3061e3fb40afd55829d731->leave($__internal_bd50574faffef7fe98ea18e40ba0df19d1effe4ecb3061e3fb40afd55829d731_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
