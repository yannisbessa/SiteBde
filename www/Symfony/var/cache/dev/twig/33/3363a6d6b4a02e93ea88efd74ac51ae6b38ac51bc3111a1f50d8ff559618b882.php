<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_41f5214c7265e12acb1f2ca8355f921f6b891e8140079fa8dae5e7bb704dc4d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_2c04c9bd8c8ea8b6bbcf6d16d1f517bf93e77f4c09547ef9b5ba8598297dba9f = $this->env->getExtension("native_profiler");
        $__internal_2c04c9bd8c8ea8b6bbcf6d16d1f517bf93e77f4c09547ef9b5ba8598297dba9f->enter($__internal_2c04c9bd8c8ea8b6bbcf6d16d1f517bf93e77f4c09547ef9b5ba8598297dba9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c04c9bd8c8ea8b6bbcf6d16d1f517bf93e77f4c09547ef9b5ba8598297dba9f->leave($__internal_2c04c9bd8c8ea8b6bbcf6d16d1f517bf93e77f4c09547ef9b5ba8598297dba9f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3299641a518a1a3d242d60379d1dc1d246d34adbc725287d5c4d53502d93ef47 = $this->env->getExtension("native_profiler");
        $__internal_3299641a518a1a3d242d60379d1dc1d246d34adbc725287d5c4d53502d93ef47->enter($__internal_3299641a518a1a3d242d60379d1dc1d246d34adbc725287d5c4d53502d93ef47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_3299641a518a1a3d242d60379d1dc1d246d34adbc725287d5c4d53502d93ef47->leave($__internal_3299641a518a1a3d242d60379d1dc1d246d34adbc725287d5c4d53502d93ef47_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
