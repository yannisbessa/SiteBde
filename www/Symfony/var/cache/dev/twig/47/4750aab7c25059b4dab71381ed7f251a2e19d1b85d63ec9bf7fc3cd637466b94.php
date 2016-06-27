<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b2098f1e229cd3728a9d63f6a93cdd4981c140d5f9571b8377e692f29a5431fd extends Twig_Template
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
        $__internal_d896118da117cf73ac2c832a918c744211554f1e75da4435133bdd4829d580f3 = $this->env->getExtension("native_profiler");
        $__internal_d896118da117cf73ac2c832a918c744211554f1e75da4435133bdd4829d580f3->enter($__internal_d896118da117cf73ac2c832a918c744211554f1e75da4435133bdd4829d580f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d896118da117cf73ac2c832a918c744211554f1e75da4435133bdd4829d580f3->leave($__internal_d896118da117cf73ac2c832a918c744211554f1e75da4435133bdd4829d580f3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
