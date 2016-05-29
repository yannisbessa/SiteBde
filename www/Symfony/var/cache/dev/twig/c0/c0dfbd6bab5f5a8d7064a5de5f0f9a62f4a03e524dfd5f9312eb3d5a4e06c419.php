<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_17550b4095e71f1294f702a631c1d5c9becf0e4d66e5cd88cff468b459165896 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_1e45bb6fdfe476845b2f8b89363815da5764f24779cb69f8a1f78c7b20e50480 = $this->env->getExtension("native_profiler");
        $__internal_1e45bb6fdfe476845b2f8b89363815da5764f24779cb69f8a1f78c7b20e50480->enter($__internal_1e45bb6fdfe476845b2f8b89363815da5764f24779cb69f8a1f78c7b20e50480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e45bb6fdfe476845b2f8b89363815da5764f24779cb69f8a1f78c7b20e50480->leave($__internal_1e45bb6fdfe476845b2f8b89363815da5764f24779cb69f8a1f78c7b20e50480_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b58be2fc1512ef76148e62ecd2923567c6f4557b246e124b65fbd8f3b2d21cdb = $this->env->getExtension("native_profiler");
        $__internal_b58be2fc1512ef76148e62ecd2923567c6f4557b246e124b65fbd8f3b2d21cdb->enter($__internal_b58be2fc1512ef76148e62ecd2923567c6f4557b246e124b65fbd8f3b2d21cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b58be2fc1512ef76148e62ecd2923567c6f4557b246e124b65fbd8f3b2d21cdb->leave($__internal_b58be2fc1512ef76148e62ecd2923567c6f4557b246e124b65fbd8f3b2d21cdb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
