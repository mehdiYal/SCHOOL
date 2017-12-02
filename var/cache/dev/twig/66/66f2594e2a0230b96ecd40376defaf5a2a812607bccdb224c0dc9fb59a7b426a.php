<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_879169f9a1471646aee9ef1be7cb1db64dc498bb040efd1ce7756722b94090fd extends Twig_Template
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
        $__internal_66e0038c7fc14b9af596877ad651130b7a719ab1534c550f2e91231ea6fb9430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e0038c7fc14b9af596877ad651130b7a719ab1534c550f2e91231ea6fb9430->enter($__internal_66e0038c7fc14b9af596877ad651130b7a719ab1534c550f2e91231ea6fb9430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e3a30a29629b6da40152c6c13d5837e03ede24b16aa9997c0d188cfcecc15abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a30a29629b6da40152c6c13d5837e03ede24b16aa9997c0d188cfcecc15abc->enter($__internal_e3a30a29629b6da40152c6c13d5837e03ede24b16aa9997c0d188cfcecc15abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_66e0038c7fc14b9af596877ad651130b7a719ab1534c550f2e91231ea6fb9430->leave($__internal_66e0038c7fc14b9af596877ad651130b7a719ab1534c550f2e91231ea6fb9430_prof);

        
        $__internal_e3a30a29629b6da40152c6c13d5837e03ede24b16aa9997c0d188cfcecc15abc->leave($__internal_e3a30a29629b6da40152c6c13d5837e03ede24b16aa9997c0d188cfcecc15abc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
