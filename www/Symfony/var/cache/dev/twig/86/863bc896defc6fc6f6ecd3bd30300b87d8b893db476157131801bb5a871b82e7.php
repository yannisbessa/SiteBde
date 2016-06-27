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
        $__internal_d151aa542494296b7b4271f1d35f3825a359413279c4261223acf7e67f287b46 = $this->env->getExtension("native_profiler");
        $__internal_d151aa542494296b7b4271f1d35f3825a359413279c4261223acf7e67f287b46->enter($__internal_d151aa542494296b7b4271f1d35f3825a359413279c4261223acf7e67f287b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d151aa542494296b7b4271f1d35f3825a359413279c4261223acf7e67f287b46->leave($__internal_d151aa542494296b7b4271f1d35f3825a359413279c4261223acf7e67f287b46_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b523e490c584b591cf636c65463dff28d94c2e125fb47afb7f2873067d26db22 = $this->env->getExtension("native_profiler");
        $__internal_b523e490c584b591cf636c65463dff28d94c2e125fb47afb7f2873067d26db22->enter($__internal_b523e490c584b591cf636c65463dff28d94c2e125fb47afb7f2873067d26db22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b523e490c584b591cf636c65463dff28d94c2e125fb47afb7f2873067d26db22->leave($__internal_b523e490c584b591cf636c65463dff28d94c2e125fb47afb7f2873067d26db22_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9faefa063f7a7f41d6ce85b916e889bc467a5c7e10b9ec22d299ebf526bb0bb5 = $this->env->getExtension("native_profiler");
        $__internal_9faefa063f7a7f41d6ce85b916e889bc467a5c7e10b9ec22d299ebf526bb0bb5->enter($__internal_9faefa063f7a7f41d6ce85b916e889bc467a5c7e10b9ec22d299ebf526bb0bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9faefa063f7a7f41d6ce85b916e889bc467a5c7e10b9ec22d299ebf526bb0bb5->leave($__internal_9faefa063f7a7f41d6ce85b916e889bc467a5c7e10b9ec22d299ebf526bb0bb5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d272e689b7d1d87fa676a1cb0fe0761623793095524f8189480626be6cbf9b61 = $this->env->getExtension("native_profiler");
        $__internal_d272e689b7d1d87fa676a1cb0fe0761623793095524f8189480626be6cbf9b61->enter($__internal_d272e689b7d1d87fa676a1cb0fe0761623793095524f8189480626be6cbf9b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d272e689b7d1d87fa676a1cb0fe0761623793095524f8189480626be6cbf9b61->leave($__internal_d272e689b7d1d87fa676a1cb0fe0761623793095524f8189480626be6cbf9b61_prof);

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
