<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_f430aaed3321e559efbc62ebf0f3a99e547a6717a1abd2ae306e4982ee20bf42 extends Twig_Template
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
        $__internal_a0911ff427e580549389e7fcf55f66e610771f0020e9e00a81316dfe4d481313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0911ff427e580549389e7fcf55f66e610771f0020e9e00a81316dfe4d481313->enter($__internal_a0911ff427e580549389e7fcf55f66e610771f0020e9e00a81316dfe4d481313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_18bf69e56743ed163fbab9c15e1cd689835b225d4937b51525436c4992c1635d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18bf69e56743ed163fbab9c15e1cd689835b225d4937b51525436c4992c1635d->enter($__internal_18bf69e56743ed163fbab9c15e1cd689835b225d4937b51525436c4992c1635d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a0911ff427e580549389e7fcf55f66e610771f0020e9e00a81316dfe4d481313->leave($__internal_a0911ff427e580549389e7fcf55f66e610771f0020e9e00a81316dfe4d481313_prof);

        
        $__internal_18bf69e56743ed163fbab9c15e1cd689835b225d4937b51525436c4992c1635d->leave($__internal_18bf69e56743ed163fbab9c15e1cd689835b225d4937b51525436c4992c1635d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
