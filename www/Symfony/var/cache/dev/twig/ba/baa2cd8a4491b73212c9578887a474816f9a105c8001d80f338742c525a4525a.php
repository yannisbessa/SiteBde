<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e69f7b955dfb78a01d4f1caf84c504b23d7e6fc650ef0e8c8ac09bc7ee6df9b9 extends Twig_Template
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
        $__internal_089cabfa3b04e3ba1979c4d89dcfb26b1abe5c36efcd158590507f9229ad841e = $this->env->getExtension("native_profiler");
        $__internal_089cabfa3b04e3ba1979c4d89dcfb26b1abe5c36efcd158590507f9229ad841e->enter($__internal_089cabfa3b04e3ba1979c4d89dcfb26b1abe5c36efcd158590507f9229ad841e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_089cabfa3b04e3ba1979c4d89dcfb26b1abe5c36efcd158590507f9229ad841e->leave($__internal_089cabfa3b04e3ba1979c4d89dcfb26b1abe5c36efcd158590507f9229ad841e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
