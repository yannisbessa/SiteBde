<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_b8f92c9f5adeac46ab04692c95865aa8eddfc838e44f07627a14d7087fffdc68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_f26ca723aca10a960cda80984d7d510d5e55b9065755ae9c4b3202ea63b29110 = $this->env->getExtension("native_profiler");
        $__internal_f26ca723aca10a960cda80984d7d510d5e55b9065755ae9c4b3202ea63b29110->enter($__internal_f26ca723aca10a960cda80984d7d510d5e55b9065755ae9c4b3202ea63b29110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f26ca723aca10a960cda80984d7d510d5e55b9065755ae9c4b3202ea63b29110->leave($__internal_f26ca723aca10a960cda80984d7d510d5e55b9065755ae9c4b3202ea63b29110_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac32813eed98381b89dac21cb1f3b62e8183fc5431b5cb0eb87114c0f7c68973 = $this->env->getExtension("native_profiler");
        $__internal_ac32813eed98381b89dac21cb1f3b62e8183fc5431b5cb0eb87114c0f7c68973->enter($__internal_ac32813eed98381b89dac21cb1f3b62e8183fc5431b5cb0eb87114c0f7c68973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_ac32813eed98381b89dac21cb1f3b62e8183fc5431b5cb0eb87114c0f7c68973->leave($__internal_ac32813eed98381b89dac21cb1f3b62e8183fc5431b5cb0eb87114c0f7c68973_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
