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
        $__internal_64a906013138f8be434e4429d8cd194b186ebf3b65c8176854ec29e6362ddfa2 = $this->env->getExtension("native_profiler");
        $__internal_64a906013138f8be434e4429d8cd194b186ebf3b65c8176854ec29e6362ddfa2->enter($__internal_64a906013138f8be434e4429d8cd194b186ebf3b65c8176854ec29e6362ddfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64a906013138f8be434e4429d8cd194b186ebf3b65c8176854ec29e6362ddfa2->leave($__internal_64a906013138f8be434e4429d8cd194b186ebf3b65c8176854ec29e6362ddfa2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d4e1db07c4d8e4ffa8ce653cffddad9a73dd588490383f4dd50230975b82419 = $this->env->getExtension("native_profiler");
        $__internal_9d4e1db07c4d8e4ffa8ce653cffddad9a73dd588490383f4dd50230975b82419->enter($__internal_9d4e1db07c4d8e4ffa8ce653cffddad9a73dd588490383f4dd50230975b82419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9d4e1db07c4d8e4ffa8ce653cffddad9a73dd588490383f4dd50230975b82419->leave($__internal_9d4e1db07c4d8e4ffa8ce653cffddad9a73dd588490383f4dd50230975b82419_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da73b00f1aef0c08f3b165bb01cfd7cc6a6ca49f545dc6d8ea98e18bacc8f652 = $this->env->getExtension("native_profiler");
        $__internal_da73b00f1aef0c08f3b165bb01cfd7cc6a6ca49f545dc6d8ea98e18bacc8f652->enter($__internal_da73b00f1aef0c08f3b165bb01cfd7cc6a6ca49f545dc6d8ea98e18bacc8f652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_da73b00f1aef0c08f3b165bb01cfd7cc6a6ca49f545dc6d8ea98e18bacc8f652->leave($__internal_da73b00f1aef0c08f3b165bb01cfd7cc6a6ca49f545dc6d8ea98e18bacc8f652_prof);

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
