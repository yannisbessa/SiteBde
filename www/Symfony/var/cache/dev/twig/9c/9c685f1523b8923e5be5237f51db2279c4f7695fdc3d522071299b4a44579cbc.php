<?php

/* BDESiteBundle:Bde:Forum.html.twig */
class __TwigTemplate_896e74281f1349745d69da38fac7a19be4745a2f6876b77e41182e6b6ab21499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("BDESiteBundle::layout.html.twig", "BDESiteBundle:Bde:Forum.html.twig", 4);
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
        $__internal_26f97ab96084298ce11f2f4b8ce3ecb0067d8059df503c681874675c2aa58b9d = $this->env->getExtension("native_profiler");
        $__internal_26f97ab96084298ce11f2f4b8ce3ecb0067d8059df503c681874675c2aa58b9d->enter($__internal_26f97ab96084298ce11f2f4b8ce3ecb0067d8059df503c681874675c2aa58b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BDESiteBundle:Bde:Forum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26f97ab96084298ce11f2f4b8ce3ecb0067d8059df503c681874675c2aa58b9d->leave($__internal_26f97ab96084298ce11f2f4b8ce3ecb0067d8059df503c681874675c2aa58b9d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee1a41285e5f27b49e148d88c8f02c73d2bb0c52ddbaf83705865349f56c0c7a = $this->env->getExtension("native_profiler");
        $__internal_ee1a41285e5f27b49e148d88c8f02c73d2bb0c52ddbaf83705865349f56c0c7a->enter($__internal_ee1a41285e5f27b49e148d88c8f02c73d2bb0c52ddbaf83705865349f56c0c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Forum ";
        
        $__internal_ee1a41285e5f27b49e148d88c8f02c73d2bb0c52ddbaf83705865349f56c0c7a->leave($__internal_ee1a41285e5f27b49e148d88c8f02c73d2bb0c52ddbaf83705865349f56c0c7a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c0d8cc826bdba043b84635aa8a46125e72f2ce7018951bf0ecd7bae10464a0e = $this->env->getExtension("native_profiler");
        $__internal_5c0d8cc826bdba043b84635aa8a46125e72f2ce7018951bf0ecd7bae10464a0e->enter($__internal_5c0d8cc826bdba043b84635aa8a46125e72f2ce7018951bf0ecd7bae10464a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<p> Forum</p>
";
        
        $__internal_5c0d8cc826bdba043b84635aa8a46125e72f2ce7018951bf0ecd7bae10464a0e->leave($__internal_5c0d8cc826bdba043b84635aa8a46125e72f2ce7018951bf0ecd7bae10464a0e_prof);

    }

    public function getTemplateName()
    {
        return "BDESiteBundle:Bde:Forum.html.twig";
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
