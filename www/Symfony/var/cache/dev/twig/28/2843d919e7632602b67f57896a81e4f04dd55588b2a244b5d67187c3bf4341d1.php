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
        $__internal_9d4f44f685f08bc234a2ceef924c52745b940947353076765b4af4ef0739aa4b = $this->env->getExtension("native_profiler");
        $__internal_9d4f44f685f08bc234a2ceef924c52745b940947353076765b4af4ef0739aa4b->enter($__internal_9d4f44f685f08bc234a2ceef924c52745b940947353076765b4af4ef0739aa4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9d4f44f685f08bc234a2ceef924c52745b940947353076765b4af4ef0739aa4b->leave($__internal_9d4f44f685f08bc234a2ceef924c52745b940947353076765b4af4ef0739aa4b_prof);

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
