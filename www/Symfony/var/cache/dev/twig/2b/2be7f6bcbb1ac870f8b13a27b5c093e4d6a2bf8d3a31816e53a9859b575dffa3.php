<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_561a0626fa694dfcd859c92bd021e24fcf07ee7250b1cad8442a1cfa6b88bc2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d3f01f1e1efe54bb38f3701c1ea508e554bf756fb5eb12daa2fa7c366ab9217 = $this->env->getExtension("native_profiler");
        $__internal_8d3f01f1e1efe54bb38f3701c1ea508e554bf756fb5eb12daa2fa7c366ab9217->enter($__internal_8d3f01f1e1efe54bb38f3701c1ea508e554bf756fb5eb12daa2fa7c366ab9217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d3f01f1e1efe54bb38f3701c1ea508e554bf756fb5eb12daa2fa7c366ab9217->leave($__internal_8d3f01f1e1efe54bb38f3701c1ea508e554bf756fb5eb12daa2fa7c366ab9217_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3de53357217f3fad79edac0f3aa34e08cf4d58ed45670bff83c4a1d9aa7308c = $this->env->getExtension("native_profiler");
        $__internal_a3de53357217f3fad79edac0f3aa34e08cf4d58ed45670bff83c4a1d9aa7308c->enter($__internal_a3de53357217f3fad79edac0f3aa34e08cf4d58ed45670bff83c4a1d9aa7308c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a3de53357217f3fad79edac0f3aa34e08cf4d58ed45670bff83c4a1d9aa7308c->leave($__internal_a3de53357217f3fad79edac0f3aa34e08cf4d58ed45670bff83c4a1d9aa7308c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f02658a809b7a589a66b160ffc335d2ae1d148918a08a811ad37c692e2b51a4 = $this->env->getExtension("native_profiler");
        $__internal_2f02658a809b7a589a66b160ffc335d2ae1d148918a08a811ad37c692e2b51a4->enter($__internal_2f02658a809b7a589a66b160ffc335d2ae1d148918a08a811ad37c692e2b51a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2f02658a809b7a589a66b160ffc335d2ae1d148918a08a811ad37c692e2b51a4->leave($__internal_2f02658a809b7a589a66b160ffc335d2ae1d148918a08a811ad37c692e2b51a4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_77bd7edc8ae80fbc5c011080bde34bb36e097f98a0e6feccc5943e5506b44f15 = $this->env->getExtension("native_profiler");
        $__internal_77bd7edc8ae80fbc5c011080bde34bb36e097f98a0e6feccc5943e5506b44f15->enter($__internal_77bd7edc8ae80fbc5c011080bde34bb36e097f98a0e6feccc5943e5506b44f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_77bd7edc8ae80fbc5c011080bde34bb36e097f98a0e6feccc5943e5506b44f15->leave($__internal_77bd7edc8ae80fbc5c011080bde34bb36e097f98a0e6feccc5943e5506b44f15_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
