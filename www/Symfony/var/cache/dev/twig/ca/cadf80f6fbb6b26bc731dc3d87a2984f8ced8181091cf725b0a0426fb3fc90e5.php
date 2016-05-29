<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8666729e72c299c39c2a52e1905e527fc0e621dceaedb413b37edfc0fde97fe5 extends Twig_Template
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
        $__internal_955fc714ec80d6de619d852cac4d933fa43d44a974a69374712864e1cee804b9 = $this->env->getExtension("native_profiler");
        $__internal_955fc714ec80d6de619d852cac4d933fa43d44a974a69374712864e1cee804b9->enter($__internal_955fc714ec80d6de619d852cac4d933fa43d44a974a69374712864e1cee804b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_955fc714ec80d6de619d852cac4d933fa43d44a974a69374712864e1cee804b9->leave($__internal_955fc714ec80d6de619d852cac4d933fa43d44a974a69374712864e1cee804b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
