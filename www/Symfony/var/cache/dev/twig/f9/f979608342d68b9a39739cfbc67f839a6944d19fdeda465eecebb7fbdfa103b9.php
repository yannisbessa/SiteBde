<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b295bfe1fe8a0ac90985f113a2dccf02599513f74500c9c2cbb678dc4cdfc984 extends Twig_Template
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
        $__internal_830c9d9770599957dab7859cbb216d70877ff5f746fdb2e17f38373fe64da6e1 = $this->env->getExtension("native_profiler");
        $__internal_830c9d9770599957dab7859cbb216d70877ff5f746fdb2e17f38373fe64da6e1->enter($__internal_830c9d9770599957dab7859cbb216d70877ff5f746fdb2e17f38373fe64da6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_830c9d9770599957dab7859cbb216d70877ff5f746fdb2e17f38373fe64da6e1->leave($__internal_830c9d9770599957dab7859cbb216d70877ff5f746fdb2e17f38373fe64da6e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
