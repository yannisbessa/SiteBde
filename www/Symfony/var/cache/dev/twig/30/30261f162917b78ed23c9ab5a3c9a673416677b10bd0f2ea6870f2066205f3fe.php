<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b26d684c7be32a68aa98389932efbbaedcccdb6c3417199eddd39f819e649d74 extends Twig_Template
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
        $__internal_32029703ec74c7d824eaff0cb64d9ae67648b5b55d7536376ca5e7fc78df8241 = $this->env->getExtension("native_profiler");
        $__internal_32029703ec74c7d824eaff0cb64d9ae67648b5b55d7536376ca5e7fc78df8241->enter($__internal_32029703ec74c7d824eaff0cb64d9ae67648b5b55d7536376ca5e7fc78df8241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_32029703ec74c7d824eaff0cb64d9ae67648b5b55d7536376ca5e7fc78df8241->leave($__internal_32029703ec74c7d824eaff0cb64d9ae67648b5b55d7536376ca5e7fc78df8241_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
