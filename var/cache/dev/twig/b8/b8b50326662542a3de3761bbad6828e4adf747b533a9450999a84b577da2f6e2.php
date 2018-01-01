<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_0b696d7db8675f31e99b2a6e19ea1f778db981c47c8d984c1d1609dd5f67e1ac extends Twig_Template
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
        $__internal_7dae51e0723ffe183c10cfa7d2b9b963349cada88772d6e8f91921acb11d6212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dae51e0723ffe183c10cfa7d2b9b963349cada88772d6e8f91921acb11d6212->enter($__internal_7dae51e0723ffe183c10cfa7d2b9b963349cada88772d6e8f91921acb11d6212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_53256aba8f5c733eeb51fa6f57c3168b02940249f1e177066a6e91f26df560cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53256aba8f5c733eeb51fa6f57c3168b02940249f1e177066a6e91f26df560cf->enter($__internal_53256aba8f5c733eeb51fa6f57c3168b02940249f1e177066a6e91f26df560cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7dae51e0723ffe183c10cfa7d2b9b963349cada88772d6e8f91921acb11d6212->leave($__internal_7dae51e0723ffe183c10cfa7d2b9b963349cada88772d6e8f91921acb11d6212_prof);

        
        $__internal_53256aba8f5c733eeb51fa6f57c3168b02940249f1e177066a6e91f26df560cf->leave($__internal_53256aba8f5c733eeb51fa6f57c3168b02940249f1e177066a6e91f26df560cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
