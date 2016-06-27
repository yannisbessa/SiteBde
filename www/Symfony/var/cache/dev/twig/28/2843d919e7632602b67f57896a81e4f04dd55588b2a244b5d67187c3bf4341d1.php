<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_cc0f104481baceeac79af289dfaeb0918d19b5c2f34fa6980a3e642b567c9af8 extends Twig_Template
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
        $__internal_6db80061bedbbe1d82f9565360ddcc19b7aeb779b2444ae6a12b3f5953e93eba = $this->env->getExtension("native_profiler");
        $__internal_6db80061bedbbe1d82f9565360ddcc19b7aeb779b2444ae6a12b3f5953e93eba->enter($__internal_6db80061bedbbe1d82f9565360ddcc19b7aeb779b2444ae6a12b3f5953e93eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6db80061bedbbe1d82f9565360ddcc19b7aeb779b2444ae6a12b3f5953e93eba->leave($__internal_6db80061bedbbe1d82f9565360ddcc19b7aeb779b2444ae6a12b3f5953e93eba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
