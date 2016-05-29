<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_22383cb7fbba1b563ee8ee9d06cdae266cf668eb66f50374a475d918000eb842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_b8b40a44428b3a21193fba80be1fad20ff091cecc7cff4b4bff9a936d75f4def = $this->env->getExtension("native_profiler");
        $__internal_b8b40a44428b3a21193fba80be1fad20ff091cecc7cff4b4bff9a936d75f4def->enter($__internal_b8b40a44428b3a21193fba80be1fad20ff091cecc7cff4b4bff9a936d75f4def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8b40a44428b3a21193fba80be1fad20ff091cecc7cff4b4bff9a936d75f4def->leave($__internal_b8b40a44428b3a21193fba80be1fad20ff091cecc7cff4b4bff9a936d75f4def_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f912e13347fe830ca5c1e0ab4f7ad5b29e707a97276e7038624d93019ec6f5ad = $this->env->getExtension("native_profiler");
        $__internal_f912e13347fe830ca5c1e0ab4f7ad5b29e707a97276e7038624d93019ec6f5ad->enter($__internal_f912e13347fe830ca5c1e0ab4f7ad5b29e707a97276e7038624d93019ec6f5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f912e13347fe830ca5c1e0ab4f7ad5b29e707a97276e7038624d93019ec6f5ad->leave($__internal_f912e13347fe830ca5c1e0ab4f7ad5b29e707a97276e7038624d93019ec6f5ad_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_89d2a86d705fb665714624996da61ee8cbc583c216b67a5073981014914ff123 = $this->env->getExtension("native_profiler");
        $__internal_89d2a86d705fb665714624996da61ee8cbc583c216b67a5073981014914ff123->enter($__internal_89d2a86d705fb665714624996da61ee8cbc583c216b67a5073981014914ff123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_89d2a86d705fb665714624996da61ee8cbc583c216b67a5073981014914ff123->leave($__internal_89d2a86d705fb665714624996da61ee8cbc583c216b67a5073981014914ff123_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7670847be83281042f1231d800209c50cbdf8756ea8d1092f8c602fd8b92cadb = $this->env->getExtension("native_profiler");
        $__internal_7670847be83281042f1231d800209c50cbdf8756ea8d1092f8c602fd8b92cadb->enter($__internal_7670847be83281042f1231d800209c50cbdf8756ea8d1092f8c602fd8b92cadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7670847be83281042f1231d800209c50cbdf8756ea8d1092f8c602fd8b92cadb->leave($__internal_7670847be83281042f1231d800209c50cbdf8756ea8d1092f8c602fd8b92cadb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
