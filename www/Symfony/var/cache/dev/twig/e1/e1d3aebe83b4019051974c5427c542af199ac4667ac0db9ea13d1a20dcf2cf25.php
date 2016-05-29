<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_b761afa24cc424873091c108daf0dc0407d8699b54873f3f912edab54b3285a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_a57f3ea72518dfc75b7b977c91c0722802d0c32df21ed2bce3ba3774fba7ff89 = $this->env->getExtension("native_profiler");
        $__internal_a57f3ea72518dfc75b7b977c91c0722802d0c32df21ed2bce3ba3774fba7ff89->enter($__internal_a57f3ea72518dfc75b7b977c91c0722802d0c32df21ed2bce3ba3774fba7ff89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a57f3ea72518dfc75b7b977c91c0722802d0c32df21ed2bce3ba3774fba7ff89->leave($__internal_a57f3ea72518dfc75b7b977c91c0722802d0c32df21ed2bce3ba3774fba7ff89_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd249b4506a7235cafdd02c5db13f9fe5bbf638509878695694dfaa0cd128155 = $this->env->getExtension("native_profiler");
        $__internal_bd249b4506a7235cafdd02c5db13f9fe5bbf638509878695694dfaa0cd128155->enter($__internal_bd249b4506a7235cafdd02c5db13f9fe5bbf638509878695694dfaa0cd128155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bd249b4506a7235cafdd02c5db13f9fe5bbf638509878695694dfaa0cd128155->leave($__internal_bd249b4506a7235cafdd02c5db13f9fe5bbf638509878695694dfaa0cd128155_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
