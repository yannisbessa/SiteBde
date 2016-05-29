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
        $__internal_b3219405bbe62dd9723bd185d68bb4e6b6697851c2a8c0f984b8c68a97c93891 = $this->env->getExtension("native_profiler");
        $__internal_b3219405bbe62dd9723bd185d68bb4e6b6697851c2a8c0f984b8c68a97c93891->enter($__internal_b3219405bbe62dd9723bd185d68bb4e6b6697851c2a8c0f984b8c68a97c93891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b3219405bbe62dd9723bd185d68bb4e6b6697851c2a8c0f984b8c68a97c93891->leave($__internal_b3219405bbe62dd9723bd185d68bb4e6b6697851c2a8c0f984b8c68a97c93891_prof);

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
