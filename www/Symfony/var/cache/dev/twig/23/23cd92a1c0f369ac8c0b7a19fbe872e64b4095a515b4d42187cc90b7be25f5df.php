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
        $__internal_7a07bf03e3397bc308b007b0a354494cbf93d3ebbdaf95b4be4a323b7521eb6d = $this->env->getExtension("native_profiler");
        $__internal_7a07bf03e3397bc308b007b0a354494cbf93d3ebbdaf95b4be4a323b7521eb6d->enter($__internal_7a07bf03e3397bc308b007b0a354494cbf93d3ebbdaf95b4be4a323b7521eb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a07bf03e3397bc308b007b0a354494cbf93d3ebbdaf95b4be4a323b7521eb6d->leave($__internal_7a07bf03e3397bc308b007b0a354494cbf93d3ebbdaf95b4be4a323b7521eb6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_41a561b6d971a90c8ed4c2e833290b813870665bd92c10cd67f087db43b54bde = $this->env->getExtension("native_profiler");
        $__internal_41a561b6d971a90c8ed4c2e833290b813870665bd92c10cd67f087db43b54bde->enter($__internal_41a561b6d971a90c8ed4c2e833290b813870665bd92c10cd67f087db43b54bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_41a561b6d971a90c8ed4c2e833290b813870665bd92c10cd67f087db43b54bde->leave($__internal_41a561b6d971a90c8ed4c2e833290b813870665bd92c10cd67f087db43b54bde_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aedddabc6c1d4246c16bc90527802c46022ba0c7ee61783c5d85e3539a6e11b4 = $this->env->getExtension("native_profiler");
        $__internal_aedddabc6c1d4246c16bc90527802c46022ba0c7ee61783c5d85e3539a6e11b4->enter($__internal_aedddabc6c1d4246c16bc90527802c46022ba0c7ee61783c5d85e3539a6e11b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aedddabc6c1d4246c16bc90527802c46022ba0c7ee61783c5d85e3539a6e11b4->leave($__internal_aedddabc6c1d4246c16bc90527802c46022ba0c7ee61783c5d85e3539a6e11b4_prof);

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
