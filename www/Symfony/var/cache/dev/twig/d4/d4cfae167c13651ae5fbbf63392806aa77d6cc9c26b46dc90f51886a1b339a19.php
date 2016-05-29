<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_6663b75f0df9b9d99a4c865a94c500cf3d1704de0d0450947b576f4993ea3f5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_8640e0d42a907549b5699f8c34fbf0eb02592b0741e61e12fd7a043576e02f2c = $this->env->getExtension("native_profiler");
        $__internal_8640e0d42a907549b5699f8c34fbf0eb02592b0741e61e12fd7a043576e02f2c->enter($__internal_8640e0d42a907549b5699f8c34fbf0eb02592b0741e61e12fd7a043576e02f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8640e0d42a907549b5699f8c34fbf0eb02592b0741e61e12fd7a043576e02f2c->leave($__internal_8640e0d42a907549b5699f8c34fbf0eb02592b0741e61e12fd7a043576e02f2c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1f17dc76ab64f97c8e7a52d49d9b80662f509405ed262d081dd06d36e544f2e = $this->env->getExtension("native_profiler");
        $__internal_a1f17dc76ab64f97c8e7a52d49d9b80662f509405ed262d081dd06d36e544f2e->enter($__internal_a1f17dc76ab64f97c8e7a52d49d9b80662f509405ed262d081dd06d36e544f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_a1f17dc76ab64f97c8e7a52d49d9b80662f509405ed262d081dd06d36e544f2e->leave($__internal_a1f17dc76ab64f97c8e7a52d49d9b80662f509405ed262d081dd06d36e544f2e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
