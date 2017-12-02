<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_76f6038beb39054a0be9ae0e32108dfcb82589afe85f4da4b7e44392685eccd5 extends Twig_Template
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
        $__internal_babca99497e623c90e2d17f8e379a7aadc9da35931672bc0c8bb3bdb75158cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babca99497e623c90e2d17f8e379a7aadc9da35931672bc0c8bb3bdb75158cca->enter($__internal_babca99497e623c90e2d17f8e379a7aadc9da35931672bc0c8bb3bdb75158cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_40c7d1ab49a008b511b8c9e87b012a7d78d1ec9e9fae4c60b4ae5a6d2f6d36e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c7d1ab49a008b511b8c9e87b012a7d78d1ec9e9fae4c60b4ae5a6d2f6d36e4->enter($__internal_40c7d1ab49a008b511b8c9e87b012a7d78d1ec9e9fae4c60b4ae5a6d2f6d36e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_babca99497e623c90e2d17f8e379a7aadc9da35931672bc0c8bb3bdb75158cca->leave($__internal_babca99497e623c90e2d17f8e379a7aadc9da35931672bc0c8bb3bdb75158cca_prof);

        
        $__internal_40c7d1ab49a008b511b8c9e87b012a7d78d1ec9e9fae4c60b4ae5a6d2f6d36e4->leave($__internal_40c7d1ab49a008b511b8c9e87b012a7d78d1ec9e9fae4c60b4ae5a6d2f6d36e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
