<?php

/* BDESiteBundle::Layout.html.twig */
class __TwigTemplate_fe3974e03e1b009249af9301e1a4d27a08d11ceb6e76db060f733b5f9f9bda89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layoutSite.html.twig", "BDESiteBundle::Layout.html.twig", 3);
        $this->blocks = array(
            'img' => array($this, 'block_img'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutSite.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5963c61b501d4d71aae746ee083b3802a00a013d4b1a4b5fa80871ba3596791 = $this->env->getExtension("native_profiler");
        $__internal_c5963c61b501d4d71aae746ee083b3802a00a013d4b1a4b5fa80871ba3596791->enter($__internal_c5963c61b501d4d71aae746ee083b3802a00a013d4b1a4b5fa80871ba3596791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle::Layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5963c61b501d4d71aae746ee083b3802a00a013d4b1a4b5fa80871ba3596791->leave($__internal_c5963c61b501d4d71aae746ee083b3802a00a013d4b1a4b5fa80871ba3596791_prof);

    }

    // line 7
    public function block_img($context, array $blocks = array())
    {
        $__internal_a340f3e5a8002682457db1b9fd92b74760984232ce41a480abd3171ceec3e360 = $this->env->getExtension("native_profiler");
        $__internal_a340f3e5a8002682457db1b9fd92b74760984232ce41a480abd3171ceec3e360->enter($__internal_a340f3e5a8002682457db1b9fd92b74760984232ce41a480abd3171ceec3e360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "img"));

        // line 8
        echo "

";
        
        $__internal_a340f3e5a8002682457db1b9fd92b74760984232ce41a480abd3171ceec3e360->leave($__internal_a340f3e5a8002682457db1b9fd92b74760984232ce41a480abd3171ceec3e360_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c7548c1c5d1105720e91db2d3b65b9a14fbb13b2ebe171f7eda178842e77e66 = $this->env->getExtension("native_profiler");
        $__internal_5c7548c1c5d1105720e91db2d3b65b9a14fbb13b2ebe171f7eda178842e77e66->enter($__internal_5c7548c1c5d1105720e91db2d3b65b9a14fbb13b2ebe171f7eda178842e77e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "

";
        
        $__internal_5c7548c1c5d1105720e91db2d3b65b9a14fbb13b2ebe171f7eda178842e77e66->leave($__internal_5c7548c1c5d1105720e91db2d3b65b9a14fbb13b2ebe171f7eda178842e77e66_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  50 => 12,  41 => 8,  35 => 7,  11 => 3,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layoutSite.html.twig" %}*/
/* */
/* */
/* */
/* {% block img %}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* {% endblock %}*/
