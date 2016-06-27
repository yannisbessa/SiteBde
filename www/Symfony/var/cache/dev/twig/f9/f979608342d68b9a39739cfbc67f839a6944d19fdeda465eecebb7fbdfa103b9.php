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
        $__internal_c0cb9c5348335c87664d5860eb240902f13bf18584881fa71b554ba636c3b2a8 = $this->env->getExtension("native_profiler");
        $__internal_c0cb9c5348335c87664d5860eb240902f13bf18584881fa71b554ba636c3b2a8->enter($__internal_c0cb9c5348335c87664d5860eb240902f13bf18584881fa71b554ba636c3b2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c0cb9c5348335c87664d5860eb240902f13bf18584881fa71b554ba636c3b2a8->leave($__internal_c0cb9c5348335c87664d5860eb240902f13bf18584881fa71b554ba636c3b2a8_prof);

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
