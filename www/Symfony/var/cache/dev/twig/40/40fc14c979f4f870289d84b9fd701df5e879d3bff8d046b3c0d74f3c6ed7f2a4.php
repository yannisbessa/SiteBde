<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5946927f358e900ea7208508ada2882e952ab196fd1a8d10f635e82a6105a62a extends Twig_Template
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
        $__internal_cc5751237b95a8d5fb42fe071930c69a97d2a226433988bc83c9392f647e584e = $this->env->getExtension("native_profiler");
        $__internal_cc5751237b95a8d5fb42fe071930c69a97d2a226433988bc83c9392f647e584e->enter($__internal_cc5751237b95a8d5fb42fe071930c69a97d2a226433988bc83c9392f647e584e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_cc5751237b95a8d5fb42fe071930c69a97d2a226433988bc83c9392f647e584e->leave($__internal_cc5751237b95a8d5fb42fe071930c69a97d2a226433988bc83c9392f647e584e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
