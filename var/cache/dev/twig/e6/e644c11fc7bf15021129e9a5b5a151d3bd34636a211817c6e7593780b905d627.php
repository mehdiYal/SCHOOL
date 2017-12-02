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
        $__internal_6d1836fbd13bc80e4b9c19dcb806a12bf7e76e39a96c276370a67c2c5fdf0112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d1836fbd13bc80e4b9c19dcb806a12bf7e76e39a96c276370a67c2c5fdf0112->enter($__internal_6d1836fbd13bc80e4b9c19dcb806a12bf7e76e39a96c276370a67c2c5fdf0112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_0e1a976948404c834f09c682006a22e32ee889af9d2335b28b51c78a502f0ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1a976948404c834f09c682006a22e32ee889af9d2335b28b51c78a502f0ea7->enter($__internal_0e1a976948404c834f09c682006a22e32ee889af9d2335b28b51c78a502f0ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_6d1836fbd13bc80e4b9c19dcb806a12bf7e76e39a96c276370a67c2c5fdf0112->leave($__internal_6d1836fbd13bc80e4b9c19dcb806a12bf7e76e39a96c276370a67c2c5fdf0112_prof);

        
        $__internal_0e1a976948404c834f09c682006a22e32ee889af9d2335b28b51c78a502f0ea7->leave($__internal_0e1a976948404c834f09c682006a22e32ee889af9d2335b28b51c78a502f0ea7_prof);

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
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
