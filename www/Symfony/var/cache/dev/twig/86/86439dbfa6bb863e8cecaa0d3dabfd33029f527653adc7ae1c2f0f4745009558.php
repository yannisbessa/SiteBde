<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_6730c9d97f7da73a3bfcbb766bbc7aaf8df486d29a393bf9db6bde0481b9d80e extends Twig_Template
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
        $__internal_e4c35bf6bd09c88f6e4c0929565f8807c57ecc3c72889b70ea8fc224e36ec2ed = $this->env->getExtension("native_profiler");
        $__internal_e4c35bf6bd09c88f6e4c0929565f8807c57ecc3c72889b70ea8fc224e36ec2ed->enter($__internal_e4c35bf6bd09c88f6e4c0929565f8807c57ecc3c72889b70ea8fc224e36ec2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e4c35bf6bd09c88f6e4c0929565f8807c57ecc3c72889b70ea8fc224e36ec2ed->leave($__internal_e4c35bf6bd09c88f6e4c0929565f8807c57ecc3c72889b70ea8fc224e36ec2ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
