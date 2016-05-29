<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_5a7db25777b932e73d2239cae59e93ccb9c3dcdf27dbbe9f63b4dfbea4d32151 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b087ebd15f8d0281e5f637b4236ea6a9c9cacb51489bf62afe4b87a538ab79c8 = $this->env->getExtension("native_profiler");
        $__internal_b087ebd15f8d0281e5f637b4236ea6a9c9cacb51489bf62afe4b87a538ab79c8->enter($__internal_b087ebd15f8d0281e5f637b4236ea6a9c9cacb51489bf62afe4b87a538ab79c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b087ebd15f8d0281e5f637b4236ea6a9c9cacb51489bf62afe4b87a538ab79c8->leave($__internal_b087ebd15f8d0281e5f637b4236ea6a9c9cacb51489bf62afe4b87a538ab79c8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a33b0e8ff3ae685df6982c82bc1445f91deb64a56ff6f4904e84bcadbb50d365 = $this->env->getExtension("native_profiler");
        $__internal_a33b0e8ff3ae685df6982c82bc1445f91deb64a56ff6f4904e84bcadbb50d365->enter($__internal_a33b0e8ff3ae685df6982c82bc1445f91deb64a56ff6f4904e84bcadbb50d365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a33b0e8ff3ae685df6982c82bc1445f91deb64a56ff6f4904e84bcadbb50d365->leave($__internal_a33b0e8ff3ae685df6982c82bc1445f91deb64a56ff6f4904e84bcadbb50d365_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
