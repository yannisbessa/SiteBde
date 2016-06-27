<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2dd1e36509a05b5742fe4e08da5fc4024267f5d83b03a4b47a33c60594627dcb extends Twig_Template
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
        $__internal_13ff1caaa5e9d9a1cdf3b6506fd84f9f6883d49adf9fdd420c6403ca6d7a8b49 = $this->env->getExtension("native_profiler");
        $__internal_13ff1caaa5e9d9a1cdf3b6506fd84f9f6883d49adf9fdd420c6403ca6d7a8b49->enter($__internal_13ff1caaa5e9d9a1cdf3b6506fd84f9f6883d49adf9fdd420c6403ca6d7a8b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_13ff1caaa5e9d9a1cdf3b6506fd84f9f6883d49adf9fdd420c6403ca6d7a8b49->leave($__internal_13ff1caaa5e9d9a1cdf3b6506fd84f9f6883d49adf9fdd420c6403ca6d7a8b49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
