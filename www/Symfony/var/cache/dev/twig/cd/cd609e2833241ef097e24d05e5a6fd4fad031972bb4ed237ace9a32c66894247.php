<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_56bee7c6b18aab1aa15da771a73b300b7edf9d29301412f2dd9842f03414648f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_8d0d37a929795ddbe2a771f2f9e2fff1fc795937751940c0e802525ccb4654c1 = $this->env->getExtension("native_profiler");
        $__internal_8d0d37a929795ddbe2a771f2f9e2fff1fc795937751940c0e802525ccb4654c1->enter($__internal_8d0d37a929795ddbe2a771f2f9e2fff1fc795937751940c0e802525ccb4654c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d0d37a929795ddbe2a771f2f9e2fff1fc795937751940c0e802525ccb4654c1->leave($__internal_8d0d37a929795ddbe2a771f2f9e2fff1fc795937751940c0e802525ccb4654c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae408c00dec13703a5eaf43f667759e985b641e3f5073ce52907fb5a94a38b43 = $this->env->getExtension("native_profiler");
        $__internal_ae408c00dec13703a5eaf43f667759e985b641e3f5073ce52907fb5a94a38b43->enter($__internal_ae408c00dec13703a5eaf43f667759e985b641e3f5073ce52907fb5a94a38b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ae408c00dec13703a5eaf43f667759e985b641e3f5073ce52907fb5a94a38b43->leave($__internal_ae408c00dec13703a5eaf43f667759e985b641e3f5073ce52907fb5a94a38b43_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a68664f87fa04f3fae83b64e82dcdcae91b7d2d669b204cd1ff8d63a5476d595 = $this->env->getExtension("native_profiler");
        $__internal_a68664f87fa04f3fae83b64e82dcdcae91b7d2d669b204cd1ff8d63a5476d595->enter($__internal_a68664f87fa04f3fae83b64e82dcdcae91b7d2d669b204cd1ff8d63a5476d595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a68664f87fa04f3fae83b64e82dcdcae91b7d2d669b204cd1ff8d63a5476d595->leave($__internal_a68664f87fa04f3fae83b64e82dcdcae91b7d2d669b204cd1ff8d63a5476d595_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
