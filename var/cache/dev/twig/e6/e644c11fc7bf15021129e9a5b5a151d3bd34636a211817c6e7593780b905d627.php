<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_0db91e81d130907ebd7b0e6dc57d01c738d72f0cddbd1e4e15d1a5d5b1fa5fa6 extends Twig_Template
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
        $__internal_b0163d3ffce322107c526f0d4be86fe92b48d24375ef53b12a362fbd802c5522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0163d3ffce322107c526f0d4be86fe92b48d24375ef53b12a362fbd802c5522->enter($__internal_b0163d3ffce322107c526f0d4be86fe92b48d24375ef53b12a362fbd802c5522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ed09e863793f4cd1eb74124e3f6e4d95afe9d27e1e4d5a334c90b3666c925fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed09e863793f4cd1eb74124e3f6e4d95afe9d27e1e4d5a334c90b3666c925fd2->enter($__internal_ed09e863793f4cd1eb74124e3f6e4d95afe9d27e1e4d5a334c90b3666c925fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b0163d3ffce322107c526f0d4be86fe92b48d24375ef53b12a362fbd802c5522->leave($__internal_b0163d3ffce322107c526f0d4be86fe92b48d24375ef53b12a362fbd802c5522_prof);

        
        $__internal_ed09e863793f4cd1eb74124e3f6e4d95afe9d27e1e4d5a334c90b3666c925fd2->leave($__internal_ed09e863793f4cd1eb74124e3f6e4d95afe9d27e1e4d5a334c90b3666c925fd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
