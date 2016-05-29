<?php

/* @BDESite/Bde/Forum.html.twig */
class __TwigTemplate_5f2eb7a06e9d5dc7330f1024aa26370f4882774f9e019eadba9b04fe77a280e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "@BDESite/Bde/Forum.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BDESiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54e39c6fa5c9396a00d8f23ac4142258ae912188e40ca883849655bcb06dfd08 = $this->env->getExtension("native_profiler");
        $__internal_54e39c6fa5c9396a00d8f23ac4142258ae912188e40ca883849655bcb06dfd08->enter($__internal_54e39c6fa5c9396a00d8f23ac4142258ae912188e40ca883849655bcb06dfd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BDESite/Bde/Forum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54e39c6fa5c9396a00d8f23ac4142258ae912188e40ca883849655bcb06dfd08->leave($__internal_54e39c6fa5c9396a00d8f23ac4142258ae912188e40ca883849655bcb06dfd08_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_58c393ff901ff5aefb33ea1176412edf26df708c8862545669fbb5861f0a94b0 = $this->env->getExtension("native_profiler");
        $__internal_58c393ff901ff5aefb33ea1176412edf26df708c8862545669fbb5861f0a94b0->enter($__internal_58c393ff901ff5aefb33ea1176412edf26df708c8862545669fbb5861f0a94b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Forum ";
        
        $__internal_58c393ff901ff5aefb33ea1176412edf26df708c8862545669fbb5861f0a94b0->leave($__internal_58c393ff901ff5aefb33ea1176412edf26df708c8862545669fbb5861f0a94b0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4417bc2c964b8f1b62b2b4a62805c39c1d21601a62ef3561869deceed8fd9e6b = $this->env->getExtension("native_profiler");
        $__internal_4417bc2c964b8f1b62b2b4a62805c39c1d21601a62ef3561869deceed8fd9e6b->enter($__internal_4417bc2c964b8f1b62b2b4a62805c39c1d21601a62ef3561869deceed8fd9e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<p> Forum</p>
";
        
        $__internal_4417bc2c964b8f1b62b2b4a62805c39c1d21601a62ef3561869deceed8fd9e6b->leave($__internal_4417bc2c964b8f1b62b2b4a62805c39c1d21601a62ef3561869deceed8fd9e6b_prof);

    }

    public function getTemplateName()
    {
        return "@BDESite/Bde/Forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  48 => 8,  35 => 6,  11 => 4,);
    }
}
/* {# src/BDE/SiteBundle/Resources/views/Bde/index.html.twig #}*/
/* */
/* */
/* {% extends "BDESiteBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} Forum {% endblock %}*/
/* */
/* {% block body %}*/
/* <p> Forum</p>*/
/* {% endblock %}*/
