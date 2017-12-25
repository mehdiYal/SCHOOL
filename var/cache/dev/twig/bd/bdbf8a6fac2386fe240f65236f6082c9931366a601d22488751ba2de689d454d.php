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
        $__internal_b370c725c4dbd7535f16413e5baab4162e05afcf0de9cf40533cc6496d0432c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b370c725c4dbd7535f16413e5baab4162e05afcf0de9cf40533cc6496d0432c4->enter($__internal_b370c725c4dbd7535f16413e5baab4162e05afcf0de9cf40533cc6496d0432c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_854c751a9650e9f223026b0ac940ba955828ece7755b396f932b33417a49391d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854c751a9650e9f223026b0ac940ba955828ece7755b396f932b33417a49391d->enter($__internal_854c751a9650e9f223026b0ac940ba955828ece7755b396f932b33417a49391d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b370c725c4dbd7535f16413e5baab4162e05afcf0de9cf40533cc6496d0432c4->leave($__internal_b370c725c4dbd7535f16413e5baab4162e05afcf0de9cf40533cc6496d0432c4_prof);

        
        $__internal_854c751a9650e9f223026b0ac940ba955828ece7755b396f932b33417a49391d->leave($__internal_854c751a9650e9f223026b0ac940ba955828ece7755b396f932b33417a49391d_prof);

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
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
