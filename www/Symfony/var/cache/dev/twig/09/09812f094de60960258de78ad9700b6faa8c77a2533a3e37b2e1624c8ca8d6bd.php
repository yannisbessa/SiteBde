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
        $__internal_c825ac42e40efa6c9682ebc56cd23af96ecc5ed0bf2505d284b2f9ae876c8949 = $this->env->getExtension("native_profiler");
        $__internal_c825ac42e40efa6c9682ebc56cd23af96ecc5ed0bf2505d284b2f9ae876c8949->enter($__internal_c825ac42e40efa6c9682ebc56cd23af96ecc5ed0bf2505d284b2f9ae876c8949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_c825ac42e40efa6c9682ebc56cd23af96ecc5ed0bf2505d284b2f9ae876c8949->leave($__internal_c825ac42e40efa6c9682ebc56cd23af96ecc5ed0bf2505d284b2f9ae876c8949_prof);

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
