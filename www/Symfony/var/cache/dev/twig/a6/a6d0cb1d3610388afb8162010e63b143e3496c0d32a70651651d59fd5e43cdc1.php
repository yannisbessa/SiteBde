<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b213daba395e92971b51ca0d9536f45cc18e9ab31b19c718d89fb34255f27f94 extends Twig_Template
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
        $__internal_f0dee3dfaf1066f6af9695fc5e8df89954e90916bb0926ad7f0a72012a59c61b = $this->env->getExtension("native_profiler");
        $__internal_f0dee3dfaf1066f6af9695fc5e8df89954e90916bb0926ad7f0a72012a59c61b->enter($__internal_f0dee3dfaf1066f6af9695fc5e8df89954e90916bb0926ad7f0a72012a59c61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f0dee3dfaf1066f6af9695fc5e8df89954e90916bb0926ad7f0a72012a59c61b->leave($__internal_f0dee3dfaf1066f6af9695fc5e8df89954e90916bb0926ad7f0a72012a59c61b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
