<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_af3fdc7d83601a20eb1c29e27147368386f3a24513c8fc6bc722c9d3da273b24 extends Twig_Template
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
        $__internal_b5e993368256f03aac46a051a77d00ced594af626c8f7ec3d4c950c7abf059aa = $this->env->getExtension("native_profiler");
        $__internal_b5e993368256f03aac46a051a77d00ced594af626c8f7ec3d4c950c7abf059aa->enter($__internal_b5e993368256f03aac46a051a77d00ced594af626c8f7ec3d4c950c7abf059aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b5e993368256f03aac46a051a77d00ced594af626c8f7ec3d4c950c7abf059aa->leave($__internal_b5e993368256f03aac46a051a77d00ced594af626c8f7ec3d4c950c7abf059aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
