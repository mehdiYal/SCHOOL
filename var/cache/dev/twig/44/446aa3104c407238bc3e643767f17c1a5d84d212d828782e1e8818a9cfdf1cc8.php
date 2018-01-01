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
        $__internal_a4bfba0ac321f5ed8effe4852f0d3b36a5e1163a957ac67bdf1a1e57a8592a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4bfba0ac321f5ed8effe4852f0d3b36a5e1163a957ac67bdf1a1e57a8592a0d->enter($__internal_a4bfba0ac321f5ed8effe4852f0d3b36a5e1163a957ac67bdf1a1e57a8592a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_49b9bd1032b5967036940f7748b481e71ad33f09bad3f9afae7d54730eb6f288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b9bd1032b5967036940f7748b481e71ad33f09bad3f9afae7d54730eb6f288->enter($__internal_49b9bd1032b5967036940f7748b481e71ad33f09bad3f9afae7d54730eb6f288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a4bfba0ac321f5ed8effe4852f0d3b36a5e1163a957ac67bdf1a1e57a8592a0d->leave($__internal_a4bfba0ac321f5ed8effe4852f0d3b36a5e1163a957ac67bdf1a1e57a8592a0d_prof);

        
        $__internal_49b9bd1032b5967036940f7748b481e71ad33f09bad3f9afae7d54730eb6f288->leave($__internal_49b9bd1032b5967036940f7748b481e71ad33f09bad3f9afae7d54730eb6f288_prof);

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
