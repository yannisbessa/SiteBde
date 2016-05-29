<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_c009a911a3e66c62d7a27dbb13a6519fd1acf4e1d4af83f39008579525edbb87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_53893492d15eafcbad59b5390865d4ff71ca1c9138a22189457cee5e1baf4238 = $this->env->getExtension("native_profiler");
        $__internal_53893492d15eafcbad59b5390865d4ff71ca1c9138a22189457cee5e1baf4238->enter($__internal_53893492d15eafcbad59b5390865d4ff71ca1c9138a22189457cee5e1baf4238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53893492d15eafcbad59b5390865d4ff71ca1c9138a22189457cee5e1baf4238->leave($__internal_53893492d15eafcbad59b5390865d4ff71ca1c9138a22189457cee5e1baf4238_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_79efe8dd4e834c337af6222754a32c1148be214c2d52b21ecdf393a241c50ecd = $this->env->getExtension("native_profiler");
        $__internal_79efe8dd4e834c337af6222754a32c1148be214c2d52b21ecdf393a241c50ecd->enter($__internal_79efe8dd4e834c337af6222754a32c1148be214c2d52b21ecdf393a241c50ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_79efe8dd4e834c337af6222754a32c1148be214c2d52b21ecdf393a241c50ecd->leave($__internal_79efe8dd4e834c337af6222754a32c1148be214c2d52b21ecdf393a241c50ecd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
