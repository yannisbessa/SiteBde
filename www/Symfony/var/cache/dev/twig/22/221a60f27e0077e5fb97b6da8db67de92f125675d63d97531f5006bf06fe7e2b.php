<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_25156f92873a64e0da7659f1c35e30bd7c2616a8cae4605ead430df63816756f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76095fd4ed774c6f7032bd15d3c5df9acc791b8dd78c7404ba42684e62912fa8 = $this->env->getExtension("native_profiler");
        $__internal_76095fd4ed774c6f7032bd15d3c5df9acc791b8dd78c7404ba42684e62912fa8->enter($__internal_76095fd4ed774c6f7032bd15d3c5df9acc791b8dd78c7404ba42684e62912fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_76095fd4ed774c6f7032bd15d3c5df9acc791b8dd78c7404ba42684e62912fa8->leave($__internal_76095fd4ed774c6f7032bd15d3c5df9acc791b8dd78c7404ba42684e62912fa8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
