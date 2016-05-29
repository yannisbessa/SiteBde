<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_69d52d6d1bbbe28610729e7c33e659b7e0d3186d0ef909e36fe3c1fdca0a3bce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d923ca02c5bd19f121d41e1a76c7c571e3de48fb013e23c0db5518552a23eb2c = $this->env->getExtension("native_profiler");
        $__internal_d923ca02c5bd19f121d41e1a76c7c571e3de48fb013e23c0db5518552a23eb2c->enter($__internal_d923ca02c5bd19f121d41e1a76c7c571e3de48fb013e23c0db5518552a23eb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d923ca02c5bd19f121d41e1a76c7c571e3de48fb013e23c0db5518552a23eb2c->leave($__internal_d923ca02c5bd19f121d41e1a76c7c571e3de48fb013e23c0db5518552a23eb2c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da3605564bf48b140911577c5bdff80bddc147eaab23164069db3ca07819e215 = $this->env->getExtension("native_profiler");
        $__internal_da3605564bf48b140911577c5bdff80bddc147eaab23164069db3ca07819e215->enter($__internal_da3605564bf48b140911577c5bdff80bddc147eaab23164069db3ca07819e215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_da3605564bf48b140911577c5bdff80bddc147eaab23164069db3ca07819e215->leave($__internal_da3605564bf48b140911577c5bdff80bddc147eaab23164069db3ca07819e215_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a99c3db2a9448347e4d12f0ecff55436fc48b35d92232fee46f7eafc086eb54b = $this->env->getExtension("native_profiler");
        $__internal_a99c3db2a9448347e4d12f0ecff55436fc48b35d92232fee46f7eafc086eb54b->enter($__internal_a99c3db2a9448347e4d12f0ecff55436fc48b35d92232fee46f7eafc086eb54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a99c3db2a9448347e4d12f0ecff55436fc48b35d92232fee46f7eafc086eb54b->leave($__internal_a99c3db2a9448347e4d12f0ecff55436fc48b35d92232fee46f7eafc086eb54b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
