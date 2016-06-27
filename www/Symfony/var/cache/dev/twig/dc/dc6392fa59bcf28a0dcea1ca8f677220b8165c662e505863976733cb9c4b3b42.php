<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d2fa11d7cf0931fad7598676f7d363a578977e99caefdecaeefc92dd68751eaf extends Twig_Template
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
        $__internal_6d555657a354c4d64a230182214304cc07c9ee285bbde2970bd1479e57c45788 = $this->env->getExtension("native_profiler");
        $__internal_6d555657a354c4d64a230182214304cc07c9ee285bbde2970bd1479e57c45788->enter($__internal_6d555657a354c4d64a230182214304cc07c9ee285bbde2970bd1479e57c45788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6d555657a354c4d64a230182214304cc07c9ee285bbde2970bd1479e57c45788->leave($__internal_6d555657a354c4d64a230182214304cc07c9ee285bbde2970bd1479e57c45788_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
