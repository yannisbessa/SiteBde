<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7de22217b31dbfd72a4d230ba95b59eb80c57bff0e643e5cd45931ee22391e25 extends Twig_Template
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
        $__internal_3b1acc8c8d23e40ec79e00184aec7af608335159414fec4d0681705af21a293d = $this->env->getExtension("native_profiler");
        $__internal_3b1acc8c8d23e40ec79e00184aec7af608335159414fec4d0681705af21a293d->enter($__internal_3b1acc8c8d23e40ec79e00184aec7af608335159414fec4d0681705af21a293d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3b1acc8c8d23e40ec79e00184aec7af608335159414fec4d0681705af21a293d->leave($__internal_3b1acc8c8d23e40ec79e00184aec7af608335159414fec4d0681705af21a293d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
