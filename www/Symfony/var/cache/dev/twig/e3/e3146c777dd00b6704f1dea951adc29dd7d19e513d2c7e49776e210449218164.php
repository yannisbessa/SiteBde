<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_2fa4e8ea9c90dcf0a4204092923b3342a38a91c134d1a9253091d479184451c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_e0d00090188e878622c06a29b011b33212c032a2a84c49af42240b12fd0fec0b = $this->env->getExtension("native_profiler");
        $__internal_e0d00090188e878622c06a29b011b33212c032a2a84c49af42240b12fd0fec0b->enter($__internal_e0d00090188e878622c06a29b011b33212c032a2a84c49af42240b12fd0fec0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0d00090188e878622c06a29b011b33212c032a2a84c49af42240b12fd0fec0b->leave($__internal_e0d00090188e878622c06a29b011b33212c032a2a84c49af42240b12fd0fec0b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d715fbaa539831a41491f9d6f6fc33c281605fa82e8f897c24d2416661ae74a = $this->env->getExtension("native_profiler");
        $__internal_7d715fbaa539831a41491f9d6f6fc33c281605fa82e8f897c24d2416661ae74a->enter($__internal_7d715fbaa539831a41491f9d6f6fc33c281605fa82e8f897c24d2416661ae74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_7d715fbaa539831a41491f9d6f6fc33c281605fa82e8f897c24d2416661ae74a->leave($__internal_7d715fbaa539831a41491f9d6f6fc33c281605fa82e8f897c24d2416661ae74a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
