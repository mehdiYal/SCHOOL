<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_73aec1668630fd9dd953744dfc1c440ae16e98d8255c49f132606ff05ba3c4da extends Twig_Template
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
        $__internal_e05e14e1298b10fd2cbf2455b5b68c4fcf38a2db6201e873486fdf5ffcf27175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e05e14e1298b10fd2cbf2455b5b68c4fcf38a2db6201e873486fdf5ffcf27175->enter($__internal_e05e14e1298b10fd2cbf2455b5b68c4fcf38a2db6201e873486fdf5ffcf27175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8e8e42c47f4d76aa07b3d7971b38af0ab2f731b2ccb3431e1b72b5d93cec593a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e8e42c47f4d76aa07b3d7971b38af0ab2f731b2ccb3431e1b72b5d93cec593a->enter($__internal_8e8e42c47f4d76aa07b3d7971b38af0ab2f731b2ccb3431e1b72b5d93cec593a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e05e14e1298b10fd2cbf2455b5b68c4fcf38a2db6201e873486fdf5ffcf27175->leave($__internal_e05e14e1298b10fd2cbf2455b5b68c4fcf38a2db6201e873486fdf5ffcf27175_prof);

        
        $__internal_8e8e42c47f4d76aa07b3d7971b38af0ab2f731b2ccb3431e1b72b5d93cec593a->leave($__internal_8e8e42c47f4d76aa07b3d7971b38af0ab2f731b2ccb3431e1b72b5d93cec593a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
