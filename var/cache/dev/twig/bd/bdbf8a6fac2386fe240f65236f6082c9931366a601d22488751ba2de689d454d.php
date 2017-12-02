<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_20a2f64e57eeea4acebd06748a95eaf0728156a0f93f49c62d48371c0b1bbe75 extends Twig_Template
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
        $__internal_9761a308dc69399c7527a086dff285c976be7cf8e74e0d4ad92fe804e5ed0b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9761a308dc69399c7527a086dff285c976be7cf8e74e0d4ad92fe804e5ed0b16->enter($__internal_9761a308dc69399c7527a086dff285c976be7cf8e74e0d4ad92fe804e5ed0b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5eca0e323c4ecc00b306cfbe0e3e98611b874754aae414657d0796a8a3b5d4c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eca0e323c4ecc00b306cfbe0e3e98611b874754aae414657d0796a8a3b5d4c7->enter($__internal_5eca0e323c4ecc00b306cfbe0e3e98611b874754aae414657d0796a8a3b5d4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9761a308dc69399c7527a086dff285c976be7cf8e74e0d4ad92fe804e5ed0b16->leave($__internal_9761a308dc69399c7527a086dff285c976be7cf8e74e0d4ad92fe804e5ed0b16_prof);

        
        $__internal_5eca0e323c4ecc00b306cfbe0e3e98611b874754aae414657d0796a8a3b5d4c7->leave($__internal_5eca0e323c4ecc00b306cfbe0e3e98611b874754aae414657d0796a8a3b5d4c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
