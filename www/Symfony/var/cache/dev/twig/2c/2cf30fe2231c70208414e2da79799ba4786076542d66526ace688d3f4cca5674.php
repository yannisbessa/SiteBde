<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1d1a967f300ab1473a0dedac54e3720fdeb4a1a01a32f0faeb64d83215fc53c7 extends Twig_Template
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
        $__internal_d609959b3cc1d04f79855fe04bd85d789dda243188924e3d28df2d3ecf235b47 = $this->env->getExtension("native_profiler");
        $__internal_d609959b3cc1d04f79855fe04bd85d789dda243188924e3d28df2d3ecf235b47->enter($__internal_d609959b3cc1d04f79855fe04bd85d789dda243188924e3d28df2d3ecf235b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d609959b3cc1d04f79855fe04bd85d789dda243188924e3d28df2d3ecf235b47->leave($__internal_d609959b3cc1d04f79855fe04bd85d789dda243188924e3d28df2d3ecf235b47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
