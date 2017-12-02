<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_0e1054df78f2d71a072a56dbeee37fb2553c64f277ca85008c2a86bc0f94e82d extends Twig_Template
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
        $__internal_2a43df58e2aec28a04242052a2eb84bd4feedb00252a620afb0ad8a34d53dc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a43df58e2aec28a04242052a2eb84bd4feedb00252a620afb0ad8a34d53dc20->enter($__internal_2a43df58e2aec28a04242052a2eb84bd4feedb00252a620afb0ad8a34d53dc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_119c76d1b27a1e97343397f8f58d4f746064e3f8b0d76b4e03e20c23b066e529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119c76d1b27a1e97343397f8f58d4f746064e3f8b0d76b4e03e20c23b066e529->enter($__internal_119c76d1b27a1e97343397f8f58d4f746064e3f8b0d76b4e03e20c23b066e529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_2a43df58e2aec28a04242052a2eb84bd4feedb00252a620afb0ad8a34d53dc20->leave($__internal_2a43df58e2aec28a04242052a2eb84bd4feedb00252a620afb0ad8a34d53dc20_prof);

        
        $__internal_119c76d1b27a1e97343397f8f58d4f746064e3f8b0d76b4e03e20c23b066e529->leave($__internal_119c76d1b27a1e97343397f8f58d4f746064e3f8b0d76b4e03e20c23b066e529_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
