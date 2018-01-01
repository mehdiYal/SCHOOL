<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_5cb45ebe11f2628c19763a6ebbfcd1cb39d0ba70cbc209d0b3d6d474e8290722 extends Twig_Template
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
        $__internal_b3b05188bed5c08c37377ae5ffa15d5ac4cb846dc209e35e3709048ed6995196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b05188bed5c08c37377ae5ffa15d5ac4cb846dc209e35e3709048ed6995196->enter($__internal_b3b05188bed5c08c37377ae5ffa15d5ac4cb846dc209e35e3709048ed6995196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_7224b219ecc0fe2398eca1ea98a1b029fd629a2c9760bf04ec97d9bc913700ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7224b219ecc0fe2398eca1ea98a1b029fd629a2c9760bf04ec97d9bc913700ef->enter($__internal_7224b219ecc0fe2398eca1ea98a1b029fd629a2c9760bf04ec97d9bc913700ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b3b05188bed5c08c37377ae5ffa15d5ac4cb846dc209e35e3709048ed6995196->leave($__internal_b3b05188bed5c08c37377ae5ffa15d5ac4cb846dc209e35e3709048ed6995196_prof);

        
        $__internal_7224b219ecc0fe2398eca1ea98a1b029fd629a2c9760bf04ec97d9bc913700ef->leave($__internal_7224b219ecc0fe2398eca1ea98a1b029fd629a2c9760bf04ec97d9bc913700ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
