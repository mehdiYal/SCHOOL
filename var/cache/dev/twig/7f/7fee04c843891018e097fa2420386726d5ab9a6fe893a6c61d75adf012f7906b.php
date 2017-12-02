<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_02d5be04ad7ae480ab6b82dc987260dc8126ca46ddc1e671ba2fdf1a24d3191d extends Twig_Template
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
        $__internal_3f4c719cc4c51be924b96ac4b70bc488ada984f27a66f611db231dd41b328871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4c719cc4c51be924b96ac4b70bc488ada984f27a66f611db231dd41b328871->enter($__internal_3f4c719cc4c51be924b96ac4b70bc488ada984f27a66f611db231dd41b328871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3729f5d0f26c579a4068b4955e2f0a00c0808d4a1334b75d9b2a0bf3c147eb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3729f5d0f26c579a4068b4955e2f0a00c0808d4a1334b75d9b2a0bf3c147eb79->enter($__internal_3729f5d0f26c579a4068b4955e2f0a00c0808d4a1334b75d9b2a0bf3c147eb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3f4c719cc4c51be924b96ac4b70bc488ada984f27a66f611db231dd41b328871->leave($__internal_3f4c719cc4c51be924b96ac4b70bc488ada984f27a66f611db231dd41b328871_prof);

        
        $__internal_3729f5d0f26c579a4068b4955e2f0a00c0808d4a1334b75d9b2a0bf3c147eb79->leave($__internal_3729f5d0f26c579a4068b4955e2f0a00c0808d4a1334b75d9b2a0bf3c147eb79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
