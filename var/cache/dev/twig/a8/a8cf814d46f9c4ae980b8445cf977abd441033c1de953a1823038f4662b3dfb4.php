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
        $__internal_3fc5cfd14c16f5f5b64ac6e65395adece92e2a660e86e61b16b4ad9317afd186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc5cfd14c16f5f5b64ac6e65395adece92e2a660e86e61b16b4ad9317afd186->enter($__internal_3fc5cfd14c16f5f5b64ac6e65395adece92e2a660e86e61b16b4ad9317afd186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_c766a5cb9432a41ff24faaab7cf25372bd446b8c94cf57d7b0db83d9800c9ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c766a5cb9432a41ff24faaab7cf25372bd446b8c94cf57d7b0db83d9800c9ba8->enter($__internal_c766a5cb9432a41ff24faaab7cf25372bd446b8c94cf57d7b0db83d9800c9ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3fc5cfd14c16f5f5b64ac6e65395adece92e2a660e86e61b16b4ad9317afd186->leave($__internal_3fc5cfd14c16f5f5b64ac6e65395adece92e2a660e86e61b16b4ad9317afd186_prof);

        
        $__internal_c766a5cb9432a41ff24faaab7cf25372bd446b8c94cf57d7b0db83d9800c9ba8->leave($__internal_c766a5cb9432a41ff24faaab7cf25372bd446b8c94cf57d7b0db83d9800c9ba8_prof);

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
