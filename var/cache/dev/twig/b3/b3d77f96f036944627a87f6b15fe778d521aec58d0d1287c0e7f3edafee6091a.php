<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1befa2aa3d7e739ae3b0346dbd07b8d0f8b3b984addca4c45739c57315af0e3a extends Twig_Template
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
        $__internal_579465557d49e083000f8b53705c7f0fc76edb8d805beacdfcaabe210e766893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_579465557d49e083000f8b53705c7f0fc76edb8d805beacdfcaabe210e766893->enter($__internal_579465557d49e083000f8b53705c7f0fc76edb8d805beacdfcaabe210e766893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4784af34e94fab88d2b435bf375972166a1f81abbfb6c43438a97cdcf1c9fb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4784af34e94fab88d2b435bf375972166a1f81abbfb6c43438a97cdcf1c9fb79->enter($__internal_4784af34e94fab88d2b435bf375972166a1f81abbfb6c43438a97cdcf1c9fb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_579465557d49e083000f8b53705c7f0fc76edb8d805beacdfcaabe210e766893->leave($__internal_579465557d49e083000f8b53705c7f0fc76edb8d805beacdfcaabe210e766893_prof);

        
        $__internal_4784af34e94fab88d2b435bf375972166a1f81abbfb6c43438a97cdcf1c9fb79->leave($__internal_4784af34e94fab88d2b435bf375972166a1f81abbfb6c43438a97cdcf1c9fb79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
