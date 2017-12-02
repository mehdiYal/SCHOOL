<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ff2ba6fc8369ce9a3cb35a094f5b3847b67201f54b57f6a1906f2f01b8a6576f extends Twig_Template
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
        $__internal_8630fd5ba63a521a2e72be042a575bcebb23290b63c07fc747a1464f8e95da4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8630fd5ba63a521a2e72be042a575bcebb23290b63c07fc747a1464f8e95da4c->enter($__internal_8630fd5ba63a521a2e72be042a575bcebb23290b63c07fc747a1464f8e95da4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_799a6b5ee7e6d096e898f832f0da98dc1b3d65d773b5faa8a58330b051c0e10c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799a6b5ee7e6d096e898f832f0da98dc1b3d65d773b5faa8a58330b051c0e10c->enter($__internal_799a6b5ee7e6d096e898f832f0da98dc1b3d65d773b5faa8a58330b051c0e10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8630fd5ba63a521a2e72be042a575bcebb23290b63c07fc747a1464f8e95da4c->leave($__internal_8630fd5ba63a521a2e72be042a575bcebb23290b63c07fc747a1464f8e95da4c_prof);

        
        $__internal_799a6b5ee7e6d096e898f832f0da98dc1b3d65d773b5faa8a58330b051c0e10c->leave($__internal_799a6b5ee7e6d096e898f832f0da98dc1b3d65d773b5faa8a58330b051c0e10c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
