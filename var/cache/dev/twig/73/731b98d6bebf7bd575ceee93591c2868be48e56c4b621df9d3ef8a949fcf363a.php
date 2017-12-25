<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1510ded2273452cd2fadd5c341acb1711fe5edffa04ef128f8fc21f6ec152c48 extends Twig_Template
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
        $__internal_136760187fd6b957a1fbacb364e2015a3850783ecfdde63c84dde4415fe65bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_136760187fd6b957a1fbacb364e2015a3850783ecfdde63c84dde4415fe65bd7->enter($__internal_136760187fd6b957a1fbacb364e2015a3850783ecfdde63c84dde4415fe65bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_bc2d53ca02143ac68644825814b30245fd0dbead0344bcdedd149657b6b601b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2d53ca02143ac68644825814b30245fd0dbead0344bcdedd149657b6b601b1->enter($__internal_bc2d53ca02143ac68644825814b30245fd0dbead0344bcdedd149657b6b601b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_136760187fd6b957a1fbacb364e2015a3850783ecfdde63c84dde4415fe65bd7->leave($__internal_136760187fd6b957a1fbacb364e2015a3850783ecfdde63c84dde4415fe65bd7_prof);

        
        $__internal_bc2d53ca02143ac68644825814b30245fd0dbead0344bcdedd149657b6b601b1->leave($__internal_bc2d53ca02143ac68644825814b30245fd0dbead0344bcdedd149657b6b601b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
