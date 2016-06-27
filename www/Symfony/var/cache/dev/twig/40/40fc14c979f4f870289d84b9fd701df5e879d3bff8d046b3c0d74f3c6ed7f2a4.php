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
        $__internal_4dfeba65a421e6ffc21e32e0281c87787edb1e5880f8449e177ae85cb00cf02f = $this->env->getExtension("native_profiler");
        $__internal_4dfeba65a421e6ffc21e32e0281c87787edb1e5880f8449e177ae85cb00cf02f->enter($__internal_4dfeba65a421e6ffc21e32e0281c87787edb1e5880f8449e177ae85cb00cf02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4dfeba65a421e6ffc21e32e0281c87787edb1e5880f8449e177ae85cb00cf02f->leave($__internal_4dfeba65a421e6ffc21e32e0281c87787edb1e5880f8449e177ae85cb00cf02f_prof);

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
