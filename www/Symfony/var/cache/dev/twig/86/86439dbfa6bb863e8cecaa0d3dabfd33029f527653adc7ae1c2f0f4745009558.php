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
        $__internal_85c8c19ae838df21971bf2ed09bd4dff5ae4b6ad4320deb456bc75fc2e5e3dfa = $this->env->getExtension("native_profiler");
        $__internal_85c8c19ae838df21971bf2ed09bd4dff5ae4b6ad4320deb456bc75fc2e5e3dfa->enter($__internal_85c8c19ae838df21971bf2ed09bd4dff5ae4b6ad4320deb456bc75fc2e5e3dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_85c8c19ae838df21971bf2ed09bd4dff5ae4b6ad4320deb456bc75fc2e5e3dfa->leave($__internal_85c8c19ae838df21971bf2ed09bd4dff5ae4b6ad4320deb456bc75fc2e5e3dfa_prof);

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
