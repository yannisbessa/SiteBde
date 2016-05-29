<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e0df90810da181ebf61f9a3c4fd28db1c4abf5383ec5cc3d4288a3023c672531 extends Twig_Template
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
        $__internal_e52259a45201bb69e39b681cab1e2c40284137701659d7b373c5460c94c5726e = $this->env->getExtension("native_profiler");
        $__internal_e52259a45201bb69e39b681cab1e2c40284137701659d7b373c5460c94c5726e->enter($__internal_e52259a45201bb69e39b681cab1e2c40284137701659d7b373c5460c94c5726e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e52259a45201bb69e39b681cab1e2c40284137701659d7b373c5460c94c5726e->leave($__internal_e52259a45201bb69e39b681cab1e2c40284137701659d7b373c5460c94c5726e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
