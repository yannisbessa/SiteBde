<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_06374d7c4f992fe8d792dfb1f3588e8ca8423330c0cb21e2fa96a5cc66821801 extends Twig_Template
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
        $__internal_67cef796be677361618f6df8f4c1f8a5ca3a7ef2066ec37515a99fa00c5ce693 = $this->env->getExtension("native_profiler");
        $__internal_67cef796be677361618f6df8f4c1f8a5ca3a7ef2066ec37515a99fa00c5ce693->enter($__internal_67cef796be677361618f6df8f4c1f8a5ca3a7ef2066ec37515a99fa00c5ce693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_67cef796be677361618f6df8f4c1f8a5ca3a7ef2066ec37515a99fa00c5ce693->leave($__internal_67cef796be677361618f6df8f4c1f8a5ca3a7ef2066ec37515a99fa00c5ce693_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
