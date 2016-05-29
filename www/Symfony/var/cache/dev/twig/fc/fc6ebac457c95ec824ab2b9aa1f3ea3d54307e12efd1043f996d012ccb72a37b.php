<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_b86e98c97356a8e253ddd989e6833b1bd434e6ea5e63fc9af5c9f83732b03848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_b7e038bbd8821842ca8a1a36ade9d591fe2ead275cc3c9b67c2f9935d0969ffb = $this->env->getExtension("native_profiler");
        $__internal_b7e038bbd8821842ca8a1a36ade9d591fe2ead275cc3c9b67c2f9935d0969ffb->enter($__internal_b7e038bbd8821842ca8a1a36ade9d591fe2ead275cc3c9b67c2f9935d0969ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7e038bbd8821842ca8a1a36ade9d591fe2ead275cc3c9b67c2f9935d0969ffb->leave($__internal_b7e038bbd8821842ca8a1a36ade9d591fe2ead275cc3c9b67c2f9935d0969ffb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c9af6e08939a68d222d787081c4be30b11e722b2d83b2929e6b5a40e4cba49c = $this->env->getExtension("native_profiler");
        $__internal_9c9af6e08939a68d222d787081c4be30b11e722b2d83b2929e6b5a40e4cba49c->enter($__internal_9c9af6e08939a68d222d787081c4be30b11e722b2d83b2929e6b5a40e4cba49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_9c9af6e08939a68d222d787081c4be30b11e722b2d83b2929e6b5a40e4cba49c->leave($__internal_9c9af6e08939a68d222d787081c4be30b11e722b2d83b2929e6b5a40e4cba49c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
