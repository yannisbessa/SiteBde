<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_139708e478504adac92a02539d9b9b50b2c91d4bfe1e5e8a41abf315ada435b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_19b716ea1726bd9f542fc32f08e6488f0adcd0ebcf400c75aca750c38faed57d = $this->env->getExtension("native_profiler");
        $__internal_19b716ea1726bd9f542fc32f08e6488f0adcd0ebcf400c75aca750c38faed57d->enter($__internal_19b716ea1726bd9f542fc32f08e6488f0adcd0ebcf400c75aca750c38faed57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19b716ea1726bd9f542fc32f08e6488f0adcd0ebcf400c75aca750c38faed57d->leave($__internal_19b716ea1726bd9f542fc32f08e6488f0adcd0ebcf400c75aca750c38faed57d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53ffbe3ae5b7b223a528a66fd0e61ba5a0f1752b2a2ad506653caca230d525bb = $this->env->getExtension("native_profiler");
        $__internal_53ffbe3ae5b7b223a528a66fd0e61ba5a0f1752b2a2ad506653caca230d525bb->enter($__internal_53ffbe3ae5b7b223a528a66fd0e61ba5a0f1752b2a2ad506653caca230d525bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_53ffbe3ae5b7b223a528a66fd0e61ba5a0f1752b2a2ad506653caca230d525bb->leave($__internal_53ffbe3ae5b7b223a528a66fd0e61ba5a0f1752b2a2ad506653caca230d525bb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
