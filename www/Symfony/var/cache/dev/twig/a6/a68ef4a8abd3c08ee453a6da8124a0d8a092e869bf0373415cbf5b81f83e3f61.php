<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_886e5725c515364ddb657aa3d5d5c5859171ade3d648f2720cdbee30f089b52a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_c8523bca2c213e62cd852160c48ed37cb56e42fb58f4cc0726ba626146c0042d = $this->env->getExtension("native_profiler");
        $__internal_c8523bca2c213e62cd852160c48ed37cb56e42fb58f4cc0726ba626146c0042d->enter($__internal_c8523bca2c213e62cd852160c48ed37cb56e42fb58f4cc0726ba626146c0042d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8523bca2c213e62cd852160c48ed37cb56e42fb58f4cc0726ba626146c0042d->leave($__internal_c8523bca2c213e62cd852160c48ed37cb56e42fb58f4cc0726ba626146c0042d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e80734d9e51fb253c13cae388ec73ce49d2488573958d7099c15c2b10cca5896 = $this->env->getExtension("native_profiler");
        $__internal_e80734d9e51fb253c13cae388ec73ce49d2488573958d7099c15c2b10cca5896->enter($__internal_e80734d9e51fb253c13cae388ec73ce49d2488573958d7099c15c2b10cca5896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_e80734d9e51fb253c13cae388ec73ce49d2488573958d7099c15c2b10cca5896->leave($__internal_e80734d9e51fb253c13cae388ec73ce49d2488573958d7099c15c2b10cca5896_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
