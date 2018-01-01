<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_a418ae5fbef508ef68d5a4e2ed3830e24fbad4d1c675568d15bc9f41e83d003f extends Twig_Template
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
        $__internal_e5e3db8f987b308cfc0d8e4428dac3a6bb3d75a6aafe88be9d081c54b05bc51e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e3db8f987b308cfc0d8e4428dac3a6bb3d75a6aafe88be9d081c54b05bc51e->enter($__internal_e5e3db8f987b308cfc0d8e4428dac3a6bb3d75a6aafe88be9d081c54b05bc51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_3d2db287610beae23c2473d8797be03e1446acfee00b016d8a33e25b53135199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2db287610beae23c2473d8797be03e1446acfee00b016d8a33e25b53135199->enter($__internal_3d2db287610beae23c2473d8797be03e1446acfee00b016d8a33e25b53135199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e5e3db8f987b308cfc0d8e4428dac3a6bb3d75a6aafe88be9d081c54b05bc51e->leave($__internal_e5e3db8f987b308cfc0d8e4428dac3a6bb3d75a6aafe88be9d081c54b05bc51e_prof);

        
        $__internal_3d2db287610beae23c2473d8797be03e1446acfee00b016d8a33e25b53135199->leave($__internal_3d2db287610beae23c2473d8797be03e1446acfee00b016d8a33e25b53135199_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
