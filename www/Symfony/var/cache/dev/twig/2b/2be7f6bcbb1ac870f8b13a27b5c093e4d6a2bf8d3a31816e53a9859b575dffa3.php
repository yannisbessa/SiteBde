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
        $__internal_4d17bac3714f73dbf95849506cf53dbefdeec31e259543dbd60f15e9ad7273e5 = $this->env->getExtension("native_profiler");
        $__internal_4d17bac3714f73dbf95849506cf53dbefdeec31e259543dbd60f15e9ad7273e5->enter($__internal_4d17bac3714f73dbf95849506cf53dbefdeec31e259543dbd60f15e9ad7273e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d17bac3714f73dbf95849506cf53dbefdeec31e259543dbd60f15e9ad7273e5->leave($__internal_4d17bac3714f73dbf95849506cf53dbefdeec31e259543dbd60f15e9ad7273e5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f7611e7c131cec545b163102e5b8d1a5e1637c5552fa9aa20c53ebdcf370e2ee = $this->env->getExtension("native_profiler");
        $__internal_f7611e7c131cec545b163102e5b8d1a5e1637c5552fa9aa20c53ebdcf370e2ee->enter($__internal_f7611e7c131cec545b163102e5b8d1a5e1637c5552fa9aa20c53ebdcf370e2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f7611e7c131cec545b163102e5b8d1a5e1637c5552fa9aa20c53ebdcf370e2ee->leave($__internal_f7611e7c131cec545b163102e5b8d1a5e1637c5552fa9aa20c53ebdcf370e2ee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bf3a708d5b9083ceed51f04e4097abc7cbb969be5dfd9b58f15db24a495c3a3 = $this->env->getExtension("native_profiler");
        $__internal_3bf3a708d5b9083ceed51f04e4097abc7cbb969be5dfd9b58f15db24a495c3a3->enter($__internal_3bf3a708d5b9083ceed51f04e4097abc7cbb969be5dfd9b58f15db24a495c3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3bf3a708d5b9083ceed51f04e4097abc7cbb969be5dfd9b58f15db24a495c3a3->leave($__internal_3bf3a708d5b9083ceed51f04e4097abc7cbb969be5dfd9b58f15db24a495c3a3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f0df3eabde1a2c5b708f6c7c88ae09fec2401b9cead43042ed761a23b9ba687 = $this->env->getExtension("native_profiler");
        $__internal_5f0df3eabde1a2c5b708f6c7c88ae09fec2401b9cead43042ed761a23b9ba687->enter($__internal_5f0df3eabde1a2c5b708f6c7c88ae09fec2401b9cead43042ed761a23b9ba687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5f0df3eabde1a2c5b708f6c7c88ae09fec2401b9cead43042ed761a23b9ba687->leave($__internal_5f0df3eabde1a2c5b708f6c7c88ae09fec2401b9cead43042ed761a23b9ba687_prof);

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
